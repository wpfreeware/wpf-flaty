<?php


function wpf_flaty_scripts() {


	////////////////////////////////
	// jquery scripts
	/////////////////////////////////
	
   // comment reply js
   if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );   
   
	// bootstrap js
	wp_enqueue_script( 'wpf_flaty_bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '3.3.4', true );
	// mobile menu js
	wp_enqueue_script( 'wpf_flaty_mmenujs', get_template_directory_uri() . '/js/jquery.mobile-menu.js', array( 'jquery' ), '1.0' , true );
	// ui search js
	wp_enqueue_script( 'wpf_flaty_classie', get_template_directory_uri() . '/js/classie.js', false, null, true );
	wp_enqueue_script( 'wpf_flaty_uisearch', get_template_directory_uri() . '/js/uisearch.js', false, null, true );	
	// slick slider js
	wp_enqueue_script( 'wpf_flaty_slickjs', get_template_directory_uri() . '/js/slick.js', false, '1.5.7', true );
	// LazyLoader js
	if( get_theme_mod( 'flaty_lazyloader_activation', 'enable') == 'enable' ) { 
		wp_enqueue_script( 'wpf_flaty_floaderjs', get_template_directory_uri() . '/js/fakeLoader.js', false, '1.1.0', true );
	}
	
	// custom js
	wp_enqueue_script( 'wpf_flaty_customjs', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0', true );
	
	// IE Fallbacks
	wp_enqueue_script( 'wpf_flaty_ie_html5shiv', get_template_directory_uri(). '/js/html5shiv.js', false, '3.7.3', false);
	wp_script_add_data( 'wpf_flaty_ie_html5shiv', 'conditional', 'lt IE 9' );
	wp_enqueue_script( 'wpf_flaty_ie_respond', get_template_directory_uri(). '/js/respond.js', false, null, false);
	wp_script_add_data( 'wpf_flaty_ie_respond', 'conditional', 'lt IE 9' );
	
	

	////////////////////////////////
	// Css styles
	/////////////////////////////////	
	
	// bootstrap style
    wp_enqueue_style( 'wpf_flaty_bootstrapmin', get_template_directory_uri() . '/css/bootstrap.css','all' );
	// font-awesome
    wp_enqueue_style( 'wpf_flaty_fontawesome', get_template_directory_uri() . '/css/font-awesome.css','all' );
	// Mobile menu styles
    wp_enqueue_style( 'wpf_flaty_mmenu', get_template_directory_uri() . '/css/jquery.mobile-menu.css','all' );
	// slick slider styles
    wp_enqueue_style( 'wpf_flaty_slickcss', get_template_directory_uri() . '/css/slick.css','all' );
	// LazyLoader style
	if( get_theme_mod( 'flaty_lazyloader_activation', 'enable') == 'enable' ) { 
	    wp_enqueue_style( 'wpf_flaty_floadercss', get_template_directory_uri() . '/css/fakeLoader.css','all' );
	}	
	
    // google fonts
	wp_enqueue_style( 'wpf_flaty_googlefont_sanspro',"//fonts.googleapis.com/css?family=Source+Sans+Pro",'all' );
    wp_enqueue_style( 'wpf_flaty_googlefont_raleway',"//fonts.googleapis.com/css?family=Raleway",'all' );
    wp_enqueue_style( 'wpf_flaty_googlefont_lobster',"//fonts.googleapis.com/css?family=Lobster",'all' );
		
	// theme main styles
    wp_enqueue_style( 'flaty_style', get_template_directory_uri() . '/style.css','all' );		

}


if (!is_admin()) add_action("wp_enqueue_scripts", "wpf_flaty_scripts", 11);






?>