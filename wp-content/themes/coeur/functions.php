<?php
/**
 * Coeur functions
 * 
 * @package Coeur
 * @author Frenchtastic.eu
 */

// Setup
require_once get_template_directory() . '/framework/functions/setup.php';

// Styles and Scripts
require_once get_template_directory() . '/framework/functions/scripts.php';
require_once get_template_directory() . '/framework/functions/styles.php';

// Coeur Includes
require_once get_template_directory() . '/framework/functions/template-tags.php';
require_once get_template_directory() . '/framework/functions/sidebars.php';
require_once get_template_directory() . '/framework/customizer/customizer.php';
require_once get_template_directory() . '/framework/customizer/customizer-reset.php';
require_once get_template_directory() . '/framework/customizer/sanitize.php';
require_once get_template_directory() . '/framework/classes/comments.php';
require_once get_template_directory() . '/framework/classes/wp_bootstrap_navwalker.php';

// Woocommerce Support
require_once get_template_directory() . '/framework/functions/woocommerce.php';
