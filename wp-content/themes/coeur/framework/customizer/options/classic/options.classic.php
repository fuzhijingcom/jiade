<?php
/*
* Header Background Color
*/ 
$wp_customize->add_setting( 'classic_header_background_color', 
	array(
		'default' => '#FFF', 
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'sanitize_hex_color',
		));           

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_classic_header_background_color', array(
	'label' => __( 'Header Background Color', 'coeur' ), 
	'section' => 'coeur_template_classic', 
	'settings' => 'classic_header_background_color', 
	) 
));
// -----------------------------------------------------------------------------

/**
* Classic Tagline Color
* @author Frenchtastic
* @since Coeur 2.0.4
*/
$wp_customize->add_setting( 'classic_tagline_color' , array(
	'default'     => '#333',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color',
	));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_classic_tagline_color', array(
	'label'        => __( 'Tagline Color', 'coeur' ),
	'section'    => 'coeur_template_classic',
	'settings'   => 'classic_tagline_color',
	)));
// -----------------------------------------------------------------------------

/*
* Heading Link Color
*/ 
$wp_customize->add_setting( 'classic_heading_linkcolor', 
	array(
		'default' => '#333', 
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'sanitize_hex_color',
		) 
	);

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_classic_heading_linkcolor', array(
	'label' => __( 'Headings Link Color', 'coeur' ), 
	'section' => 'coeur_template_classic', 
	'settings' => 'classic_heading_linkcolor',  
	) 
));
// -----------------------------------------------------------------------------

/**
* Primary color
* @author Frenchtastic
* @since Coeur 1.0
*/
$wp_customize->add_setting( 'classic_primary_color' , array(
	'default'     => '#00c9bf',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color',
	));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_classic_primary_color', array(
	'label'        => __( 'Primary Color', 'coeur' ),
	'section'    => 'coeur_template_classic',
	'settings'   => 'classic_primary_color',
	)));
// -----------------------------------------------------------------------------

/*
* Link Color
*/ 
$wp_customize->add_setting( 'classic_link_textcolor', 
	array(
		'default' => '#00c9bf', 
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'sanitize_hex_color',
		));           

$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 
	'coeur_classic_link_textcolor', 
	array(
		'label' => __( 'Link Color', 'coeur' ), 
		'section' => 'coeur_template_classic', 
		'settings' => 'classic_link_textcolor', 
		) 
	));
// -----------------------------------------------------------------------------