<?php

/**
* Headings
* @author Frenchtastic
* @since Coeur 2.0
*/
if( get_theme_mod('template_option') == 'flat') {
    $coeur_default_headings_weight = 200;
} else {
    $coeur_default_headings_weight = 100;
}

$wp_customize->add_setting('headings_weight', array(
    'default'        => $coeur_default_headings_weight,
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
    'transport' => 'postMessage', 
    'sanitize_callback' => 'coeur_sanitize_weight',
    ));

$wp_customize->add_control('coeur_headings_weight', array(
    'label'      => __('Headings', 'coeur'),
    'section'    => 'coeur_fonts',
    'settings'   => 'headings_weight',
    'description' => 'Make headings/titles bolder or thiner.',
    'type'       => 'radio',
    'choices'    => array(
        $coeur_default_headings_weight => 'Thin',
        '400' => 'Normal',
        '700' => 'Bold',
        '900' => 'Bolder'
        ),
    ));
// -----------------------------------------------------------------------------

/**
* Body Font
* @author Frenchtastic
* @since Coeur 2.0
*/
$wp_customize->add_setting('body_font', array(
    'default'        => 'Helvetica Neue',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
    'transport' => 'postMessage', 
    'sanitize_callback' => 'coeur_sanitize_fontfamily',
    ));

$wp_customize->add_control('coeur_body_font', array(
    'label'      => __('Body Font', 'coeur'),
    'section'    => 'coeur_fonts',
    'settings'   => 'body_font',
    'description' => 'Pick a font for body text.',
    'type'       => 'select',
    'choices'    => array(
        'Helvetica Neue' => 'Helvetica Neue',
        'Open Sans' => 'Open Sans',
        'Arial' => 'Arial',
        'Comic Sans MS' => 'Comic Sans MS',
        'Times New Roman' => 'Times New Roman',
        'Verdana' => 'Verdana',
        'Fantasy' => 'Fantasy',
        'Monospace' => 'Monospace',
        'Cursive' => 'Cursive',
        'Serif' => 'Serif',
        'Courier' => 'Courier',
        'Monaco' => 'Monaco'
        ),
    ));
// -----------------------------------------------------------------------------

/**
* Headings
* @author Frenchtastic
* @since Coeur 2?0
*/
$wp_customize->add_setting('headings_font', array(
    'default'        => 'Helvetica Neue',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
    'transport' => 'postMessage', 
    'sanitize_callback' => 'coeur_sanitize_fontfamily',
    ));

$wp_customize->add_control('coeur_headings_font', array(
    'label'      => __('Heading Font', 'coeur'),
    'section'    => 'coeur_fonts',
    'settings'   => 'headings_font',
    'description' => 'Pick a font for all headings.',
    'type'       => 'select',
    'choices'    => array(
        'Helvetica Neue' => 'Helvetica Neue',
        'Open Sans' => 'Open Sans',
        'Arial' => 'Arial',
        'Comic Sans MS' => 'Comic Sans MS',
        'Times New Roman' => 'Times New Roman',
        'Verdana' => 'Verdana',
        'Fantasy' => 'Fantasy',
        'Monospace' => 'Monospace',
        'Cursive' => 'Cursive',
        'Serif' => 'Serif',
        'Courier' => 'Courier',
        'Monaco' => 'Monaco'
        ),
));
// -----------------------------------------------------------------------------