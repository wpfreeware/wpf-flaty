	<div class="post-meta">
	  <div>
		<i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
	  </div>
	  
	  <div>
		<i class="fa fa-clock-o"></i><?php the_time( get_option( 'date_format' ) ); ?>
	  </div>
	  
	  <div>
		<i class="fa fa-folder-open"></i> <?php the_category(', '); ?>
	  </div>
	  
	  <div>
		<?php if ( comments_open() ) :  ?> <i class="fa fa-comments"></i> <?php comments_popup_link( __('No Comment', 'wpf-flaty'), __('1 Comment', 'wpf-flaty'), __('% Comments', 'wpf-flaty')); endif; ?>
	  </div>	  
	  
	  
	  
	  <div>
		<?php edit_post_link( __(' Edit','wpf-flaty'), '<i class="fa fa-pencil"></i>', ''); ?>
	  </div>	  
	  
	</div>