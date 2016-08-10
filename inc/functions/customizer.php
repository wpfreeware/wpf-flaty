<?php 

function wpf_flaty_customizer_register( $wp_customize ) {
   
 
$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';

////////////////////////////   
// theme option panel
///////////////////////////
   
$wp_customize->add_panel( 'wpf_flaty_theme_option', array(
    'title' => __('Theme Options', 'wpf-flaty'),
    'description' => __('Change theme settings from below like logo, favicon, colors, social, footer texts etc', 'wpf-flaty'),
    'priority' => 10,
) );
   

////////////////////////////
// logo section 
////////////////////////////


$wp_customize->add_section( 'wpf_flaty_logo_upload_section' , array(
    'title'      => __( 'Logo', 'wpf-flaty' ),
	'panel' => 'wpf_flaty_theme_option',
) );


// logo settings
$wp_customize->add_setting( 'wpf_flaty_logo_uploader' , array(
	'default'     => '',
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpf_flaty_logo_uploader', array(
	'label'        => __( 'Upload Your Logo. Best size: Height: 33px, width: free size.', 'wpf-flaty' ),
	'description' => __('This option is <b>deprecated</b> Since WP 4.5. Flaty includes native logo support. Please upload your logo from <b>Site Identity</b> section.', 'wpf-flaty'),
	'section'    => 'wpf_flaty_logo_upload_section',
	'settings'   => 'wpf_flaty_logo_uploader',
) ) );




//////////////////////////////
// Lazy-Loader settings
///////////////////////////////



$wp_customize->add_section( 'wpf_flaty_lazyloader' , array(
    'title'      => __( 'LazyLoader on/off', 'wpf-flaty' ),
	'panel' => 'wpf_flaty_theme_option',
) );


$wp_customize->add_setting(
    'flaty_lazyloader_activation',
    array(
        'default' => 'enable',
		'sanitize_callback' => 'wpf_flaty_sanitize_choices',
    )
);
 
$wp_customize->add_control(
    'flaty_lazyloader_activation',
    array(
        'type' => 'radio',
        'section' => 'wpf_flaty_lazyloader',
		'settings'   => 'flaty_lazyloader_activation',
        'choices' => array(
            'enable' => __( 'Enable', 'wpf-flaty' ),
            'disable' => __( 'Disable', 'wpf-flaty' ),
        ),
    )
);



//////////////////////////////
// Off-canvas settings
///////////////////////////////



$wp_customize->add_section( 'wpf_flaty_off_canvas' , array(
    'title'      => __( 'Off-canvas Menu on/off', 'wpf-flaty' ),
	'panel' => 'wpf_flaty_theme_option',
) );


$wp_customize->add_setting(
    'flaty_off_canvas_activation',
    array(
        'default' => 'enable',
		'sanitize_callback' => 'wpf_flaty_sanitize_choices',
    )
);
 
$wp_customize->add_control(
    'flaty_off_canvas_activation',
    array(
        'type' => 'radio',
        'section' => 'wpf_flaty_off_canvas',
		'settings'   => 'flaty_off_canvas_activation',
        'choices' => array(
            'enable' => __( 'Enable', 'wpf-flaty' ),
            'disable' => __( 'Disable', 'wpf-flaty' ),
        ),
    )
);


/////////////////////////////////
// Full content or excerpt
//////////////////////////////////



$wp_customize->add_section( 'wpf_flaty_content_or_excerpt' , array(
  'title'      => __( 'Excerpt or Full Content', 'wpf-flaty' ),
  'panel' => 'wpf_flaty_theme_option',
) );


$wp_customize->add_setting(
    'wpf_flaty_excerpt_content_settings',
    array(
        'default' => 'excerpt',
        'sanitize_callback' => 'wpf_flaty_sanitize_choices',
    )
);
 
