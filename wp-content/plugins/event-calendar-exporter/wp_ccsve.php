<?php
/*
Plugin Name: WP CSV Export for The Events Calendar
Plugin URI: http://www.themebloc.com
Description: Allows you to export values of custom fields and info from The Events Calendar plugin into a CSV file.
Version: .3
Author: Charlie Craine
Author URI: http://www.crained.com
*/


if(!class_exists('WP_CCSVE'))
{
	class WP_CCSVE
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
        	// Initialize Settings
            require_once(sprintf("%s/settings.php", dirname(__FILE__)));
            require_once(sprintf("%s/functions/exporter.php", dirname(__FILE__)));
            add_action('init', 'ccsve_export');
            $WP_CCSVE_Settings = new WP_CCSVE_Settings();
        	
      	} // END public function __construct
	    
		/**
		 * Activate the plugin
		 */
		public static function activate()
		{
			// Do nothing
		} // END public static function activate
	
		/**
		 * Deactivate the plugin
		 */		
		public static function deactivate()
		{
			
		} 
	} 
} 

if(class_exists('WP_CCSVE'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('WP_CCSVE', 'activate'));
	register_deactivation_hook(__FILE__, array('WP_CCSVE', 'deactivate'));

	// instantiate the plugin class
	$wp_ccsve = new WP_CCSVE();
	
    // Add a link to the settings page onto the plugin page
    if(isset($wp_plugin_template))
    {
        // Add the settings link to the plugins page
        function plugin_settings_link($links)
        { 
            $settings_link = '<a href="options-general.php?page=wp_plugin_template">Settings</a>'; 
            array_unshift($links, $settings_link); 
            return $links; 
        }

        $plugin = plugin_basename(__FILE__); 
        add_filter("plugin_action_links_$plugin", 'plugin_settings_link');
    }
}

    function add_js_file(){
        // Register the script like this for a plugin:
            //print_r(plugins_url( 'ui.multiselect.js', __FILE__ ));


        wp_enqueue_script( 'jquery-ui-sortable' );
        wp_enqueue_script( 'jquery-ui-core' );
        wp_enqueue_script( 'jquery-ui-widget' );
        wp_enqueue_script( 'jquery-ui-tabs' );
        wp_enqueue_script( 'jquery-ui-draggable' );

        wp_register_script( 'custom-script', plugins_url( 'ui.multiselect.js', __FILE__ ), array( 'jquery', 'jquery-ui-widget') );
        wp_enqueue_script( 'custom-script' );
        wp_register_script( 'commonselect', plugins_url( 'ui.commonselect.js', __FILE__ ), array( 'jquery', 'jquery-ui-widget') );
        wp_enqueue_script( 'commonselect' );
        wp_register_style( 'custom-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/ui-lightness/jquery-ui.css', array(), '20120208', 'all' );
        wp_enqueue_style( 'custom-style' );
        wp_register_style( 'custom-style1', plugins_url( 'ui.multiselect.css', __FILE__ ), array(), '20120208', 'all' );
        wp_enqueue_style( 'custom-style1' );
        wp_register_style( 'common', plugins_url( 'common.css', __FILE__ ), array(), '20120208', 'all' );
        wp_enqueue_style( 'common' );




    }
    add_action( 'admin_enqueue_scripts', 'add_js_file' );

    function add_js_code(){
        $items=array('tribe_events'=>'tribe_events', 'tribe_venue'=>'tribe_venue', 'tribe_organizer'=>'tribe_organizer','selected_fields'=>'selected_fields');

        
        ?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
            
             <?php

                foreach($items as $item){?>
                        $("#<?php echo $item; ?>_multiselect").multiselect();
                <?php } ?>
});
    </script>

<style type="text/css">
    <?php
        foreach($items as $item){
              $classes[]='#'.$item."_multiselect";
        }
        $class_sent=implode(', ', $classes);
?>
    <?php echo $class_sent;?>, .common_option{
		width: 700px;
		height: 500px;
            }
        .settings_page_wp_ccsve_template .form-table th, .settings_page_wp_ccsve_template .form-table td{
                width: 0px;
                padding: 0px;
        }

</style>
<?php
    }

    add_action('admin_head','add_js_code');
