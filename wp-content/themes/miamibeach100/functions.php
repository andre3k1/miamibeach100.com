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
  wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/plugins/jquery.easing.min.js', array( 'jquery' ),'', true );

  wp_enqueue_script( 'redcountdown', get_template_directory_uri() . '/js/plugins/jquery.redcountdown.js', array( 'jquery' ),'', true );
  wp_enqueue_script( 'excanvas', get_template_directory_uri() . '/js/3rdparty/excanvas.js', array( 'jquery' ),'', true );
  wp_enqueue_script( 'debounce', get_template_directory_uri() . '/js/3rdparty/jquery.knob.min.js', array( 'jquery' ),'', true );
  wp_enqueue_script( 'knob', get_template_directory_uri() . '/js/3rdparty/jquery.ba-throttle-debounce.min.js', array( 'jquery' ),'', true );


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

// Hook into the 'init' action
add_action( 'init', 'custom_post_type');

// Register Custom Post Type
function custom_post_type() {

  $labels = array(
    'name'                => _x( 'Offers', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Offer', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Offers', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
    'all_items'           => __( 'All Items', 'text_domain' ),
    'view_item'           => __( 'View Item', 'text_domain' ),
    'add_new_item'        => __( 'Add New Item', 'text_domain' ),
    'add_new'             => __( 'Add New', 'text_domain' ),
    'edit_item'           => __( 'Edit Item', 'text_domain' ),
    'update_item'         => __( 'Update Item', 'text_domain' ),
    'search_items'        => __( 'Search Item', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
  );
  $args = array(
    'label'               => __( 'offers', 'text_domain' ),
    'description'         => __( 'CPT for Offers page', 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => false,
    'show_in_admin_bar'   => false,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-megaphone',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'offers', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );

// Removes "Add to Google Calendar" button
add_action('tribe_events_single_event_before_the_content', 'tribe_remove_single_event_links');
function tribe_remove_single_event_links () {
        remove_action( 'tribe_events_single_event_after_the_content', array( 'TribeiCal', 'single_event_links' ) );
}

?>
