	
	<?php 
	
	/*************
	 * @package  		 WpF Flaty
	 * @file     		 page.php
	 * @author   		 WpFreeware
	 * @Author Link 	 http://wpfreeware.com
	 * @license	 		 GPL 3.0 or Later
	 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
	 ***************/	
	
	get_header();?>
	
	<?php get_template_part('inc/templates/custom-header');?>	

     
	  <!--=========== BEGIN MAIN CONTENT SECTION ================-->
	  <section id="main-content">
		<div class="container">
		  <div class="row">
			<div class="col-lg-12 col-md-12">              
			  <div class="main-content-area">
				<div class="row">
				 				
				<!-- Start content area -->
                  <div class="col-lg-8 col-md-8 <?php if( get_theme_mod( 'wpf_flaty_sidebar_settings', 'right') == 'left' ): echo "col-md-push-4"; endif; ?>">
                    <main role="main">
                      
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>					  
					
					  <div class="blog-archive blog-detals">
						
						
                        <!-- Start Single Post -->
                        <article class="single_post">
                          <!-- Post Image -->
	
						<?php // if post has featured image to display
							if ( has_post_thumbnail() ) : ?>							
							  <div class="post-img">
								
								<?php the_post_thumbnail('wpf-flaty-post-image', array('alt' => esc_attr( get_the_title() ) )); ?>								
								 
							  </div>
						<?php endif; ?>
						
                          <!-- Post Header -->
                          <div class="post-head">
						  
                            <h1 class="post-title"><?php the_title(); ?></h1>
							
                          </div>
                          <!-- Start Post Inner -->
                          <div class="post-innner details-article">
						  
							<?php the_content();?>
							
                          </div> 
						  
                          <!-- Single Post Pagination-->
						  <?php 
						  
							wp_link_pages( array(
								'before'      => '<div class="singlepost-pagination"><span>'. __( 'Pages:', 'wpf-flaty' ) .'</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							) );								  
						  
						  ?>						  
						  
						  
                        </article>
						
						
                        <!-- /Single Post -->                       
                      </div>  
					  
						
						
					  <?php 
							
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;	
							

					  ?>
					  

					  
				 <?php endwhile; ?>
				
				 <?php else : ?>
				 
					<article class="single_post">
						<h2 class="not_found"><?php _e('Sorry! Nothing Found', 'wpf-flaty'); ?></h2>
					</article>
				
				<?php endif; ?>					  
					  
                    </main>                   
                  </div>
				<!-- End content area -->								
				
				<!-- Start Sidebar -->
					<?php get_sidebar(); ?>
				 <!-- Start Sidebar -->
				
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
	  <!--=========== END MAIN CONTENT SECTION ================-->   
	  
    </div>
    <!-- /End Page Wrapper -->
   
	<?php get_footer();?>