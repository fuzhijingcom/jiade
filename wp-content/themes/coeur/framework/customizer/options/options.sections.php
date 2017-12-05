<?php

/*
* Panels
*/

// Layout
    $wp_customize->add_panel( 'coeur_layout', array(
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Layout', 'coeur'),
    'description'    => '',
));
// -----------------------------------------------------------------------------


/*
* Sections
*/

// Template
$wp_customize->add_section( 'coeur_template' , array(
    'title'      => __( 'Template', 'coeur' ),
    'priority'   => 20,
    'description' => __('The template will define the overall look of your site. Customization doesn\'t stop here, each template comes with a unique set of options.', 'coeur'),
));
// -----------------------------------------------------------------------------

// Coeur Classic
$wp_customize->add_section( 'coeur_template_classic' , array(
    'title'      => __( 'Classic', 'coeur' ),
    'priority'   => 21,
));
// -----------------------------------------------------------------------------

// Coeur Flat
$wp_customize->add_section( 'coeur_template_flat' , array(
    'title'      => __( 'Flat', 'coeur' ),
    'priority'   => 22,
));
// -----------------------------------------------------------------------------

// Coeur Flat
$wp_customize->add_section( 'coeur_template_material' , array(
    'title'      => __( 'Material', 'coeur' ),
    'priority'   => 23,
));
// -----------------------------------------------------------------------------

// Post Content
$wp_customize->add_section( 'coeur_post_section' , array(
    'title'      => __( 'Posts', 'coeur' ),
    'priority'   => 35,
));
// -----------------------------------------------------------------------------

// Font Options
$wp_customize->add_section( 'coeur_fonts' , array(
    'title'      => __( 'Fonts', 'coeur' ),
    'priority'   => 40,
));
// -----------------------------------------------------------------------------

// Container Width
$wp_customize->add_section( 'coeur_container_width' , array(
    'title'      => __( 'Layout', 'coeur' ),
    'priority'   => 10,
    'panel'  => 'coeur_layout',
));
// -----------------------------------------------------------------------------

// Blog Layout
$wp_customize->add_section( 'coeur_bloglayout' , array(
    'title'      => __( 'Blog Layout', 'coeur' ),
    'priority'   => 20,
    'panel'  => 'coeur_layout',
));
// -----------------------------------------------------------------------------

// Post Layout
$wp_customize->add_section( 'coeur_postlayout' , array(
    'title'      => __( 'Post Layout', 'coeur' ),
    'priority'   => 30,
    'panel'  => 'coeur_layout',
));
// -----------------------------------------------------------------------------

// Page Layout
$wp_customize->add_section( 'coeur_pagelayout' , array(
    'title'      => __( 'Page Layout', 'coeur' ),
    'priority'   => 40,
    'panel'  => 'coeur_layout',
));
// -----------------------------------------------------------------------------

// Coeur Comments
$wp_customize->add_section( 'coeur_comments' , array(
    'title'      => __( 'Comments', 'coeur' ),
    'priority'   => 70,        
));
// -----------------------------------------------------------------------------

// Coeur Logo
$wp_customize->add_section( 'coeur_logo' , array(
    'title'      => __( 'Logo', 'coeur' ),
    'priority'   => 70,        
));
// -----------------------------------------------------------------------------

// Coeur Favicon
$wp_customize->add_section( 'coeur_favicon_section' , array(
    'title'      => __( 'Favicon', 'coeur' ),
    'priority'   => 80,        
));
// -----------------------------------------------------------------------------

/**
* If version is 4.3.1 or higher
* create 'navigation' section 
* @since 3.0.2
*/
global $wp_version;
if (version_compare($wp_version, '4.3.1', '>=')) {
    // Coeur Navigation
    $wp_customize->add_section( 'coeur_navigation_section' , array(
        'title'      => __( 'Navigation', 'coeur' ),
        'priority'   => 90,        
    ));
}
// -----------------------------------------------------------------------------