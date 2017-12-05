<?php
/**
 * Empty cart page
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices();

?>

<div class="cart text-center">
	<div class="cartBody cartEmpty">
		<i class="fa fa-shopping-cart fa5x"></i>
		<p class="text-center"><?php _e( 'Your cart is currently empty.', 'coeur' ) ?></p>
		<?php do_action( 'woocommerce_cart_is_empty' ); ?>
	</div>
	<div class="cartFooter returnShop">
		<a class="button" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>"><?php _e( 'Return To Shop', 'coeur' ) ?></a>
	</div>
</div>
