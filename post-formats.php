
					
				<?php		if (has_post_format('quote')) {	?>
							 
							<!-- Quote -->
							
							<article id="post-<?php the_ID(); ?>" <?php post_class('single_post'); ?> >
							  <!-- Post Header -->
							  <div class="post-head">
								<?php the_title( sprintf( '<h1 class="post-title" ><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
								<?php get_template_part('post-meta');?>
							  </div>
							  <!-- Start Post Inner -->
							  <div class="post-innner details-article">
								  <?php echo get_the_content();?> 
							  </div>                          
							</article>
							<!-- /Quote  -->
							
				<?php		} elseif (has_post_format('audio')) {	?>
							 
							<!-- Audio -->
							<article id="post-<?php the_ID(); ?>" <?php post_class('single_post'); ?> >
							
							  <div class="post-audio">
								<?php echo get_the_content();?>
							  </div>
							  <!-- Post Header -->
							  <div class="post-head">
								<?php the_title( sprintf( '<h1 class="post-title" ><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
								<?php get_template_part('post-meta');?>
							  </div>  
							  
							</article>
							<!-- /Audio -->
							
				<?php		} elseif (has_post_format('video')) {	?>
							 
							<!-- Video -->
							
							<article id="post-<?php the_ID(); ?>" <?php post_class('single_post'); ?> >
							
							  <div class="post-video">
								<?php echo get_the_content();?>
							  </div>
							  <!-- Post Header -->
							  <div class="post-head">
								<?php the_title( sprintf( '<h1 class="post-title" ><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
								<?php get_template_part('post-meta');?>
							  </div> 
                        
							</article>
							<!-- /Video -->
						
				<?php		} elseif (has_post_format('link')) {	?>
							 
							<!-- Link -->
							
							<article id="post-<?php the_ID(); ?>" <?php post_class('single_post'); ?> >
							
							  <div class="post-link">								
								<?php echo get_the_content();?>
							  </div>
							  <!-- Post Header -->
							  <div class="post-head">
								<?php the_title( sprintf( '<h1 class="post-title" ><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
								<?php get_template_part('post-meta');?>
							  </div>  
							  
							</article>
							<!-- /Link  -->
							
				<?php	} else {	?>

							<!-- Standard -->
							
							<article id="post-<?php the_ID(); ?>" <?php post_class('single_post'); ?> >
							  <!-- Post Image -->
							  
								<?php // if post has featured image to display
									if ( has_post_thumbnail() ) : ?>
									  <div class="post-img">
										<a href="<?php the_permalink();?>">									
											<?php the_post_thumbnail('wpf-flaty-post-image', array('alt' => esc_attr( get_the_title() ) )); ?>
										</a>
									  </div>										
								<?php endif; ?>
								
							  <!-- Post Header -->
							  <div class="post-head">
								<?php the_title( sprintf( '<h1 class="post-title" ><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
								<?php get_template_part('post-meta');?>
							  </div>
							  <!-- Start Post Inner -->
							  <div class="post-innner details-article">

							 <?php // conditional statement for displaying excerpt or full content
								if( get_theme_mod( 'wpf_flaty_excerpt_content_settings', 'excerpt' ) == 'excerpt' ):
								
									the_excerpt(); ?>
									<a class="read-more-btn" href="<?php esc_url( the_permalink() );?>"><?php _e('Read More','wpf-flaty');?></a>

							<?php else:

									the_content(); 
								
								endif; ?>								

							  </div>                         
							</article>
							<!-- /Standard -->
							
				<?php }	?>
					
					
