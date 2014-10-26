<?php

// Register Styles
function deep_styles() 
{
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'main-styles', get_template_directory_uri().'/css/style.css' );
  wp_enqueue_style( 'plugin-styles', get_template_directory_uri().'/css/plugins.css' );
  wp_enqueue_style( 'flexslider', get_template_directory_uri().'/js/plugins/flex/flexslider.css' );
  wp_enqueue_style( 'nivo-css', get_template_directory_uri().'/js/plugins/nivo/nivo-lightbox.css' );
  wp_enqueue_style( 'nivo-theme', get_template_directory_uri().'/js/plugins/nivo/themes/default/default.css' );
}

add_action( 'wp_enqueue_scripts', 'deep_styles' );

// Register Scripts
function deep_scripts()  
{
  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', false);
  wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/plugins/flex/jquery.flexslider-min.js', array( 'jquery' ),'', true );
  wp_enqueue_script( 'stellar', get_template_directory_uri() . '/js/plugins/jquery.stellar.js', array( 'jquery' ),'', true );
  wp_enqueue_script( 'nivo', get_template_directory_uri() . '/js/plugins/nivo/nivo-lightbox.min.js', array( 'jquery' ),'', true );
  wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/js/plugins/jquery.fitvids.js', array( 'jquery' ),'', true );
  wp_enqueue_script( 'viewportchecker', get_template_directory_uri() . '/js/plugins/viewportchecker.js', array( 'jquery' ),'', true );
  wp_enqueue_script( 'prefixfree', get_template_directory_uri() . '/js/plugins/prefixfree.min.js', array( 'jquery' ),'', true );
  wp_enqueue_script( 'animations', get_template_directory_uri() . '/js/plugins/animations.js', array( 'jquery' ),'', true );


if ( is_page('about')) {
  wp_enqueue_script( 'jscrollpane', get_template_directory_uri() . '/js/plugins/jquery.jscrollpane.min.js','','', true );
  wp_enqueue_script( 'mwheelintent', get_template_directory_uri() . '/js/plugins/mwheelIntent.js','','', true );
  wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/js/plugins/jquery.mousewheel.min.js','','', true );
}

if ( is_page('home')) {
  wp_enqueue_script( 'twitter', get_template_directory_uri() . '/js/plugins/twitter.js','','', true );
}

  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/min/main.min.js', array( 'jquery' ), null, true );

}
add_action( 'wp_enqueue_scripts', 'deep_scripts' );

//Menu
function register_menu() {
  register_nav_menu('primary-menu', __('Primary Menu'));
}
add_action('init', 'register_menu');

//Hide Admin Bar
add_filter('show_admin_bar', '__return_false');

//Add Thumbnail Support
add_theme_support( 'post-thumbnails' ); 

//Register Image Sizes
add_image_size( 'history-scroller-thumb', 509, 372, true );
add_image_size( 'blog-thumb', 816, 460, true );
add_image_size( 'sponsor-banner', 944, 203, true );
add_image_size( 'sponsor-sqaure', 303, 201, true );

?>