<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function sta_dbs_get_template_part( $template_name, $args = array() ) {
    if ( ! empty( $args ) && is_array( $args ) ) {
        extract( $args );
    }

    $template_path = STA_DBS_PLUGIN_DIR . 'templates/' . $template_name;
    if ( file_exists( $template_path ) ) {
        include $template_path;
    } else {
        echo '<p>' . esc_html( __( 'Template not found: ', 'sta-dbs' ) ) . esc_html( $template_name ) . '</p>';
    }
}
