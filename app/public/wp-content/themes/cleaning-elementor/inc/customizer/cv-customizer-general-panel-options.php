<?php
/**
 * Cleaning Elementor manage the Customizer options of general panel.
 *
 * @subpackage cleaning-elementor
 * @since 1.0 
 */
Kirki::add_field(
	'cleaning_elementor_config', array(
		'type'        => 'checkbox',
		'settings'    => 'cleaning_elementor_home_posts',
		'label'       => esc_attr__( 'Checked to hide latest posts in homepage.', 'cleaning-elementor' ),
		'section'     => 'static_front_page',
		'default'     => true,
	)
);
