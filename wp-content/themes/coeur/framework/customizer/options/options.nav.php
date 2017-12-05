<?php

global $wp_version;
if (version_compare($wp_version, '4.3.1', '>=')) {
    $coeur_navigation_section = 'coeur_navigation_section';
} else {
    $coeur_navigation_section = 'nav';
}

/**
* Toggle search icon on navbar
* @author Frenchtastic
* @since Coeur 3.0
*/
$wp_customize->add_setting( 'show_searchicon', array(
    'default'           => true,
    'sanitize_callback' => 'coeur_sanitize_checkbox',
    ));

$wp_customize->add_control( 'coeur_show_searchicon', array(
    'description' => 'Check this box if you wish to display the search icon on the navbar',
    'type' => 'checkbox',
    'label' => __('Search Icon', 'coeur'),
    'settings'  => 'show_searchicon',
    'section' => $coeur_navigation_section,
    'priority'   => 1,
    ));
// -----------------------------------------------------------------------------

/**
* Menu on single post pages
* @author Frenchtastic
* @since Coeur 1.6
*/
$wp_customize->add_setting('single_menu_header', array(
    'default'        => false,
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
    'sanitize_callback' => 'coeur_sanitize_checkbox',
    ));

$wp_customize->add_control('coeur_single_menu_header', array(
    'label'      => __('Menu on single post pages', 'coeur'),
    'type'       => 'checkbox',
    'section'    => $coeur_navigation_section,
    'settings'   => 'single_menu_header',
    'description' => 'Display menu on single post pages instead of post navigation and comment count.',
    'priority'   => 2,
));
// ----------------------------------------------------------------------------- 