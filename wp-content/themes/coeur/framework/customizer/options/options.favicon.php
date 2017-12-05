<?php
global $wp_version;
if (version_compare($wp_version, '4.3', '<')) {
/**
* Favicon
* @author Frenchtastic
* @since Coeur 3.0
*/
$wp_customize->add_setting( 'favicon_option', array(
  'sanitize_callback' => 'esc_url_raw',
  ));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'coeur_favicon_option', array(
  'label'    => __( 'Favicon', 'coeur' ),
  'section'  => 'coeur_favicon_section',
  'settings' => 'favicon_option',
  'description' => __('Change your site\'s favicon, <b>Image must be <u>16x16px</u> or <u>32x32px</u>, format must be <u>.png</u></b>', 'coeur'),
  )));

// -----------------------------------------------------------------------------

/**
* Apple bookmark for iPhones
* @author Frenchtastic
* @since Coeur 3.0
*/
$wp_customize->add_setting( 'bookmark_iphone', array(
  'sanitize_callback' => 'esc_url_raw',
  ));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'coeur_bookmark_iphone', array(
  'label'    => __( 'Retina iPhone Bookmark', 'coeur' ),
  'section'  => 'coeur_favicon_section',
  'settings' => 'bookmark_iphone',
  'description' => __('Upload image to be used as bookmark on iPhones with retina screen. <b>Size must be <u>120x120</u> and format <u>.png</u></b>', 'coeur'),
  )));

// -----------------------------------------------------------------------------

/**
* Apple bookmark for iPads
* @author Frenchtastic
* @since Coeur 3.0
*/
$wp_customize->add_setting( 'bookmark_ipad', array(
  'sanitize_callback' => 'esc_url_raw',
  ));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'coeur_bookmark_ipad', array(
  'label'    => __( 'Retina iPad Bookmark', 'coeur' ),
  'section'  => 'coeur_favicon_section',
  'settings' => 'bookmark_ipad',
  'description' => __('Upload image to be used as bookmark on iPads with retina screen. <b>Size must be <u>152x152</u> and format <u>.png</u></b>', 'coeur'),
  )));

// -----------------------------------------------------------------------------

/**
* Apple bookmark for other devices
* @author Frenchtastic
* @since Coeur 3.0
*/
$wp_customize->add_setting( 'bookmark_other', array(
  'sanitize_callback' => 'esc_url_raw',
  ));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'coeur_bookmark_other', array(
  'label'    => __( 'Bookmark Icon', 'coeur' ),
  'section'  => 'coeur_favicon_section',
  'settings' => 'bookmark_other',
  'description' => __('Upload image to be used as bookmark icon on other Apple devices. <b>Size must be <u>76x76px</u> and format <u>.png</u></b>', 'coeur'),
  )));

// -----------------------------------------------------------------------------
}