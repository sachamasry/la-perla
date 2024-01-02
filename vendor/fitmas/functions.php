<?php
/**
 * fitmas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fitmas
 */

$fitmas_theme_data = wp_get_theme();
/*
 * Define theme version
 */
define( 'FITMAS_VERSION', ( WP_DEBUG ) ? time() : $fitmas_theme_data->get( 'Version' ) );

// Inc folder directory
define( 'FITMAS_INC_DIR', get_template_directory() . '/inc/' );

// Theme Default Setup
require_once FITMAS_INC_DIR . 'theme-setup.php';

//  Register widget area
require_once FITMAS_INC_DIR . 'widget-area-ini.php';
//  Comments Template
require_once FITMAS_INC_DIR . 'comments-template.php';
/**
 * TGM Plugin
 */
require_once FITMAS_INC_DIR . 'plugins-activation.php';
//  Script and Css Load
require_once FITMAS_INC_DIR . 'css-and-js.php';

/** Implement the Custom Header feature.*/
require_once FITMAS_INC_DIR . 'custom-header.php';


/** Functions which enhance the theme by hooking into WordPress */
require_once FITMAS_INC_DIR . 'template-functions.php';
require_once FITMAS_INC_DIR . 'theme-and-options/theme-options/default-theme-options.php';
require_once FITMAS_INC_DIR . 'nav-menu-walker.php';

/** Customizer additions. */
require_once FITMAS_INC_DIR . 'customizer.php';

if ( class_exists( 'CSF' ) ) {
	require_once FITMAS_INC_DIR . 'theme-and-options/metabox-and-options.php';
	require_once FITMAS_INC_DIR . 'inline-css.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

