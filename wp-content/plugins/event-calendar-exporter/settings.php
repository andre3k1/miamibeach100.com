<?php
if(!class_exists('WP_CCSVE_Settings'))
{
	class WP_CCSVE_Settings
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// register actions
            add_action('admin_init', array(&$this, 'admin_init'));
            
            
            add_action('admin_menu', array(&$this, 'add_menu'));
		} // END public function __construct
		
        /**
         * hook into WP's admin_init action hook
         */
        public function admin_init()
        {
        	register_setting('wp_ccsve-group', 'ccsve_post_type');
        	register_setting('wp_ccsve-group', 'ccsve_custom_fields');
                
        	add_settings_section(
        	    'wp_ccsve_template-section', 
        	    'wp CSV Export Settings',
        	    array(&$this, 'settings_section_wp_ccsve_template'), 
        	    'wp_ccsve_template'
        	);
       /*
            add_settings_field(
                'ccsve_post_type', 
                'Custom Post Type to Export', 
                array(&$this, 'settings_field_select_post_type'), 
                'wp_ccsve_template',
                'wp_ccsve_template-section'
                
            );
        * 
        */
            add_settings_field(
                'ccsve_custom_fields', 
                '', 
                array(&$this, 'settings_field_select_custom_fields'), 
                'wp_ccsve_template', 
                'wp_ccsve_template-section'
            );
            //print_r($_POST['option_page']); die();

            /*
                add_settings_field(
                'prasnala_selected_fields',
                'All Selected field',
                array(&$this, 'prasnala_selected_option_list_page'),
                'wp_ccsve_template',
                'wp_ccsve_template-section'
            );
            */
            
           
        } // END public static function activate


        public function prasnala_selected_option_list_page(){
        	//print_r($_POST['option_page']); die();
            $custom_post_types=array('tribe_events'=>'tribe_events', 'tribe_venue'=>'tribe_venue', 'tribe_organizer'=>'tribe_organizer');
            $ccsve_custom_fields =get_option('ccsve_custom_fields');
                    
            
            $post_type_with_selected_keys=array();
            foreach($custom_post_types as $ccsve_post_type){          
                        $post_type_with_selected_keys[$ccsve_post_type]=$ccsve_custom_fields[$ccsve_post_type]['selectinput'];           
            } // END public function settings_field_input_text($args)
               //print_r($post_type_with_selected_keys);
            echo $ccsve_post_type;
               echo '<select id="selected_fields_multiselect" multiple="multiple" size="'.$ccsve_meta_keys_num.'" name="ccsve_custom_fields[selectinput][]">';
               foreach($post_type_with_selected_keys as $post_type=>$meta_keys){
                   foreach($meta_keys as $meta_key){
                        echo '\n\t\<option selected="selected"  value="'.$post_type.'.'.$meta_key .'">'.$post_type.'.'.$meta_key.'</option>';
                   }
               }
            }
        
        

        public function settings_section_wp_ccsve_template()
        {
            
            echo 'These are the settings for the Custom CSV Export Plugin.';
        }
        
        /**
         * This function provides text inputs for settings fields
         */
        public function settings_field_select_post_type()
        {
        
        	//$args=array('public'   => true);
            // Get the field name from the $args array
            //$items = get_post_types($args);
            //print_r($items);
            $items=array('tribe_events', 'tribe_venue', 'tribe_organizer');
            // Get the value of this setting
            $options = get_option('ccsve_post_type');
            foreach ($items as $item) {
             	$checked = in_array($item, $options) ? ' checked="checked" ' : '';
             	echo '<input type="checkbox" id="post_type_'.$item.'" name="ccsve_post_type[]" value="'.$item.'" '.$checked.'" />';
             	echo '<label for=post_type'.$item.'> '.$item.'</label>';
             	echo ' <br />';
            }
        } // END public function settings_field_input_text($args)
        
        public function settings_field_select_custom_fields()
        {


            $custom_post_types=array('tribe_events'=>'tribe_events', 'tribe_venue'=>'tribe_venue', 'tribe_organizer'=>'tribe_organizer');
            foreach($custom_post_types as $ccsve_post_type){
                    //$ccsve_post_type = get_option('ccsve_post_type');
                        $meta_keys = get_post_meta_keys($ccsve_post_type);
                        //print_r($ccsve_post_type);
                    $ccsve_custom_fields =get_option('ccsve_custom_fields');
                    if(!isset($ccsve_custom_fields)){
                        $ccsve_custom_fields=array($ccsve_post_type=>array());
                    }
                    //print_r($meta_keys);
                    $extra_meta_key=array('post_title','post_content','guid');
                    $meta_keys=array_merge($extra_meta_key, $meta_keys );
                    //print_r("test");print_r($meta_keys); die();
                    $ccsve_meta_keys_num = count($meta_keys);
                    echo $ccsve_post_type;                    echo ' post type';
                    echo '<select id="'.$ccsve_post_type.'_multiselect" multiple="multiple" size="'.$ccsve_meta_keys_num.'" name="ccsve_custom_fields['.$ccsve_post_type.'][selectinput][]">';
                    foreach ($meta_keys as $meta_key) {
                        if(!isset ($ccsve_custom_fields[$ccsve_post_type]['selectinput'])|| !is_array($ccsve_custom_fields[$ccsve_post_type]['selectinput'])){
                            $ccsve_custom_fields[$ccsve_post_type]['selectinput']=array();
                        }
                        if (in_array($meta_key, $ccsve_custom_fields[$ccsve_post_type]['selectinput'])){
                         echo '\n\t<option selected="selected" value="'. $meta_key . '">'.$meta_key.'</option>';
                        } else {
                         echo '\n\t\<option value="'.$meta_key .'">'.$meta_key.'</option>'; }
                } // END public function settings_field_input_text($args)
                 echo '</select>';
                 
            }
            //print_r($ccsve_custom_fields);
        /**
         * add a menu
         */		
        }

        public function add_menu()
        {
            // Add a page to manage this plugin's settings
        	add_options_page(
        	    'CCSVE Settings', 
        	    'wp CSV',
        	    'manage_options', 
        	    'wp_ccsve_template', 
        	    array(&$this, 'plugin_settings_page')
        	);
        } // END public function add_menu()
    
        /**
         * Menu Callback
         */		
        public function plugin_settings_page()
        {
        	if(!current_user_can('manage_options'))
        	{
        		wp_die(__('You do not have sufficient permissions to access this page.'));
        	}
	
        	// Render the settings template
        	include(sprintf("%s/templates/settings.php", dirname(__FILE__)));
        } // END public function plugin_settings_page()
    } // END class wp_ccsve_template_Settings
} // END if(!class_exists('wp_ccsve_template_Settings'))

function generate_post_meta_keys($post_type){
global $wpdb;
    $query = "
        SELECT DISTINCT($wpdb->postmeta.meta_key) 
        FROM $wpdb->posts 
        LEFT JOIN $wpdb->postmeta 
        ON $wpdb->posts.ID = $wpdb->postmeta.post_id 
        WHERE $wpdb->posts.post_type = '%s' 
        AND $wpdb->postmeta.meta_key != ''
            /*
        AND $wpdb->postmeta.meta_key NOT RegExp '(^[_0-9].+$)'
        AND $wpdb->postmeta.meta_key NOT RegExp '(^[0-9]+$)'
            */
    ";
    $meta_keys = $wpdb->get_col($wpdb->prepare($query, $post_type));
    set_transient($post_type.'post_meta_keys', $meta_keys, 60*60*24); # 1 Day Expiration
    return $meta_keys;
}

function get_post_meta_keys($post_type){
    //$cache = get_transient($post_type.'post_meta_keys');
    $meta_keys = $cache ? $cache : generate_post_meta_keys($post_type);
    return $meta_keys;
}

function ccsve_checkboxes_fix($input) {

   $options = get_option('ccsve_custom_fields');
   $merged = $options;
   $merged[] = $input;
}