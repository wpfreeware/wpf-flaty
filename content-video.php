<?php
/*
 *	This template contains post format video content
 *
 *	since wpf-flaty 1.0 
 */
?>
<?php	if ( has_post_format('video') ) {	?>
			 
		<!-- Video -->
			
		<article id="post-<?php the_ID(); ?>" <?php post_class('single_post'); ?> >
		
		  <div class="post-video">
			<?php the_content();?>
		  </div>
		  <!-- Post Header -->
		  <div class="post-head">
			<?php the_title( sprintf( '<h1 class="post-title" ><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			<?php get_template_part('post-meta');?>
		  </div> 
    
		</article>
		<!-- /Video -->
		
<?php	}	?>