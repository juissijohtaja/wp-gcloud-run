<div class='comments-wrapper'>
  <div class='comments-header'>
    <p>
    <?php 
      if (!have_comments()) {
        echo 'Leave a comment';
      } else {
        echo get_comments_number(  ).' comments';
      }
    ?>
    </p>
  </div>
  <div class='comments-content'>
    <?php wp_list_comments(
      array(
        'avatar_size' => 50,
        'style' => 'div'
      )
    ); ?>
  </div>
  <div class='comments-form'>
    <?php 
      if (comments_open()) {
        comment_form(
          array(
            'class_form' => '',
            'title_reply_before' => '<h3 id="reply-title>',
            'title_reply_after' => '</h3>'
          )
        );
      }
    ?>
  </div>
</div>