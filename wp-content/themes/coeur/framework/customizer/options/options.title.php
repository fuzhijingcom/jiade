<?php
/**
* Footer copyright text
* @author Frenchtastic
* @since Coeur 1.0
*/
$wp_customize->add_setting('footer_copy', array(
    'default'        => '<a href="'.esc_url('http://frenchtastic.eu').'">Design by Frenchtastic.eu</a>',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
    'transport'      => 'refresh',
    'sanitize_callback' => 'coeur_sanitize_footer_copyright',
    ));

$wp_customize->add_control('coeur_footer_copy', array(
    'description' => 'you can use the following HTML tags: <ul><li>- a (allowed attributes : href and title)</li><li>- b</li><li>- em</li><li>- strong</li></ul>',
    'label'      => __('Footer Copyright', 'coeur'),
    'section'    => 'title_tagline',
    'settings'   => 'footer_copy'
));
// -----------------------------------------------------------------------------