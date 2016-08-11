<?php
/*
 * 	This template contains custom header image content
 *	
 *	since wpf-flaty 1.0
 */	
?>	        		
<?php if( get_header_image() && (!is_home() || !is_front_page() ) ): ?> 
	<!--=========== BEGIN IMAGE BANNER SECTION ================-->
	<section id="feature-post">
	  <div id="img-banner">
		  
		<img alt="banner image" src="<?php echo esc_url( get_header_image() ); ?>" alt="<?php esc_attr( bloginfo( 'description' ) ) ; ?>" />
		
	  </div>
	</section>        
	<!--=========== END IMAGE BANNER SECTION ================-->
<?php endif; ?>