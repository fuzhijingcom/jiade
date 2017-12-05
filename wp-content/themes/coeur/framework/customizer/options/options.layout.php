<?php
/*
* Blog Layout
*/
$wp_customize->add_setting('bloglayout', array(
	'default'        => 'right',
	'capability'     => 'edit_theme_options',
	'type'           => 'theme_mod',
	'sanitize_callback' => 'coeur_sanitize_layout',
	));

$wp_customize->add_control('coeur_option_bloglayout', array(
	'label'      => __('Layout', 'coeur'),
	'section'    => 'coeur_bloglayout',
	'settings'   => 'bloglayout',
	'description' => '',
	'type'       => 'radio',
	'choices'    => array(
		'left' => 'Left',
		'full_width' => 'Content Full Width / No sidebar',
		'right'   => 'Right'
		),
	));
// -----------------------------------------------------------------------------

/*
* Post Layout
*/
$wp_customize->add_setting('postlayout', array(
	'default'        => 'right',
	'capability'     => 'edit_theme_options',
	'type'           => 'theme_mod',
	'sanitize_callback' => 'coeur_sanitize_layout',
	));

$wp_customize->add_control('coeur_option_postlayout', array(
	'label'      => __('Layout', 'coeur'),
	'section'    => 'coeur_postlayout',
	'settings'   => 'postlayout',
	'description' => '',
	'type'       => 'radio',
	'choices'    => array(
		'left' => 'Left',
		'full_width' => 'Content Full Width / No sidebar',
		'right'   => 'Right'
		),
	));
// -----------------------------------------------------------------------------

/*
* Page Layout
*/
$wp_customize->add_setting('pagelayout', array(
	'default'        => 'right',
	'capability'     => 'edit_theme_options',
	'type'           => 'theme_mod',
	'sanitize_callback' => 'coeur_sanitize_layout',
	));

$wp_customize->add_control('coeur_option_pagelayout', array(
	'label'      => __('Layout', 'coeur'),
	'section'    => 'coeur_pagelayout',
	'settings'   => 'pagelayout',
	'description' => '',
	'type'       => 'radio',
	'choices'    => array(
		'left' => 'Left',
		'full_width' => 'Content Full Width / No sidebar',
		'right'   => 'Right'
		),
	));
// -----------------------------------------------------------------------------

/**
* Container width
* @author Frenchtastic
* @since Coeur 3.1
*/
$wp_customize->add_setting('container_style', array(
	'default'        => 'full_width',
	'capability'     => 'edit_theme_options',
	'type'           => 'theme_mod',
	'sanitize_callback' => 'coeur_sanitize_container_style',
	));

$wp_customize->add_control('coeur_option_container_style', array(
	'label'      => __('Style', 'coeur'),
	'section'    => 'coeur_container_width',
	'settings'   => 'container_style',
	'description' => 'Choose container style <br> <b>Please note:</b> This option will not make any changes to your site as you see it in customizer because the view is too small.',
	'type'       => 'radio',
	'choices'    => array(
		'full_width' => 'Full Width',
		'boxed' => 'Boxed'
		),
	));
// -----------------------------------------------------------------------------

/**
* Container width
* @author Frenchtastic
* @since Coeur 2.0
*/
$wp_customize->add_setting('container_width', array(
	'default'        => '1170px',
	'capability'     => 'edit_theme_options',
	'type'           => 'theme_mod',
	'sanitize_callback' => 'coeur_sanitize_width',
	));

$wp_customize->add_control('coeur_option_container_width', array(
	'label'      => __('Width', 'coeur'),
	'section'    => 'coeur_container_width',
	'settings'   => 'container_width',
	'description' => 'Choose site width. <br> <b>Please note:</b> This option will not make any changes to your site as you site in customizer because the view is too small.',
	'type'       => 'radio',
	'choices'    => array(
		'970px' => 'Standard site width',
		'1170px' => 'Wider site width'
		),
	));
// -----------------------------------------------------------------------------

/*
* Link Color
*/ 
$wp_customize->add_setting( 'inner_background_color', array(
		'default' => '#F9F9F9', 
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'sanitize_hex_color',
		));           

$wp_customize->add_control( new WP_Customize_Color_Control(  $wp_customize, 'coeur_inner_background_color', array(
		'label' => __( 'Inner Background Color', 'coeur' ), 
		'section' => 'coeur_container_width', 
		'settings' => 'inner_background_color', 
		) 
	));
// -----------------------------------------------------------------------------