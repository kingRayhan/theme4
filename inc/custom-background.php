<?php
/**
 * Custom Backgrounds is a theme feature that provides for customization of the background color and image.
 */
function theme4_custom_header_setup() {
	$defaults = array(
		'default-color'          => '',
		'default-image'          => get_template_directory_uri().'/assets/img/background.png',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'default-attachment'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $defaults );
}
add_action( 'after_setup_theme', 'theme4_custom_header_setup' );