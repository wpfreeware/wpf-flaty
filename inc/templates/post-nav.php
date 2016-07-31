  <nav class="nav-growpop">
	
	<!--Previous post link-->
	<?php $prevPost = get_previous_post(true);
		if($prevPost) {?>
		<?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) );?>
		<?php previous_post_link('%link', " 
		
		<span class='icon-wrap'><i class='fa fa-angle-left'></i></span>
		
		<div>
		  <span>".__('Previous Story','wpf-flaty')."</span>
		  <h3>%title</h3>
		  $prevthumbnail
		</div>
		
		"); }?>							

	
	<!--Next post link-->
	<?php $nextPost = get_next_post(true);                                                                                                                
		if($nextPost) { ?>
		<?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100) );  ?>
			<?php next_post_link('%link', " 
			
			<span class='icon-wrap'><i class='fa fa-angle-right'></i></span>
			
			<div>
			  <span>".__('Next Story','wpf-flaty')."</span>
			  <h3>%title</h3>
			  $nextthumbnail
			</div>
			

			
			"); ?>					  
		<?php } ?>							
		
  </nav>