<?php 

/////////////////////
// Load enqueue
//////////////////////

require_once( 'inc/functions/enqueue.php' );

//////////////////////
// Theme customizer
//////////////////////

require_once( 'inc/functions/customizer.php' );

//////////////////////
// Comments list
//////////////////////

require_once( 'inc/functions/wp_list_comments.php' );


///////////////////////////////////////
// push header if toolbar is showing 
////////////////////////////////////////

if ( is_admin_bar_showing() ) {

function wpf_flaty_push_bottom_header_area(){

    ?>
	
	<style type="text/css">
		.header{margin-top:30px;}
		.mm-toggle-wrap{margin-top:30px;}
	</style>
	
	<?php

}
add_action( 'wp_head', 'wpf_flaty_push_bottom_header_area' );

}


/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since WpF Flaty 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 710;
}


if ( ! function_exists( 'wpf_flaty_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 */
function wpf_flaty_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain('wpf-flaty', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * Custom background color/image support
	 */		
	add_theme_support( 'custom-background', array( 'default-color' => '#37353A') );

	/*
	 * Enable custom logo
	 */		
	add_theme_support( 'custom-logo', array(
		'height'      => 33,
		'flex-height' => false,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	/*
	 * Custom Header image support
	 */	
	 
	$flaty_custom_header_args = array(
		'width'                  => 1920,
		'height'                 => 320,
		'flex-height'            => false,
		'flex-width'             => true,
		'uploads'                => true,
		'random-default'         => true,
		'header-text'            => true,
	);
	add_theme_support( 'custom-header', $flaty_custom_header_args );	
	
	
	// post formats
	add_theme_support( 'post-formats', array( 'link','video','audio', 'quote' ) );
	


	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 * & custom image sizes
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 750, 415, true ); // default size
	add_image_size( 'wpf-flaty-post-image', 750, 415, true ); // post-thumb
	
	
	
	/**
	 * Apply theme's stylesheet to the visual editor.
	 *
	 * @uses add_editor_style() Links a stylesheet to visual editor
	 */
	 

	add_editor_style( 'css/editor.style.css' );

	

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	
	
	///////////////////////////
	// menu register
	///////////////////////////

	register_nav_menu( 'primary-menu', __( 'Primary Menu', 'wpf-flaty' ) );	
	


}
endif; // wpf_flaty_setup
add_action( 'after_setup_theme', 'wpf_flaty_setup' );


/**
 * Register widget area.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
 
function wpf_flaty_widgets_areas() {	
	
	// primary sidebar widget area
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wpf-flaty' ),
		'id'            => 'wpf_flaty_primary_sidebar',
		'description'   => __( 'Add your desire widgets here.', 'wpf-flaty' ),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle" >',
		'after_title'   => '</h2>',
	) );
	
	// page sidebar widget area
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'wpf-flaty' ),
		'id'            => 'wpf_flaty_page_sidebar',
		'description'   => __( 'Add widgets here to appear in your page sidebar', 'wpf-flaty' ),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'wpf_flaty_widgets_areas' );


/////////////////////////////////////////
//WpF Flaty Built-in Numeric Pagination
//////////////////////////////////////////

// Numeric Page Navi (built into the theme by default)
function wpf_flaty_page_navi() {
  global $wp_query, $paged;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '<i class="fa fa-chevron-left"></i>',
    'next_text'    => '<i class="fa fa-chevron-right"></i>',
    'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3
  ) );
  echo '</nav>';
} /* end page navi */


/**
 * function to show the footer info, copyright information
 */
 
///////////////////////////////
// credits
//////////////////////////////
 
function wpf_flaty_footer_credit() {
  global $wpf_flaty_footer_credit;
  printf( esc_html__( 'Powered by %1$s | Theme by %2$s', 'wpf-flaty' ) , '<a href="http://wordpress.org/" target="_blank">WordPress</a>', '<a href="http://www.wpfreeware.com/" target="_blank">WpFreeware</a>');
}


///////////////////////////////
// Retriving Categories name
//////////////////////////////

function wpf_flaty_get_categories_select() {
  $teh_cats = get_categories();
  $results;
 
  $count = count($teh_cats);
  for ($i=0; $i < $count; $i++) {
    if (isset($teh_cats[$i]))
      $results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
    else
      $count++;
  }
  return $results;
}


////////////////////////////////////
// added classes into post nav links
/////////////////////////////////////

add_filter('next_post_link', 'wpf_flaty_post_link_attributes_next');
add_filter('previous_post_link', 'wpf_flaty_post_link_attributes_previous');

function wpf_flaty_post_link_attributes_next($output) {
    $injection = 'class="next"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}

function wpf_flaty_post_link_attributes_previous($output) {
    $injection = 'class="prev"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}