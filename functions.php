<?php

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

     // Add featured image
    add_theme_support( 'post-thumbnails' );
    // removes the size attributes
    function remove_img_attr ($html) {
        return preg_replace('/(width|height)="\d+"\s/', "", $html);
    }

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
                'main_nav' => 'Main navigation menu'
                )
        );
    }

    // Register Custom Navigation Walker
    require_once('wp_bootstrap_navwalker.php');
?>
