<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));


	Kirki::add_field( 'theme_config_id', [
		'label'       => esc_html__( 'Logo Size','food-restaurant-elementor' ),
		'section'     => 'title_tagline',
		'priority'    => 9,
		'type'        => 'range',
		'settings'    => 'logo_size',
		'choices' => [
			'step'             => 5,
			'min'              => 0,
			'max'              => 100,
			'aria-valuemin'    => 0,
			'aria-valuemax'    => 100,
			'aria-valuenow'    => 50,
			'aria-orientation' => 'horizontal',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_enable_logo_text',
		'section'     => 'title_tagline',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'food-restaurant-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'food_restaurant_elementor_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'food-restaurant-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'food-restaurant-elementor' ),
			'off' => esc_html__( 'Disable', 'food-restaurant-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'food_restaurant_elementor_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'food-restaurant-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'food-restaurant-elementor' ),
			'off' => esc_html__( 'Disable', 'food-restaurant-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'food-restaurant-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'food_restaurant_elementor_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'food-restaurant-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'food_restaurant_elementor_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );


	// Theme Options Panel
	Kirki::add_panel( 'food_restaurant_elementor_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'food-restaurant-elementor' ),
	) );

	// HEADER SECTION

	Kirki::add_section( 'food_restaurant_elementor_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'food-restaurant-elementor' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'food-restaurant-elementor' ),
	    'panel'    => 'food_restaurant_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'food_restaurant_elementor_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_section_header',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'food-restaurant-elementor' ),
			'off' => esc_html__( 'Disable', 'food-restaurant-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Advertisement Text', 'food-restaurant-elementor' ),
		'settings' => 'food_restaurant_elementor_header_advertisement_text',
		'section'  => 'food_restaurant_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_enable_socail_link',
		'section'     => 'food_restaurant_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'food-restaurant-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'food_restaurant_elementor_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'food-restaurant-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'food-restaurant-elementor' ),
		'settings'     => 'food_restaurant_elementor_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'food-restaurant-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'food-restaurant-elementor' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'food-restaurant-elementor' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'food-restaurant-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'food-restaurant-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'food_restaurant_elementor_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'food-restaurant-elementor' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'food-restaurant-elementor' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'food_restaurant_elementor_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'food-restaurant-elementor' ),
		'settings'    => 'food_restaurant_elementor_shop_page_layout',
		'section'     => 'food_restaurant_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'food-restaurant-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'food-restaurant-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'food_restaurant_elementor_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'food-restaurant-elementor' ),
		'settings'    => 'food_restaurant_elementor_products_per_row',
		'section'     => 'food_restaurant_elementor_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'food-restaurant-elementor' ),
		'settings'    => 'food_restaurant_elementor_products_per_page',
		'section'     => 'food_restaurant_elementor_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'food_restaurant_elementor_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'food-restaurant-elementor' ),
		'settings'    => 'food_restaurant_elementor_single_product_sidebar_layout',
		'section'     => 'food_restaurant_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'food-restaurant-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'food-restaurant-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'food_restaurant_elementor_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_products_button_border_radius_heading',
		'section'     => 'food_restaurant_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'food-restaurant-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'food_restaurant_elementor_products_button_border_radius',
		'section'     => 'food_restaurant_elementor_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_sale_badge_position_heading',
		'section'     => 'food_restaurant_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'food-restaurant-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'food_restaurant_elementor_sale_badge_position',
		'section'     => 'food_restaurant_elementor_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'food-restaurant-elementor' ),
			'left' => esc_html__( 'Left', 'food-restaurant-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_products_sale_font_size_heading',
		'section'     => 'food_restaurant_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'food-restaurant-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'food_restaurant_elementor_products_sale_font_size',
		'section'     => 'food_restaurant_elementor_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );
	
	//ADDITIONAL SETTINGS

	Kirki::add_section( 'food_restaurant_elementor_additional_setting', array(
		'title'          => esc_html__( 'Additional Settings', 'food-restaurant-elementor' ),
		'description'    => esc_html__( 'Additional Settings of themes', 'food-restaurant-elementor' ),
		'panel'    => 'food_restaurant_elementor_theme_options_panel',
		'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'food_restaurant_elementor_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );
 
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'food_restaurant_elementor_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_single_page_layout_heading',
		'section'     => 'food_restaurant_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'food-restaurant-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'food_restaurant_elementor_single_page_layout',
		'section'     => 'food_restaurant_elementor_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'food-restaurant-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'food-restaurant-elementor' ),
			'One Column' => esc_html__( 'One Column', 'food-restaurant-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_header_background_attachment_heading',
		'section'     => 'food_restaurant_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'food-restaurant-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'food_restaurant_elementor_header_background_attachment',
		'section'     => 'food_restaurant_elementor_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'food-restaurant-elementor' ),
			'fixed' => esc_html__( 'Fixed', 'food-restaurant-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_header_overlay_heading',
		'section'     => 'food_restaurant_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'food-restaurant-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'food_restaurant_elementor_header_overlay_setting',
		'label'       => __( 'Overlay Color', 'food-restaurant-elementor' ),
		'type'        => 'color',
		'section'     => 'food_restaurant_elementor_additional_setting',
		'transport' => 'auto',
		'default'     => '#00000061',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'food_restaurant_elementor_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'food_restaurant_elementor_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'food_restaurant_elementor_blog_post', array(
		'title'          => esc_html__( 'Post Settings', 'food-restaurant-elementor' ),
		'description'    => esc_html__( 'Here you can add post information.', 'food-restaurant-elementor' ),
		'panel'    => 'food_restaurant_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_post_layout_heading',
		'section'     => 'food_restaurant_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'food-restaurant-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'food_restaurant_elementor_post_layout',
		'section'     => 'food_restaurant_elementor_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'food-restaurant-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'food-restaurant-elementor' ),
			'One Column' => esc_html__( 'One Column', 'food-restaurant-elementor' ),
			'Three Columns' => esc_html__( 'Three Columns', 'food-restaurant-elementor' ),
			'Four Columns' => esc_html__( 'Four Columns', 'food-restaurant-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'food_restaurant_elementor_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'food_restaurant_elementor_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'food_restaurant_elementor_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'food_restaurant_elementor_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_length_setting_heading',
		'section'     => 'food_restaurant_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'food-restaurant-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'food_restaurant_elementor_length_setting',
		'section'     => 'food_restaurant_elementor_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
		 			'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'food-restaurant-elementor' ),
		'settings'    => 'food_restaurant_elementor_single_post_tag',
		'section'     => 'food_restaurant_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'food-restaurant-elementor' ),
		'settings'    => 'food_restaurant_elementor_single_post_category',
		'section'     => 'food_restaurant_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'food_restaurant_elementor_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_single_post_radius',
		'section'     => 'food_restaurant_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'food-restaurant-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'food_restaurant_elementor_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'food-restaurant-elementor' ),
		'type'        => 'text',
		'section'     => 'food_restaurant_elementor_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

	// No Results Page Settings

	Kirki::add_section( 'food_restaurant_elementor_no_result_section', array(
		'title'          => esc_html__( '404 & No Results Page Settings', 'food-restaurant-elementor' ),
		'panel'    => 'food_restaurant_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_page_not_found_title_heading',
		'section'     => 'food_restaurant_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Title', 'food-restaurant-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'food_restaurant_elementor_page_not_found_title',
		'section'  => 'food_restaurant_elementor_no_result_section',
		'default'  => esc_html__('404 Error!', 'food-restaurant-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_page_not_found_text_heading',
		'section'     => 'food_restaurant_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Text', 'food-restaurant-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'food_restaurant_elementor_page_not_found_text',
		'section'  => 'food_restaurant_elementor_no_result_section',
		'default'  => esc_html__('The page you are looking for may have been moved, deleted, or possibly never existed.', 'food-restaurant-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'     => 'custom',
		'settings' => 'food_restaurant_elementor_page_not_found_line_break',
		'section'  => 'food_restaurant_elementor_no_result_section',
		'default'  => '<hr>',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_no_results_title_heading',
		'section'     => 'food_restaurant_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Title', 'food-restaurant-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'food_restaurant_elementor_no_results_title',
		'section'  => 'food_restaurant_elementor_no_result_section',
		'default'  => esc_html__('Nothing Found', 'food-restaurant-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_no_results_content_heading',
		'section'     => 'food_restaurant_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Content', 'food-restaurant-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'food_restaurant_elementor_no_results_content',
		'section'  => 'food_restaurant_elementor_no_result_section',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'food-restaurant-elementor'),
	] );
	
	// FOOTER SECTION

	Kirki::add_section( 'food_restaurant_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'food-restaurant-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'food-restaurant-elementor' ),
        'panel'    => 'food_restaurant_elementor_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_footer_text_heading',
		'section'     => 'food_restaurant_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'food-restaurant-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'food_restaurant_elementor_footer_text',
		'section'  => 'food_restaurant_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_footer_enable_heading',
		'section'     => 'food_restaurant_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'food-restaurant-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'food_restaurant_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'food-restaurant-elementor' ),
			'off' => esc_html__( 'Disable', 'food-restaurant-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_footer_background_widget_heading',
		'section'     => 'food_restaurant_elementor_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'food-restaurant-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'food_restaurant_elementor_footer_background_widget',
		'type'        => 'background',
		'section'     => 'food_restaurant_elementor_footer_section',
		'default'     => [
			'background-color'      => 'rgba(18,18,18,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_footer_copright_color_heading',
		'section'     => 'food_restaurant_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Background Color', 'food-restaurant-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'food_restaurant_elementor_footer_copright_color',
		'type'        => 'color',
		'label'       => __( 'Background Color', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.footer-copyright',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'food_restaurant_elementor_footer_copright_text_color_heading',
		'section'     => 'food_restaurant_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Text Color', 'food-restaurant-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'food_restaurant_elementor_footer_copright_text_color',
		'type'        => 'color',
		'label'       => __( 'Text Color', 'food-restaurant-elementor' ),
		'section'     => 'food_restaurant_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '.footer-copyright a', '.footer-copyright p'),
				'property' => 'color',
			),
		),
	) );

	load_template( trailingslashit( get_template_directory() ) . '/includes/logo/logo-resizer.php' );
}
