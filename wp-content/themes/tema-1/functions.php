<?php

// Load Theme CSS
function theme_styles() {	

	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/assets/css/main.css' );	
	wp_enqueue_style( 'font-awesome_css', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'ie8_css', get_template_directory_uri() . '/assets/css/ie8.css' );
	wp_enqueue_style( 'ie9_css', get_template_directory_uri() . '/assets/css/ie9.css' );
	wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );	

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Load Theme JS
function theme_js() {
	
	wp_enqueue_script( 'jquery-min_js', get_template_directory_uri() . 'assets/js/jquery.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . 'assets/js/main.js', array('jquery'), '', true );
	wp_enqueue_script( 'skel-min_js', get_template_directory_uri() . 'assets/js/skel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'util_js', get_template_directory_uri() . 'assets/js/util.js', array('jquery'), '', true );
	wp_enqueue_script( 'html5schiv_js', get_template_directory_uri() . 'assets/js/ie/html5shiv.js', array('jquery'), '', true );
	wp_enqueue_script( 'respond_js', get_template_directory_uri() . 'assets/js/ie/respond.min.js', array('jquery'), '', true );
	
	}
add_action( 'wp_enqueue_scripts', 'theme_js' );


?>