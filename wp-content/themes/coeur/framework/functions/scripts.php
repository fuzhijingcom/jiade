<?php
/**
* Enqueue scripts and stylesheets
*
* @author Frenchtastic.eu
* @link http://codex.wordpress.org/Function_Reference/wp_enqueue_script
*/
function coeur_scripts() {

	global $wp_styles;

	// CSS
	wp_enqueue_style('bootstrap', get_template_directory_uri() . "/framework/css/bootstrap.min.css", array(), '0.1', 'screen');
	wp_enqueue_style('blog', get_template_directory_uri() . "/framework/css/blog.css", array(), '0.1', 'screen');

	// Font Awesome
	wp_enqueue_style('font_awesome_css',
	get_template_directory_uri()."/framework/css/font-awesome.min.css", array(), '0.1', 'screen' );

	// JavaScript
  	wp_enqueue_script('coeur_js', get_template_directory_uri() . "/framework/js/coeur.js", array( 'jquery' ));
	wp_enqueue_script('bootstrap-js', get_template_directory_uri()."/framework/js/bootstrap.min.js", array( 'jquery' ));
  	wp_enqueue_script( 'coeur-fitvids', get_template_directory_uri() . '/framework/js/jquery.fitvids.min.js', array('jquery') );

	// Conditional (if lt IE 9 )
  	wp_enqueue_style( 'html5-shiv', get_stylesheet_directory_uri() . "/framework/js/html5shiv.min.js", array()  );
  	$wp_styles->add_data( 'html5-shiv', 'conditional', 'lt IE 9' );

  	// Conditional (if lt IE 9 )
  	wp_enqueue_style( 'respond-js', get_stylesheet_directory_uri() . "/framework/js/respond.min.js", array()  );
  	$wp_styles->add_data( 'respond-js', 'conditional', 'lt IE 9' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

}
add_action('wp_enqueue_scripts','coeur_scripts');

/**
 * Enqueue script for custom customize control.
 */
function coeur_custom_customize_enqueue() {
  wp_enqueue_script( 'custom-customize', get_template_directory_uri() . '/framework/js/custom.customize.js', array( 'jquery', 'customize-controls' ), false, true );
  wp_enqueue_style( 'custom-customize-css', get_stylesheet_directory_uri() . "/framework/css/custom.customize.css", array()  );
}
add_action( 'customize_controls_enqueue_scripts', 'coeur_custom_customize_enqueue' );