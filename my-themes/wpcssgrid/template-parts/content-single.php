<h1><?php the_title(); ?></h1>

<header class='content-header'>
  <p class='meta'>
    <span class='date'><?php the_date(); ?> | </span>
    <?php the_tags(
      '<span>', 
      '</span> <span>',
      '</span');
    ?>
    <span class='comments'> | <?php comments_number(); ?></span>
  </p>
</header>

<?php the_content(); ?>

<div>
  <?php comments_template(); ?>
</div>