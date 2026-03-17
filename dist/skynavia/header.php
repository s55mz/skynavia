<?php
/**
 * Theme header.
 *
 * @package SC_LIFE_Theme
 */

if (!defined('ABSPATH')) {
	exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-shell">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('コンテンツへ移動', 'sc-life-theme'); ?></a>
	<header class="site-header">
		<div class="container header-inner">
			<a class="site-branding" href="<?php echo esc_url(home_url('/')); ?>">
				<span class="brand-mark" aria-hidden="true">
					<span class="brand-frame"></span>
					<span class="brand-axis"></span>
					<span class="brand-node"></span>
				</span>
				<span class="brand-text">
					<span class="brand-title"><?php bloginfo('name'); ?></span>
					<span class="brand-tagline"><?php bloginfo('description'); ?></span>
				</span>
			</a>

			<nav class="main-navigation" aria-label="<?php esc_attr_e('メインメニュー', 'sc-life-theme'); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'fallback_cb'    => 'sc_life_theme_fallback_menu',
					)
				);
				?>
			</nav>

			<div class="header-actions">
				<a class="contact-link" href="tel:+81312345678">
					<span class="contact-label"><?php esc_html_e('Tokyo', 'sc-life-theme'); ?></span>
					<span class="contact-value">03-1234-5678</span>
				</a>
				<a class="button button-primary" href="#contact"><?php esc_html_e('Request Quote', 'sc-life-theme'); ?></a>
			</div>
		</div>
	</header>
	<main id="primary" class="site-main">
