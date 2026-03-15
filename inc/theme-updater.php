<?php
/**
 * GitHub release updater for the theme.
 *
 * @package SC_LIFE_Theme
 */

if (!defined('ABSPATH')) {
	exit;
}

final class SC_LIFE_Theme_Updater
{
	private string $stylesheet;
	private string $theme_name;
	private string $version;
	private array $config;

	public function __construct(array $config)
	{
		$theme = wp_get_theme();

		$this->stylesheet = $theme->get_stylesheet();
		$this->theme_name = $theme->get('Name') ?: $this->stylesheet;
		$this->version    = $theme->get('Version') ?: '0.0.0';
		$this->config     = wp_parse_args(
			$config,
			array(
				'repository'    => '',
				'release_asset' => $this->stylesheet . '.zip',
				'token'         => '',
				'cache_ttl'     => HOUR_IN_SECONDS,
			)
		);

		add_filter('pre_set_site_transient_update_themes', array($this, 'inject_update'));
		add_filter('themes_api', array($this, 'inject_theme_information'), 10, 3);
		add_filter('upgrader_pre_download', array($this, 'download_package'), 10, 4);
		add_filter('upgrader_source_selection', array($this, 'normalize_source_directory'), 10, 4);
		add_action('admin_notices', array($this, 'render_configuration_notice'));
	}

	public function inject_update($transient)
	{
		if (!is_object($transient)) {
			return $transient;
		}

		$release = $this->get_latest_release();
		if (!$release) {
			return $transient;
		}

		$item = array(
			'theme'       => $this->stylesheet,
			'new_version' => $release['version'],
			'url'         => $release['html_url'],
			'package'     => $release['package'],
			'requires'    => '',
			'requires_php'=> '8.0',
		);

		if (version_compare($release['version'], $this->version, '>')) {
			$transient->response[$this->stylesheet] = $item;
			return $transient;
		}

		$transient->no_update[$this->stylesheet] = $item;
		return $transient;
	}

	public function inject_theme_information($result, string $action, $args)
	{
		if ('theme_information' !== $action || empty($args->slug) || $args->slug !== $this->stylesheet) {
			return $result;
		}

		$release = $this->get_latest_release();
		if (!$release) {
			return $result;
		}

		return (object) array(
			'name'         => $this->theme_name,
			'slug'         => $this->stylesheet,
			'version'      => $release['version'],
			'author'       => '<a href="' . esc_url($release['html_url']) . '">GitHub</a>',
			'homepage'     => $release['html_url'],
			'last_updated' => $release['published_at'],
			'sections'     => array(
				'description' => wp_kses_post($release['description']),
				'updates'     => wp_kses_post($release['notes']),
			),
			'download_link' => $release['package'],
		);
	}

	public function download_package($reply, string $package, $upgrader, array $hook_extra)
	{
		if (empty($this->config['token']) || !$this->is_target_theme($hook_extra) || !$this->is_supported_github_package($package)) {
			return $reply;
		}

		$temp_file = wp_tempnam($this->stylesheet . '.zip');
		if (!$temp_file) {
			return new WP_Error('sc_life_theme_temp_file', __('Could not create a temporary file for the theme update.', 'sc-life-theme'));
		}

		$response = wp_safe_remote_get(
			$package,
			array(
				'timeout'  => 60,
				'headers'  => $this->get_download_headers($package),
				'stream'   => true,
				'filename' => $temp_file,
			)
		);

		if (is_wp_error($response)) {
			wp_delete_file($temp_file);
			return $response;
		}

		$status_code = (int) wp_remote_retrieve_response_code($response);
		if ($status_code < 200 || $status_code >= 300) {
			wp_delete_file($temp_file);
			return new WP_Error(
				'sc_life_theme_download_failed',
				sprintf(
					/* translators: %d: HTTP status code */
					__('テーマパッケージのダウンロードに失敗しました。HTTPステータス: %d', 'sc-life-theme'),
					$status_code
				)
			);
		}

		if (!$this->is_valid_zip_file($temp_file)) {
			wp_delete_file($temp_file);
			return new WP_Error(
				'sc_life_theme_invalid_zip',
				__('GitHub から取得した更新ファイルが ZIP 形式ではありませんでした。トークン権限または Release asset を確認してください。', 'sc-life-theme')
			);
		}

		return $temp_file;
	}

	public function normalize_source_directory(string $source, string $remote_source, $upgrader, array $hook_extra): string
	{
		global $wp_filesystem;

		if (!$this->is_target_theme($hook_extra) || basename($source) === $this->stylesheet || !$wp_filesystem) {
			return $source;
		}

		$normalized = trailingslashit($remote_source) . $this->stylesheet;
		if ($wp_filesystem->exists($normalized)) {
			$wp_filesystem->delete($normalized, true);
		}

		if ($wp_filesystem->move($source, $normalized, true)) {
			return $normalized;
		}

		return $source;
	}

