<?php
/**
* Excerpt Lenght
*/
$wp_customize->add_setting( 'coeur_excerpt_lenght', array(
	'sanitize_callback' => 'absint',
	'default'           => '70',
	));
$wp_customize->add_control( 'coeur_excerpt_lenght', array(
	'type'        => 'number',
	'section'     => 'coeur_post_section',
	'label'       => __('Excerpt lenght', 'coeur'),
	'description' => __('Choose the excerpt length (in words). Default is 70', 'coeur'),
	'input_attrs' => array(
		'min'   => 10,
		'max'   => 200,
		'step'  => 5,
		'style' => 'padding: 12px;',
		),
	) );
// -----------------------------------------------------------------------------

/**
* Excerpt or content
*/
$wp_customize->add_setting('post_content', array(
	'default'        => 'excerpt',
	'capability'     => 'edit_theme_options',
	'type'           => 'theme_mod',
	'transport' => 'refresh', 
	'sanitize_callback' => 'coeur_sanitize_content',
	));

$wp_customize->add_control('coeur_post_section', array(
	'label'      => __('Post Content', 'coeur'),
	'section'    => 'coeur_post_section',
	'settings'   => 'post_content',
	'description' => '<b>Show content</b> will show the whole post content while <b>show excerpt</b> will only show exactly the number of words you\'ve set in the option above.',
	'type'       => 'radio',
	'choices'    => array(
		'content' => 'Show content',
		'excerpt' => 'Show excerpt'
		),
	));
// -----------------------------------------------------------------------------

/**
* Thumbnail link to post?
* @author Frenchtastic
* @since Coeur 2.0.7
*/
$wp_customize->add_setting('thumbnail_link', array(
	'default'        => true,
	'capability'     => 'edit_theme_options',
	'type'           => 'theme_mod',
	'transport'      => 'refresh',
	'sanitize_callback' => 'coeur_sanitize_checkbox',
	));

$wp_customize->add_control('coeur_thumbnail_link', array(
	'label'      => __('Thumbnail Link', 'coeur'),
	'section'    => 'coeur_post_section',
	'settings'   => 'thumbnail_link',
	'description' => __('Do you want thumbnails to be linked to their article?', 'coeur'),
	'type'       => 'checkbox',
	));
// -----------------------------------------------------------------------------

/**
* Show/Hide categories on posts
* @author Frenchtastic
* @since Coeur 1.7
*/
$wp_customize->add_setting( 'show_cat', array(
	'default'			=> false,
	'sanitize_callback' => 'coeur_sanitize_checkbox',
	));

$wp_customize->add_control( 'coeur_show_cat', array(
	'description' => '',
	'type' => 'checkbox',
	'label' => 'Show categories on posts',
	'section' => 'coeur_post_section',
	'settings' => 'show_cat',
	));
// -----------------------------------------------------------------------------

/**
* Show/Hide author on posts
* @author Frenchtastic
* @since Coeur 1.7
*/
$wp_customize->add_setting( 'show_author', array(
	'default'			=> false,
	'sanitize_callback' => 'coeur_sanitize_checkbox',
	));

$wp_customize->add_control( 'coeur_show_author', array( 
	'description' => '',
	'type' => 'checkbox',
	'label' => 'Show the post author',
	'section' => 'coeur_post_section',
	'settings'	=> 'show_author',
	));
// -----------------------------------------------------------------------------

/**
* Show/Hide date on posts
* @author Frenchtastic
* @since Coeur 2.0.6
*/
$wp_customize->add_setting( 'coeur_show_date', array(
	'default'			=> true,
	'sanitize_callback' => 'coeur_sanitize_checkbox',
	));

$wp_customize->add_control( 'coeur_show_date', array(
	'description' => '',
	'type' => 'checkbox',
	'label' => 'Show the date on posts',
	'section' => 'coeur_post_section',
	));
// -----------------------------------------------------------------------------

/**
* Show/Hide comment count
* @author Frenchtastic
* @since Coeur 3.0.2
*/
$wp_customize->add_setting( 'show_post_comments', array(
	'default'			=> false,
	'sanitize_callback' => 'coeur_sanitize_checkbox',
	));

$wp_customize->add_control( 'coeur_show_post_comments', array(
	'settings' => 'show_post_comments',
	'description' => '',
	'type' => 'checkbox',
	'label' => 'Show the number of comments',
	'section' => 'coeur_post_section',
	));
// -----------------------------------------------------------------------------

/**
* Change text preceding date
* @author Frenchtastic
* @since Coeur 1.7
*/
$wp_customize->add_setting('meta_posted', array(
	'default'        => 'Posted on',
	'capability'     => 'edit_theme_options',
	'type'           => 'theme_mod',
	'transport'      => 'refresh',
	'sanitize_callback' => 'sanitize_text_field',
	));

$wp_customize->add_control('coeur_meta_posted', array(
	'label'      => __('Posted on', 'coeur'),
	'section'    => 'coeur_post_section',
	'settings'   => 'meta_posted',
	'description' => 'Change the text preceding the post date. Set to <b>"posted on"</b> by default.'
	));
// -----------------------------------------------------------------------------
