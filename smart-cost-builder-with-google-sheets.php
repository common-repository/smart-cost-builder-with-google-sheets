<?php
/**
 * Hayat Developers
 *
 * @package     Smart Cost Builder With Google Sheets Lite
 * @author      Hayat Developers
 * @copyright   2024 Smart Cost Builder With Google Sheets Lite
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Smart Cost Builder With Google Sheets Lite
 
 * Description: Create custom calculators effortlessly with a user-friendly drag-and-drop interface, integrating seamlessly with Google Sheets for powerful backend calculations using text fields, checkboxes, select options etc. The Smart Cost Builder With Google Sheets offers a wide range of result elements, including images, tables, charts, read-only inputs, and dynamic paragraphs. These elements can display content fetched directly from Google Sheets, providing a dynamic and interactive experience for your users.

 * Version:     1.1
 * Author:      Hayat Developers | Smart Cost Builder With Google Sheets Lite - Made for WordPress
 * Author URI:  https://wppluginbox.com
 * Text Domain: Smart Cost Builder With Google Sheets Lite
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

$SGSC_PLUG_WEB = $_SERVER['HTTP_HOST'];
$web_url =  $_SERVER['REQUEST_URI'];

include __DIR__.'/db/db_table.php';
include __DIR__.'/custom-functions.php';
include __DIR__.'/functions-admin.php';
include __DIR__.'/functions-wp.php';
include __DIR__.'/function-ajax.php';
include __DIR__.'/admin-ajax.php';

$short_code = 'sgsc-calc';
$wpbox_upload_dir = wp_upload_dir(); 
$wpbox_save_dir = $wpbox_upload_dir['basedir'] . '/wpbox_sgsc_save';


register_activation_hook(__FILE__, 'sgsc_save_directory');
register_activation_hook(__File__, 'SGSC_RECORDS_createDB');
// register_deactivation_hook(__FILE__, 'SGSC_RECORDS_DELDB');


add_action('admin_menu', 'WPBOX_SGSC_menu');
add_action( 'admin_enqueue_scripts', 'WPBOX_SGSC_CSSJS' ,111);
add_action('wp_enqueue_scripts', 'WPBOX_SGSC_scripts',111);
add_action('admin_enqueue_scripts', 'enqueue_sgsc_scripts');


$filter_w = 'wp-admin';
if(strpos($web_url, $filter_w) !== false){return 0;} else {
add_shortcode($short_code, 'WPBOX_SGSC_initiate');
}

?>