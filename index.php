<?php
/**
 * Main index template.
 *
 * @package SC_LIFE_Theme
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();
?>
<section class="section">
	<div class="container">
		<header class="archive-header">
			<p class="eyebrow"><?php esc_html_e('Latest Posts', 'sc-life-theme'); ?></p>
			<h1 class="section-title"><?php bloginfo('name'); ?></h1>
			<p class="section-copy"><?php bloginfo('description'); ?></p>
		</header>

		<?php if (have_posts()) : ?>
			<div class="post-list">
				<?php
				while (have_posts()) :
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
						<div class="post-meta">
							<time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><?php echo esc_html(get_the_date()); ?></time>
							<span><?php the_category(', '); ?></span>
						</div>
						<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="entry-summary">
							<?php the_excerpt(); ?>
						</div>
					</article>
				<?php endwhile; ?>
			</div>
			<div class="section-actions">
				<?php the_posts_pagination(); ?>
			</div>
		<?php else : ?>
			<div class="content-card">
				<h2 class="section-title"><?php esc_html_e('No posts found', 'sc-life-theme'); ?></h2>
				<p class="section-copy"><?php esc_html_e('Add posts or create more templates to turn this into a full site.', 'sc-life-theme'); ?></p>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
