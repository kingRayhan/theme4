<?php
/**
 * The sidebar containing the main widget area
 *
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'ELECTRON_THEME_SLUG_NAME_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'ELECTRON_THEME_SLUG_NAME_after_sidebar' ); ?>
</aside>
