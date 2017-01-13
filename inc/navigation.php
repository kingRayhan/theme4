<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */

require 'theme4-nav-walker.php';

/**
* Registers a navigation menu location for a theme.
*
* @since 3.0.0
*
* @param string $location    Menu location identifier, like a slug.
* @param string $description Menu location descriptive text.
*/
register_nav_menus( array(
	'menu-1' => esc_html__( 'Primary', 'theme4' ),
) );




function headerMenu(){ ?>
	<?php 
	$menu = array(
		'theme_location' => 'menu-1',
		'menu_class' => 'Lorem',
		'menu_id' => 'menuclass',
		'walker' => new theme4_nav_walker()
	);
	wp_nav_menu($menu); ?>
<?php }