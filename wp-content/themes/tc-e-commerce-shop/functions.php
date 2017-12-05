<?php
/**
 * TC E-Commerce Shop functions and definitions
 *
 * @package TC E-Commerce Shop
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'tc_e_commerce_shop_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
 
/* Breadcrumb Begin */
function tc_e_commerce_shop_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url( home_url() );
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			the_title();
		}
	}
}

/* Theme Setup */
function tc_e_commerce_shop_setup() {

	$GLOBALS['content_width'] = apply_filters( 'tc_e_commerce_shop_content_width', 640 );

	load_theme_textdomain( 'tc-e-commerce-shop', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('tc-e-commerce-shop-homepage-thumb',240,145,true);
	
       register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'tc-e-commerce-shop' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', tc_e_commerce_shop_font_url() ) );
}
endif;
add_action( 'after_setup_theme', 'tc_e_commerce_shop_setup' );

/* Theme Widgets Setup */
function tc_e_commerce_shop_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on blog page sidebar', 'tc-e-commerce-shop' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on page sidebar', 'tc-e-commerce-shop' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Thid Column Sidebar', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on page sidebar', 'tc-e-commerce-shop' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 1', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on footer', 'tc-e-commerce-shop' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 2', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on footer', 'tc-e-commerce-shop' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 3', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on footer', 'tc-e-commerce-shop' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 4', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on footer', 'tc-e-commerce-shop' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'tc_e_commerce_shop_widgets_init' );

/* Theme Font URL */
function tc_e_commerce_shop_font_url() {
		$font_url = '';
		
		/* Translators: If there are any character that are
		* not supported by PT Sans, translate this to off, do not
		* translate into your own language.
		*/
		$ptsans = _x('on', 'PT Sans font:on or off','tc-e-commerce-shop');
		
		/* Translators: If there are any character that are
		* not supported by Roboto, translate this to off, do not
		* translate into your own language.
		*/
		$roboto = _x('on', 'Roboto font:on or off','tc-e-commerce-shop');
		
		/* Translators: If there are any character that are
		* not supported by Roboto Condensed, translate this to off, do not
		* translate into your own language.
		*/
		$roboto_cond = _x('on', 'Roboto Condensed font:on or off','tc-e-commerce-shop');
		
		if('off' !== $ptsans || 'off' !==  $roboto || 'off' !== $roboto_cond){
			$font_family = array();
			
			if('off' !== $ptsans){
				$font_family[] = 'PT Sans:300,400,600,700,800,900';
			}
			
			if('off' !== $roboto){
				$font_family[] = 'Roboto:400,700';
			}
			
			if('off' !== $roboto_cond){
				$font_family[] = 'Roboto Condensed:400,700';
			}
			
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}		
	return $font_url;
}
	
/* Theme enqueue scripts */
function tc_e_commerce_shop_scripts() {
	wp_enqueue_style( 'tc-e-commerce-shop-font', tc_e_commerce_shop_font_url(), array() );	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'tc-e-commerce-shop-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'tc-e-commerce-shop-style', 'rtl', 'replace' );
	wp_enqueue_style( 'tc-e-commerce-shop-effect', get_template_directory_uri().'/css/effect.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.css' );

	wp_enqueue_style( 'jquery-nivo-slider', get_template_directory_uri().'/css/nivo-slider.css' );
	wp_enqueue_script( 'jquery-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'tc-e-commerce-shop-custom-front', get_template_directory_uri() . '/js/custom-front.js', array('jquery') ,'',true);
	
	wp_enqueue_script( 'tc-e-commerce-shop-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* Enqueue the Dashicons script */
	wp_enqueue_style( 'dashicons' );
	
	/** Load our IE-only stylesheet for all versions of IE.
	*   <!--[if lt IE 9]> &hellip <![endif]-->
	*
	*  Note: It is also possible to just check and see if the $is_IE global in WordPress is set to true before
	*  calling the wp_enqueue_style() function. If you are trying to load a stylesheet for all browsers
	*  EXCEPT for IE, then you would HAVE to check the $is_IE global since WordPress doesn't have a way to
	*  properly handle non-IE conditional comments.
	*/
	wp_enqueue_style('tc-e-commerce-shop-ie', get_template_directory_uri().'/css/ie.css');
}
add_action( 'wp_enqueue_scripts', 'tc_e_commerce_shop_scripts' );

/*radio button sanitization*/

 function tc_e_commerce_shop_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

// URL DEFINES
define('TC_E_COMMERCE_SHOP_SITE_URL','https://www.themescaliber.com/');

function tc_e_commerce_shop_credit_link() {
        echo "<a href=".esc_url(TC_E_COMMERCE_SHOP_SITE_URL)." target='_blank'>ThemesCaliber</a>";
}



