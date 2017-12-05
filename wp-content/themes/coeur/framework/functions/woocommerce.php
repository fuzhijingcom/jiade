<?php
/**
* WooCommerce Functions
* @since Coeur 3.0.3
* @author Frenchtastic
*/

/**
* Checks if a woocommerce page is being displayed
* 
* @access public
* @since Coeur 3.0.3
* @return bool
*/
function coeur_is_woocommerce() {
	if ( class_exists( 'WooCommerce' ) ){

    if(  function_exists ( "is_woocommerce" ) && is_woocommerce()){
      return true;
    }
    $woocommerce_keys   =   array ( 
      "woocommerce_shop_page_id" ,
      "woocommerce_terms_page_id" ,
      "woocommerce_cart_page_id" ,
      "woocommerce_checkout_page_id" ,
      "woocommerce_pay_page_id" ,
      "woocommerce_thanks_page_id" ,
      "woocommerce_myaccount_page_id" ,
      "woocommerce_edit_address_page_id" ,
      "woocommerce_view_order_page_id" ,
      "woocommerce_change_password_page_id" ,
      "woocommerce_logout_page_id" ,
      "woocommerce_lost_password_page_id" 
    );
    foreach ( $woocommerce_keys as $wc_page_id ) {
      if ( get_the_ID () == get_option ( $wc_page_id , 0 ) ) {
        return true ;
      }
    }
    return false;

	} else {
		return false;
	}
}

if ( class_exists( 'WooCommerce' ) ):
  /**
  * Add opening div before shop item meta
  * @since coeur 3.1.4
  * @author Frenchtastic
  */
  function coeur_woocommerce_custom_meta_div_before() {
    echo '<div class="woocommerce-item-meta">';
  }
  add_action( 'woocommerce_shop_loop_item_title', 'coeur_woocommerce_custom_meta_div_before', 0 );

  /**
  * Add closing div after shop item meta
  * @since coeur 3.1.4
  * @author Frenchtastic
  */
  function coeur_woocommerce_custom_meta_div_after() {
    echo '</div>';
  }
  add_action( 'woocommerce_after_shop_loop_item', 'coeur_woocommerce_custom_meta_div_after', 0 );

  /**
  * Add custom desgin to login form
  * @since coeur 3.1.4
  * @author Frenchtastic
  */
  function coeur_woocommerce_custom_login() {
    $coeur_login_html = '<div class="userLogin text-center">';
    $coeur_login_html   .= '<span class="fa-stack fa-lg">';
    $coeur_login_html     .= '<i class="fa fa-circle fa-stack-2x"></i>';
    $coeur_login_html     .= '<i class="fa fa-user fa-stack-1x fa-inverse"></i>';
    $coeur_login_html   .= '</span>';
    $coeur_login_html   .= '<h3 class="loginText">'. __('Already a member?', 'coeur') .'</h3>';
    $coeur_login_html   .= '<p style="text-align: center !important;">'. __('Sign into your account', 'coeur') .'</p>';
    $coeur_login_html .= '</div>';

    echo $coeur_login_html;
  }
  add_action( 'woocommerce_login_form_start', 'coeur_woocommerce_custom_login', 0);

  /**
  * Add custom desgin to signup form
  * @since coeur 3.1.4
  * @author Frenchtastic
  */
  function coeur_woocommerce_custom_singup() {
    $coeur_login_html = '<div class="userLogin text-center">';
    $coeur_login_html   .= '<span class="fa-stack fa-lg">';
    $coeur_login_html     .= '<i class="fa fa-circle fa-stack-2x"></i>';
    $coeur_login_html     .= '<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>';
    $coeur_login_html   .= '</span>';
    $coeur_login_html   .= '<h3 class="loginText">'. __('Don\'t have an account?', 'coeur') .'</h3>';
    $coeur_login_html   .= '<p style="text-align: center !important;">'. __('Create one now', 'coeur') .'</p>';
    $coeur_login_html .= '</div>';

    echo $coeur_login_html;
  }
  add_action( 'woocommerce_register_form_start', 'coeur_woocommerce_custom_singup', 0);
endif;

/**
* Override Woocommerce's default image sizes
* @since Coeur 3.0.3
* @author Frenchtastic
*/
function coeur_woocommerce_image_dimensions() {

	$catalog = array(
		'width' 	=> '550',	// px
		'height'	=> '550',	// px
		'crop'		=> 1 		// true
	);

	$single = array(
		'width' 	=> '550',	// px
		'height'	=> '550',	// px
		'crop'		=> 1 		// true
	);

	$thumbnail = array(
		'width' 	=> '190',	// px
		'height'	=> '190',	// px
		'crop'		=> 0 		// false
	);

	// Image sizes
	update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
	update_option( 'shop_single_image_size', $single ); 		// Single product image
	update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
}
add_action( 'init', 'coeur_woocommerce_image_dimensions', 1 );

/**
* WooCommerce Functions
* @since Coeur 3.0.3
* @author Frenchtastic
*/
add_filter('woocommerce_checkout_fields', 'coeur_checkout_fields' );
function coeur_checkout_fields($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            // if you want to add the form-group class around the label and the input
            $field['class'][] = 'form-group'; 

            // add form-control to the actual input
            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
}

/**
* Custom Pagination for WooCommerce
* @since Coeur 3.0.3
* @author Frenchtastic
*/
function coeur_woocommerce_pagination() {
	global $wp_query;

	if ( $wp_query->max_num_pages <= 1 ) {
	return;
	}

	echo '<nav class="woocommerce-pagination">';
	
		echo paginate_links( apply_filters( 'woocommerce_pagination_args', array(
			'base'         => esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) ),
			'format'       => '',
			'add_args'     => '',
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'prev_text'    => '&larr;',
			'next_text'    => '&rarr;',
			'type'         => 'list',
			'end_size'     => 3,
			'mid_size'     => 3
		) ) );

	echo '</nav>';	
}

