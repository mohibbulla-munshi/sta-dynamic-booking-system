<?php
/**
 * Plugin Name: STA Dynamic Booking System
 * Description: A WooCommerce-based booking system for product rentals with dynamic date-based pricing.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://yourwebsite.com
 * Text Domain: sta-dbs
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define constants
define( 'STA_DBS_VERSION', '1.0.0' );
define( 'STA_DBS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'STA_DBS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Load plugin dependencies only after WooCommerce is loaded
add_action( 'plugins_loaded', 'sta_dbs_init', 10 );
function sta_dbs_init() {
    // Check if WooCommerce is active
    if ( ! class_exists( 'WooCommerce' ) ) {
        add_action( 'admin_notices', 'sta_dbs_woocommerce_missing_notice' );
        return;
    }

    // Load text domain for translations
    load_plugin_textdomain( 'sta-dbs', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

    // Include necessary files
    require_once STA_DBS_PLUGIN_DIR . 'inc/functions-template-loader.php';
    require_once STA_DBS_PLUGIN_DIR . 'classes/class-wc-product-rental.php';
    require_once STA_DBS_PLUGIN_DIR . 'inc/functions-booking-helpers.php';
    require_once STA_DBS_PLUGIN_DIR . 'inc/functions-assets.php';

    // Initialize the custom product type
    new WC_Product_Rental();
}

// WooCommerce missing notice
function sta_dbs_woocommerce_missing_notice() {
    ?>
    <div class="notice notice-error">
        <p><?php _e( 'STA Dynamic Booking System requires WooCommerce to be installed and active.', 'sta-dbs' ); ?></p>
    </div>
    <?php
}
