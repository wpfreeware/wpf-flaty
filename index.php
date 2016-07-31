	
	<?php 
	
	/*************
	 * @package  		 WpF Flaty
	 * @file     		 index.php
	 * @author   		 WpFreeware
	 * @Author Link 	 http://wpfreeware.com
	 * @license	 		 GPL 3.0 or Later
	 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
	 ***************/	
	
	get_header();?>
	  
	  
	<!--=========== BEGIN FEATURE POST SECTION ================-->
	<?php get_template_part('inc/templates/featured-posts');?>
	<!--=========== END FEATURE POST SECTION ================--> 	  
     
	  <!--=========== BEGIN MAIN CONTENT SECTION ================-->
	  <section id="main-content">
		<div class="container">
		  <div class="row">
			<div class="col-lg-12 col-md-12">              
			  <div class="main-content-area">
				<div class="row">
				 				
				<!-- Start content area -->
					<?php get_template_part('inc/templates/content-area');?>					
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