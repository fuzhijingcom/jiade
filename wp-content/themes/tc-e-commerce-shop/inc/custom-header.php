<?php
/**
 * @package TC E-Commerce Shop
 * @subpackage tc-e-commerce-shop
 * @since tc-e-commerce-shop 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses tc_e_commerce_shop_header_style()
*/

function tc_e_commerce_shop_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'tc_e_commerce_shop_custom_header_args', array(

		//'default-image'          => get_template_directory_uri().'/images/banner_bg.jpg',

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'tc_e_commerce_shop_header_style',
	) ) );

}

add_action( 'after_setup_theme', 'tc_e_commerce_shop_custom_header_setup' );

if ( ! function_exists( 'tc_e_commerce_shop_header_style' ) ) :

/**
 * Styles the header image and text displayed on the blog
 *
 * @see tc_e_commerce_shop_custom_header_setup().
 */

function tc_e_commerce_shop_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() ) :
	?>
		#header{
			background: url(<?php echo esc_url(get_header_image()); ?>) no-repeat;
			background-position: center top;
		}
	<?php endif; ?>	
	</style>
	<?php
}

endif; // tc_e_commerce_shop_header_style

add_action( 'admin_head', 'tc_e_commerce_shop_admin_header_css' );
function tc_e_commerce_shop_admin_header_css(){ ?>
	<style>pre{white-space: pre-wrap;}</style><?php
}
