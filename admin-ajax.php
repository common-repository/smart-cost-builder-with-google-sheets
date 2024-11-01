<?php
add_action('wp_ajax_save_sgsc_config', 'save_sgsc_config');
add_action('wp_ajax_nopriv_save_sgsc_config', 'save_sgsc_config');

function save_sgsc_config() {
        $_POST = json_decode(json_encode($_POST), true);

    $html_config = isset($_POST['html_config']) ? $_POST['html_config'] : '';
    $_POST['html_config'] = stripslashes($html_config);

    $_POST['json_config'] = stripslashes($_POST['json_config']);
    $_POST['json_sequence'] = stripslashes($_POST['json_sequence']);
    $_POST['json_appearance'] = stripslashes($_POST['json_appearance']);

   

    $path = plugin_dir_path(__FILE__) . "dashboard/save/index.php";
    include $path;

    // Return a response
    wp_send_json_success('Data saved successfully!');
}

// save_sgsc_config();

 ?>