<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Enqueue frontend assets
add_action( 'wp_enqueue_scripts', 'sta_dbs_enqueue_frontend_assets' );
function sta_dbs_enqueue_frontend_assets() {
    wp_enqueue_style( 'sta-frontend-style', STA_DBS_PLUGIN_URL . 'assets/css/frontend-style.css' );
    wp_enqueue_script( 'sta-frontend-script', STA_DBS_PLUGIN_URL . 'assets/js/frontend-script.js', array( 'jquery', 'jquery-ui-datepicker' ), null, true );

    // Datepicker initialization script
    wp_add_inline_script( 'sta-frontend-script', 'jQuery(document).ready(function($){ $(".datepicker").datepicker(); });' );
}

// Enqueue admin assets
add_action( 'admin_enqueue_scripts', 'sta_dbs_enqueue_admin_assets' );
function sta_dbs_enqueue_admin_assets() {
    wp_enqueue_style( 'sta-admin-style', STA_DBS_PLUGIN_URL . 'assets/css/admin-style.css' );
    wp_enqueue_script( 'sta-admin-script', STA_DBS_PLUGIN_URL . 'assets/js/admin-script.js', array( 'jquery' ), null, true );
}
