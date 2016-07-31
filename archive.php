	
	<?php 
	
	/*************
	 * @package  		 WpF Flaty
	 * @file     		 archive.php
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
					
					  <div class="blog-archive">					
					  
						  <?php if (have_posts()) : ?>
							<div class="breadcrumb-area">                      
							  <div class="breadcrumb">
								<h2>
								<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
									<?php /* If this is a category archive */ if (is_category()) { ?>
										<?php _e('Archive for the', 'wpf-flaty'); ?> <span><?php echo single_cat_title(); ?></span> <?php _e('category', 'wpf-flaty'); ?>
									<?php /* If this is a tag archive */  } elseif( is_tag() ) { ?>
										<?php _e('Archive for the', 'wpf-flaty'); ?> <span><?php single_tag_title(); ?></span> <?php _e('tag', 'wpf-flaty'); ?>
									<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
										<?php _e('Archive for', 'wpf-flaty'); ?> <span><?php the_time('F jS, Y'); ?></span>										
									<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
										<?php _e('Archive for', 'wpf-flaty'); ?> <span><?php the_time('F, Y'); ?></span>									
									<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
										<?php _e('Archive for', 'wpf-flaty'); ?> <span><?php echo date('Y'); ?></span>										
									<?php /* If this is a search */ } elseif (is_search()) { ?>
										<?php _e('Search Results', 'wpf-flaty'); ?>					
									<?php /* If this is an author archive */ } elseif (is_author()) { ?>
										<?php _e('Posted by', 'wpf-flaty'); ?>	<span><?php the_author(); ?></span>									
									<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
										<?php _e('Blog Archives', 'wpf-flaty'); ?>										
								<?php } ?>
								</h2>								
							  </div>
							</div> 								
								
							<?php
									while (have_posts()) : the_post();
										  
										  get_template_part('post-formats');
										  
									endwhile;
									
									else : 
									
										echo '<article class="single_post"><h2 class="not_found">'.__('Sorry! Nothing Found', 'wpf-flaty').'</h2></article>';
								endif;	
								
							?>						
					  
					  </div>    
					  
					  <!-- Start Pagination -->
					  <div class="start-pagination-area">

						<?php wpf_flaty_page_navi(); ?>

					  </div>
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