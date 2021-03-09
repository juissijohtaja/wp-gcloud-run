<div class='comments-wrapper'>
  <div class='comments-header'>
    <h5>
    <?php 
      if (!have_comments()) {
        echo 'Leave a comment';
      } else {
        echo get_comments_number(  ).' comments';
      }
    ?>
    </h5>
  </div>
  <div class='comments-content'>
    <?php wp_list_comments(
      array(
        'style' => 'div'
      )
    ); ?>
  </div>
  <div class='comments-form'>
    <?php 

      $comment_args = array(
        'class_submit' => 'btn btn-info submit',
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label> <textarea id="comment" name="comment" class="form-control" cols="45" rows="8" aria-required="true" required="required"></textarea></p>',
        'fields' => array(
          'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
          '<input id="author" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' /></p>',
          'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
          '<input id="email" name="email" class="form-control" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p>',
          'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Website' ) . '</label> ' .
          '<input id="url" name="url" class="form-control" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
          )
      );

      if (comments_open()) {
        comment_form($comment_args);
      }
    ?>
  </div>
</div>