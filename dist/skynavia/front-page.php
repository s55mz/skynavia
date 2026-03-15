<?php
/**
 * Front page template.
 *
 * @package SC_LIFE_Theme
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();
?>
<section class="hero">
	<div class="container hero-grid">
		<div class="hero-copy">
			<p class="eyebrow"><?php esc_html_e('Trustworthy B2B Theme', 'sc-life-theme'); ?></p>
			<h1 class="hero-title"><?php esc_html_e('WordPress theme development starts with a reliable foundation.', 'sc-life-theme'); ?></h1>
			<p>
				<?php esc_html_e('This custom theme provides a clean structure for corporate websites, service pages, and editorial content with a strong focus on readability, trust, and responsive behavior.', 'sc-life-theme'); ?>
			</p>
			<div class="hero-actions">
				<a class="button button-primary" href="#services"><?php esc_html_e('Explore Features', 'sc-life-theme'); ?></a>
				<a class="button button-secondary" href="#contact"><?php esc_html_e('Start Building', 'sc-life-theme'); ?></a>
			</div>
		</div>
		<div class="hero-panel">
			<div class="panel">
				<span class="panel-label"><?php esc_html_e('Theme Ready', 'sc-life-theme'); ?></span>
				<div class="metric-value">6 Files</div>
				<p><?php esc_html_e('Core template files, asset loading, navigation support, and front page layout are included.', 'sc-life-theme'); ?></p>
			</div>
		</div>
	</div>
</section>

<section id="trust" class="section">
	<div class="container">
		<p class="eyebrow"><?php esc_html_e('Trust Signals', 'sc-life-theme'); ?></p>
		<h2 class="section-title"><?php esc_html_e('Designed to feel credible before you customize the content.', 'sc-life-theme'); ?></h2>
		<p class="section-copy"><?php esc_html_e('The visual system uses restrained color, clear type hierarchy, and strong spacing so that business messaging reads as dependable instead of generic.', 'sc-life-theme'); ?></p>
		<div class="trust-grid">
			<article class="trust-card">
				<h3 class="card-title"><?php esc_html_e('Readable typography', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('Lexend and Source Sans 3 create a clean hierarchy for headings, summaries, and supporting content.', 'sc-life-theme'); ?></p>
			</article>
			<article class="trust-card">
				<h3 class="card-title"><?php esc_html_e('Responsive layout', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('Sections collapse cleanly across desktop, tablet, and mobile without horizontal scroll issues.', 'sc-life-theme'); ?></p>
			</article>
			<article class="trust-card">
				<h3 class="card-title"><?php esc_html_e('WordPress-native structure', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('Menus, title-tag support, thumbnails, and content templates are wired to standard WordPress APIs.', 'sc-life-theme'); ?></p>
			</article>
		</div>
	</div>
</section>

<section id="services" class="section">
	<div class="container">
		<p class="eyebrow"><?php esc_html_e('Included Sections', 'sc-life-theme'); ?></p>
		<h2 class="section-title"><?php esc_html_e('A solid base for marketing pages and content-driven sites.', 'sc-life-theme'); ?></h2>
		<div class="service-grid">
			<article class="service-card">
				<h3 class="card-title"><?php esc_html_e('Front page template', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('A dedicated homepage with hero, trust, service, metric, and contact sections.', 'sc-life-theme'); ?></p>
			</article>
			<article class="service-card">
				<h3 class="card-title"><?php esc_html_e('Post loop template', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('An index template that renders posts cleanly for blog, news, or archive pages.', 'sc-life-theme'); ?></p>
			</article>
			<article class="service-card">
				<h3 class="card-title"><?php esc_html_e('Theme setup', 'sc-life-theme'); ?></h3>
				<p><?php esc_html_e('Hooks for menus, title handling, thumbnails, semantic HTML5 markup, and stylesheet loading.', 'sc-life-theme'); ?></p>
			</article>
		</div>
	</div>
</section>

<section id="metrics" class="section">
	<div class="container">
		<p class="eyebrow"><?php esc_html_e('Starter Metrics', 'sc-life-theme'); ?></p>
		<h2 class="section-title"><?php esc_html_e('Replace these with your own proof points.', 'sc-life-theme'); ?></h2>
		<div class="metric-grid">
			<article class="metric-card">
				<div class="metric-value">100%</div>
				<p><?php esc_html_e('Customizable code owned in your theme directory.', 'sc-life-theme'); ?></p>
			</article>
			<article class="metric-card">
				<div class="metric-value">2</div>
				<p><?php esc_html_e('Registered menu locations for primary and footer navigation.', 'sc-life-theme'); ?></p>
			</article>
			<article class="metric-card">
				<div class="metric-value">3</div>
				<p><?php esc_html_e('Core trust cards ready for industry-specific content.', 'sc-life-theme'); ?></p>
			</article>
			<article class="metric-card">
				<div class="metric-value">0</div>
				<p><?php esc_html_e('Build dependencies required. The theme is plain PHP and CSS.', 'sc-life-theme'); ?></p>
			</article>
		</div>
	</div>
</section>

<section id="contact" class="section">
	<div class="container">
		<div class="content-card">
			<p class="eyebrow"><?php esc_html_e('Next Step', 'sc-life-theme'); ?></p>
			<h2 class="section-title"><?php esc_html_e('Use this as the base, then add templates for the actual site.', 'sc-life-theme'); ?></h2>
			<p class="section-copy"><?php esc_html_e('Typical next files are page.php, single.php, archive.php, and template parts for reusable sections. If you want, the next step is to turn this into a full corporate or landing-page theme for your actual business.', 'sc-life-theme'); ?></p>
		</div>
	</div>
</section>
<?php
get_footer();

