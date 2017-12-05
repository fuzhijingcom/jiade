<?php
/*
* Header Background Color
*/ 
$wp_customize->add_setting( 'flat_header_background_color', 
	array(
		'default' => '#00B7AE', 
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'sanitize_hex_color',
		));           

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_flat_header_background_color', array(
	'label' => __( 'Header Background Color', 'coeur' ), 
	'section' => 'coeur_template_flat', 
	'settings' => 'flat_header_background_color', 
	) 
));
// -----------------------------------------------------------------------------

/*
* Navbar Background Color
*/ 
$wp_customize->add_setting( 'flat_navbar_bg_color', 
	array(
		'default' => '#00C9BF', 
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'sanitize_hex_color',
		));           

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_flat_navbar_bg_color', array(
	'label' => __( 'Navbar Background Color', 'coeur' ), 
	'section' => 'coeur_template_flat', 
	'settings' => 'flat_navbar_bg_color', 
	) 
));
// -----------------------------------------------------------------------------

/*
* Heading Link Color
*/ 
$wp_customize->add_setting( 'flat_header_textcolor', 
	array(
		'default' => '#FFF', 
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'sanitize_hex_color',
		) 
	);      

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_flat_header_textcolor', array(
	'label' => __( 'Navbar Link Color', 'coeur' ), 
	'section' => 'coeur_template_flat', 
	'settings' => 'flat_header_textcolor',  
	) 
));
// -----------------------------------------------------------------------------

/**
* Flat Tagline Color
* @author Frenchtastic
* @since Coeur 2.0.4
*/
$wp_customize->add_setting( 'flat_tagline_color' , array(
	'default'     => '#FFF',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color',
	));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_flat_tagline_color', array(
	'label'        => __( 'Tagline Color', 'coeur' ),
	'section'    => 'coeur_template_flat',
	'settings'   => 'flat_tagline_color',
	)));
// -----------------------------------------------------------------------------

/*
* Heading Link Color
*/ 
$wp_customize->add_setting( 'flat_heading_linkcolor', 
	array(
		'default' => '#00C9BF', 
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'sanitize_hex_color',
		) 
	);      

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_flat_heading_linkcolor', array(
	'label' => __( 'Headings Link Color', 'coeur' ), 
	'section' => 'coeur_template_flat', 
	'settings' => 'flat_heading_linkcolor', 
	) 
));
// -----------------------------------------------------------------------------

/**
* Primary color
* @author Frenchtastic
* @since Coeur 1.0
*/
$wp_customize->add_setting( 'flat_primary_color' , array(
	'default'     => '#00c9bf',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color',
	));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_flat_primary_color', array(
	'label'        => __( 'Primary Color', 'coeur' ),
	'section'    => 'coeur_template_flat',
	'settings'   => 'flat_primary_color',
	)));
// -----------------------------------------------------------------------------

/*
* Link Color
*/ 
$wp_customize->add_setting( 'flat_link_textcolor', 
	array(
		'default' => '#00c9bf', 
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'sanitize_hex_color',
		));           

$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 
	'coeur_flat_link_textcolor', 
	array(
		'label' => __( 'Link Color', 'coeur' ), 
		'section' => 'coeur_template_flat', 
		'settings' => 'flat_link_textcolor', 
		) 
	));
// -----------------------------------------------------------------------------