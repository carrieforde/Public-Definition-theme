<?php
/**
 * Public Definition functions and definitions.
 */

define( 'PUBLIC_DEFINITION_VERSION', '1.0.0' );
define( 'PUBLIC_DEFINITION_PATH', trailingslashit( get_stylesheet_directory() ) );
define( 'PUBLIC_DEFINITION_URL', trailingslashit( get_stylesheet_directory_uri() ) );

add_action( 'wp_enqueue_scripts', 'pd_enqueue_scripts', 15 );
/**
 * Enqueue scripts and stylesheets.
 */
function pd_enqueue_scripts() {

	$google_fonts = '//fonts.googleapis.com/css?family=Montserrat:500|Open+Sans:300,300i,600,600i';
	$google_fonts = str_replace( ',', '%2C', $google_fonts );
	$min          = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '': '.min';

	// Google fonts.
	wp_enqueue_style(
		'google-fonts',
		$google_fonts,
		array(),
		PUBLIC_DEFINITION_VERSION
	);

	// Include this theme's stylesheet.
	wp_enqueue_style(
		'public-definition-style',
		PUBLIC_DEFINITION_URL . 'style' . $min . '.css',
		array(),
		PUBLIC_DEFINITION_VERSION
	);

	// Include this theme's JS.
	wp_enqueue_script(
		'public-definition-scripts',
		PUBLIC_DEFINITION_URL . 'assets/scripts/public-definition-theme' . $min . 'js',
		array( 'jquery' ),
		PUBLIC_DEFINITION_VERSION
	);
}

add_filter( 'upload_mimes', 'pd_allow_svg_upload' );
/**
 * Allow SVG to be uploaded through media upload.
 *
 * @author  Carrie Forde
 *
 * @param   array  $mimes  The allowed mime types.
 * @return  array  $mimes  The array of mime types.
 */
function pd_allow_svg_upload( $mimes ) {

	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

require_once PUBLIC_DEFINITION_PATH . '/inc/template-tags.php';
