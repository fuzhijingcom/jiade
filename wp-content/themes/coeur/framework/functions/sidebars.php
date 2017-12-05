<?php
/**
* Register Sidebars
*
* @author Frenchtastic.eu
*/
function coeur_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'coeur' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the right.', 'coeur' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		));
  	register_sidebar( array(
	    'name'          => __( 'Footer Widgets 1 (left)', 'coeur' ),
	    'id'            => 'footer-1',
	    'description'   => __( 'Widgets will appear in the footer area. To hide widgetized area in the footer simply remove all widgets from Footer 1, 2 and 3', 'coeur' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</aside>',
	    'before_title'  => '<h3 class="widget-title">',
	    'after_title'   => '</h3>',
    ));
  	register_sidebar( array(
	    'name'          => __( 'Footer Widgets 2 (center)', 'coeur' ),
	    'id'            => 'footer-2',
	    'description'   => __( 'Widgets will appear in the footer area. To hide widgetized area in the footer simply remove all widgets from Footer 1, 2 and 3', 'coeur' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</aside>',
	    'before_title'  => '<h3 class="widget-title">',
	    'after_title'   => '</h3>',
    ));
  	register_sidebar( array(
	    'name'          => __( 'Footer Widgets 3 (right)', 'coeur' ),
	    'id'            => 'footer-3',
	    'description'   => __( 'Widgets will appear in the footer area. To hide widgetized area in the footer simply remove all widgets from Footer 1, 2 and 3', 'coeur' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</aside>',
	    'before_title'  => '<h3 class="widget-title">',
	    'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'coeur_widgets_init');