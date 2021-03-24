<?php get_header(); ?>

<main id="content" class="main-content"> <!-- main content START -->
	<?php while(have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; wp_reset_query(); ?>
</main> <!-- main content END -->

<?php get_footer(); ?>