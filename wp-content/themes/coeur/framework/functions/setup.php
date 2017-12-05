<?php
if ( ! function_exists( 'coeur_setup' ) ) :
function coeur_setup(){
    
    // Add Localization
    load_theme_textdomain('coeur', get_template_directory() . '/framework/languages');

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support( 'title-tag' );

    // Add Automatic RSS Support
    add_theme_support('automatic-feed-links');

    // Custom Background Support
    if(get_theme_mod('template_option', 'classic') != 'material') {
        $coeur_background_color = 'f9f9f9';
    } else {
        $coeur_background_color = 'f9f9fb';
    }

    add_theme_support(
        'custom-background',
        array(
            'default-color' => $coeur_background_color,
        )
    );

    // Add Thumbnail Size
    add_theme_support( 'post-thumbnails' );

    if(get_theme_mod('template_option', 'classic') == 'flat'){
      $coeur_header_text_color = '#FFF';
    } else {
      $coeur_header_text_color = '#333';
    }

    /**
    * Support for custom header background
    *
    * @since 1.7.3
    */
    $coeur_header_args = array(
      'flex-width'    => true,
      'width'         => 1280,
      'flex-height'    => true,
      'height'        => 400,
      'random-default' => false,
      'header-text'   => true,
      'default-text-color' => $coeur_header_text_color,
    );
    add_theme_support( 'custom-header', $coeur_header_args);

    set_post_thumbnail_size( 938, 370, true );
    add_image_size('large-image', 9999, 9999, false);

    // Navigation Menus
    register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'coeur' ),
    ) );
    register_nav_menus( array(
    'mobile' => __( 'Mobile menu', 'coeur' ),
    ) );

    // Add Post Formats
    add_theme_support('post-formats', array('link', 'quote', 'status', 'video', 'audio', 'chat'));

    // HTML5 Support
    add_theme_support( 'html5', array(
      'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
      ) );

    // Content Width
    if(!isset($content_width)) $content_width = 908;


    // Security
    remove_action( 'wp_head', 'wp_generator' ); 
}
endif; // coeur_setup
add_action( 'after_setup_theme', 'coeur_setup' );

/**
* Declare WooCommerce Support
* @since Coeur 3.0.3
* @author Frenchtastic.eu
*/
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

/**
* Backwards compatibility title_tag
*
* @since Coeur 2.0.6
* @author frenchtastic.eu
*/
if ( ! function_exists( '_wp_render_title_tag' ) ) :
function coeur_render_title() { ?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php }
add_action( 'wp_head', 'coeur_render_title' );
endif;