<?php 
/**
* WooCommerce
* @package Coeur
* @author Titouanc
* @since 3.0.3
*/
get_header(); ?>

<div class="container">

	<div class="row">

		<main class="col-md-12 col-xs-12">

			<div class="shop animated fadeInUp">
				<?php woocommerce_content(); ?>
			</div>
	
		<?php coeur_woocommerce_pagination(); ?>

		</main> <!-- blog-main -->

	</div> <!-- row -->
</div> <!-- container -->

<?php get_footer(); ?>