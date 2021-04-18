<?php
/**
 * Customizer settings: Header > Search
 *
 * @package OneStore
 **/

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$section = 'onestore_section_header_search';

/**
 * ====================================================
 * Search Bar
 * ====================================================
 */

// Heading: Search Bar
$wp_customize->add_control(
	new OneStore_Customize_Control_Heading(
		$wp_customize,
		'heading_header_search_bar',
		array(
			'section'     => $section,
			'settings'    => array(),
			'label'       => esc_html__( 'Search Bar', 'onestore' ),
			'priority'    => 10,
		)
	)
);

// Search bar width
$key = 'header_search_bar_width';
$wp_customize->add_setting(
	$key,
	array(
		'default'     => onestore_array_value( $defaults, $key ),
		'transport'   => 'postMessage',
		'sanitize_callback' => array( 'OneStore_Customizer_Sanitization', 'dimension' ),
	)
);
$wp_customize->add_control(
	new OneStore_Customize_Control_Dimension(
		$wp_customize,
		$key,
		array(
			'section'     => $section,
			'label'       => esc_html__( 'Bar width', 'onestore' ),
			'units'       => array(
				'px' => array(
					'min'   => 100,
					'step'  => 1,
				),
				'%' => array(
					'min'   => 100,
					'step'  => 1,
				),
			),
			'priority'    => 10,
		)
	)
);

/**
 * ====================================================
 * Search Dropdown
 * ====================================================
 */

// Heading: Search Dropdown
$wp_customize->add_control(
	new OneStore_Customize_Control_Heading(
		$wp_customize,
		'heading_header_search_dropdown',
		array(
			'section'     => $section,
			'settings'    => array(),
			'label'       => esc_html__( 'Search Dropdown', 'onestore' ),
			'priority'    => 20,
		)
	)
);

// Search bar width
$key = 'header_search_dropdown_width';
$wp_customize->add_setting(
	$key,
	array(
		'default'     => onestore_array_value( $defaults, $key ),
		'transport'   => 'postMessage',
		'sanitize_callback' => array( 'OneStore_Customizer_Sanitization', 'dimension' ),
	)
);
$wp_customize->add_control(
	new OneStore_Customize_Control_Dimension(
		$wp_customize,
		$key,
		array(
			'section'     => $section,
			'label'       => esc_html__( 'Dropdown width', 'onestore' ),
			'units'       => array(
				'px' => array(
					'min'   => 100,
					'step'  => 1,
				),
			),
			'priority'    => 20,
		)
	)
);

/**
 * ====================================================
 * OneStore Pro Upsell
 * ====================================================
 */

if ( onestore_show_pro_teaser() ) {
	$wp_customize->add_control(
		new OneStore_Customize_Control_Pro_Teaser(
			$wp_customize,
			'pro_teaser_header_search',
			array(
				'section'     => $section,
				'settings'    => array(),
				'label'       => esc_html_x( 'More Options Available', 'OneStore Plus upsell', 'onestore' ),
				'url'         => esc_url(
					add_query_arg(
						array(
							'utm_source' => 'onestore-customizer',
							'utm_medium' => 'learn-more',
							'utm_campaign' => 'theme-upsell',
						),
						ONESTORE_PLUS_URL
					)
				),
				'features'    => array(
					esc_html_x( 'WooCommerce Products Search', 'OneStore Plus upsell', 'onestore' ),
				),
				'priority'    => 90,
			)
		)
	);
}
