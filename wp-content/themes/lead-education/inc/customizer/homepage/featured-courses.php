<?php
/**
 * Lead Education Customizer
 *
 * @package Lead Education
 *
 * featured_courses section
 */

$wp_customize->add_section(
	'lead_education_featured_courses',
	array(
		'title' => esc_html__( 'Featured Courses Section', 'lead-education' ),
		'panel' => 'lead_education_home_panel',
	)
);

// featured_courses enable settings
$wp_customize->add_setting(
	'lead_education_featured_courses',
	array(
		'sanitize_callback' => 'lead_education_sanitize_select',
		'default' => 'disable'
	)
);

$wp_customize->add_control(
	'lead_education_featured_courses',
	array(
		'section'		=> 'lead_education_featured_courses',
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
	'lead_education_featured_courses_sub_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'	=> 'postMessage',
		'default'	=>  __('Our Courses', 'lead-education'),
	)
);

$wp_customize->add_control(
	'lead_education_featured_courses_sub_title',
	array(
		'section'		=> 'lead_education_featured_courses',
		'label'			=> esc_html__( 'Sub Title:', 'lead-education' ),
		'active_callback' => 'lead_education_if_featured_courses_enabled',
		
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_education_featured_courses_sub_title', 
	array(
        'selector'            => '#featured-courses p.section-subtitle',
		'render_callback'     => 'lead_education_featured_courses_partial_sub_title',
	) 
);

$wp_customize->add_setting(
	'lead_education_featured_courses_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'	=> 'postMessage',
		'default'	=>  __('Choose Your Perfect Plan', 'lead-education'),
	)
);

$wp_customize->add_control(
	'lead_education_featured_courses_title',
	array(
		'section'		=> 'lead_education_featured_courses',
		'label'			=> esc_html__( 'Title:', 'lead-education' ),		
		'active_callback' => 'lead_education_if_featured_courses_enabled',
		
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_education_featured_courses_title', 
	array(
        'selector'            => '#featured-courses h2.section-title',
		'render_callback'     => 'lead_education_featured_courses_partial_title',
	) 
);

for ($i=1; $i <= 3; $i++) { 

	// featured_courses page setting
	$wp_customize->add_setting(
		'lead_education_featured_courses_page_'.$i,
		array(
			'sanitize_callback' => 'lead_education_sanitize_dropdown_pages',
			'default' => 0,
		)
	);

	$wp_customize->add_control(
		'lead_education_featured_courses_page_'.$i,
		array(
			'section'		=> 'lead_education_featured_courses',
			'label'			=> esc_html__( 'Page ', 'lead-education' ).$i,
			'type'			=> 'dropdown-pages',
			'active_callback' => 'lead_education_if_featured_courses_page'
		)
	);
}

