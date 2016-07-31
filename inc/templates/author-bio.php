<?php if( get_the_author_meta('description') ): ?>
  <div class="author-bio">
	<div class="media">
	  <div class="media-left"> 
		<!-- author avatar-->
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 120 ); ?>
		
	  </div>
	  
	  <div class="media-body">
		<!-- author name-->
		<h3 class="media-heading" ><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></h3>
		<!-- author description-->

		<p><?php the_author_meta('description');?></p>


	  </div>
	</div>
  </div>
<?php endif; ?>