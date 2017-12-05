<?php
/**
* Template Selector
* @author Frenchtastic
* @since Coeur 1.6
*/
$wp_customize->add_setting('template_option', array(
    'id'             => 'coeur_template_selector',
    'default'        => 'classic',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
    'sanitize_callback' => 'coeur_sanitize_template',
    ));

$wp_customize->add_control('coeur_template_option', array(
    'label'      => __('Choose a Template', 'coeur'),
    'section'    => 'coeur_template',
    'settings'   => 'template_option',
    'description' => '',
    'type'       => 'radio',
    'choices'    => array(
        'classic'=> 'Classic',
        'flat' => 'Flat',
        'material' => 'Material',
        ),
));
// -----------------------------------------------------------------------------