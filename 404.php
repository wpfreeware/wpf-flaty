	
	<?php 
	
	/*************
	 * @package  		 WpF Flaty
	 * @file     		 404.php
	 * @author   		 WpFreeware
	 * @Author Link 	 http://wpfreeware.com
	 * @license	 		 GPL 3.0 or Later
	 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
	 ***************/	
	
	get_header();?>	  
     
	  <!--=========== BEGIN MAIN CONTENT SECTION ================-->
	  <section id="main-content">
		<div class="container">
		  <div class="row">
			<div class="col-lg-12 col-md-12">              
              <main>
                <div class="error-area">
                  <h2><?php _e('404','wpf-flaty');?></h2>
                  <h3><?php _e('We are sorry, this page is not available','wpf-flaty');?></h3>
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="read-more-btn"><?php _e('Back To Homepage','wpf-flaty');?></a>
                </div>
              </main>
			</div>
		  </div>
		</div>
	  </section>
	  <!--=========== END MAIN CONTENT SECTION ================-->   
	  
    </div>
    <!-- /End Page Wrapper -->
   
	<?php get_footer();?>