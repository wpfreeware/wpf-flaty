        <div class="header">
		  
		
		<?php if( function_exists( 'the_custom_logo' ) ) : ?>
			<!-- logo img -->			
			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" >
				<?php echo the_custom_logo(); ?>
			</a>			
		
		<?php  elseif(get_theme_mod( 'wpf_flaty_logo_uploader')) : ?>
			<!-- logo img -->
			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" >
				<img src="<?php echo esc_url(get_theme_mod( 'wpf_flaty_logo_uploader'));?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
			</a>

		<?php else : ?>
			<!-- logo text -->
			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" ><?php bloginfo('name'); ?></a>
			
		<?php endif; ?>	   
		   
          <!-- Start Search -->
		<?php get_template_part('inc/templates/searchform');?>
		  
        </div> 