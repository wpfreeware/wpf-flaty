    <footer id="footer" role="contentinfo">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
			
              <div class="footer-copyright">
				<!-- footer texts -->
				<?php 
					if( get_theme_mod('wpf_flaty_footer_text') ):
						echo esc_html( get_theme_mod('wpf_flaty_footer_text') ); 
					endif;
				?>				  
			  
              </div>
			 		  
			  
            </div>
			
            <div class="col-md-6 col-sm-6 col-xs-12">
			
              <!-- Social Links -->
			  <div class="footer-social">
                
				<!-- facebook -->
				<?php if( get_theme_mod('wpf_flaty_footer_social_facebook') ): ?>
					<a href="<?php echo esc_url(get_theme_mod('wpf_flaty_footer_social_facebook')); ?>"  target="_blank" ><span class="fa fa-facebook"></span></a>
				<?php endif;?>
				<!-- twitter -->
				<?php if( get_theme_mod('wpf_flaty_footer_social_twitter') ): ?>
					<a href="<?php echo esc_url(get_theme_mod('wpf_flaty_footer_social_twitter')); ?>"  target="_blank" ><span class="fa fa-twitter"></span></a>
				<?php endif;?>	
				<!-- Google+ -->
				<?php if( get_theme_mod('wpf_flaty_footer_social_googleplus') ): ?>
					<a href="<?php echo esc_url(get_theme_mod('wpf_flaty_footer_social_googleplus')); ?>"  target="_blank" ><span class="fa fa-google-plus"></span></a>
				<?php endif;?>	
				<!-- LinkedIn -->
				<?php if( get_theme_mod('wpf_flaty_footer_social_linkin') ): ?>
					<a href="<?php echo esc_url(get_theme_mod('wpf_flaty_footer_social_linkin')); ?>"  target="_blank" ><span class="fa fa-linkedin"></span></a>
				<?php endif;?>					
				<!-- YouTube -->
				<?php if( get_theme_mod('wpf_flaty_footer_social_youtube') ): ?>
					<a href="<?php echo esc_url(get_theme_mod('wpf_flaty_footer_social_youtube')); ?>"  target="_blank" ><span class="fa fa-youtube"></span></a>
				<?php endif;?>				
				
              </div>
			  
            </div>
			
          </div>
        </div>
      </div>
	  
	  
		<?php if ( is_home() || is_front_page() ): ?>
			
		  <div class="footer-bottom">
			<div class="container">
			  <div class="row">
				<div class="col-md-12">
				  <div class="designer">
					<p><?php wpf_flaty_footer_credit();?></p>				
				  </div>
				</div>
			  </div>
			</div>
		  </div>			
			
		<?php endif;?>
		
	  
    </footer>

   <?php wp_footer();?>
  </body>
</html>