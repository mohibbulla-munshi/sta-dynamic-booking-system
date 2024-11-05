<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Example: Function to calculate rental price based on duration
function sta_dbs_calculate_rental_price( $base_price, $start_date, $end_date ) {
    $days = ( strtotime( $end_date ) - strtotime( $start_date ) ) / ( 60 * 60 * 24 ) + 1;
    $price = $base_price;

    // Apply pricing tiers
    if ( $days == 2 ) {
        $price = 0.9 * $base_price * $days;
    } elseif ( $days >= 3 && $days <= 5 ) {
        $price = 0.8 * $base_price * $days;
    } elseif ( $days >= 6 ) {
        $price = 0.7 * $base_price * $days;
    }

    return $price;
}
