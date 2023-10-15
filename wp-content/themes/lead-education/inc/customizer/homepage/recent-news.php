<?php
/**
 * Wild Themes Customizer
 *
 * @package Lead Education
 *
 * recent_news section
 */

$wp_customize->add_section(
	'lead_education_recent_news',
	array(
		'title' => esc_html__( 'Blog Section', 'lead-education' ),
		'panel' => 'lead_education_home_panel',
	)
);

// recent_news enable settings
$wp_customize->add_setting(
	'lead_education_recent_news',
	array(
		'sanitize_callback' => 'lead_education_sanitize_select',
		'default' => 'disable'
	)
);

$wp_customize->add_control(
	'lead_education_recent_news',
	array(
		'section'		=> 'lead_education_recent_news',
		'label'			=> esc_html__( 'Content type:', 'lead-education' ),
		'description'			=> esc_html__( 'Choose where you want to render the content from.', 'lead-education' ),
		'type'			=> 'select',
		'choices'		=> array( 
				'disable' => esc_html__( '--Disable--', 'lead-education' ),
				'page' => esc_html__( 'Page', 'lead-education' ),
				'cat' => esc_html__( 'Category', 'lead-education' ),
		 	)
	)
);

$wp_customize->add_setting(
	'lead_education_recent_news_sub_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'	=> 'postMessage',
		'default'	=>  __('Recent News', 'lead-education'),
	)
);

$wp_customize->add_control(
	'lead_education_recent_news_sub_title',
	array(
		'section'		=> 'lead_education_recent_news',
		'label'			=> esc_html__( 'Sub Title:', 'lead-education' ),
		'active_callback' => 'lead_education_if_recent_news_enabled',
		
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_education_recent_news_sub_title', 
	array(
        'selector'            => '#recent-news p.section-subtitle',
		'render_callback'     => 'lead_education_recent_news_partial_sub_title',
	) 
);

$wp_customize->add_setting(
	'lead_education_recent_news_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'	=> 'postMessage',
		'default'	=>  __('Choose Your Perfect Plan', 'lead-education'),
	)
);

$wp_customize->add_control(
	'lead_education_recent_news_title',
	array(
		'section'		=> 'lead_education_recent_news',
		'label'			=> esc_html__( 'Title:', 'lead-education' ),		
		'active_callback' => 'lead_education_if_recent_news_enabled',
		
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_education_recent_news_title', 
	array(
        'selector'            => '#recent-news h2.section-title',
		'render_callback'     => 'lead_education_recent_news_partial_title',
	) 
);

for ($i=1; $i <= 6; $i++) { 

	// recent_news page setting
	$wp_customize->add_setting(
		'lead_education_recent_news_page_'.$i,
		array(
			'sanitize_callback' => 'lead_education_sanitize_dropdown_pages',
			'default' => 0,
		)
	);

	$wp_customize->add_control(
		'lead_education_recent_news_page_'.$i,
		array(
			'section'		=> 'lead_education_recent_news',
			'label'			=> esc_html__( 'Page ', 'lead-education' ).$i,
			'type'			=> 'dropdown-pages',
			'active_callback' => 'lead_education_if_recent_news_page'
		)
	);
}

// recent_news category setting
$wp_customize->add_setting(
	'lead_education_recent_news_cat',
	array(
		'sanitize_callback' => 'lead_education_sanitize_select',
	)
);

$wp_customize->add_control(
	'lead_education_recent_news_cat',
	array(
		'section'		=> 'lead_education_recent_news',
		'label'			=> esc_html__( 'Category:', 'lead-education' ),
		'active_callback' => 'lead_education_if_recent_news_cat',
		'type'			=> 'select',
		'choices'		=> lead_education_get_post_cat_choices(),
	)
);
