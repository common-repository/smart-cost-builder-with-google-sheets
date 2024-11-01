<?php 

function enqueue_sgsc_scripts() {
    wp_enqueue_script('sgsc-ajax-script', plugins_url('/dashboard/js/sgsc-ajax.js', __FILE__), array('jquery'), null, true);
    wp_localize_script('sgsc-ajax-script', 'sgsc_ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('sgsc_ajax_nonce')
    ));
}



function AJAX_UPDATER_SGSC_RECORDS() {

    if(get_sgsc_admin_records() > get_sgsc_l() ){return 0;}

    // Verify nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'sgsc_ajax_nonce')) {
        wp_send_json_error('Invalid nonce');
        return;
    }

    // Get the data from the AJAX request
    $data = array(
        'calc_id'        => sanitize_text_field($_POST['id']),
        'title'        => sanitize_text_field($_POST['title']),
        'date_created' => sanitize_text_field($_POST['date_created']),
        'g_sheet'      => sanitize_text_field($_POST['g_sheet']),
        'input_tab'    => sanitize_text_field($_POST['input_tab']),
        'result_tab'   => sanitize_text_field($_POST['result_tab'])
    );


// Remove keys with empty values
    $data = array_filter($data, function($value) {
        return !empty($value);
    });

    // print_r($data);


    $result = SGSC_RECORDS_UPDATE($data);
    wp_send_json_success($result);
}



add_action('wp_ajax_sgsc_update', 'AJAX_UPDATER_SGSC_RECORDS');
?>