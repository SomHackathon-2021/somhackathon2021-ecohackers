<?php
/**
 * Customizer settings: Global Settings > Social Media URLs
 *
 * @package OneStore
 **/

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$section = 'onestore_section_social';

/**
 * ====================================================
 * Links
 * ====================================================
 */

$links = onestore_get_social_media_types();
ksort( $links );

foreach ( $links as $slug => $label ) {
	// Social media link
	$key = 'social_' . $slug;
	$wp_customize->add_setting(
		$key,
		array(
			'default'     => onestore_array_value( $defaults, $key ),
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		$key,
		array(
			'section'     => $section,
			'label'       => $label,
			'priority'    => 10,
		)
	);
}

/**
 * ====================================================
 * OneStore Pro Upsell
 * ====================================================
 */

if ( onestore_show_pro_teaser() ) {
	$wp_customize->add_control(
		new OneStore_Customize_Control_Pro_Teaser(
			$wp_customize,
			'pro_teaser_social_icons',
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
					esc_html_x( 'Replace default social icons with custom icons', 'OneStore Plus upsell', 'onestore' ),
					esc_html_x( 'Add more (custom) social icons', 'OneStore Plus upsell', 'onestore' ),
				),
				'priority'    => 90,
			)
		)
	);
}
