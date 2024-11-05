<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class WC_Product_Rental extends WC_Product_Simple {
    public function __construct() {
        add_action( 'init', array( $this, 'register_product_type' ) );
    }

    public function register_product_type() {
        class_alias( 'WC_Product_Simple', 'WC_Product_Rental' );
        add_filter( 'product_type_selector', array( $this, 'add_rental_product_type' ) );
    }

    public function add_rental_product_type( $types ) {
        $types['rental'] = __( 'Rental Product', 'sta-dbs' );
        return $types;
    }
}
