<?php 

function WPBOX_SGSC_menu_icons() {
    ?>
    <style type="text/css">
        /* Icon for "Create New" submenu */
        #toplevel_page_MAINMENUWPBOX_SGSC .wp-submenu li:nth-child(1) a:before {
            content: "\f132"; /* dashicons-plus-alt */
            font-family: "Dashicons";
            margin-right: 5px;
            font-size: 12px;
        }

        #toplevel_page_MAINMENUWPBOX_SGSC .wp-submenu li:nth-child(2) a:before {
            content: "\f132"; /* dashicons-plus-alt */
            font-family: "Dashicons";
            margin-right: 5px;
            font-size: 12px;
        }

        /* Icon for "All Calculators" submenu */
        #toplevel_page_MAINMENUWPBOX_SGSC .wp-submenu li:nth-child(3) a:before {
            content: "\f111"; /* dashicons-chart-bar */
            font-family: "Dashicons";
            margin-right: 5px;
            font-size: 12px;
        }

        /* Icon for "Support" submenu */
        #toplevel_page_MAINMENUWPBOX_SGSC .wp-submenu li:nth-child(4) a:before {
            content: "\f223"; /* dashicons-sos */
            font-family: "Dashicons";
            margin-right: 5px;
            font-size: 12px;
        }
    </style>
    <?php
}

?>