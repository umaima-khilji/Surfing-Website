<?php
/**
 * Cleaning Elementor manage the Customizer panels.
 *
 * @subpackage cleaning-elementor
 * @since 1.0 
 */

/**
 * General Settings Panel
 */
Kirki::add_panel( 'cleaning_elementor_general_panel', array(
	'priority' => 10,
	'title'    => __( 'General Settings', 'cleaning-elementor' ),
) );

/**
 * Cleaning Elementor Options
 */
Kirki::add_panel( 'cleaning_elementor_options_panel', array(
	'priority' => 20,
	'title'    => __( 'Cleaning Elementor Theme Options', 'cleaning-elementor' ),
) );