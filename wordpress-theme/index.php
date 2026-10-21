<?php
get_header();
?>
<main id="main-content" class="section">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<article <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
				<div><?php the_content(); ?></div>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<h1><?php esc_html_e( 'Chưa có nội dung.', 'aura-product' ); ?></h1>
	<?php endif; ?>
</main>
<?php
get_footer();
