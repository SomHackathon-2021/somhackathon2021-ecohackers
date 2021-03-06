<?php
/**
 * Customizer settings: WooCommerce > Checkout
 *
 * @package OneStore
 **/

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$section = 'woocommerce_checkout'; // Assumed

/**
 * ====================================================
 * Layout
 * ====================================================
 */

// Heading: Layout
$wp_customize->add_control(
	new OneStore_Customize_Control_Heading(
		$wp_customize,
		'heading_woocommerce_checkout_layout',
		array(
			'section'     => $section,
			'settings'    => array(),
			'label'       => esc_html__( 'Layout', 'onestore' ),
			'priority'    => 20,
		)
	)
);

// Layout
$key = 'woocommerce_checkout_layout';
$wp_customize->add_setting(
	$key,
	array(
		'default'     => onestore_array_value( $defaults, $key ),
		'sanitize_callback' => array( 'OneStore_Customizer_Sanitization', 'select' ),
	)
);
$wp_customize->add_control(
	new OneStore_Customize_Control_RadioImage(
		$wp_customize,
		$key,
		array(
			'section'     => $section,
			'label'       => esc_html__( 'Layout', 'onestore' ),
			'choices'     => array(
				'default' => array(
					'label' => esc_html__( 'Default', 'onestore' ),
					'image' => ONESTORE_IMAGES_URL . '/customizer/woocommerce-checkout-layout--default.svg',
				),
				'2-columns' => array(
					'label' => esc_html__( '2 Columns', 'onestore' ),
					'image' => ONESTORE_IMAGES_URL . '/customizer/woocommerce-checkout-layout--2-columns.svg',
				),
			),
			'priority'    => 20,
		)
	)
);


$key = 'woocommerce_checkout_width';
$wp_customize->add_setting(
	$key,
	array(
		'default'     => onestore_array_value( $defaults, $key ),
		'transport'   => 'postMessage',
		'sanitize_callback' => array( 'OneStore_Customizer_Sanitization', 'dimension' ),
	)
);
$wp_customize->add_control(
	new OneStore_Customize_Control_Slider(
		$wp_customize,
		$key,
		array(
			'section'     => $section,
			'label'       => esc_html__( 'Checkout max width', 'onestore' ),
			'units'       => array(
				'px' => array(
					'min'  => 0,
					'max'  => 1400,
					'step' => 1,
				),
			),
			'priority'    => 15,
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
			'pro_teaser_woocommerce_checkout',
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
					esc_html_x( 'Distraction Free Mode', 'OneStore Plus upsell', 'onestore' ),
				),
				'priority'    => 90,
			)
		)
	);
}
