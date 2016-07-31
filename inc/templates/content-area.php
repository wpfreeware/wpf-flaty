  <div class="col-lg-8 col-md-8 <?php if( get_theme_mod( 'wpf_flaty_sidebar_settings', 'right') == 'left' ): echo "col-md-push-4"; endif; ?>">
	
	<main role="main">
	
	  <div class="blog-archive">
	  
		  <?php 

				if (have_posts()) :
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