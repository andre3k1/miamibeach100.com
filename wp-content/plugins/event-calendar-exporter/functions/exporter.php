<?
function ccsve_export(){
	$ccsve_export_check = isset($_REQUEST['export']) ? $_REQUEST['export'] : '';
        //print_r($_REQUEST['ccsve_custom_fields']['selectinput']); die();
	if ($ccsve_export_check == 'yes') {
                $selecteinput=$_REQUEST['ccsve_custom_fields']['selectinput'];
                //print_r($selecteinput); die();
                $cpt_infos=array();
                $cpt_infos_for_query=array();
                $order=0;
                foreach($selecteinput as $input){
                    $info=explode(".", $input);
                    $cpt_infos_for_query[$info[0]][]=array('value'=>$info[1], 'order'=>$order) ;
                    $cpt_infos[]=array('post_type'=>$info[0],'value'=>$info[1], 'order'=>$order);
                    $order++;
                }

                $header_labels= get_header_field($cpt_infos);
                if(!is_array($header_labels)){
                    $header_labels=array();
                }
                //print_r($header_labels); die();
                //print_r($header_labels);
                $events_all_metas=prasnala_get_events();
                if(!is_array($events_all_metas)){
                    $events_all_metas=array();
                }
                $events_with_selected_fields=prasnala_get_events_with_selected_fields($header_labels, $events_all_metas);
                //print_r($events_with_selected_fields);
                ccsve_generate($header_labels, $events_with_selected_fields);
	}
}

function prasnala_get_events_with_selected_fields($header_labels, $events_all_metas ){
    $events_with_selected_fields=array();
    $index=0;
    foreach($events_all_metas as $event_info){
        foreach($event_info as $key=>$field){
            if(in_array($key, $header_labels)){
                $events_with_selected_fields[$index][$key]=$field;
            }
        }
        $index++;
    }
        return $events_with_selected_fields;
}

function prasnala_get_events(){


    $args = array('post_type'=>'tribe_events', 'post_status'=>'publish', 'posts_per_page'=>-1 );
    $event_infos = get_posts( $args );
    //print_r($event_infos);
    $events_count=count($event_infos);
    foreach($event_infos as $event_info){
        /*
        $extra_meta_names=array("ID", 'post_title','post_content','guid');
        $extra_metas=array();
        foreach($extra_meta_names as $extra_meta_name){
            $extra_metas[$extra_meta_name][0]= $event_info->$extra_meta_name;
        }
        $event_metas = get_post_custom($event_info->ID);
        $event_all_metas=array_merge($extra_metas ,$event_metas);
        //print_r($event_all_metas); die();
         *
         */

        $event_all_metas=get_all_metas('tribe_events', $event_info->ID);

        //print_r($event_all_metas); die();
        $_EventVenueID=$event_all_metas['tribe_events._EventVenueID'][0];
        //print_r($_EventVenueID);
        $venue_all_metas=get_all_metas('tribe_venue',$_EventVenueID);
        $_EventOrganizerID=$event_all_metas['tribe_events._EventOrganizerID'][0];
        $organizer_all_metas=get_all_metas('tribe_organizer',$_EventOrganizerID);

        if(!is_array($event_all_metas)){
                    $event_all_metas=array();
        }
        if(!is_array($venue_all_metas)){
                    $venue_all_metas=array();
        }
        if(!is_array($organizer_all_metas)){
                    $organizer_all_metas=array();
        }


        $all_metas=array_merge($event_all_metas, $venue_all_metas, $organizer_all_metas);
        //print_r($all_metas); die();
        $events_all_metas[]=$all_metas;
    }
    return $events_all_metas;



    //print_r($events_info);
}

