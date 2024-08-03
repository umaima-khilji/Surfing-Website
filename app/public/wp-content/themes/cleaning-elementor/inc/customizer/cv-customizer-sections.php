<?php
/**
 * Cleaning Elementor manage the Customizer sections.
 *
 * @subpackage cleaning-elementor
 * @since 1.0 
 */

/**
 * Top Header Options
 */
Kirki::add_section( 'cleaning_elementor_top_header_section_content', array(
	'title'    => __( 'Top Header Options', 'cleaning-elementor' ),
	'panel'    => 'cleaning_elementor_options_panel',
	'description' => __( 'Personalize the settings top header.', 'cleaning-elementor' ),
	'priority' => 5,
) );

/**
 * General Options
 */
Kirki::add_section( 'cleaning_elementor_general_section_content', array(
	'title'    => __( 'General Options', 'cleaning-elementor' ),
	'panel'    => 'cleaning_elementor_options_panel',
	'description' => __( 'Personalize the settings of your theme.', 'cleaning-elementor' ),
	'priority' => 8,
) );

/**
 * Layout Options
 */
Kirki::add_section( 'cleaning_elementor_layout_section_content', array(
	'title'    => __( 'Layout Options', 'cleaning-elementor' ),
	'panel'    => 'cleaning_elementor_options_panel',
	'description' => __( 'Personalize the layout settings of your theme.', 'cleaning-elementor' ),
	'priority' => 10,
) );

/**
 * Blog Post Options
 */
Kirki::add_section( 'cleaning_elementor_blog_post_section_content', array(
	'title'    => __( 'Blog Post Options', 'cleaning-elementor' ),
	'panel'    => 'cleaning_elementor_options_panel',
	'description' => __( 'Setting will also apply on archieve and search page.', 'cleaning-elementor' ),
	'priority' => 12,
) );

/**
 * Single Post Options
 */
Kirki::add_section( 'cleaning_elementor_single_post_section_content', array(
	'title'    => __( 'Single Post Options', 'cleaning-elementor' ),
	'panel'    => 'cleaning_elementor_options_panel',
	'description' => __( 'Setting will apply on the content of single posts.', 'cleaning-elementor' ),
	'priority' => 14,
) );

/**
 * Footer Options
 */
Kirki::add_section( 'cleaning_elementor_footer_section_content', array(
	'title'    => __( 'Footer Options', 'cleaning-elementor' ),
	'panel'    => 'cleaning_elementor_options_panel',
	'description' => __( 'Personalize the footer settings of your theme.', 'cleaning-elementor' ),
	'priority' => 16,
) );

/**
 * Advance Options
 */
Kirki::add_section( 'cleaning_elementor_advance_option_content', array(
	'title'    => __( 'Advance Options', 'cleaning-elementor' ),
	'panel'    => 'cleaning_elementor_options_panel',
	'description' => __( 'Personalize the Advance settings of your theme.', 'cleaning-elementor' ),
	'priority' => 18,
) );