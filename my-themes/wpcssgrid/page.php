<?php get_header(); ?>

<main id="content" class="main-content"> <!-- main content START -->    
    <?php while(have_posts()) : the_post(); ?>
      <?php get_template_part( 'template-parts/content', 'page' ); ?>
    <?php endwhile; wp_reset_query(); ?>
</main> <!-- main content END -->

<?php get_footer(); ?>