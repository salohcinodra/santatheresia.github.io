<?php
/**
 * Global Layout
 */
// Global Layout
$wp_customize->add_section(
	'lead_education_global_layout',
	array(
		'title' => esc_html__( 'Global Layout', 'lead-education' ),
		'panel' => 'lead_education_general_panel',
	)
);

// Global archive layout setting
$wp_customize->add_setting(
	'lead_education_archive_sidebar',
	array(
		'sanitize_callback' => 'lead_education_sanitize_select',
		'default' => 'right',
	)
);

$wp_customize->add_control(
	'lead_education_archive_sidebar',
	array(
		'section'		=> 'lead_education_global_layout',
		'label'			=> esc_html__( 'Archive Sidebar', 'lead-education' ),
		'description'			=> esc_html__( 'This option works on all archive pages like: 404, search, date, category, "Your latest posts" and so on.', 'lead-education' ),
		'type'			=> 'radio',
		'choices'		=> array( 
			'right' => esc_html__( 'Right', 'lead-education' ), 
			'no' => esc_html__( 'No Sidebar', 'lead-education' ), 
		),
	)
);

// Global page layout setting
$wp_customize->add_setting(
	'lead_education_global_page_layout',
	array(
		'sanitize_callback' => 'lead_education_sanitize_select',
		'default' => 'right',
	)
);

$wp_customize->add_control(
	'lead_education_global_page_layout',
	array(
		'section'		=> 'lead_education_global_layout',
		'label'			=> esc_html__( 'Global page sidebar', 'lead-education' ),
		'description'			=> esc_html__( 'This option works only on single pages including "Posts page". This setting can be overridden for single page from the metabox too.', 'lead-education' ),
		'type'			=> 'radio',
		'choices'		=> array( 
			'right' => esc_html__( 'Right', 'lead-education' ), 
			'no' => esc_html__( 'No Sidebar', 'lead-education' ), 
		),
	)
);

// Global post layout setting
$wp_customize->add_setting(
	'lead_education_global_post_layout',
	array(
		'sanitize_callback' => 'lead_education_sanitize_select',
		'default' => 'right',
	)
);

$wp_customize->add_control(
	'lead_education_global_post_layout',
	array(
		'section'		=> 'lead_education_global_layout',
		'label'			=> esc_html__( 'Global post sidebar', 'lead-education' ),
		'description'			=> esc_html__( 'This option works only on single posts. This setting can be overridden for single post from the metabox too.', 'lead-education' ),
		'type'			=> 'radio',
		'choices'		=> array( 
			'right' => esc_html__( 'Right', 'lead-education' ), 
			'no' => esc_html__( 'No Sidebar', 'lead-education' ), 
		),
	)
);