	public function render_configuration_notice(): void
	{
		global $pagenow;

		if (
			!is_admin() ||
			!current_user_can('update_themes') ||
			$this->is_configured() ||
			!in_array($pagenow, array('themes.php', 'update-core.php'), true)
		) {
			return;
		}

		echo '<div class="notice notice-warning"><p>';
		echo esc_html__('GitHub アップデータはまだ設定されていません。管理画面から更新する前に、sc_life_theme_updater_config か wp-config.php でリポジトリ情報を設定してください。', 'sc-life-theme');
		echo '</p></div>';
	}

	private function get_latest_release(): ?array
	{
		if (!$this->is_configured()) {
			return null;
		}

		$cache_key = 'sc_life_theme_release_' . md5($this->config['repository']);
		$cached    = get_site_transient($cache_key);
		if (is_array($cached)) {
			return $cached;
		}

		$request = wp_safe_remote_get(
			sprintf('https://api.github.com/repos/%s/releases/latest', $this->config['repository']),
			array(
				'timeout' => 20,
				'headers' => $this->get_api_headers(),
			)
		);

		if (is_wp_error($request)) {
			return null;
		}

		$status_code = (int) wp_remote_retrieve_response_code($request);
		if (200 !== $status_code) {
			return null;
		}

		$body = json_decode(wp_remote_retrieve_body($request), true);
		if (!is_array($body) || empty($body['tag_name'])) {
			return null;
		}

		$release = array(
			'version'      => ltrim((string) $body['tag_name'], "vV \t\n\r\0\x0B"),
			'html_url'     => (string) ($body['html_url'] ?? ''),
			'published_at' => (string) ($body['published_at'] ?? ''),
			'description'  => $this->build_description($body),
			'notes'        => wpautop(esc_html((string) ($body['body'] ?? 'リリースノートはまだありません。'))),
			'package'      => $this->resolve_package_url($body),
		);

		if (empty($release['package'])) {
			return null;
		}

		set_site_transient($cache_key, $release, (int) $this->config['cache_ttl']);
		return $release;
	}

	private function build_description(array $release): string
	{
		$repo_url = sprintf('https://github.com/%s', $this->config['repository']);
		$published_at = !empty($release['published_at']) ? mysql2date(get_option('date_format'), gmdate('Y-m-d H:i:s', strtotime((string) $release['published_at']))) : '';
		$description = sprintf(
			'<p>%s</p><p><a href="%s" target="_blank" rel="noopener noreferrer">%s</a></p>',
			esc_html__('このテーマは GitHub Releases から更新されます。', 'sc-life-theme'),
			esc_url($repo_url),
			esc_html($this->config['repository'])
		);

		if ($published_at) {
			$description .= '<p>' . esc_html(sprintf(__('最新リリース公開日: %s', 'sc-life-theme'), $published_at)) . '</p>';
		}

		return $description;
	}

	private function resolve_package_url(array $release): string
	{
		$asset_name = (string) $this->config['release_asset'];

		if (!empty($release['assets']) && is_array($release['assets'])) {
			foreach ($release['assets'] as $asset) {
				if (empty($asset['name']) || $asset['name'] !== $asset_name) {
					continue;
				}

				if (!empty($this->config['token']) && !empty($asset['url'])) {
					return (string) $asset['url'];
				}

				if (!empty($asset['browser_download_url'])) {
					return (string) $asset['browser_download_url'];
				}
			}
		}

		return (string) ($release['zipball_url'] ?? '');
	}

	private function get_api_headers(): array
	{
		$headers = array(
			'Accept'               => 'application/vnd.github+json',
			'User-Agent'           => 'WordPress/' . $this->theme_name . '; ' . home_url('/'),
			'X-GitHub-Api-Version' => '2022-11-28',
		);

		if (!empty($this->config['token'])) {
			$headers['Authorization'] = 'Bearer ' . $this->config['token'];
		}

		return $headers;
	}

	private function get_download_headers(string $package): array
	{
		$headers = $this->get_api_headers();

		if (str_contains($package, '/releases/assets/')) {
			$headers['Accept'] = 'application/octet-stream';
		}

		return $headers;
	}

	private function is_supported_github_package(string $package): bool
	{
		$repository = preg_quote((string) $this->config['repository'], '/');

		return 1 === preg_match(
			'/^https:\/\/(?:api\.github\.com\/repos\/' . $repository . '\/(?:releases\/assets\/\d+|zipball\/[^\/\s]+)|github\.com\/' . $repository . '\/releases\/download\/[^\/\s]+\/[^\/\s]+)$/',
			$package
		);
	}

	private function is_valid_zip_file(string $file): bool
	{
		$handle = fopen($file, 'rb');
		if (false === $handle) {
			return false;
		}

		$signature = fread($handle, 4);
		fclose($handle);

		return in_array($signature, array("PK\x03\x04", "PK\x05\x06", "PK\x07\x08"), true);
	}

	private function is_configured(): bool
	{
		return 1 === preg_match('/^[^\/\s]+\/[^\/\s]+$/', (string) $this->config['repository']);
	}

	private function is_target_theme(array $hook_extra): bool
	{
		if (($hook_extra['theme'] ?? '') === $this->stylesheet) {
			return true;
		}

		if (!empty($hook_extra['themes']) && in_array($this->stylesheet, (array) $hook_extra['themes'], true)) {
			return true;
		}

		return false;
	}
}
