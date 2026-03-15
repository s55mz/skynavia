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
	<header class="site-header">
		<div class="container header-inner">
			<div class="site-branding">
				<a class="brand-mark" href="<?php echo esc_url(home_url('/')); ?>" aria-hidden="true"></a>
				<a class="brand-text" href="<?php echo esc_url(home_url('/')); ?>">
					<span class="brand-title"><?php bloginfo('name'); ?></span>
					<span class="brand-tagline"><?php bloginfo('description'); ?></span>
				</a>
			</div>

			<nav class="main-navigation" aria-label="<?php esc_attr_e('Primary menu', 'sc-life-theme'); ?>">
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
				<a class="contact-link" href="tel:+81312345678">03-1234-5678</a>
				<a class="button button-secondary" href="#contact"><?php esc_html_e('Contact', 'sc-life-theme'); ?></a>
				<a class="button button-primary" href="#services"><?php esc_html_e('View Services', 'sc-life-theme'); ?></a>
			</div>
		</div>
	</header>
	<main id="primary" class="site-main">

