<?php
/**
 * Wild Themes Customizer
 *
 * @package Lead Education
 *
 * slider section
 */

$wp_customize->add_section(
	'lead_education_slider',
	array(
		'title' => esc_html__( 'Slider Section', 'lead-education' ),
		'panel' => 'lead_education_home_panel',
	)
);

// slider enable settings
$wp_customize->add_setting(
	'lead_education_slider',
	array(
		'sanitize_callback' => 'lead_education_sanitize_select',
		'default' => 'disable'
	)
);

$wp_customize->add_control(
	'lead_education_slider',
	array(
		'section'		=> 'lead_education_slider',
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
	
	// slider page setting
	$wp_customize->add_setting(
		'lead_education_slider_page_'.$i,
		array(
			'sanitize_callback' => 'lead_education_sanitize_dropdown_pages',
			'default' => 0,
		)
	);

	$wp_customize->add_control(
		'lead_education_slider_page_'.$i,
		array(
			'section'		=> 'lead_education_slider',
			'label'			=> esc_html__( 'Page ', 'lead-education' ).$i,
			'type'			=> 'dropdown-pages',
			'active_callback' => 'lead_education_if_slider_page'
		)
	);
}

$wp_customize->add_setting(
	'lead_education_slider_button_label',
	array(	
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> esc_html__( 'Learn More', 'lead-education' ),
	'transport'	=> 'postMessage',
	)
);

$wp_customize->add_control(
	'lead_education_slider_button_label',
	array(
	'label'       => __('Button Label', 'lead-education'),  
	'section'     => 'lead_education_slider',   		
	'type'        => 'text',
	'active_callback'	=> 'lead_education_if_slider_enabled',
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_education_slider_button_label', 
	array(
        'selector'            => '#hero-slider div.read-more a',
		'render_callback'     => 'lead_education_slider_partial_button',
	) 
);
