<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<div class="sta-dbs-booking-form">
    <label for="start_date"><?php esc_html_e( 'Start Date', 'sta-dbs' ); ?></label>
    <input type="text" id="start_date" name="start_date" class="datepicker" required>

    <label for="end_date"><?php esc_html_e( 'End Date', 'sta-dbs' ); ?></label>
    <input type="text" id="end_date" name="end_date" class="datepicker" required>

    <button type="button" class="sta-dbs-calculate-price"><?php esc_html_e( 'Calculate Price', 'sta-dbs' ); ?></button>
</div>
