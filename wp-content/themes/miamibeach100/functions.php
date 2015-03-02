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

if ( is_page('about')) {
	wp_enqueue_script( 'jscrollpane', get_template_directory_uri() . '/js/plugins/jquery.jscrollpane.min.js','','', true );
	wp_enqueue_script( 'mwheelintent', get_template_directory_uri() . '/js/plugins/mwheelIntent.js','','', true );
	wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/js/plugins/jquery.mousewheel.min.js','','', true );
}

if ( is_page('home')) {
	wp_enqueue_script( 'redcountdown', get_template_directory_uri() . '/js/plugins/jquery.redcountdown.js', array( 'jquery' ),'', true );
	wp_enqueue_script( 'excanvas', get_template_directory_uri() . '/js/3rdparty/excanvas.js', array( 'jquery' ),'', true );
	wp_enqueue_script( 'debounce', get_template_directory_uri() . '/js/3rdparty/jquery.knob.min.js', array( 'jquery' ),'', true );
	wp_enqueue_script( 'knob', get_template_directory_uri() . '/js/3rdparty/jquery.ba-throttle-debounce.min.js', array( 'jquery' ),'', true );	
	wp_enqueue_script( 'twitter', get_template_directory_uri() . '/js/plugins/twitter.js','','', true );
}