function get_all_metas($post_type, $post_id){
        //print_r($post_id); die();
        $post_info=get_post($post_id);
        $extra_meta_names=array("ID", 'post_title','post_content','guid');
        $extra_metas=array();
        foreach($extra_meta_names as $extra_meta_name){
            $extra_metas[$extra_meta_name][0]= $post_info->$extra_meta_name;
        }
        //print_r($post_info->ID); die();
        $post_metas = get_post_custom($post_info->ID);
        if($post_type=='tribe_events'){
            if(isset($post_metas['_EventStartDate'][0])){
                $date_time=explode(" ", $post_metas['_EventStartDate'][0]);
                //print_r($post_metas);
                //$start_index=array_search("_EventStartDate",array_keys($post_metas));
                //print_r($start_index);
                //$end_index=array_search("_EventEndDate",array_keys($post_metas));
                //print_r($end_index);
                //die();
                //$post_metas1=array_slice($post_metas, $start_index);
                //$post_metas1=array_slice($post_metas, $start_index);


                $date=$date_time[0];
                $time=$date_time[1];
                $time  = date("g:i a", strtotime($time));
                $post_metas['_EventStartDate'][0]=$date;
                $post_metas['_EventStartTime'][0]=$time;

                //print_r($date_time); die();
            }
            //print_r($post_metas); die();
            if(isset($post_metas['_EventEndDate'][0])){
                $date_time=explode(" ", $post_metas['_EventEndDate'][0]);
                //print_r($post_metas);
                //$start_index=array_search("_EventStartDate",array_keys($post_metas));
                //print_r($start_index);
                //$end_index=array_search("_EventEndDate",array_keys($post_metas));
                //print_r($end_index);
                //die();
                //$post_metas1=array_slice($post_metas, $start_index);
                //$post_metas1=array_slice($post_metas, $start_index);


                $date=$date_time[0];
                $time=$date_time[1];
                $time  = date("g:i a", strtotime($time));
                $post_metas['_EventEndDate'][0]=$date;
                $post_metas['_EventEndTime'][0]=$time;

                //print_r($date_time); die();
            }


        }
        
        if(!is_array($extra_metas)){
                    $extra_metas=array();
        }
        if(!is_array($post_metas)){
                    $post_metas=array();
        }
        $post_all_metas=array_merge($extra_metas ,$post_metas);
        $post_all_metas=prasnala_set_key_names_in_array($post_type, $post_all_metas);
        //print_r($post_all_metas);
        return $post_all_metas;
}

function prasnala_set_key_names_in_array($post_type, $post_all_metas){
    $new_array=array();
    foreach($post_all_metas as $key=>$value){
        $new_array[$post_type.'.'.$key]=$value;
    }
    return $new_array;
}



function get_header_field($cpt_infos){
    //print_r($cpt_infos);
    $header=array();
    foreach($cpt_infos as $info){
        $header_name=$info['post_type'].".".$info['value'];

        $header[]=$info['post_type'].".".$info['value'];
        if($header_name=='tribe_events._EventStartDate'){
            $header[]='tribe_events._EventStartTime';
        }
        if($header_name=='tribe_events._EventEndDate'){
            $header[]='tribe_events._EventEndTime';
        }
    }
    return $header;
}


