<?php
/*
 *	This template contains post format link content
 *
 *	since wpf-flaty 1.0 
 */
?>
<?php	if (has_post_format('link')) {	?>
			 
		<!-- Link -->
		
		<article id="post-<?php the_ID(); ?>" <?php post_class('single_post'); ?> >
		
		  <div class="post-link">								
			<?php echo get_the_content();?>
		  </div>
		  <!-- Post Header -->
		  <div class="post-head">
			<?php the_title( sprintf( '<h1 class="post-title" ><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			<?php get_template_part('post-meta');?>
		  </div>  
		  
		</article>
		<!-- /Link  -->
			
<?php	}	?>