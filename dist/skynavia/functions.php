<?php
/**
 * Theme setup and asset loading.
 *
 * @package SC_LIFE_Theme
 */

if (!defined('ABSPATH')) {
	exit;
}

require_once get_template_directory() . '/inc/theme-updater.php';

function sc_life_theme_setup(): void
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

	register_nav_menus(
		array(
			'primary' => __('ヘッダーメニュー', 'sc-life-theme'),
			'footer'  => __('フッターメニュー', 'sc-life-theme'),
		)
	);
}
add_action('after_setup_theme', 'sc_life_theme_setup');

function sc_life_theme_enqueue_assets(): void
{
	wp_enqueue_style(
		'sc-life-theme-fonts',
		'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@500;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'sc-life-theme-style',
		get_stylesheet_uri(),
		array('sc-life-theme-fonts'),
		wp_get_theme()->get('Version')
	);
}
add_action('wp_enqueue_scripts', 'sc_life_theme_enqueue_assets');

function sc_life_theme_updater_config(): array
{
	$config = array(
		'repository'    => defined('SC_LIFE_GITHUB_REPOSITORY') ? SC_LIFE_GITHUB_REPOSITORY : 's55mz/skynavia',
		'release_asset' => defined('SC_LIFE_GITHUB_RELEASE_ASSET') ? SC_LIFE_GITHUB_RELEASE_ASSET : get_stylesheet() . '.zip',
		'token'         => defined('SC_LIFE_GITHUB_TOKEN') ? SC_LIFE_GITHUB_TOKEN : '',
		'cache_ttl'     => HOUR_IN_SECONDS,
	);

	return apply_filters('sc_life_theme_updater_config', $config);
}

function sc_life_theme_fallback_menu(): void
{
	echo '<ul class="menu">';
	echo '<li><a href="#about">' . esc_html__('SC LIFEとは', 'sc-life-theme') . '</a></li>';
	echo '<li><a href="#solutions">' . esc_html__('対応領域', 'sc-life-theme') . '</a></li>';
	echo '<li><a href="#process">' . esc_html__('導入の流れ', 'sc-life-theme') . '</a></li>';
	echo '<li><a href="#trust">' . esc_html__('強み', 'sc-life-theme') . '</a></li>';
	echo '<li><a href="#contact">' . esc_html__('お問い合わせ', 'sc-life-theme') . '</a></li>';
	echo '</ul>';
}

add_action(
	'after_setup_theme',
	static function (): void {
		new SC_LIFE_Theme_Updater(sc_life_theme_updater_config());
	},
	20
);
