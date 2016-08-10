	
	<?php 
	
	/*************
	 * @package  		 WpF Flaty
	 * @file     		 search.php
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
								<h2><?php printf( __( 'Results for <span> %s</span>', 'wpf-flaty' ),'<span>' . get_search_query() . '</span>'); ?></h2>
							  </div>
							</div> 								
								
							<?php
									while (have_posts()) : the_post();
										  
										  get_template_part( 'content', get_post_format() );
										  
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