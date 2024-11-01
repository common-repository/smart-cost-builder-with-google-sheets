<?php 

function SGSC_TRIM($array) {
    // Use array_map to apply trim function to all values in the array
    return array_map('trim', $array);
}

function GET_SGSC($calc_id) {
    global $wpdb;
    $table_name = $wpdb->prefix . "sgsc_records";
    $query = $wpdb->prepare("SELECT * FROM $table_name WHERE calc_id = %s", $calc_id);
    $rows = $wpdb->get_results($query);
    
    $rows_array = json_decode(json_encode($rows), true);
    
    return $rows_array;   
}


function GET_ALL_SGSC() {
    global $wpdb;
    $table_name = $wpdb->prefix . "sgsc_records";
    $query = $wpdb->prepare("SELECT * FROM $table_name");
    $rows = $wpdb->get_results($query);
    
    $rows_array = json_decode(json_encode($rows), true);
    
    return $rows_array;   
}



function SGSC_RECORDS_UPDATE($data){
    global $wpdb;
    $table_name = $wpdb->prefix . "sgsc_records";
    
    $updated = $wpdb->update(
        $table_name,
        $data,
        // array(
        //     "title"=>trim($data["title"]),
        //     "date_created"=>trim($data["date_created"]),
        //     "g_sheet"=>trim($data["g_sheet"]),
        //     "input_tab"=>trim($data["input_tab"]),
        //     "result_tab"=>trim($data["result_tab"])
        // ),
        array('calc_id' => $data["calc_id"]) // Where condition to identify the record
    );

   
    return $updated !== false ? 1 : 0;
}

// SGSC_RECORDS_UPDATE($data=[
// "calc_id"=> 'calc_xyz283829',
// "title"=> 'ABC 2',
// "date_created"=> '2 15052024',
// ]);


function SGSC_RECORDS_ADD($data){

if(get_sgsc_admin_records() > get_sgsc_l() ){return 0;}

 global $wpdb;
 $table_name = $wpdb->prefix . "sgsc_records";
  
  $data = SGSC_TRIM($data);
 $created = $wpdb->insert(
 	$table_name,
 	$data 

// array(

// "calc_id"=>trim($data["calc_id"]),
// "title"=>trim($data["title"]),
// "date_created"=>trim($data["date_created"]),
// "g_sheet"=>trim($data["g_sheet"]),
// "input_tab"=>trim($data["input_tab"]),
// "result_tab"=>trim($data["result_tab"])
// )

);


    return $created !== false ? 1 : 0;
}

// echo SGSC_RECORDS_ADD($data=[
// "calc_id"=> 'calc_xyz283829',
// "title"=> 'ABC',
// "date_created"=> '15052024',
// "g_sheet"=> 'https://docs.google.com/spreadsheets/d/1EGdgdnrnWkpZGl74bo0eRAYxujDXqyHPHrxE-O2A38Q/edit',
// "input_tab"=> "1LINK",
// "result_tab"=> "Result"
// ]);


function SGSC_RECORDS_DELETE($id) {
    global $wpdb;
    $table_name = $wpdb->prefix . "sgsc_records";
    
    // Ensure the ID is sanitized
    // $id = intval($id);
    
    // Delete the record
    $deleted = $wpdb->delete($table_name, array('calc_id' => $id));
    
    // Return 1 if the record was successfully deleted, otherwise 0
    return $deleted !== false ? 1 : 0;
}



function SGSC_RECORDS_createDB(){
global $wpdb;
$table_name = $wpdb->prefix . "sgsc_records";

if ( $wpdb->get_var("SHOW TABLES LIKE '{$table_name}'") != $table_name ) {

 $sql = "CREATE TABLE $table_name (
 
 NO INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`calc_id`VARCHAR(255) DEFAULT NULL,
`title`VARCHAR(255) DEFAULT NULL,
`date_created`VARCHAR(255) DEFAULT NULL,
`g_sheet`VARCHAR(255) DEFAULT NULL,
`input_tab`VARCHAR(255) DEFAULT NULL,
`result_tab`VARCHAR(255) DEFAULT NULL

 );";

 require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
 dbDelta($sql);

}


}



function SGSC_RECORDS_DELDB(){

global $wpdb;
 $table_name = $wpdb->prefix . "sgsc_records";
$sql = "DROP TABLE IF EXISTS $table_name";
$wpdb->query($sql);

}

function sgsc_save_directory() {
    // Get the path to the uploads directory
    $upload_dir = wp_upload_dir(); 
    $plugin_dir = $upload_dir['basedir'] . '/wpbox_sgsc_save';

    // Array of subfolders to create
    $subfolders = array('/jsons', '/forms');

    // Create the main plugin directory if it doesn't exist
    if (!file_exists($plugin_dir)) {
        if (!wp_mkdir_p($plugin_dir)) {
            // error_log("Failed to create main directory: " . $plugin_dir);
            return false;
        }
    }

    // Create each subfolder within the main directory
    foreach ($subfolders as $subfolder) {
        $subfolder_path = $plugin_dir . $subfolder;
        if (!file_exists($subfolder_path)) {
            if (!wp_mkdir_p($subfolder_path)) {
                // error_log("Failed to create subfolder: " . $subfolder_path);
                return false;
            }
        }
    }

    // If everything is created successfully
    // error_log("All directories created successfully: " . $plugin_dir);
    return $plugin_dir;
}


?>