<div class="col-lg-4 col-md-4 <?php if( get_theme_mod( 'wpf_flaty_sidebar_settings', 'right') == 'left' ): echo "col-md-pull-8"; endif; ?>">

<aside class="sidebar" role="complementary">

  <!-- Start Sidbar Widget -->
  
	<?php 
		
		if ( is_page() ):	
			dynamic_sidebar('wpf_flaty_page_sidebar'); // Appear only pages
		else:
			dynamic_sidebar('wpf_flaty_primary_sidebar'); // Appear everywhere except pages
		endif;	
	
	?>	  
  
  <!-- / Sidbar Widget -->
  
</aside>
<!-- / Sidebar -->


</div>
  
 