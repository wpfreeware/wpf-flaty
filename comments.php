<?php
/*
The comments page for WpF Flaty
*/

// don't load it if you can't comment
if ( post_password_required() ) {
  return;
}

?>

<?php // You can start editing here. ?>

<?php if ( have_comments() ) : ?>
	
	<!--Start comment area-->
	<div id="comments" class="comments-area"> 
	
		<h3 class="comments-title">
			<?php comments_number( __( 'No Comments', 'wpf-flaty' ), __( '1 Comment', 'wpf-flaty' ), _n( '% Comment', '% Comments', get_comments_number(), 'wpf-flaty' ) );?>
		</h3>
		
		<div class="comments">
		  <ul class="commentlist">
		  
			<!-- comment link -->
			  <?php
				wp_list_comments( array(
				  'style'             => 'ul',
				  'short_ping'        => true,
				  'avatar_size'       => 60,
				  'callback'          => 'wpf_flaty_custom_comments',
				  'type'              => 'all',
				  'reply_text'        => __( 'Reply' , 'wpf-flaty' ),
				  'page'              => '',
				  'per_page'          => '',
				  'reverse_top_level' => null,
				  'reverse_children'  => ''
				) );
			  ?>			
			
		  </ul>
		</div>
		
		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed' , 'wpf-flaty' ); ?></p>
		<?php endif; ?>		
		
	</div>
	<!--End comment area-->
	
	
	
	
	<!--numeric comment pagination-->
    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		
	  <!-- start Comments navigation -->
	  <nav class="comments-pagination-area" role="navigation">
			<?php paginate_comments_links(); ?>
	  </nav>
	  
    <?php endif; ?>
	
	

  <?php endif; // if ( have_comments() ) ?>
  
  
<?php comment_form(); ?> 

  