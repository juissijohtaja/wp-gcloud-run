<?php get_header(); ?>

<article id='homepage-hero' class='bg-dark py-5 px-5 my-4 text-center'>
	<h1 class='display-4 mt-5 mb-4 text-light'><?php the_title(); ?></h1>
	<?php while(have_posts()) : the_post(); ?>
		<div class='mt-2 mb-1 text-light'><?php the_content(); ?></div>
	<?php endwhile; wp_reset_query(); ?>
</article>

<?php
	// dynamic_sidebar( 'sidebar-1' )
?>

<?php get_footer(); ?>