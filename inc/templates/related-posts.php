					  
					  
    <?php // related posts by category	
		$orig_post = $post;
		global $post;
		$categories = get_the_category($post->ID);
		if ($categories) {
		$category_ids = array();
		foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

		$args=array(
		'category__in' => $category_ids,
		'post__not_in' => array($post->ID),
		'posts_per_page'=> -1, 
		'ignore_sticky_posts'=>1  
		);

		$my_query = new WP_Query( $args );
		if( $my_query->have_posts() ) {
		echo '<div class="related-post">
				<h2>'.__('You Might Also Like', 'wpf-flaty').'</h2>
				<div class="related-post-content">
				<ul class="feature-iteam popular-item"> ';
		while( $my_query->have_posts() ) {
		$my_query->the_post();?>
			
			<!-- Start single Item -->
			<li>            
			  <div class="item item-type-move">
				<a href="<?php echo esc_url( get_permalink() );?>" class="item-hover">
				  <figcaption class="item-info">
					<div class="headline">
					  <?php the_title();?>
					  <div class="line"></div>
					</div>
					<div class="date"><span class="fa fa-link"></span></div>             
				  </figcaption>
				  <div class="mask"></div>
				</a>
				
				<?php // if post has featured image to display
					if ( has_post_thumbnail() ) : ?>			
					<figure class="item-img">
						<?php the_post_thumbnail('wpf-flaty-post-image', array('alt' => esc_attr( get_the_title() ) )); ?>
					</figure>  
				<?php endif; ?>
				
			  </div>
			</li>		
		  
		
		<?php
		}
		echo '</ul></div></div>';
		}
		}
		$post = $orig_post;
		wp_reset_query(); 
	
	?>					  