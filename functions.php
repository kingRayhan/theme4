<?php
/**
 * Author: KingRayhan
 * URL: http://rayhan.info
 *
 * ElectronPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */


/**
 * text domain: theme4
 * theme slug: theme4
 */



/** Register all navigation menus */
require_once( 'inc/navigation.php' );

/** Create widget areas in sidebar and footer */
require_once( 'inc/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'inc/entry-meta.php' );

/** Enqueue scripts */
require_once( 'inc/enqueue-scripts.php' );

/** Add theme support */
require_once( 'inc/theme-support.php' );

/** Custom Background */
require_once( '/inc/custom-background.php' );

/** Customizer */
require_once( '/inc/customizer.php' );

/** Libries */
require_once( '/lib/init.php' );



/** Template Tags */
require_once('inc/template-tags.php');

/** Configure responsive image sizes */
require_once( 'inc/image-sizes.php' );

