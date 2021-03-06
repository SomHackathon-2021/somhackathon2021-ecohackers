<?php
/**
 * Customizer settings: Global Settings > Google Fonts
 *
 * @package OneStore
 **/

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

$section = 'onestore_section_google_fonts';

/**
 * ====================================================
 * Google Fonts
 * ====================================================
 */

// Google Fonts privacy policy
$wp_customize->add_control( new OneStore_Customize_Control_Blank( $wp_customize, 'notice_google_fonts', array(
	'section'     => $section,
	'settings'    => array(),
	'description' => '<div class="notice notice-warning notice-alt inline"><p>' . esc_html__( 'Google Fonts would be served from Google\'s server. There are chances that visitor\'s data might be collected by Google. If you do not accept this, you can use "Self-Hosted Google Fonts" plugin to self-host the fonts on your own server. &mdash; If you are not using any Google Fonts on your settings, you can ignore this notice.', 'onestore' ) . '</p></div>',
	'priority'    => 10,
) ) );

// Additional subsets
$key = 'google_fonts_subsets';
$wp_customize->add_setting( $key, array(
	'default'     => onestore_array_value( $defaults, $key ),
	'sanitize_callback' => array( 'OneStore_Customizer_Sanitization', 'multiselect' ),
) );
$wp_customize->add_control( new OneStore_Customize_Control_MultiCheck( $wp_customize, $key, array(
	'section'     => $section,
	'label'       => esc_html__( 'Additional character subsets', 'onestore' ),
	'description' => esc_html__( '"Latin" character subset is included by default.', 'onestore' ),
	'choices'     => onestore_get_google_fonts_subsets(),
	'priority'    => 10,
) ) );