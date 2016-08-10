<?php
/*
 *	This file contains comment contents
 *
 *	since wpf-flaty 1.0 
 */
?>
<?php

/*-----------------------------------------------------------------------------------*/
# Custom Comments Template
/*-----------------------------------------------------------------------------------*/

function wpf_flaty_custom_comments($comment, $args, $depth) {
    $isByAuthor = false;

    if($comment->comment_author_email == get_the_author_meta('email')) {
        $isByAuthor = true;
    }

   $GLOBALS['comment'] = $comment; ?>
	
	
	<li <?php if($isByAuthor) { echo 'class="author-comments"';}?> >
	  <div <?php comment_class('comment_list_container media'); ?> id="comment-<?php comment_ID() ?>">
		<div class="media-left">
			<?php echo get_avatar( $comment->comment_author_email, 60 ); ?>
		</div>
		<div class="media-body">
		 <h4 class="author-name"><?php esc_url( comment_author_link() );?></h4>
		 <span class="comments-date"> <?php comment_date( get_option( 'date_format') ); ?> </span>
		 
		  <?php if ($comment->comment_approved == '0') : ?>
			 <em><?php _e('Your comment is awaiting moderation', 'wpf-flaty') ?></em>
			 <br />
		  <?php endif; ?>		 
		 
		 <div class="comment-text" >
			<?php comment_text() ?>
		 </div>
		 <span class="reply-btn">
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</span>
		</div>
	  </div>
	</li>	
	
<?php }