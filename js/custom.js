/**	
	* Template Name: WpF Flaty
	* Version: 1.0
	* Theme Scripts
	* Author: WpFreeware
	* Author URI: http://wpfreeware.com/

	Custom JS
	
	1. OFF CANVASS MENU
	2. SEARCH BAR
	3. PUSH DOWN CONTENT AREA FOR HEADER SECTION
	4. SHARE BUTTON TOGGLE
	5. SCROLL TOP BUTTON
	6. Related item slider	
	7. LazyLoader	
	
	
**/

jQuery(function($){


  /* ----------------------------------------------------------- */
  /*  1. Off Canvass MENU
  /* ----------------------------------------------------------- */

    jQuery("#mobile-menu").mobileMenu({
        MenuWidth: 300,
        SlideSpeed : 300,
        WindowsMaxWidth : 767,
        PagePush : true,
        FromLeft : true,
        Overlay : true,
        CollapseMenu : true,
        ClassName : "mobile-menu"
    });   


	/* ----------------------------------------------------------- */
	/*  2. Search Bar
	/* ----------------------------------------------------------- */

	new UISearch( document.getElementById( 'sb-search' ) );


    /* ----------------------------------------------------------- */
	/*  3. Pushdown content area if header image not exist
	/* ----------------------------------------------------------- */

	if (jQuery('#page #feature-post').length > 0){  // return's true if element is present
   		jQuery('#main-content').addClass('courseArchive_pushup');
	}
	else {
	 	jQuery('#main-content').addClass('courseArchive_pushdown');
	}     
	 


	/* ----------------------------------------------------------- */
	/*  5. SCROLL TOP BUTTON
	/* ----------------------------------------------------------- */


	//Check to see if the window is top if not then display button

	  jQuery(window).scroll(function(){
	    if ($(this).scrollTop() > 300) {
	      jQuery('.scrollToTop').fadeIn();
	    } else {
	      jQuery('.scrollToTop').fadeOut();
	    }
	  });
	   
	  //Click event to scroll to top

	  jQuery('.scrollToTop').click(function(){
	    jQuery('html, body').animate({scrollTop : 0},800);
	    return false;
	  });


	/* ----------------------------------------------------------- */
	/*  6. Related item slider
	/* ----------------------------------------------------------- */

	jQuery('.popular-item').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slide: 'li',		  
		  slidesToShow: 3,
		  slidesToScroll: 3,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
		});

	 

	/* ----------------------------------------------------------- */
	/*  7. LazyLoader 
	/* ----------------------------------------------------------- */ 
	
	jQuery(".fakeloader").fakeLoader({
        timeToHide:1200,
        bgColor:"#2ecc71",
        spinner:"spinner1"
    });

    
	
	
});