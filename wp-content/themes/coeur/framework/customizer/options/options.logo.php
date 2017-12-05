<?php

/**
* Logo
* @author Frenchtastic
* @since Coeur 1.6
*/
$wp_customize->add_setting( 'coeur_logo', array(
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'coeur_logo_option', array(
	'label'    => __( 'Logo', 'coeur' ),
	'section'  => 'coeur_logo',
	'settings' => 'coeur_logo',
)));
// -----------------------------------------------------------------------------