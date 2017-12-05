<?php
/**
* Add editor styles
*
* @author frenchtastic.eu
* @since Coeur 2.0.6
*/
function coeur_add_editor_styles() {
    add_editor_style( 'framework/css/editor-styles.css' );
}
add_action( 'after_setup_theme', 'coeur_add_editor_styles' );

/**
* Add template stylesheets
*
* @author frenchtastic.eu
* @since Coeur 3.0
*/
global $wp_customize;
if( get_theme_mod('template_option', 'classic') != 'classic' && $wp_customize == '' ) {
function coeur_template_css() {
	$coeur_template = get_theme_mod('template_option');
	// Flat
	wp_enqueue_style($coeur_template, get_template_directory_uri() . '/framework/css/templates/'.$coeur_template.'.css', array(), '0.1', 'screen');

}
add_action('wp_enqueue_scripts','coeur_template_css');
}