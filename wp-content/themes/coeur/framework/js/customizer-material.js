/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	// General

	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '#site-title a' ).html( newval );
		} );
	} );
	
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '.site-description' ).html( newval );
		} );
	} );

	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('.navbar-default .navbar-nav > li > a, .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover').css('color', newval );
		} );
	} );

	wp.customize( 'headings_weight', function( value ) {
		value.bind( function( newval ) {
			$('h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a').css('font-weight', newval );
			$('h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6').css('font-weight', newval );
		} );
	} );

	wp.customize( 'headings_font', function( value ) {
		value.bind( function( newval ) {
			$('h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a, h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6').css('font-family', newval );
		} );
	} );

	wp.customize( 'body_font', function( value ) {
		value.bind( function( newval ) {
			$('body').css('font-family', newval );
		} );
	});

	wp.customize( 'inner_background_color', function( value ) {
		value.bind( function( newval ) {
			$('#wrap').css('background', newval );
		} );
	});

	// Material

	wp.customize( 'material_header_background_color', function( value ) {
		value.bind( function( newval ) {
			$('.blog-header').css('background', newval );
		} );
	} );

	wp.customize( 'material_link_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('.widget>ul>li>a, p>a').css('color', newval );
		} );
	} );

	wp.customize( 'material_header_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('.navbar-default .navbar-nav > li > a, .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover').css('color', newval );
		} );
	} );

} )( jQuery );
