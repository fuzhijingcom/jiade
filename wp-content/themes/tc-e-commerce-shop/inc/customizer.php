<?php
/**
 * TC E-Commerce Shop Theme Customizer
 *
 * @package TC E-Commerce Shop
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tc_e_commerce_shop_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'tc_e_commerce_shop_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'tc-e-commerce-shop' ),
	    'description' => __( 'Description of what this panel does.', 'tc-e-commerce-shop' )
	) );

	//Layouts
	$wp_customize->add_section( 'tc_e_commerce_shop_left_right', array(
    	'title'      => __( 'Theme Layout Settings', 'tc-e-commerce-shop' ),
		'priority'   => 30,
		'panel' => 'tc_e_commerce_shop_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('tc_e_commerce_shop_theme_options',array(
	        'default' => '',
	        'sanitize_callback' => 'tc_e_commerce_shop_sanitize_choices'
	    )
    );

	$wp_customize->add_control('tc_e_commerce_shop_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => 'Do you want this section',
	        'section' => 'tc_e_commerce_shop_left_right',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','tc-e-commerce-shop'),
	            'Right Sidebar' => __('Right Sidebar','tc-e-commerce-shop'),
	            'One Column' => __('One Column','tc-e-commerce-shop'),
	            'Three Columns' => __('Three Columns','tc-e-commerce-shop'),
	            'Four Columns' => __('Four Columns','tc-e-commerce-shop'),
	            'Grid Layout' => __('Grid Layout','tc-e-commerce-shop')
	        ),
	    )
    );

    //Social Icons(topbar)
	$wp_customize->add_section('tc_e_commerce_shop_topbar',array(
		'title'	=> __('Top Header','tc-e-commerce-shop'),
		'description'	=> __('Add Header Content here','tc-e-commerce-shop'),
		'priority'	=> null,
		'panel' => 'tc_e_commerce_shop_panel_id',
	));

    $wp_customize->add_setting('tc_e_commerce_shop_mail',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_mail',array(
		'label'	=> __('Email','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_topbar',
		'setting'	=> 'tc_e_commerce_shop_mail',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('tc_e_commerce_shop_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_call',array(
		'label'	=> __('Phone','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_topbar',
		'setting'	=> 'tc_e_commerce_shop_call',
		'type'	=> 'text'
	));

	//Social Icons(topbar)
	$wp_customize->add_section('tc_e_commerce_shop_topbar_header',array(
		'title'	=> __('Social Icon Section','tc-e-commerce-shop'),
		'description'	=> __('Add Header Content here','tc-e-commerce-shop'),
		'priority'	=> null,
		'panel' => 'tc_e_commerce_shop_panel_id',
	));

	$wp_customize->add_setting('tc_e_commerce_shop_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_youtube_url',array(
		'label'	=> __('Add Youtube link','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_topbar_header',
		'setting'	=> 'tc_e_commerce_shop_youtube_url',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('tc_e_commerce_shop_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_facebook_url',array(
		'label'	=> __('Add Facebook link','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_topbar_header',
		'setting'	=> 'tc_e_commerce_shop_facebook_url',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('tc_e_commerce_shop_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_twitter_url',array(
		'label'	=> __('Add Twitter link','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_topbar_header',
		'setting'	=> 'tc_e_commerce_shop_twitter_url',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('tc_e_commerce_shop_rss_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_rss_url',array(
		'label'	=> __('Add RSS link','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_topbar_header',
		'setting'	=> 'tc_e_commerce_shop_rss_url',
		'type'	=> 'text'
	));

	//home page slider
	$wp_customize->add_section( 'tc_e_commerce_shop_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'tc-e-commerce-shop' ),
		'priority'   => 30,
		'panel' => 'tc_e_commerce_shop_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'tc_e_commerce_shop_slidersettings-page-' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		) );

		$wp_customize->add_control( 'tc_e_commerce_shop_slidersettings-page-' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'tc-e-commerce-shop' ),
			'section'  => 'tc_e_commerce_shop_slidersettings',
			'type'     => 'dropdown-pages'
		) );

	}	

	//Our Product
	$wp_customize->add_section('tc_e_commerce_shop_product',array(
		'title'	=> __('Featured Products','tc-e-commerce-shop'),
		'description'=> __('This section will appear below the slider.','tc-e-commerce-shop'),
		'panel' => 'tc_e_commerce_shop_panel_id',
	));

	$wp_customize->add_setting('tc_e_commerce_shop_sec1_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_sec1_title',array(
		'label'	=> __('Section Title','tc-e-commerce-shop'),
		'section'=> 'tc_e_commerce_shop_product',
		'setting'=> 'tc_e_commerce_shop_sec1_title',
		'type'=> 'text'
	));	
	
	for ( $count = 0; $count <= 0; $count++ ) {

		$wp_customize->add_setting( 'tc_e_commerce_shop_servicesettings-page-' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		));
		$wp_customize->add_control( 'tc_e_commerce_shop_servicesettings-page-' . $count, array(
			'label'    => __( 'Select Product Page', 'tc-e-commerce-shop' ),
			'section'  => 'tc_e_commerce_shop_product',
			'type'     => 'dropdown-pages'
		));
	}


	//home page setting pannel
	$wp_customize->add_section('tc_e_commerce_shop_footer_section',array(
		'title'	=> __('Copyright','tc-e-commerce-shop'),
		'description'	=> '',
		'priority'	=> null,
		'panel' => 'tc_e_commerce_shop_panel_id',
	));
	
	$wp_customize->add_setting('tc_e_commerce_shop_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'wp_kses_post',
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_footer_copy',array(
		'label'	=> __('Copyright Text','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_footer_section',
		'type'		=> 'textarea'
	));
	/** home page setions end here**/	
}
add_action( 'customize_register', 'tc_e_commerce_shop_customize_register' );


/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class tc_e_commerce_shop_customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );
		
		// Register custom section types.
		$manager->register_section_type( 'tc_e_commerce_shop_customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new tc_e_commerce_shop_customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'title'    => esc_html__( 'TC E-Commerce Shop', 'tc-e-commerce-shop' ),
					'pro_text' => esc_html__( 'Go Pro',         'tc-e-commerce-shop' ),
					'pro_url'  => 'https://www.themescaliber.com/premium/multipurpose-ecommerce-wordpress-theme'
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'tc-e-commerce-shop-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'tc-e-commerce-shop-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
tc_e_commerce_shop_customize::get_instance();