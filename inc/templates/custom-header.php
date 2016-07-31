        
		
	<?php if( get_header_image() && (!is_home() || !is_front_page() ) ): ?> 
		<!--=========== BEGIN IMAGE BANNER SECTION ================-->
		<section id="feature-post">
		  <div id="img-banner">
			<img alt="banner image" src="<?php echo esc_url( get_header_image() ); ?>" alt="<?php esc_attr( bloginfo( 'description' ) ) ; ?>" />
			
			<?php if ( get_theme_mod( 'wpf_flaty_banner_title' ) ) : ?>
			<div class="img-banner-content">
			  <h2><?php echo esc_html( get_theme_mod( 'wpf_flaty_banner_title') );?></h2>
			</div>
			<?php endif; ?>	
			
		  </div>
		</section>        
		<!--=========== END IMAGE BANNER SECTION ================-->
	<?php endif; ?>