$wp_customize->add_control(
    'wpf_flaty_excerpt_content_settings',
    array(
        'type' => 'radio',
        'label' => __( 'Display excerpt or full content.', 'wpf-flaty' ),
        'section' => 'wpf_flaty_content_or_excerpt',
        'settings'   => 'wpf_flaty_excerpt_content_settings',
        'choices' => array(
            'excerpt' => __( 'Excerpt', 'wpf-flaty' ),
            'fcontent' => __( 'Full content', 'wpf-flaty' ),
        ),
    )
);


/////////////////////////
// Theme Color section
/////////////////////////

$wp_customize->add_section( 'wpf_flaty_theme_color_section' , array(
    'title'      => __( 'Theme Colors', 'wpf-flaty' ),
	'panel' => 'wpf_flaty_theme_option',
) );


// theme primary color settings
$wp_customize->add_setting( 'wpf_flaty_theme_color' , array(
	'default'     => '#e95644',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpf_flaty_theme_color', array(
	'label'        => __( 'Theme primary color', 'wpf-flaty' ),
	'section'    => 'wpf_flaty_theme_color_section',
	'settings'   => 'wpf_flaty_theme_color',
) ) );


// Sidebar bg color settings
$wp_customize->add_setting( 'wpf_flaty_sidebar_color' , array(
	'default'     => '#ECF0F1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpf_flaty_sidebar_color', array(
	'label'        => __( 'Sidebar bg color', 'wpf-flaty' ),
	'section'    => 'wpf_flaty_theme_color_section',
	'settings'   => 'wpf_flaty_sidebar_color',
) ) );


// Header bg color settings
$wp_customize->add_setting( 'wpf_flaty_header_color' , array(
	'default'     => '#332E34',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpf_flaty_header_color', array(
	'label'        => __( 'Header/Off Canvas bg Color', 'wpf-flaty' ),
	'section'    => 'wpf_flaty_theme_color_section',
	'settings'   => 'wpf_flaty_header_color',
) ) );

// Footer text/social color settings
$wp_customize->add_setting( 'wpf_flaty_footer_color' , array(
	'default'     => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpf_flaty_footer_color', array(
	'label'        => __( 'Footer text/social icon color', 'wpf-flaty' ),
	'section'    => 'wpf_flaty_theme_color_section',
	'settings'   => 'wpf_flaty_footer_color',
) ) );


////////////////////////////
// Featured Posts settings
///////////////////////////

$wp_customize->add_section('wpf_flaty_featured_section', array(
  'title'    => __('Featured Posts Setting', 'wpf-flaty'),
  'panel' => 'wpf_flaty_theme_option',
));

// enable/disable featured post area

$wp_customize->add_setting(
    'wpf_flaty_featured_area',
    array(
        'default' => 'disable',
		'sanitize_callback' => 'wpf_flaty_sanitize_choices',
    )
);
 
$wp_customize->add_control(
    'wpf_flaty_featured_area',
    array(
        'label'        => __( 'Enable/Disable featured post section.', 'wpf-flaty' ),
		'type' => 'radio',
        'section' => 'wpf_flaty_featured_section',
		'settings'   => 'wpf_flaty_featured_area',
        'choices' => array(
            'enable' => __( 'Enable', 'wpf-flaty' ),
            'disable' => __( 'Disable', 'wpf-flaty' ),
        ),
    )
);

// featured posts category name

$wp_customize->add_setting('wpf_flaty_featured_posts_cat', array(
  'default'        => 'uncategorized',
  'sanitize_callback' => 'wpf_flaty_sanitize_choices',
));

$wp_customize->add_control( 'wpf_flaty_featured_posts_cat', array(
  'label'        => __( 'Select featured posts category.', 'wpf-flaty' ),
  'settings' => 'wpf_flaty_featured_posts_cat',
  'section'  => 'wpf_flaty_featured_section',
  'type'     => 'select',
  'choices'  => wpf_flaty_get_categories_select(),
));

// featured posts amount/count