// Add the code below to your theme's functions.php file to add a confirm password field on the register form under My Accounts.
add_filter('woocommerce_registration_errors', 'registration_errors_validation', 10,3);
function registration_errors_validation($reg_errors, $sanitized_user_login, $user_email) {
	global $woocommerce;
	extract( $_POST );
	if ( strcmp( $password, $password2 ) !== 0 ) {
		return new WP_Error( 'registration-error', __( 'Passwords do not match.', 'coeur' ) );
	}
	return $reg_errors;
}

/**
* Add custom placeholders
* @since Coeur 3.0.3
* @author Frenchtastic
*/
add_filter( 'woocommerce_checkout_fields' , 'coeur_override_woocommerce_fields' );
function coeur_override_woocommerce_fields( $fields ) {
    $fields['billing']['billing_first_name']['placeholder'] = __('First Name *', 'coeur');
    $fields['billing']['billing_last_name']['placeholder'] = __('Last Name *', 'coeur');
    $fields['billing']['billing_company']['placeholder'] = __('Company Name', 'coeur');
    $fields['billing']['billing_address_1']['placeholder'] = __('Address *', 'coeur');
    $fields['billing']['billing_address_2']['placeholder'] = __('Address Line 2', 'coeur');
    $fields['billing']['billing_city']['placeholder'] = __('Town / City *', 'coeur');
    $fields['billing']['billing_postcode']['placeholder'] = __('Postcode / Zip *', 'coeur');
    $fields['billing']['billing_state']['placeholder'] = __('State *', 'coeur');
    $fields['billing']['billing_country']['placeholder'] = __('Country *', 'coeur');
    $fields['billing']['billing_email']['placeholder'] = __('Email Address *', 'coeur');
    $fields['billing']['billing_phone']['placeholder'] = __('Phone *', 'coeur');

    $fields['shipping']['shipping_first_name']['placeholder'] = __('First Name *', 'coeur');
    $fields['shipping']['shipping_last_name']['placeholder'] = __('Last Name *', 'coeur');
    $fields['shipping']['shipping_company']['placeholder'] = __('Company Name', 'coeur');
    $fields['shipping']['shipping_address_1']['placeholder'] = __('Address *', 'coeur');
    $fields['shipping']['shipping_address_2']['placeholder'] = __('Address Line 2', 'coeur');
    $fields['shipping']['shipping_city']['placeholder'] = __('Town / City *', 'coeur');
    $fields['shipping']['shipping_postcode']['placeholder'] = __('Postcode / Zip *', 'coeur');
    $fields['shipping']['shipping_country']['placeholder'] = __('Country *', 'coeur');
    $fields['shipping']['shipping_email']['placeholder'] = __('Email Address *', 'coeur');

    return $fields;
}

/**
* Return cart link if WooCommerce is activated
* @since Coeur 3.0.3
* @author Frenchtastic
*/
function coeur_woocommerce_links() {
  global $woocommerce;
    if ( class_exists( 'WooCommerce' ) ) {

      if (is_user_logged_in() == true ) {
      echo '<div class="dropdown">';
        echo '<ul id="wooAccount" class="nav navbar-nav pull-right">';
          echo '<li class="account-link"><a id="account-toggle" href="javascript:void(null)" title="' . __( 'My Account', 'coeur' ) . '"><i class="fa fa-user"></i></a></li>';
        echo '</ul>';
        echo '<div class="accountShortcuts">';
          echo '<ul class="dropdown-account">';
            echo '<h4 class="userName">'. coeur_get_firstname() .' '. coeur_get_lastname() .'</h4>';
            echo '<li><a href="' . coeur_get_myaccount_link() . '">' . __('My Account', 'coeur') . '</a></li>';
            echo '<li><a href="' . wp_logout_url( home_url() ) .  '">' . __('Logout', 'coeur') . '</a></li>';
          echo '</ul>';
        echo '</div>';
      echo '</div>';
      } else {
        echo '<ul id="wooAccount" class="nav navbar-nav pull-right">';
          echo '<li class="account-link"><a href="' . coeur_get_myaccount_link() . '" title="' . __( 'My Account', 'coeur' ) . '"><i class="fa fa-user"></i></a></li>';
        echo '</ul>';
      }
      

      echo '<ul id="wooCart" class="nav navbar-nav pull-right">';
      echo '<li class="cart-link"><a href="' . $woocommerce->cart->get_cart_url() . '" title="' . __( 'Checkout', 'coeur' ) . '"><i class="fa fa-shopping-cart"></i></a></li>';
      echo '</ul>';
    }
}

/**
* Returns true on a product page if WooCommerce is activated
* @since Coeur 3.0.3
* @author Frenchtastic
*/
function coeur_is_product(){
  if ( class_exists( 'WooCommerce' ) ){
    if ( is_product() != false ) {
      $coeur_product = true;
    } else {
      $coeur_product = false;
    }
    return $coeur_product;
  } else {
    $coeur_product = false;
    return $coeur_product;
  }
}

/**
* If WooCommerce is activated get myaccount page link
* @since Coeur 3.0.3
* @author Frenchtastic
*/ 
function coeur_get_myaccount_link() {

  if ( class_exists( 'WooCommerce' ) ) {

  $myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
  if ( $myaccount_page_id ) {
    $myaccount_page_url = get_permalink( $myaccount_page_id );
  }

  return $myaccount_page_url;

  }

}

// Remove WooCommerce Pagination
remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );

// Remove sorting dropdown
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

// Remove Result count
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );