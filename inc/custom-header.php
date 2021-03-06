<?php

# Call late so child themes can override.
add_action( 'after_setup_theme', 'vaidusworld_custom_header_setup', 15 );

/**
 * Adds support for the WordPress 'custom-header' theme feature and registers custom headers.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function vaidusworld_custom_header_setup() {

	add_theme_support(
		'custom-header',
		array(
			'default-image'          => '',
			'random-default'         => false,
			'width'                  => 600,
			'height'                 => 128,
			'flex-height'            => true,
			'header-text'            => false,
			'uploads'                => true,
			'wp-head-callback'       => 'vaidusworld_custom_header_wp_head'
		)
	);

	// Registers default headers for the theme.
	//register_default_headers();
}

/**
 * Callback function for outputting the custom header CSS to `wp_head`.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function vaidusworld_custom_header_wp_head() {

	$header_image = get_header_image();

	$style = "body.custom-header #branding {  }";
	$style = sprintf( 'body.custom-header #branding { background: url(%1$s) center center no-repeat !important; text-indent: -9999px;background-size: %2$dpx %3$dpx !important; min-height: %3$dpx}', esc_url( $header_image ), absint( get_custom_header()->width / 2 ), absint( get_custom_header()->height / 2 ) );

	echo "\n" . '<style type="text/css" id="custom-header-css">' . trim( $style ) . '</style>' . "\n";
}
