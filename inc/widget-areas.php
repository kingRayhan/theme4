<?php
/**
 * Register widget areas
 *
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */

if ( ! function_exists( 'theme4_sidebar_widgets' ) ) :
function theme4_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'theme4' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'theme4' ),
	  'before_widget' => '<div id="%1$s" class="widget sidebar-widget %2$s">',
	  'after_widget' => '</div>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>',
	));

}

add_action( 'widgets_init', 'theme4_sidebar_widgets' );
endif;
