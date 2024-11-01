<?php

function WPBOX_SGSC_home(){include 'Pages/activation.php';}
function WPBOX_SGSC_subscription() {include 'Pages/subscription.php';}
function WPBOX_SGSC_support() {include 'Pages/support.php';}

function WPBOX_SGSC_settings() {include 'dashboard/welcome.php';}
function WPBOX_SGSC_all_calc() {include 'dashboard/calc-list.php';}


function WPBOX_SGSC_CSSJS() {
    $vx = '1.1';//time();       

    wp_enqueue_script('sgsc-js-4', plugins_url('feedback.js?v='.$vx, __FILE__), array(), '1.0', false); // The 'true' parameter enqueues it in footer

  if( isset($_GET['page']) && strpos($_GET['page'], 'WPBOX_SGSC') !== false ){}else{return 0;} //WPBOX_SGSC
   
    wp_enqueue_script( 'jquery-ui-tooltip' );
    
    wp_enqueue_style( 'sgsc-css-1', plugins_url('dashboard/css/style.css?v='.$vx, __FILE__) );
    wp_enqueue_style( 'sgsc-css-2', plugins_url('dashboard/css/main-area.css?v='.$vx, __FILE__) );
    wp_enqueue_style( 'sgsc-css-3', plugins_url('dashboard/css/popup-menu.css?v='.$vx, __FILE__) );
    wp_enqueue_style( 'sgsc-css-4', plugins_url('dashboard/css/side-menu.css?v='.$vx, __FILE__) );
    wp_enqueue_style( 'sgsc-css-5', plugins_url('dashboard/css/icons.css?v='.$vx, __FILE__) );
    wp_enqueue_style( 'sgsc-css-6', plugins_url('dashboard/css/sgsc-modal.css?v='.$vx, __FILE__) );
  
 
    wp_enqueue_script('sgsc-js-3', plugins_url('admin.js?v='.$vx, __FILE__), array(), '1.0', false); // The 'true' parameter enqueues it in footer



}


function get_sgsc_admin_db($calc_id){
// echo "CALC_ID:".$calc_id;

global $wpdb;
$table_name = $wpdb->prefix . "sgsc_records";

$condition = $calc_id;
$row = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $table_name WHERE calc_id = %s", $condition ) );
$row = json_decode(json_encode($row), true);
// echo "<pre>";print_r($row);echo"</pre>";

if(sizeof($row)>0){$row = $row[0];}else{return "-";}
$short_code = $row["NO"];
return $short_code;
}



function get_sgsc_admin_records(){
    global $wpdb;
    $table_name = $wpdb->prefix . "sgsc_records";
    $count = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $table_name" ) );
    return floatval($count);
}

function get_sgsc_l(){
    global $SGSC_PLUG_WEB;
    $v= strlen("i") ;
    return floatval($v);
}

function SGSC_REMOVE_CALCULATOR($calc_id){

$main = __DIR__.'/dashboard/save/jsons/'.$calc_id.'-main.php';
$app = __DIR__.'/dashboard/save/jsons/'.$calc_id.'-app.php';
$seq = __DIR__.'/dashboard/save/jsons/'.$calc_id.'-sequence.php';
$form = __DIR__.'/dashboard/save/forms/'.$calc_id.'.php';

if (file_exists($main)) { unlink($main); }
if (file_exists($app)) { unlink($app); }
if (file_exists($seq)) { unlink($seq); }
if (file_exists($form)) { unlink($form); }
      
}


function WPBOX_SGSC_menu() {
    // Main menu
   add_menu_page(
        'Smart Cost Builder With Google Sheets Lite', // Page title
        'Smart Cost Builder With Google Sheets Lite', // Menu title
        'manage_options',                  // Capability
        'MAINMENUWPBOX_SGSC',              // Menu slug
        'WPBOX_SGSC_home',                 // Function to display the page
        'dashicons-calculator'          // Placeholder icon
    );

    // Submenu items
    add_submenu_page(
        'MAINMENUWPBOX_SGSC',
        'Create New',
        'Create New',
        'manage_options',
        'WPBOX_SGSC_settings',
        'WPBOX_SGSC_settings'
    );

    add_submenu_page(
        'MAINMENUWPBOX_SGSC',
        'All Calculators',
        'All Calculators',
        'manage_options',
        'WPBOX_SGSC_all_calc',
        'WPBOX_SGSC_all_calc'
    );


    add_submenu_page(
        'MAINMENUWPBOX_SGSC',
        'Subscription',
        'Subscription',
        'manage_options',
        'WPBOX_SGSC_subscription',
        'WPBOX_SGSC_subscription'
    );


    

    add_submenu_page(
        'MAINMENUWPBOX_SGSC',
        'Support',
        'Support',
        'manage_options',
        'SupportWPBOX_SGSC',
        'WPBOX_SGSC_support'
    );
}
add_action('admin_menu', 'WPBOX_SGSC_menu');


?>