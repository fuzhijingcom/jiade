<?php
/*
* Header Background Color
*/ 
$wp_customize->add_setting( 'material_header_background_color', 
	array(
		'default' => '#292b45', 
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'sanitize_hex_color',
		));           

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_material_header_background_color', array(
	'label' => __( 'Header Background Color', 'coeur' ), 
	'section' => 'coeur_template_material', 
	'settings' => 'material_header_background_color', 
	) 
));
// -----------------------------------------------------------------------------

/**
* Primary color
* @author Frenchtastic
* @since Coeur 1.0
*/
$wp_customize->add_setting( 'material_primary_color' , array(
	'default'     => '#e91e63',
	'transport'   => 'refresh',
	'sanitize_callback' => 'sanitize_hex_color',
	));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_material_primary_color', array(
	'label'        => __( 'Accent Color', 'coeur' ),
	'section'    => 'coeur_template_material',
	'settings'   => 'material_primary_color',
	)));
// -----------------------------------------------------------------------------

/*
* Link Color
*/ 
$wp_customize->add_setting( 'material_link_textcolor', 
	array(
		'default' => '#00BCD4', 
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'sanitize_hex_color',
		));           

$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 
	'coeur_material_link_textcolor', 
	array(
		'label' => __( 'Link Color', 'coeur' ), 
		'section' => 'coeur_template_material', 
		'settings' => 'material_link_textcolor', 
		) 
	));
// -----------------------------------------------------------------------------

/**
* material Tagline Color
* @author Frenchtastic
* @since Coeur 2.0.4
*/
$wp_customize->add_setting( 'material_tagline_color' , array(
	'default'     => '#FFF',
	'transport'   => 'refresh',
	'sanitize_callback' => 'sanitize_hex_color',
	));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_material_tagline_color', array(
	'label'        => __( 'Tagline Color', 'coeur' ),
	'section'    => 'coeur_template_material',
	'settings'   => 'material_tagline_color',
	)));
// -----------------------------------------------------------------------------

/*
* Heading Link Color
*/ 
$wp_customize->add_setting( 'material_heading_linkcolor', 
	array(
		'default' => '#333', 
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options', 
		'transport' => 'refresh', 
		'sanitize_callback' => 'sanitize_hex_color',
		) 
	);      

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_material_heading_linkcolor', array(
	'label' => __( 'Headings Link Color', 'coeur' ), 
	'section' => 'coeur_template_material', 
	'settings' => 'material_heading_linkcolor', 
	) 
));
// -----------------------------------------------------------------------------

/*
* Navbar Link Color
*/ 
$wp_customize->add_setting( 'material_header_textcolor', 
	array(
		'default' => '#696F7B', 
		'type' => 'theme_mod', 
		'capability' => 'edit_theme_options', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'sanitize_hex_color',
		) 
	);      

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_material_header_textcolor', array(
	'label' => __( 'Navbar Link Color', 'coeur' ), 
	'section' => 'coeur_template_material', 
	'settings' => 'material_header_textcolor',  
	) 
));
// -----------------------------------------------------------------------------