if ( is_page('getting-there')) {
  wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCmug5RSg5k2jbZCEED1yyIc1x8DX3LbGU&sensor=false','','', true );
  wp_enqueue_script( 'map', get_template_directory_uri() . '/js/plugins/map.js', array( 'jquery' ),'', true );
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
add_image_size( 'sponsor-sqaure', 303, 201, true );
add_image_size( 'sponsor-1', 323, 235, true ); //top
add_image_size( 'sponsor-2', 323, 178, true ); //platinum
add_image_size( 'sponsor-3', 190, 117, true ); //gold, silver, bronze
add_image_size( 'sponsor-4', 156, 98, true ); //supporting & event partners


// Hook into the 'init' action
add_action( 'init', 'custom_post_type');

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                => _x( 'Pics', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Pics', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Pics', 'text_domain' ),
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
		'label'               => __( 'pics', 'text_domain' ),
		'description'         => __( 'CPT for pics page', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-gallery',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'pics', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );

// Removes "Add to Google Calendar" button
add_action('tribe_events_single_event_before_the_content', 'tribe_remove_single_event_links');
function tribe_remove_single_event_links () {
				remove_action( 'tribe_events_single_event_after_the_content', array( 'TribeiCal', 'single_event_links' ) );
}

//Image Sizing Script
add_action('delete_attachment', 'mr_delete_resized_images');
function mr_image_resize($url, $width=null, $height=null, $crop=true, $align='c', $retina=false) {
  global $wpdb;
  // Get common vars (func_get_args() only get specified values)
  $common = mr_common_info($url, $width, $height, $crop, $align, $retina);
  
  // Unpack vars if got an array...
  if (is_array($common)) extract($common);
  // ... Otherwise, return error, null or image
  else return $common;
  if (!file_exists($dest_file_name)) {
    // We only want to resize Media Library images, so we can be sure they get deleted correctly when appropriate.
    $query = $wpdb->prepare("SELECT * FROM $wpdb->posts WHERE guid='%s'", $url);
    $get_attachment = $wpdb->get_results($query);
    // Load WordPress Image Editor
    $editor = wp_get_image_editor($file_path);
    
    // Print possible wp error
    if (is_wp_error($editor)) {
      if (is_user_logged_in()) print_r($editor);
      return null;
    }
    if ($crop) {
      $src_x = $src_y = 0;
      $src_w = $orig_width;
      $src_h = $orig_height;
      $cmp_x = $orig_width / $dest_width;
      $cmp_y = $orig_height / $dest_height;
      // Calculate x or y coordinate and width or height of source
      if ($cmp_x > $cmp_y) {
        $src_w = round ($orig_width / $cmp_x * $cmp_y);
        $src_x = round (($orig_width - ($orig_width / $cmp_x * $cmp_y)) / 2);
      } else if ($cmp_y > $cmp_x) {
        $src_h = round ($orig_height / $cmp_y * $cmp_x);
        $src_y = round (($orig_height - ($orig_height / $cmp_y * $cmp_x)) / 2);
      }
      // Positional cropping. Uses code from timthumb.php under the GPL
      if ($align && $align != 'c') {
        if (strpos ($align, 't') !== false) {
          $src_y = 0;
        }
        if (strpos ($align, 'b') !== false) {
          $src_y = $orig_height - $src_h;
        }
        if (strpos ($align, 'l') !== false) {
          $src_x = 0;
        }
        if (strpos ($align, 'r') !== false) {
          $src_x = $orig_width - $src_w;
        }
      }
      
      // Crop image
      $editor->crop($src_x, $src_y, $src_w, $src_h, $dest_width, $dest_height);
    } else {
     
      // Just resize image
      $editor->resize($dest_width, $dest_height);
     
    }
    // Save image
    $saved = $editor->save($dest_file_name);
    
    // Print possible out of memory error
    if (is_wp_error($saved)) {
      if (is_user_logged_in()) {
        print_r($saved);
        unlink($dest_file_name);
      }
      return null;
    }
    // Add the resized dimensions and alignment to original image metadata, so the images
    // can be deleted when the original image is delete from the Media Library.
    if ($get_attachment) {
      $metadata = wp_get_attachment_metadata($get_attachment[0]->ID);
      if (isset($metadata['image_meta'])) {
        $md = $saved['width'] . 'x' . $saved['height'];
        if ($crop) $md .= ($align) ? "_${align}" : "_c";
        $metadata['image_meta']['resized_images'][] = $md;
        wp_update_attachment_metadata($get_attachment[0]->ID, $metadata);
      }
    }
    // Resized image url
    $resized_url = str_replace(basename($url), basename($saved['path']), $url);
  } else {
    // Resized image url
    $resized_url = str_replace(basename($url), basename($dest_file_name), $url);
  }
  // Return resized url
  return $resized_url;
}
// Returns common information shared by processing functions
function mr_common_info($url, $width, $height, $crop, $align, $retina) {
  // Return null if url empty
  if (empty($url)) {
    return is_user_logged_in() ? "image_not_specified" : null;
  }
  // Return if nocrop is set on query string
  if (preg_match('/(\?|&)nocrop/', $url)) {
    return $url;
  }
  
  // Get the image file path
  $urlinfo = parse_url($url);
  $wp_upload_dir = wp_upload_dir();
  
  if (preg_match('/\/[0-9]{4}\/[0-9]{2}\/.+$/', $urlinfo['path'], $matches)) {
    $file_path = $wp_upload_dir['basedir'] . $matches[0];
  } else {
    $pathinfo = parse_url( $url );
    $uploads_dir = is_multisite() ? '/files/' : '/wp-content/';
    $file_path = ABSPATH . str_replace(dirname($_SERVER['SCRIPT_NAME']) . '/', '', strstr($pathinfo['path'], $uploads_dir));
    $file_path = preg_replace('/(\/\/)/', '/', $file_path);
  }
  
  // Don't process a file that doesn't exist
  if (!file_exists($file_path)) {
    return null; // Degrade gracefully
  }
  
  // Get original image size
  $size = is_user_logged_in() ? getimagesize($file_path) : @getimagesize($file_path);
  // If no size data obtained, return error or null
  if (!$size) {
    return is_user_logged_in() ? "getimagesize_error_common" : null;
  }
  // Set original width and height
  list($orig_width, $orig_height, $orig_type) = $size;
  // Generate width or height if not provided
  if ($width && !$height) {
    $height = floor ($orig_height * ($width / $orig_width));
  } else if ($height && !$width) {
    $width = floor ($orig_width * ($height / $orig_height));
  } else if (!$width && !$height) {
    return $url; // Return original url if no width/height provided
  }
  // Allow for different retina sizes
  $retina = $retina ? ($retina === true ? 2 : $retina) : 1;
  // Destination width and height variables
  $dest_width = $width * $retina;
  $dest_height = $height * $retina;
  // Some additional info about the image
  $info = pathinfo($file_path);
  $dir = $info['dirname'];
  $ext = $info['extension'];
  $name = wp_basename($file_path, ".$ext");
  // Suffix applied to filename
  $suffix = "${dest_width}x${dest_height}";
  // Set align info on file
  if ($crop) {
    $suffix .= ($align) ? "_${align}" : "_c";
  }
  // Get the destination file name
  $dest_file_name = "${dir}/${name}-${suffix}.${ext}";
  
  // Return info
  return array(
    'dir' => $dir,
    'name' => $name,
    'ext' => $ext,
    'suffix' => $suffix,
    'orig_width' => $orig_width,
    'orig_height' => $orig_height,
    'orig_type' => $orig_type,
    'dest_width' => $dest_width,
    'dest_height' => $dest_height,
    'file_path' => $file_path,
    'dest_file_name' => $dest_file_name,
  );
}
// Deletes the resized images when the original image is deleted from the WordPress Media Library.
function mr_delete_resized_images($post_id) {
  // Get attachment image metadata
  $metadata = wp_get_attachment_metadata($post_id);
  
  // Return if no metadata is found
  if (!$metadata) return;
  // Return if we don't have the proper metadata
  if (!isset($metadata['file']) || !isset($metadata['image_meta']['resized_images'])) return;
  
  $wp_upload_dir = wp_upload_dir();
  $pathinfo = pathinfo($metadata['file']);
  $resized_images = $metadata['image_meta']['resized_images'];
  
  // Delete the resized images
  foreach ($resized_images as $dims) {
    // Get the resized images filename
    $file = $wp_upload_dir['basedir'] . '/' . $pathinfo['dirname'] . '/' . $pathinfo['filename'] . '-' . $dims . '.' . $pathinfo['extension'];
    // Delete the resized image (if it has not yet been deleted)
    @unlink($file);
  }
}

// Put this in your functions.php
function theme_thumb($url, $width, $height=0, $align='') {
  return mr_image_resize($url, $width, $height, true, $align, false);
}


?>