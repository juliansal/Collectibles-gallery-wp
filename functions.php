<?php
	
	function wpc_theme_styles() {
		wp_enqueue_style('roboto_font', esc_url('https://fonts.googleapis.com/css?family=Roboto'));
		wp_enqueue_style('main_styles', get_stylesheet_uri());
	}
	add_action('wp_enqueue_scripts', 'wpc_theme_styles');
		
	add_theme_support( 'menus' );
	function register_theme_menus() {
		register_nav_menus( array( 'primary-menu'	=> 'Primary Menu' ) );
	}
	add_action( 'init', 'register_theme_menus' );
	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 270 );
?>