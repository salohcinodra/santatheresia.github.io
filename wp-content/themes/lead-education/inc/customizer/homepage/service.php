<?php
/**
 * Wild Themes Customizer
 *
 * @package Lead Education Theme
 *
 * service section
 */

$wp_customize->add_section(
	'lead_education_service',
	array(
		'title' => esc_html__( 'service', 'lead-education' ),
		'panel' => 'lead_education_home_panel',
	)
);

// service enable settings
$wp_customize->add_setting(
	'lead_education_service',
	array(
		'sanitize_callback' => 'lead_education_sanitize_select',
		'default' => 'disable'
	)
);

$wp_customize->add_control(
	'lead_education_service',
	array(
		'section'		=> 'lead_education_service',
		'label'			=> esc_html__( 'Content type:', 'lead-education' ),
		'description'			=> esc_html__( 'Choose where you want to render the content from.', 'lead-education' ),
		'type'			=> 'select',		
		'choices'		=> array( 
				'disable' => esc_html__( '--Disable--', 'lead-education' ),
				'page' => esc_html__( 'Page', 'lead-education' ),
		 	)
	)
);

for ($i=1; $i <= 3; $i++) { 

	// service page setting
	$wp_customize->add_setting(
		'lead_education_service_page_'.$i,
		array(
			'sanitize_callback' => 'lead_education_sanitize_dropdown_pages',
			'default' => 0,
		)
	);

	$wp_customize->add_control(
		'lead_education_service_page_'.$i,
		array(
			'section'		=> 'lead_education_service',
			'label'			=> esc_html__( 'Page ', 'lead-education' ).$i,
			'type'			=> 'dropdown-pages',
			'active_callback' => 'lead_education_if_service_page'
		)
	);
}