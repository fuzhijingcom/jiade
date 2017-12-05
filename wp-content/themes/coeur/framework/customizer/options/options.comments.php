<?php

/**
* Comment dropdown
*
* @author Frenchtastic
* @since Coeur 2.0.6
*/
$wp_customize->add_setting('comment_dropdown', array(
    'default'        => 'block',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
    'transport' => 'refresh', 
    'sanitize_callback' => 'coeur_sanitize_comment_dropdown',
));

$wp_customize->add_control('coeur_comment_dropdown', array(
    'label'      => __('Click to see comments', 'coeur'),
    'section'    => 'coeur_comments',
    'settings'   => 'comment_dropdown',
    'description' => 'If you choose <b>yes</b>, comments will only appear once the user has clicked the link "# comments" on posts and pages.',
    'type'       => 'radio',
    'choices'    => array(
        'none' => 'Yes',
        'block' => 'No'
        ),
));
// -----------------------------------------------------------------------------