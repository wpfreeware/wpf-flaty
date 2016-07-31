<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

   <?php wp_head();?>
  </head>
  
  <body <?php body_class(); ?> >  

    <!-- BEGAIN LazyLoader -->    
	<?php if ( get_theme_mod( 'flaty_lazyloader_activation', 'enable' ) == 'enable' ) : ?>
	<div class="fakeloader"></div>
	<?php endif; ?>	
    <!-- END LazyLoader -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Page Overlay -->
    <div id="overlay"></div>

    <!-- Start Page Wrapper (closing tag can be found below the content section) -->
    <div id="page">
	
      <!--=========== BEGIN HEADER SECTION ================-->
      <header id="header-area" role="banner">  
	  
		<?php get_template_part('inc/templates/logo-search');?>		
		
		<!--=========== Start MENU ================-->
		<?php get_template_part('inc/templates/primary-menu');?>
		<!--=========== End MENU ================-->

   
      </header>
      <!--=========== END HEADER SECTION ================-->