$wp_customize->add_setting( 'wpf_flaty_featured_posts_count' , array(
	'default'        => 12,
	'sanitize_callback' => 'sanitize_text_field',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wpf_flaty_featured_posts_count', array(
	'label'        => __( 'Show Posts. Default is 12.', 'wpf-flaty' ),
	'section'    => 'wpf_flaty_featured_section',
	'settings'   => 'wpf_flaty_featured_posts_count',
) ) );

/////////////////////////////////
// Sidebar Settings
//////////////////////////////////



$wp_customize->add_section( 'wpf_flaty_sidebar' , array(
    'title'      => __( 'Choose Sidebar', 'wpf-flaty' ),
	'panel' => 'wpf_flaty_theme_option',
) );


$wp_customize->add_setting(
    'wpf_flaty_sidebar_settings',
    array(
        'default' => 'right',
		'sanitize_callback' => 'wpf_flaty_sanitize_choices',
    )
);
 
$wp_customize->add_control(
    'wpf_flaty_sidebar_settings',
    array(
        'type' => 'radio',
        'label' => __( 'Select sidebar.', 'wpf-flaty' ),
        'section' => 'wpf_flaty_sidebar',
		'settings'   => 'wpf_flaty_sidebar_settings',
        'choices' => array(
            'left' => __( 'Left', 'wpf-flaty' ),
            'right' => __( 'Right', 'wpf-flaty' ),
        ),
    )
);

////////////////////
// Footer section
////////////////////

$wp_customize->add_section( 'wpf_flaty_footer_section' , array(
    'title'      => __( 'Footer Setting', 'wpf-flaty' ),
	'panel' => 'wpf_flaty_theme_option',
) );


// footer text 

$wp_customize->add_setting( 'wpf_flaty_footer_text' , array(
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wpf_flaty_footer_text', array(
	'label'        => __( 'Put your footer text here.', 'wpf-flaty' ),
	'section'    => 'wpf_flaty_footer_section',
	'settings'   => 'wpf_flaty_footer_text',
) ) );



// footer Social links


// facebook
$wp_customize->add_setting( 'wpf_flaty_footer_social_facebook' , array(
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wpf_flaty_footer_social_facebook', array(
	'label'        => __( 'Facebook url', 'wpf-flaty' ),
	'section'    => 'wpf_flaty_footer_section',
	'settings'   => 'wpf_flaty_footer_social_facebook',
) ) );

//twitter
$wp_customize->add_setting( 'wpf_flaty_footer_social_twitter' , array(
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wpf_flaty_footer_social_twitter', array(
	'label'        => __( 'Twitter url', 'wpf-flaty' ),
	'section'    => 'wpf_flaty_footer_section',
	'settings'   => 'wpf_flaty_footer_social_twitter',
) ) );


//google+ 
$wp_customize->add_setting( 'wpf_flaty_footer_social_googleplus' , array(
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wpf_flaty_footer_social_googleplus', array(
	'label'        => __( 'Google+ url', 'wpf-flaty' ),
	'section'    => 'wpf_flaty_footer_section',
	'settings'   => 'wpf_flaty_footer_social_googleplus',
) ) );

//linkedin 
$wp_customize->add_setting( 'wpf_flaty_footer_social_linkin' , array(
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wpf_flaty_footer_social_linkin', array(
	'label'        => __( 'LinkedIn url', 'wpf-flaty' ),
	'section'    => 'wpf_flaty_footer_section',
	'settings'   => 'wpf_flaty_footer_social_linkin',
) ) );


//youtube 
$wp_customize->add_setting( 'wpf_flaty_footer_social_youtube' , array(
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wpf_flaty_footer_social_youtube', array(
	'label'        => __( 'Youtube url', 'wpf-flaty' ),
	'section'    => 'wpf_flaty_footer_section',
	'settings'   => 'wpf_flaty_footer_social_youtube',
) ) );

   
}

add_action( 'customize_register', 'wpf_flaty_customizer_register' );



////////////////////////////////////
// sanitizing radio values
////////////////////////////////////

