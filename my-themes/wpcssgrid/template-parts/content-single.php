<header class='content-header'>
  <div class='meta'>
    <span class='date'><?php the_date(); ?></span>
    <?php the_tags(
      '<span class="">', 
      '</span><span class="">',
      '</span');
    ?>
    <span class='comments'>| <?php comments_number(); ?></span>
    
  </div>
</header>
<h1 class=''><?php the_title(); ?></h1>
<p class=''><?php the_content(); ?></p>

<div class=''>
  <?php comments_template(); ?>
</div>