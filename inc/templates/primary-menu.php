<?php if ( get_theme_mod( 'flaty_off_canvas_activation', 'enable' ) == 'enable' ) : ?>

        <div class="mm-toggle-wrap">
          <button type="button  " class="mm-toggle toogle-bar" aria-label="Primary menu">
            <i class="fa fa-bars"></i><span class="mm-label"></span>
          </button>            
        </div> 
        <!--=========== BEGIN MENU ================-->
        <div id="mobile-menu">
          <nav role="navigation" aria-label="<?php _e( 'Primary Navigation', 'wpf-flaty' ); ?>">
		  
			<?php /* Primary navigation */
			
			
					wp_nav_menu( array(
					  'theme_location' => 'primary-menu',
					  'depth' => 3,
					  'container' => false,
					  'fallback_cb' => ''
					  )
					);			
				
			?>				
		   
          </nav>
          <!-- Menu Close Btn -->
          <button type="button" aria-label="close button" class="fa fa-close close-btn mm-toggle"></button>		
		  	  
        
        </div>

<?php endif; ?>	