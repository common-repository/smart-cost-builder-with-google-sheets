<?php

function WPBOX_SGSC_scripts() {
global $post;

      //=========
if( has_shortcode( $post->post_content, 'sgsc-calc') ) {
$vx = rand(1,9999);

//------------ PLAYER-----
wp_enqueue_script( 'script_sgsc_p1', plugins_url('/JS/sgsc-cuid.js?v='.$vx, __FILE__), array('jquery'),'2.1',1 ); 


wp_enqueue_style( 'style_sgsc_p1', plugins_url('/JS/sgsc-frame.css?v='.$vx, __FILE__) );
//--------------------        


    }

      //=========
 }


function get_sgsc_db($no){

global $wpdb;
$table_name = $wpdb->prefix . "sgsc_records";

$condition = $no;
$row = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $table_name WHERE NO = %d", $condition ) );
$row = json_decode(json_encode($row), true);
// echo "<pre>";print_r($row);echo"</pre>";

if(sizeof($row)>0){$row = $row[0];}else{return "-";}
$calc_id = $row["calc_id"];
$sheet_id = $row["g_sheet"];

if($sheet_id == ''){return 'gsheet_error';}

return $calc_id;
}

// get_sgsc_db(1);
 

 function WPBOX_SGSC_initiate($atts, $content = null){

    extract(shortcode_atts(array(
      "id" => '1',    
   ), $atts));
   
$calc_id = get_sgsc_db($id);
//============= PLAYER CONTENT ==========
ob_start();
include __DIR__.'/lib/index.php';
$output = ob_get_clean();
return $output;
//====================================== 


   
}

?>