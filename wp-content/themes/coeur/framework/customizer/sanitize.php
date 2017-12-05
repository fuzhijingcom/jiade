<?php
/**
* Sanitize Template Option
*
* @since Coeur 3.0
*
* @param string $template type.
* @return string Filtered template type (classic|flat).
*/
function coeur_sanitize_template( $template ) {
    if ( ! in_array( $template, array( 'classic', 'flat', 'material' ) ) ) {
        $template = 'classic';
    }

    return $template;
}
// -----------------------------------------------------------------------------

/**
 * Sanitize Checkbox
 * 
 * @since 0.1
 * @access public
 * @param mixed $input
 * @return int|bool
 */
function coeur_sanitize_checkbox( $input ) {
    if ( $input ) {
    $output = true;
    } else {
    $output = false;
    }
    return $output;
}
// -----------------------------------------------------------------------------

/**
* Sanitize layout options
*
* @since Coeur 2.0.2
*
* @param string $layout Layout type.
* @return string Filtered layout type (left|full_width|right).
*/
function coeur_sanitize_layout( $layout ) {
    if ( ! in_array( $layout, array( 'left', 'full_width', 'right' ) ) ) {
        $layout = 'right';
    }

    return $layout;
}
// -----------------------------------------------------------------------------

/**
* Sanitize site width
*
* @since Coeur 2.0.2
*
* @param string $width Width type.
* @return string Filtered Width type (970px|1170px).
*/
function coeur_sanitize_width( $width ) {
    if ( ! in_array( $width, array( '970px', '1170px' ) ) ) {
        $width = '970px';
    }

    return $width;
}
// -----------------------------------------------------------------------------

/**
* Sanitize container style
*
* @since Coeur 3.1
*
* @param string $width Width type.
* @return string Filtered Width type (970px|1170px).
*/
function coeur_sanitize_container_style( $width ) {
    if ( ! in_array( $width, array( 'full_width', 'boxed' ) ) ) {
        $width = 'full_width';
    }

    return $width;
}
// -----------------------------------------------------------------------------

/**
* Sanitize site font
*
* @since Coeur 2.0.2
*
* @param string $font font type.
* @return string Filtered font type (Helvetica Neue|Open Sans|Arial|Comic Sans MS|Times New Roman|Verdana|Fantasy|Monospace|Cursive|Serif|Courier|Monaco).
*/
function coeur_sanitize_fontfamily( $font ) {
    if ( ! in_array( $font, array( 'Helvetica Neue', 'Open Sans', 'Arial', 'Comic Sans MS', 'Times New Roman', 'Verdana', 'Fantasy', 'Monospace', 'Cursive', 'Serif', 'Courier', 'Monaco' ) ) ) {
        $font = 'Helvetica Neue';
    }

    return $font;
}
// -----------------------------------------------------------------------------

/**
* Sanitize blog content
*
* @since Coeur 2.0.2
*
* @param string $content content type.
* @return string Filtered content type (content|excerpt).
*/
function coeur_sanitize_content( $content ) {
    if ( ! in_array( $content, array( 'content', 'excerpt' ) ) ) {
        $content = 'excerpt';
    }

    return $content;
}
// -----------------------------------------------------------------------------

/**
* Sanitize font weight
*
* @since Coeur 2.0.2
*
* @param string $weight weight type.
* @return string Filtered weight type (100|400|700|900).
*/
function coeur_sanitize_weight( $weight ) {
    if ( ! in_array( $weight, array( '100', '400', '700', '900' ) ) ) {
        $weight = '100';
    }

    return $weight;
}
// -----------------------------------------------------------------------------

/**
* Sanitize 'show menu on single pages option'
*
* @since Coeur 2.0.2
*
* @param string $show show type.
* @return string Filtered show type (yes|no).
*/
function coeur_sanitize_menusingle( $show ) {
    if ( ! in_array( $show, array( 'yes', 'no' ) ) ) {
        $show = 'no';
    }

    return $show;
}
// -----------------------------------------------------------------------------

/**
* Sanitize comment dropdown
*
* @since Coeur 2.0.6
* 
* @param string $dropdown_option show type.
* @return string Filtered show type (none|block).
*/
function coeur_sanitize_comment_dropdown( $dropdown_option ) {
    if ( ! in_array( $dropdown_option, array( 'none', 'block' ) ) ) {
        $dropdown_option = 'none';
    }

    return $dropdown_option;
}
// -----------------------------------------------------------------------------

/**
* Sanitize footer copyright text field
*
* @since Coeur 3.0.2
*
* @param string $html
*/
function coeur_sanitize_footer_copyright( $html ) {
    
    if( $html != '' ){
        $html = wp_kses( $html, array( 
        'a' => array(
            'href' => array(),
            'title' => array()
        ),
        'b' => array(),
        'em' => array(),
        'strong' => array(),
        ));
    } else {
        $html = 'Powered by <a href="'.esc_url('https://jumpstarter.io/frenchtastic/coeur').'">Coeur</a>';
    }
    

    return $html;
}
// -----------------------------------------------------------------------------