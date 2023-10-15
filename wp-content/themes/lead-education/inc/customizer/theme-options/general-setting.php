<?php
/**
 * General settings
 */
// General settings
$wp_customize->add_section(
	'lead_education_general_section',
	array(
		'title' => esc_html__( 'General', 'lead-education' ),
		'panel' => 'lead_education_general_panel',
	)
);

// Breadcrumb enable setting
$wp_customize->add_setting(
	'lead_education_breadcrumb_enable',
	array(
		'sanitize_callback' => 'lead_education_sanitize_checkbox',
		'default' => true,
	)
);

$wp_customize->add_control(
	'lead_education_breadcrumb_enable',
	array(
		'section'		=> 'lead_education_general_section',
		'label'			=> esc_html__( 'Enable breadcrumb.', 'lead-education' ),
		'type'			=> 'checkbox',
	)
);