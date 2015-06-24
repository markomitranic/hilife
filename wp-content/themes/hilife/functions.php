<?php


    $_SESSION["page"];
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

	  if (function_exists('register_nav_menus')) {
        register_nav_menus(
                array(
                    'header_nav' => 'Header Navigation Meny',
                    'footer_nav' => 'Footer Meny'  )
        );
    }

	register_sidebar( array(
    'name' => 'JetPack in page',
    'id' => 'jetpack-in-page',
    'before_widget' => '<div id="jetpack">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
) );

	add_theme_support( 'post-thumbnails' ); 

    function my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) .'" >
    <div>
    <input type="text" class="search-query" placeholder="Pretraga..." value="' . get_search_query() . '" name="s" id="s" />
    </div>
    </form>';

    return $form;
    }
    
    add_filter( 'get_search_form', 'my_search_form' );
    add_image_size( 'pretraga', 260, 190, true ); 
    add_image_size( 'footer', 64, 64, true ); 

?>