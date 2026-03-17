<?php
/**
 * Theme footer.
 *
 * @package SC_LIFE_Theme
 */

if (!defined('ABSPATH')) {
	exit;
}
?>
	</main>
	<footer class="site-footer">
		<div class="container footer-grid">
			<div class="site-info">
				<p class="footer-brand"><?php bloginfo('name'); ?></p>
				<p><?php bloginfo('description'); ?></p>
				<p class="footer-meta"><?php esc_html_e('Semiconductor sourcing identity system for business clients.', 'sc-life-theme'); ?></p>
			</div>
			<nav class="footer-navigation" aria-label="<?php esc_attr_e('フッターメニュー', 'sc-life-theme'); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => false,
						'fallback_cb'    => '__return_empty_string',
					)
				);
				?>
			</nav>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
