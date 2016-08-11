<?php
/*
 * 	This template contains quote post format content
 *	
 *	since wpf-flaty 1.0
 */	
?>					
<?php	if ( has_post_format('quote') ) {	?>
			 
		<!-- Quote -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('single_post'); ?> >
		  <!-- Post Header -->
		  <div class="post-head">
			<?php the_title( sprintf( '<h1 class="post-title" ><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			<?php get_template_part('post-meta');?>
		  </div>
		  <!-- Start Post Inner -->
		  <div class="post-innner details-article">
			  <?php echo get_the_content();?> 
		  </div>                          
		</article>
		<!-- /Quote  -->
			
<?php	}	?>