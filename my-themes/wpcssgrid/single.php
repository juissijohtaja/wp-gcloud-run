<?php get_header(); ?>

<main id="content" class="main-content"> <!-- main content START -->
  <article class='centered'>
    
    <?php while(have_posts()) : the_post(); ?>
      
      <?php get_template_part( 'template-parts/content', 'single' ); ?>
    
    <?php endwhile; wp_reset_query(); ?>
  </article>
</main> <!-- main content END -->

<?php get_footer(); ?>