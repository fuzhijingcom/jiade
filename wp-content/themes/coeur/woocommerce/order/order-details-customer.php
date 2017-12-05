<?php
/**
 * Order Customer Details
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<header><h2 class="h-header"><?php _e( 'Customer Details', 'coeur' ); ?></h2></header>

<div class="cart">
	<div class="cartBody">
		<div class="col-md-6">
			<h3 class="h-header"><?php _e( 'Contact Informations', 'coeur' ); ?></h3>

			<table class="lightTable centered">
				<?php if ( $order->customer_note ) : ?>
					<tr>
						<th><?php _e( 'Note:', 'coeur' ); ?></th>
						<td><?php echo wptexturize( $order->customer_note ); ?></td>
					</tr>
				<?php endif; ?>

				<?php if ( $order->billing_email ) : ?>
					<tr>
						<th><?php _e( 'Email:', 'coeur' ); ?></th>
						<td><?php echo esc_html( $order->billing_email ); ?></td>
					</tr>
				<?php endif; ?>

				<?php if ( $order->billing_phone ) : ?>
					<tr>
						<th><?php _e( 'Telephone:', 'coeur' ); ?></th>
						<td><?php echo esc_html( $order->billing_phone ); ?></td>
					</tr>
				<?php endif; ?>

				<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>
			</table>
		</div>
		<div class="col-md-6">
			<h3 class="h-header"><?php _e( 'Billing Address', 'coeur' ); ?></h3>

			<address>
				<?php echo ( $address = $order->get_formatted_billing_address() ) ? $address : __( 'N/A', 'coeur' ); ?>
			</address>

			<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() ) : ?>

			<header class="title">
				<h3><?php _e( 'Shipping Address', 'coeur' ); ?></h3>
			</header>
			<address>
				<?php echo ( $address = $order->get_formatted_shipping_address() ) ? $address : __( 'N/A', 'coeur' ); ?>
			</address>

			<?php endif; ?>
		</div>
	</div>
</div>