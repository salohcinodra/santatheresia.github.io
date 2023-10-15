<?php
/**
 *
 *
 * Footer copyright
 *
 *
 */
// Footer copyright
$wp_customize->add_section(
	'lead_education_footer_section',
	array(
		'title' => esc_html__( 'Footer', 'lead-education' ),
		'panel' => 'lead_education_general_panel',
	)
);

// Footer copyright setting
$wp_customize->add_setting(
	'lead_education_copyright_txt',
	array(
		'sanitize_callback' => 'lead_education_sanitize_html',
		'default' => $default['lead_education_copyright_txt'],
	)
);

$wp_customize->add_control(
	'lead_education_copyright_txt',
	array(
		'section'		=> 'lead_education_footer_section',
		'label'			=> esc_html__( 'Copyright text:', 'lead-education' ),
		'type'			=> 'textarea',
	)
);
