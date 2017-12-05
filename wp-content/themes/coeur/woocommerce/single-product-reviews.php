<?php
/**
 * Display single product reviews (comments)
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.2
 */
global $product;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! comments_open() ) {
	return;
}

?>

<div id="reviews" class="row">
	<div class="col-md-6">
		<div id="comments">
				<?php if ( have_comments() ) : ?>

					<ol class="commentlist">
						<?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'callback' => 'woocommerce_comments' ) ) ); ?>
					</ol>

					<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
						echo '<nav class="woocommerce-pagination">';
						paginate_comments_links( apply_filters( 'woocommerce_comment_pagination_args', array(
							'prev_text' => '&larr;',
							'next_text' => '&rarr;',
							'type'      => 'list',
						) ) );
						echo '</nav>';
					endif; ?>

				<?php else : ?>

					<p class="woocommerce-noreviews"><?php _e( 'There are no reviews yet.', 'coeur' ); ?></p>

				<?php endif; ?>
			</div>
		</div>
	<div class="col-md-6">
		<?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->id ) ) : ?>

			<div id="review_form_wrapper">
				<div id="review_form">
					<?php
						$commenter = wp_get_current_commenter();

						$comment_form = array(
							'title_reply'          => '',
							'title_reply_to'       => __( 'Leave a Reply to %s', 'coeur' ),
							'comment_notes_before' => '',
							'comment_notes_after'  => '',
							'fields'               => array(
								'author' => '<input class="form-control" placeholder="' . __( 'Name', 'coeur' ) . '*" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" aria-required="true" /></p>',
								'email'  => '<input class="form-control" placeholder="' . __( 'Email', 'coeur' ) . '*" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-required="true" /></p>',
							),
							'label_submit'  => __( 'Submit', 'coeur' ),
							'logged_in_as'  => '',
							'comment_field' => ''
						);

						if ( $account_page_url = wc_get_page_permalink( 'myaccount' ) ) {
							$comment_form['must_log_in'] = '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a review.', 'coeur' ), esc_url( $account_page_url ) ) . '</p>';
						}

						if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' ) {
							$comment_form['comment_field'] = '<p class="comment-form-rating"><label for="rating">' . __( 'Your Rating', 'coeur' ) .'</label><select name="rating" id="rating">
								<option value="">' . __( 'Rate&hellip;', 'coeur' ) . '</option>
								<option value="5">' . __( 'Perfect', 'coeur' ) . '</option>
								<option value="4">' . __( 'Good', 'coeur' ) . '</option>
								<option value="3">' . __( 'Average', 'coeur' ) . '</option>
								<option value="2">' . __( 'Not that bad', 'coeur' ) . '</option>
								<option value="1">' . __( 'Very Poor', 'coeur' ) . '</option>
							</select></p>';
						}

						$comment_form['comment_field'] .= '<p class="comment-form-comment"><textarea class="form-control" placeholder="' . __( 'Your Review', 'coeur' ) . '" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';

						comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
					?>
				</div>
			</div>

		<?php else : ?>

			<p class="woocommerce-verification-required"><?php _e( 'Only logged in customers who have purchased this product may leave a review.', 'coeur' ); ?></p>

		<?php endif; ?>
	</div>
</div>
