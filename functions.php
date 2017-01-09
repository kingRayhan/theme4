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
 * text domain: ELECTRON_THEME_TEXT_DOMAIN
 * theme slug: ELECTRON_THEME_SLUG_NAME
 */



/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );



/** Configure responsive image sizes */
require_once( 'library/image-sizes.php' );

