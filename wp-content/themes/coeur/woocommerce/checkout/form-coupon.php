<?php
/**
 * Checkout coupon form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! WC()->cart->coupons_enabled() ) {
	return;
}

$info_message = apply_filters( 'woocommerce_checkout_coupon_message', __( 'Have a coupon?', 'coeur' ) . ' <a href="#" class="showcoupon">' . __( 'Click here to enter your code', 'coeur' ) . '</a>' );
wc_print_notice( $info_message, 'notice' );
?>

<div class="couponBox checkout_coupon" style="display:none">
	<form method="post">

		<p class="form-row form-row-first">
			<input type="text" name="coupon_code" class="form-control" placeholder="<?php esc_attr_e( 'Coupon code', 'coeur' ); ?>" id="coupon_code" value="" />
		</p>

		<p class="form-row form-row-last">
			<input type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply Coupon', 'coeur' ); ?>" />
		</p>

		<div class="clear"></div>
	</form>
</div>

