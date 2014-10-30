<div class="wrap">
    <h2>WP csv export Settings</h2>
    <form method="post" action="options.php"> 
        <?php @settings_fields('wp_ccsve-group'); ?>
        <?php @do_settings_fields('wp_ccsve-group'); ?>

        <?php do_settings_sections('wp_ccsve_template'); ?>

        <?php @submit_button(); ?>
        
        <!--<a class="ccsve_button" href="options-general.php?page=wp_ccsve_template&export=yes">Export</a> -->
    </form>
      <form method="post" action="options-general.php?page=wp_ccsve_template&export=yes">   
      <p>
        <?php prasnala_selected_option_list_page(); ?>
      </p>
      <p class="submit">
        <input type="submit" value="Export" class="button button-primary" id="submit" name="submit" />
      </p>
    </form>
</div>


<?php
       function prasnala_selected_option_list_page(){
        	//print_r($_POST['option_page']); die();
            $custom_post_types=array('tribe_events'=>'tribe_events', 'tribe_venue'=>'tribe_venue', 'tribe_organizer'=>'tribe_organizer');
            $ccsve_custom_fields =get_option('ccsve_custom_fields');
            


            $post_type_with_selected_keys=array();
            foreach($custom_post_types as $ccsve_post_type){
                if(!isset ($ccsve_custom_fields[$ccsve_post_type]['selectinput'])|| !is_array($ccsve_custom_fields[$ccsve_post_type]['selectinput'])){
                      $ccsve_custom_fields[$ccsve_post_type]['selectinput']=array();
                }
                        $post_type_with_selected_keys[$ccsve_post_type]=$ccsve_custom_fields[$ccsve_post_type]['selectinput'];
            } // END public function settings_field_input_text($args)
               //print_r($post_type_with_selected_keys);
               echo '<select id="selected_fields_multiselect" multiple="multiple" size="'.$ccsve_meta_keys_num.'" name="ccsve_custom_fields[selectinput][]">';
               foreach($post_type_with_selected_keys as $post_type=>$meta_keys){
                   foreach($meta_keys as $meta_key){
                        echo '\n\t\<option selected="selected"  value="'.$post_type.'.'.$meta_key .'">'.$post_type.'.'.$meta_key.'</option>';
                   }
               }
               echo '<select/>';
            }


      function prasnala_select_option_lists()
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
 
        }
        