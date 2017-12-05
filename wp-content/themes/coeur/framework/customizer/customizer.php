<?php
/**
 * Contains methods for customizing the theme customization screen.
 * 
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @since Coeur 2.0
 * @author frenchtastic.eu
 */

class Coeur_Customize {
   /**
    * This hooks into 'customize_register' (available as of WP 3.4) and allows
    * you to add new sections and controls to the Theme Customize screen.
    * 
    * Note: To enable instant preview, we have to actually write a bit of custom
    * javascript. See live_preview() for more.
    *  
    * @see add_action('customize_register',$func)
    * @param \WP_Customize_Manager $wp_customize
    * @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
    * @since Coeur 2.0
    */
   public static function register ( $wp_customize ) {

        // Sections
        require_once get_template_directory() . '/framework/customizer/options/options.sections.php';

        // Options
        require_once get_template_directory() . '/framework/customizer/options/options.template.php';
        require_once get_template_directory() . '/framework/customizer/options/options.title.php';
        require_once get_template_directory() . '/framework/customizer/options/options.post.php';
        require_once get_template_directory() . '/framework/customizer/options/options.layout.php';
        require_once get_template_directory() . '/framework/customizer/options/options.nav.php';
        require_once get_template_directory() . '/framework/customizer/options/options.font.php';
        require_once get_template_directory() . '/framework/customizer/options/options.logo.php';
        require_once get_template_directory() . '/framework/customizer/options/options.favicon.php';
        require_once get_template_directory() . '/framework/customizer/options/options.comments.php';

        // Template Options
        require_once get_template_directory() . '/framework/customizer/options/classic/options.classic.php';
        require_once get_template_directory() . '/framework/customizer/options/flat/options.flat.php';
        require_once get_template_directory() . '/framework/customizer/options/material/options.material.php';
              
        // Change default WordPress settings' type of tranport
        $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
        $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
        $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
        $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

        // Move default WordPress controls to a different section
        $wp_customize->get_control( 'header_textcolor' )->section = 'coeur_template_classic';
        $wp_customize->get_control( 'background_color' )->section = 'background_image';

        // Rename Settings
        $wp_customize->get_control( 'display_header_text' )->label = __('Display Tagline in Header', 'coeur');
        $wp_customize->get_control( 'header_textcolor' )->label = __('Navbar Link Color', 'coeur');

        // Rename Sections
        $wp_customize->get_section('background_image')->title = __( 'Background', 'coeur');


   }

