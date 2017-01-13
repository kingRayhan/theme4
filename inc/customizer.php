<?php
/**
 * Customizer
 *
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 *
 * @url https://codex.wordpress.org/Theme_Customization_API
 */
function theme4_customize_register( $wp_customize ) {

	/* Link Color */
	$wp_customize->add_setting(
		'theme4_link_color',
		array(
			'default'     		 => '#3879D9',
			'transport'   		 => 'refresh'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'theme4_link_color',
			array(
			    'label'      => 'Link Color',
			    'section'    => 'colors',
			    'settings'   => 'theme4_link_color'
			)
		)
	);
	/* Link hover Color */
	$wp_customize->add_setting(
		'theme4_link_hover_color',
		array(
			'default'     		 => '#555',
			'transport'   		 => 'refresh'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'theme4_link_hover_color',
			array(
			    'label'      => 'Link Hover Color',
			    'section'    => 'colors',
			    'settings'   => 'theme4_link_hover_color'
			)
		)
	);


	/* Header Background Color */
	$wp_customize->add_setting(
		'theme4_header_background_color',
		array(
			'default'     		 => '#222',
			'transport'   		 => 'refresh'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'theme4_header_background_color',
			array(
			    'label'      => 'Header Background color',
			    'section'    => 'colors',
			    'settings'   => 'theme4_header_background_color'
			)
		)
	);

	/* Header links Color */
	$wp_customize->add_setting(
		'theme4_header_links_color',
		array(
			'default'     		 => '#fff',
			'transport'   		 => 'refresh'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'theme4_header_links_color',
			array(
			    'label'      => 'Header link color',
			    'section'    => 'colors',
			    'settings'   => 'theme4_header_links_color'
			)
		)
	);

	/* Footer background Color */
	$wp_customize->add_setting(
		'theme4_footer_background_color',
		array(
			'default'     		 => '#222',
			'transport'   		 => 'refresh'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'theme4_footer_background_color',
			array(
			    'label'      => 'Footer background color',
			    'section'    => 'colors',
			    'settings'   => 'theme4_footer_background_color'
			)
		)
	);
	/* Footer text Color */
	$wp_customize->add_setting(
		'theme4_footer_text_color',
		array(
			'default'     		 => '#fff',
			'transport'   		 => 'refresh'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'theme4_footer_text_color',
			array(
			    'label'      => 'Footer Text color',
			    'section'    => 'colors',
			    'settings'   => 'theme4_footer_text_color'
			)
		)
	);
	/* Footer link Color */
	$wp_customize->add_setting(
		'theme4_footer_link_color',
		array(
			'default'     		 => '#222',
			'transport'   		 => 'refresh'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'theme4_footer_link_color',
			array(
			    'label'      => 'Footer links color',
			    'section'    => 'colors',
			    'settings'   => 'theme4_footer_link_color'
			)
		)
	);


	$wp_customize->add_section('footer_section',array(
		'title' => 'Footer'
	));
	$wp_customize->add_setting('footer_copyright',array(
		"default" => "Theme4 Wordpress theme by <a href='//rayhan.info' target='_blank'>@KingRayhan</a>",
		"transport" => "refresh"
	));
	$wp_customize->add_control('footer_copyright',array(
		'label' => __('Footer copyright text','cleanblog'),
		'type'  => 'textarea',
		'section' => 'footer_section'
	));

	

}
add_action( 'customize_register', 'theme4_customize_register' );