function ccsve_generate($header_labels, $events_with_selected_fields){
    //print_r($events_with_selected_fields); die();
	// Get the custom post type that is being exported
	$ccsve_generate_post_type = 'tribe_events';
	// Get the custom fields (for the custom post type) that are being exported
	$ccsve_generate_custom_fields=array (
            'selectinput' => array ( 'post_title', 'post_content', 'EventOrigin', '_edit_last', '_edit_lock', '_EventShowMapLink', '_EventShowMap', '_EventStartDate', '_EventEndDate', ' _EventDuration', '_EventVenueID', '_EventCurrencySymbol', '_EventCost', '_EventURL', '_EventOrganizerID' )
            ) ;

        //print_r("test");
        //print_r($ccsve_generate_custom_fields);
	// Query the DB for all instances of the custom post type
	$ccsve_generate_query = get_posts(array('post_type' => $ccsve_generate_post_type, 'post_status' => 'publish', 'posts_per_page' => -1));
	// Count the number of instances of the custom post type
	$ccsve_count_posts = count($ccsve_generate_query);
	//print_r($ccsve_generate_query); die();
	// Build an array of the custom field values
	$ccsve_generate_value_arr = array();
        $ccsve_generate_value_arr1= $header_labels;
        $data_arr=array();
        $data_index=0;
        //print_r($ccsve_generate_value_arr1);
        foreach($events_with_selected_fields as $selected_fields_arr){
            $data_arr[$data_index]=array();
            $label_index=0;
            foreach($header_labels as $label){
                $value_set=false;
                foreach($selected_fields_arr as $key=>$value){
                    if($label==$key){
                        $value_set=true;
                        $data_arr[$data_index][$label_index]=$value[0];
                    }

                }
                if($value_set==false){
                    $data_arr[$data_index][$label_index]='';
                }
                //print_r($data_arr);
                $label_index++;
            }
            //print_r($data_arr);
            $data_index++;
        }
        $ccsve_generate_value_arr_new1=$data_arr;
        //print_r($ccsve_generate_value_arr_new1); die();
	$i = 0;
	foreach ($ccsve_generate_query as $post): setup_postdata($post);
			// get the custom field values for each instance of the custom post type
                        //print_r($post); die();
                     foreach($post as $key=>$value){
                         $extra_meta_keys[$key][0]=$value;
                     }
		     $ccsve_generate_post_values = get_post_custom($post->ID);
                     if(!is_array($ccsve_generate_post_values)){
                                $ccsve_generate_post_values=array();
                    }
                    if(!is_array($extra_meta_keys)){
                                $extra_meta_keys=array();
                    }
                     $ccsve_generate_post_values=array_merge($ccsve_generate_post_values, $extra_meta_keys);
                     //print_r($ccsve_generate_post_values); die();
		  foreach ($ccsve_generate_custom_fields['selectinput'] as $key) {
		  	 // check if each custom field value matches a custom field that is being exported
			  if (array_key_exists($key, $ccsve_generate_post_values)) {
			  	// if the the custom fields match, save them to the array of custom field values
				 $ccsve_generate_value_arr[$key][$i] = $ccsve_generate_post_values[$key]['0'];

			  }

		  }
		$i++;
	endforeach;

	// create a new array of values that reorganizes them in a new multidimensional array where each sub-array contains all of the values for one custom post instance
	$ccsve_generate_value_arr_new = array();

	foreach($ccsve_generate_value_arr as $value) {
		   $i = 0;
		   while ($i <= ($ccsve_count_posts-1)) {
			 $ccsve_generate_value_arr_new[$i][] = $value[$i];
			$i++;
		}
	}
        //print_r($ccsve_generate_value_arr_new); die();
        //print_r($ccsve_generate_value_arr); die();

	// build a filename based on the post type and the data/time
	$ccsve_generate_csv_filename = $ccsve_generate_post_type.'-'.date('Ymd_His').'-export.csv';

	//output the headers for the CSV file
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header('Content-Description: File Transfer');
	header("Content-type: text/csv");
	header("Content-Disposition: attachment; filename={$ccsve_generate_csv_filename}");
	header("Expires: 0");
	header("Pragma: public");

	//open the file stream
	$fh = @fopen( 'php://output', 'w' );

	$headerDisplayed = false;

	foreach ( $ccsve_generate_value_arr_new1 as $data ) {
    // Add a header row if it hasn't been added yet -- using custom field keys from first array
    //print_r($ccsve_generate_value_arr); die();
    if ( !$headerDisplayed ) {
        //fputcsv($fh, array_keys($ccsve_generate_value_arr));
        fputcsv($fh, $ccsve_generate_value_arr1);

        $headerDisplayed = true;
    }
 //print_r($data); die();
    // Put the data from the new multi-dimensional array into the stream
    fputcsv($fh, $data);
}
// Close the file stream
fclose($fh);
// Make sure nothing else is sent, our file is done
exit;
	}
