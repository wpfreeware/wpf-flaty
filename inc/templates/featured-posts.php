
	<?php if ( (is_home() || is_front_page()) && !is_paged() && (get_theme_mod('wpf_flaty_featured_posts_count','12') > 0 )): ?>
		<?php if ( get_theme_mod( 'wpf_flaty_featured_area', 'disable' ) == 'enable' ) : ?>
		
			<section id="feature-post">
			  
			  
				<?php
				  $args = array(
					'category_name' => get_theme_mod('wpf_flaty_featured_posts_cat','uncategorized'),
					'posts_per_page' => get_theme_mod('wpf_flaty_featured_posts_count','12')
				  );
				  
				  $the_query = new WP_Query( $args );
				  
				  // The Loop
				  if ( $the_query->have_posts() ) :
					echo '<ul class="feature-iteam">';
					while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
						<!-- Start single Item -->
						<li>            
						  <div class="item item-type-move">
							<a class="item-hover" href="<?php the_permalink();?>">
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
					endwhile;
					echo '</ul>';
				  endif;
				 
				  // Reset Post Data
				  wp_reset_postdata();
				 
				?>		  
			  


			</section>
		
		<?php endif; ?>
	<?php endif; ?>
		