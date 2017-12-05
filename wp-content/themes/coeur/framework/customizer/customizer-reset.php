<?php
/**
* Resets theme customizations (theme_mods) made via WordPress Customizer
* @author WPZOOM
* @license GPLv2 or later
*/
if ( ! class_exists( 'ZOOM_Customizer_Reset' ) ) {
	final class ZOOM_Customizer_Reset {
		/**
		 * @var ZOOM_Customizer_Reset
		 */
		private static $instance = null;
		/**
		 * @var WP_Customize_Manager
		 */
		private $wp_customize;
		public static function get_instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}
			return self::$instance;
		}
		private function __construct() {
			add_action( 'customize_controls_print_scripts', array( $this, 'customize_controls_print_scripts' ) );
			add_action( 'wp_ajax_customizer_reset', array( $this, 'ajax_customizer_reset' ) );
			add_action( 'customize_register', array( $this, 'customize_register' ) );
		}
		public function customize_controls_print_scripts() {
			wp_enqueue_script('zoom-customizer-reset', get_template_directory_uri() . "/framework/js/customizer-reset.js", array( 'jquery' ));
			wp_localize_script( 'zoom-customizer-reset', '_ZoomCustomizerReset', array(
				'reset'   => __( 'Reset', 'coeur' ),
				'confirm' => __( 'Be brave, all custom settings will be reset. This action is irreversible.', 'coeur' ),
				'nonce'   => array(
					'reset' => wp_create_nonce( 'coeur' ),
				)
			) );
		}
		/**
		 * Store a reference to `WP_Customize_Manager` instance
		 *
		 * @param $wp_customize
		 */
		public function customize_register( $wp_customize ) {
			$this->wp_customize = $wp_customize;
		}
		public function ajax_customizer_reset() {
			if ( ! $this->wp_customize->is_preview() ) {
				wp_send_json_error( 'not_preview' );
			}
			if ( ! check_ajax_referer( 'coeur', 'nonce', false ) ) {
				wp_send_json_error( 'invalid_nonce' );
			}
			$this->reset_customizer();
			wp_send_json_success();
		}
		public function reset_customizer() {
			$settings = $this->wp_customize->settings();
			// remove theme_mod settings registered in customizer
			foreach ( $settings as $setting ) {
				if ( 'theme_mod' == $setting->type ) {
					remove_theme_mod( $setting->id );
				}
			}
		}
	}
}
ZOOM_Customizer_Reset::get_instance();