   /**
    * This will output the custom WordPress settings to the live theme's WP head.
    * 
    * Used by hook: 'wp_head'
    * 
    * @see add_action('wp_head',$func)
    * @since Coeur 2.0
    */
   public static function header_output() {
        // Variables
        // Inter-template classes
        $coeur_heading_classes = 'h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a, h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6';
        $coeur_tagline_color_classes = '.site-description';
        $coeur_background_color_classes = 'body';
        $coeur_header_background_color_classes = '.blog-header';
        $coeur_link_textcolor_classes = 'a, a:hover';
        $coeur_background_primary_color_classes = '.btn-primary, .bypostauthor .media-heading, .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary, .woocommerce a.added_to_cart';
        $coeur_border_primary_color_classes = '.sticky, .form-control:focus, .search-field:focus, .btn-primary, .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary';
        $coeur_color_primary_color_classes = '.woocommerce .star-rating span';
        $coeur_heading_linkcolor_classes = 'h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a';
        $coeur_heading_hover_classes = 'h1 a:hover, .h1 a:hover, h2 a:hover, .h2 a:hover, h3 a:hover, .h3 a:hover, h4 a:hover, .h4 a:hover, h5 a:hover, .h5 a:hover, h6 a:hover, .h6 a:hover, h1 a:focus, .h1 a:focus, h2 a:focus, .h2 a:focus, h3 a:focus, .h3 a:focus, h4 a:focus, .h4 a:focus, h5 a:focus, .h5 a:focus, h6 a:focus, .h6 a:focus';
        $coeur_body_font_classes = 'body';
        $coeur_navbar_bg_classes = '.navbar-default';
        $coeur_navbar_border_classes = '.dropdown-menu > .active > a';

        // Defaults
        if( get_theme_mod('template_option', 'classic') == 'material' ) :
                $coeur_headings_font_default = 'Roboto';
        $coeur_body_font_default = 'Roboto';
        else:
                $coeur_headings_font_default = 'Helvetica Neue';
        $coeur_body_font_default = 'Helvetica Neue';
        endif;

        // Flat classes
        $coeur_flat_header_textcolor_classes = '.navbar-default .navbar-nav > li > a, .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover';

        // Flat defaults
        $coeur_flat_header_textcolor_default = '#FFF';
        $coeur_flat_tagline_color_default = '#FFF';
        $coeur_flat_header_background_color_default = '#00B7AE';
        $coeur_flat_navbar_bg_color_default = '#00C9BF';
        $coeur_flat_link_textcolor_default = '#00c9bf';
        $coeur_flat_primary_color_default = '#00c9bf';
        $coeur_flat_heading_linkcolor_default = '#161F24';
        $coeur_flat_headings_weight_default = 200;

        // Classic classes
        $coeur_classic_header_textcolor_classes = '.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover';

        // Classic Defaults
        $coeur_classic_header_textcolor_default = '00c9bf';
        $coeur_classic_background_color_default = 'f9f9f9';
        $coeur_classic_tagline_color_default = '#333';
        $coeur_classic_header_background_color_default = '#FFF';
        $coeur_classic_link_textcolor_default = '#00c9bf';
        $coeur_classic_primary_color_default = '#00c9bf';
        $coeur_classic_heading_linkcolor_default = '#333';
        $coeur_classic_headings_weight_default = 100;

        // Material classes
        $coeur_material_border_primary_color_classes = '.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus, .sticky, .form-control:focus, .search-field:focus, .btn-primary, .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary';
        $coeur_material_background_primary_color_classes = '.btn-primary, .bypostauthor .media-heading, .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary, .woocommerce a.added_to_cart';
        // Material Defaults
        $coeur_material_header_textcolor_default = '#696F7B';
        $coeur_material_background_color_default = '#F5F5F5';
        $coeur_material_tagline_color_default = '#BFC3CE';
        $coeur_material_header_background_color_default = '#292b45';
        $coeur_material_link_textcolor_default = '#00BCD4';
        $coeur_material_primary_color_default = '#BF305E';
        $coeur_material_heading_linkcolor_default = '#333';
        $coeur_material_headings_weight_default = 200;
        ?>
        <!--Customizer CSS--> 
        <style type="text/css">
          <?php if( get_theme_mod('template_option', 'classic') == 'flat' ) :
          self::generate_css( $coeur_flat_header_textcolor_classes, 'color', 'flat_header_textcolor', $coeur_flat_header_textcolor_default ); 
          self::generate_css( $coeur_tagline_color_classes, 'color', 'flat_tagline_color', $coeur_flat_tagline_color_default );
          self::generate_css( $coeur_header_background_color_classes, 'background', 'flat_header_background_color', $coeur_flat_header_background_color_default );
          self::generate_css( $coeur_navbar_bg_classes, 'background', 'flat_navbar_bg_color', $coeur_flat_navbar_bg_color_default ); 
          self::generate_css( $coeur_navbar_border_classes, 'border-color', 'flat_navbar_bg_color', $coeur_flat_navbar_bg_color_default ); 
          self::generate_css( $coeur_link_textcolor_classes, 'color', 'flat_link_textcolor', $coeur_flat_link_textcolor_default ); 
          self::generate_css( $coeur_background_primary_color_classes, 'background', 'flat_primary_color', $coeur_flat_primary_color_default ); 
          self::generate_css( $coeur_border_primary_color_classes, 'border-color', 'flat_primary_color', $coeur_flat_primary_color_default ); 
          self::generate_css( $coeur_color_primary_color_classes, 'color', 'flat_primary_color', $coeur_flat_primary_color_default ); 
          self::generate_css( $coeur_heading_linkcolor_classes, 'color', 'flat_heading_linkcolor', $coeur_flat_heading_linkcolor_default );
          self::generate_css( $coeur_heading_hover_classes, 'color', 'flat_heading_linkcolor', $coeur_flat_heading_linkcolor_default );
          self::generate_css( $coeur_heading_classes, 'font-weight', 'headings_weight', $coeur_flat_headings_weight_default ); 
          elseif( get_theme_mod('template_option', 'classic') == 'material' ):
          self::generate_css( $coeur_flat_header_textcolor_classes, 'color', 'material_header_textcolor', $coeur_material_header_textcolor_default ); 
          self::generate_css( $coeur_tagline_color_classes, 'color', 'material_tagline_color', $coeur_material_tagline_color_default );
          self::generate_css( $coeur_header_background_color_classes, 'background', 'material_header_background_color', $coeur_material_header_background_color_default );
          self::generate_css( $coeur_link_textcolor_classes, 'color', 'material_link_textcolor', $coeur_material_link_textcolor_default ); 
          self::generate_css( $coeur_material_background_primary_color_classes, 'background', 'material_primary_color', $coeur_material_primary_color_default ); 
          self::generate_css( $coeur_material_border_primary_color_classes, 'border-color', 'material_primary_color', $coeur_material_primary_color_default ); 
          self::generate_css( $coeur_color_primary_color_classes, 'color', 'material_primary_color', $coeur_material_primary_color_default ); 
          self::generate_css( $coeur_heading_linkcolor_classes, 'color', 'material_heading_linkcolor', $coeur_material_heading_linkcolor_default );
          self::generate_css( $coeur_heading_hover_classes, 'color', 'material_heading_linkcolor', $coeur_material_heading_linkcolor_default );
          self::generate_css( $coeur_heading_classes, 'font-weight', 'headings_weight', $coeur_material_headings_weight_default ); 
          else:
          self::generate_css( $coeur_classic_header_textcolor_classes, 'color', 'header_textcolor', $coeur_classic_header_textcolor_default, '#');
          self::generate_css( $coeur_background_color_classes, 'background-color', 'background_color', $coeur_classic_background_color_default, '#');
          self::generate_css( $coeur_tagline_color_classes, 'color', 'classic_tagline_color', $coeur_classic_tagline_color_default );
          self::generate_css( $coeur_header_background_color_classes, 'background-color', 'classic_header_background_color', $coeur_classic_header_background_color_default );
          self::generate_css( $coeur_link_textcolor_classes, 'color', 'classic_link_textcolor', $coeur_classic_link_textcolor_default ); 
          self::generate_css( $coeur_background_primary_color_classes, 'background-color', 'classic_primary_color', $coeur_classic_primary_color_default ); 
          self::generate_css( $coeur_border_primary_color_classes, 'border-color', 'classic_primary_color', $coeur_classic_primary_color_default); 
          self::generate_css( $coeur_color_primary_color_classes, 'color', 'classic_primary_color', $coeur_classic_primary_color_default); 
          self::generate_css( $coeur_heading_linkcolor_classes, 'color', 'classic_heading_linkcolor', $coeur_classic_heading_linkcolor_default);
          self::generate_css( $coeur_heading_classes, 'font-weight', 'headings_weight', $coeur_classic_headings_weight_default ); 
          endif;
          ?>
          <?php
          self::generate_css( $coeur_heading_classes, 'font-family', 'headings_font', $coeur_headings_font_default ); 
          self::generate_css( $coeur_body_font_classes, 'font-family', 'body_font', $coeur_body_font_default ); 
          ?>
          <?php if(get_theme_mod('container_style', 'full_width') != 'boxed'): ?>
           @media (min-width: 1200px) {
              .container {
                width: <?php echo get_theme_mod( 'container_width', '1170px' ); ?>;
              }
            }
          <?php endif; ?>

            <?php if(get_theme_mod('container_style', 'full_width') == 'boxed'): ?>
              #wrap {
                background: <?php echo get_theme_mod('inner_background_color', '#F9F9F9'); ?>
              }
              @media(min-width:1170px){
                #wrap {
                max-width: 1300px;
                width: calc(100% - 200px);
                margin: 0px auto;
                box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.125);
                }
                .container {
                  max-width: calc(100% - 80px);
                  width: 1170px;
                }
              }
              @media (max-width:1170px) and (min-width: 1000px) {
                #wrap {
                width: calc(100% - 100px);
                margin: 0px auto;
                box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.125);
                }
                .container {
                  max-width: calc(100% - 100px);
                }
              }
            <?php endif; ?>

            <?php if (get_theme_mod('coeur_show_date', true) != true){ ?>
                time.post-meta-date {
                    display: none;
                }
            <?php } ?>

            <?php if (get_theme_mod('template_option', 'classic') == 'material'){ ?>
                .current {
                    background: <?php echo get_theme_mod('material_primary_color', '#e91e63'); ?> !important;
                }
                .navbar-default .navbar-nav > .active > a,
                .navbar-default .navbar-nav > .active > a:hover,
                .navbar-default .navbar-nav > .active > a:focus {
                    color: #BFC3CE !important;
                    border-bottom: 3px solid <?php echo get_theme_mod('material_primary_color', '#e91e63'); ?> !important;
                }
            <?php } ?>
        </style> 

        <?php

        // dynanimically load template styles
        global $wp_customize;
        if(get_theme_mod('template_option', 'classic') != 'classic' && $wp_customize != ''){
            $coeur_template = get_theme_mod('template_option');
            wp_enqueue_style($coeur_template, get_template_directory_uri() . '/framework/css/templates/'. $coeur_template .'.css');
        }
   }

   /**
    * This outputs the javascript needed to automate the live settings preview.
    * Also keep in mind that this function isn't necessary unless your settings 
    * are using 'transport'=>'postMessage' instead of the default 'transport'
    * => 'refresh'
    * 
    * Used by hook: 'customize_preview_init'
    * 
    * @see add_action('customize_preview_init',$func)
    * @since Coeur 2.0
    */
   public static function live_preview() {
      $coeur_active_template = get_theme_mod('template_option', 'classic');
      wp_enqueue_script( 'theme-customizer', get_template_directory_uri() . '/framework/js/customizer-'. $coeur_active_template .'.js', array(  'jquery', 'customize-preview' ), '', true);
   }

    /**
     * This will generate a line of CSS for use in header output. If the setting
     * ($mod_name) has no defined value, the CSS will not be output.
     * 
     * @uses get_theme_mod()
     * @param string $selector CSS selector
     * @param string $style The name of the CSS *property* to modify
     * @param string $mod_name The name of the 'theme_mod' option to fetch
     * @param string $prefix Optional. Anything that needs to be output before the CSS property
     * @param string $postfix Optional. Anything that needs to be output after the CSS property
     * @param bool $echo Optional. Whether to print directly to the page (default: true).
     * @return string Returns a single line of CSS with selectors and a property.
     * @since Coeur 2.0
     */
    public static function generate_css( $selector, $style, $mod_name, $default, $prefix='', $postfix='', $echo=true ) {
      $return = '';
      $mod = get_theme_mod($mod_name);
      if ( ! empty( $mod ) ) {
         $return = sprintf('%s { %s:%s; }',
            $selector,
            $style,
            $prefix.$mod.$postfix
         );
         if ( $echo ) {
            echo $return;
         }
      } elseif( empty( $mod ) && ! empty( $default ) ) {
        $return = sprintf('%s { %s:%s; }',
            $selector,
            $style,
            $prefix.$default.$postfix
         );
         if ( $echo ) {
            echo $return;
         }
      }
      return $return;
    }
}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'Coeur_Customize' , 'register' ) );
// Output custom CSS to live site
add_action( 'wp_head' , array( 'Coeur_Customize' , 'header_output' ) );
// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'Coeur_Customize' , 'live_preview' ) );

if(get_theme_mod('template_option', 'classic') == 'material' && get_header_image() != ''){

add_action('wp_head', 'coeur_material_header_has_background');     

function coeur_material_header_has_background() {
  ?>
  <style type="text/css">
    .navbar-default .navbar-nav > .active > a,
    .navbar-default .navbar-nav > .active > a:hover,
    .navbar-default .navbar-nav > .active > a:focus {
      color: <?php echo get_theme_mod('material_primary_color', '#e91e63'); ?> !important;
    }
  </style>
  <?php
}

}