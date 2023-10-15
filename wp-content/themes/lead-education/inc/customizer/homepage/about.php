<?php
/**
 * Wild Themes Customizer
 *
 * @package Lead Education
 *
 * about section
 */
$wp_customize->add_section(
	'lead_education_about',
	array(
		'title' => esc_html__( 'About', 'lead-education' ),
		'panel' => 'lead_education_home_panel',
	)
);

// blog enable settings
$wp_customize->add_setting(
	'lead_education_about',
	array(
		'sanitize_callback' => 'lead_education_sanitize_select',
		'default' => 'disable',
	)
);
$wp_customize->add_control(
	'lead_education_about',
	array(
		'section'		=> 'lead_education_about',
		'label'			=> esc_html__( 'Content type:', 'lead-education' ),
		'description'			=> esc_html__( 'Choose where you want to render the content from.', 'lead-education' ),
		'type'			=> 'select',
		'choices'		=> array(
				'disable' => esc_html__( '--Disable--', 'lead-education' ),
				'page' => esc_html__( 'Page', 'lead-education' ),
		 	)
	)
);

$wp_customize->add_setting(
	'lead_education_about_sub_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => esc_html__( 'About Us', 'lead-education' ),
		'transport'	=> 'postMessage',
	)
);

$wp_customize->add_control(
	'lead_education_about_sub_title',
	array(
		'section'		=> 'lead_education_about',
		'label'			=> esc_html__( 'Sub Title:', 'lead-education' ),
		'active_callback'	=> 'lead_education_if_about_enabled',
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_education_about_sub_title', 
	array(
        'selector'            => '#about p.section-subtitle',
		'render_callback'     => 'lead_education_about_partial_subtitle',
	) 
);

for ($i=1; $i <= 1 ; $i++) {

	// blog page setting
	$wp_customize->add_setting(
		'lead_education_about_page_'.$i,
		array(
			'sanitize_callback' => 'lead_education_sanitize_dropdown_pages',
			'default' => 0,
		)
	);
	$wp_customize->add_control(
		'lead_education_about_page_'.$i,
		array(
			'section'		=> 'lead_education_about',
			'label'			=> esc_html__( 'Page ', 'lead-education' ).$i,
			'type'			=> 'dropdown-pages',
			'active_callback' => 'lead_education_if_about_page'
		)
	);
}