function wpf_flaty_sanitize_choices( $input, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}






function wpf_flaty_theme_color_css()
{
	
	//theme color scheme
	$flaty_theme_color = '<style type="text/css">	
		
		/*sidebar background color*/
		.sidebar{background-color: '.esc_html( get_theme_mod('wpf_flaty_sidebar_color', '#ECF0F1') ).';}
		
		/*header  toogle-bar background color*/
		.header,
		.toogle-bar,
		.sb-icon-search,
		#mobile-menu
			{
				background-color: '.esc_html( get_theme_mod('wpf_flaty_header_color', '#332E34') ).';
			}
			
		/*footer color*/
		.designer p,
		.footer-copyright,
		.footer-social a span
		{
			color: '.esc_html( get_theme_mod('wpf_flaty_footer_color', '#ffffff') ).';
		}
		
		.img-banner-content>h2{
			color: #'.get_header_textcolor().' !important;
		}
		
		/*theme color*/
		.mobile-menu .expand:hover,.mobile-menu li a:hover,
		.mobile-menu li a:focus,
		a:hover,
		a:focus,
		.post-meta>div>a,
		.share-btn,
		.details-article a,
		.details-article p a,
		.author-social a:hover,
		.mobile-menu li.active>a,
		.start-pagination-area .pagination > li > a,
		.start-pagination-area .pagination > li > span,
		.sidebar-widget ul li a:hover,
		.sidebar-widget ul li a:focus,
		.cat-item,
		.tag-cloud a:hover,
		.comments-pagination ul li a:hover,
		.reply-btn:hover,
		.error-area h2,
		.designer p a,
		.sticky .post-title a,
		.start-pagination-area .pagination ul li a,
		.comment-text ul li a,
		#cancel-comment-reply-link,
		.singlepost-pagination > span{ 
			
		  color: '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).';
		}

		.social a:hover,
		.social a:focus{
			
		  border-color: '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).'; 
		} 

		.read-more-btn {
			
		  border: 1px solid '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).' !important;
		  color: '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).';
		  
		}

		.read-more-btn:hover,
		.read-more-btn:focus,
		.post-link,
		.footer-social a:hover,
		.footer-social a:focus,
		.details-article table tbody tr:hover,
		.breadcrumb-area .breadcrumb,
		.sb-search.sb-search-open .sb-icon-search,
		.no-js .sb-search .sb-icon-search,
		.scrollToTop,
		.start-pagination-area .pagination ul li a:hover,
		.start-pagination-area .pagination ul li span:hover,
		.start-pagination-area .pagination ul li span,
		.author-bio .media .media-left > img,
		.comments-pagination-area span.current{
			
		  background-color: '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).';
		  
		}

		.post-title a {
			
		  background-image: linear-gradient(to right, rgba(255, 255, 255, 0) 50%, '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).' 50%);
		  
		}

		blockquote,
		.details-article blockquote {
			
		  background-color: '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).';
		  border-color: '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).';  
		  
		}

		.start-pagination-area .pagination > li > a:hover, 
		.start-pagination-area .pagination > li > span:hover,
		.nav-growpop .icon-wrap {
			
		  background-color: '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).';
		  border: 1px solid '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).';
		  
		}

		.details-article a:hover{
			
		  border-bottom: 1px dotted '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).';
		  
		}

		.fakeloader,
		.author-comments{
			
		  background-color: '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).' !important;
		  
		}

		.form-submit input:hover {
			
		  color: '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).';
		  border-color: '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).';  
		  
		}

		.nav-growpop div {
			
		  border: 1px solid '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).';
		  
		}

		.blog-detals .post-head{
			
		  background-color: '.esc_html( get_theme_mod('wpf_flaty_theme_color', '#e95644') ).';
		  
		}	
	
	</style>';
	
	echo $flaty_theme_color;
}
add_action( 'wp_head', 'wpf_flaty_theme_color_css');



?>