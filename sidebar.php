<?php
/**
 * The sidebar containing the main widget area
 *
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'theme4_before_sidebar' ); ?>
	<div id="sidebar">

		<?php dynamic_sidebar('sidebar-widgets'); ?>
		
	</div>
	<?php do_action( 'theme4_after_sidebar' ); ?>
</aside>
