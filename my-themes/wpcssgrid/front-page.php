<?php get_header(); ?>

<main id="content" class="main-content"> <!-- main content START -->
	<article id='homepage' class='pt-2 pt-sm-3 pb-5 my-0'>
		<?php while(have_posts()) : the_post(); ?>
			<div class='mt-2 mb-1'><?php the_content(); ?></div>
		<?php endwhile; wp_reset_query(); ?>
	</article>
</main> <!-- main content END -->

<?php get_footer(); ?>