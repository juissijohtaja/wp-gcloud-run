<?php get_header(); ?>

<article class='bg-light py-3 px-3 px-md-5 my-4'>
	
  <?php while(have_posts()) : the_post(); ?>
    
    <?php get_template_part( 'template-parts/content', 'single' ); ?>
  
	<?php endwhile; wp_reset_query(); ?>
</article>

<?php get_footer(); ?>