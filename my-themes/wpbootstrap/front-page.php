<?php get_header(); ?>

<article class='bg-light py-5 px-4 my-4'>
	
	<?php while(have_posts()) : the_post(); ?>
		<h1 class='mt-5 mb-4'><?php the_title(); ?></h1>
		<p class='mt-2 mb-1'><?php the_excerpt(); ?></p>
	<?php endwhile; wp_reset_query(); ?>
</article>

<?php
	dynamic_sidebar( 'sidebar-1' )
?>

<?php get_footer(); ?>