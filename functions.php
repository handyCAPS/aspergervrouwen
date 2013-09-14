<?php

	define('THEMEPATH', get_stylesheet_directory_uri());

	register_nav_menus( array (
			'Main_Menu' => 'Hoofd Menu',
			'Footer_Menu' => 'Footer Menu',
			'Mobile_Footer_Menu' => 'Mobile Footer Menu',
		) );

	// Enable admin to set custom background images in 'appearance > background'
	add_custom_background();


	// Create custom sizes
	// This is then pulled through to your theme useing the_post_thumbnail('custombig');
	if ( function_exists( 'add_image_size' ) ) {
		add_image_size('customsmall', 300, 200, true); //narrow column
		add_image_size('custombig', 400, 500, true); //wide column
	}


	//custom excerpt length
	function wpfme_custom_excerpt_length( $length ) {
		//the amount of words to return
		return 56;
	}
	add_filter( 'excerpt_length', 'wpfme_custom_excerpt_length');


	// Call Googles HTML5 Shim, but only for users on old versions of IE
	function wpfme_IEhtml5_shim () {
		global $is_IE;
		if ($is_IE)
		echo '<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->';
	}
	add_action('wp_head', 'wpfme_IEhtml5_shim');


	// Remove the version number of WP
	// Warning - this info is also available in the readme.html file in your root directory - delete this file!
	remove_action('wp_head', 'wp_generator');


	// Obscure login screen error messages
	function wpfme_login_obscure(){ return '<strong>Sorry</strong>: Dat zijn niet de goede inloggegevens !';}
	add_filter( 'login_errors', 'wpfme_login_obscure' );
	
	function add_thumbnails() {
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size( 150 );
	}

	add_action( "after_setup_theme", 'add_thumbnails' );

	function asvr_sidebars() {
		$args = array(
		'id'            => 'sidebar1',
		'name'          => __( 'Sidebar 1', 'aspergervrouwen' ),
		'description'   => __( 'De eerste sidebar', 'aspergervrouwen' ),
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		);
		register_sidebar( $args );
	}

	add_action( 'widgets_init', "asvr_sidebars" );

