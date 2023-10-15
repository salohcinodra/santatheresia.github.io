<?php
/**
 * Blog/Archive section 
 */
// Blog/Archive section 
$wp_customize->add_section(
	'lead_education_archive_settings',
	array(
		'title' => esc_html__( 'Archive/Blog', 'lead-education' ),
		'description' => esc_html__( 'Settings for archive pages including blog page too.', 'lead-education' ),
		'panel' => 'lead_education_general_panel',
	)
);

// Archive excerpt length setting
$wp_customize->add_setting(
	'lead_education_archive_excerpt_length',
	array(
		'sanitize_callback' => 'lead_education_sanitize_number_range',
		'default' => 20,
	)
);

$wp_customize->add_control(
	'lead_education_archive_excerpt_length',
	array(
		'section'		=> 'lead_education_archive_settings',
		'label'			=> esc_html__( 'Excerpt more length:', 'lead-education' ),
		'type'			=> 'number',
		'input_attrs'   => array( 'min' => 5 ),
	)
);

// Pagination type setting
$wp_customize->add_setting(
	'lead_education_archive_pagination_type',
	array(
		'sanitize_callback' => 'lead_education_sanitize_select',
		'default' => 'numeric',
	)
);

$archive_pagination_description = '';
$archive_pagination_choices = array( 
			'disable' => esc_html__( '--Disable--', 'lead-education' ),
			'numeric' => esc_html__( 'Numeric', 'lead-education' ),
			'older_newer' => esc_html__( 'Older / Newer', 'lead-education' ),
		);

$wp_customize->add_control(
	'lead_education_archive_pagination_type',
	array(
		'section'		=> 'lead_education_archive_settings',
		'label'			=> esc_html__( 'Pagination type:', 'lead-education' ),
		'description'			=>  $archive_pagination_description,
		'type'			=> 'select',
		'choices'		=> $archive_pagination_choices,
	)
);

$wp_customize->add_setting(
	'lead_education_archive_layout',
	array(
		'sanitize_callback' => 'lead_education_sanitize_select',
		'default' => 'col-2',
	)
);

$wp_customize->add_control(
	'lead_education_archive_layout',
	array(
		'section'		=> 'lead_education_archive_settings',
		'label'			=> esc_html__( 'Archive Layout', 'lead-education' ),
		'type'			=> 'select',
		'choices'		=> array(
				'list-layout' 	=> esc_html__( 'List Layout', 'lead-education' ),
				'col-1' 		=> esc_html__( 'Column One', 'lead-education' ),
				'col-2' 		=> esc_html__( 'Column Two', 'lead-education' ),
				'col-3' 		=> esc_html__( 'Column Three', 'lead-education' ),
		),
	)
);