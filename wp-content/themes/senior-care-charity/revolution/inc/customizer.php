<?php
/**
 * Senior Care Charity Theme Customizer
 *
 * @package Senior Care Charity
 */

function senior_care_charity_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'senior_care_charity_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'senior_care_charity_customize_partial_blogdescription',
			)
		);
	}

	/*
    * Theme Options Panel
    */
	$wp_customize->add_panel('senior_care_charity_panel', array(
		'priority' => 25,
		'capability' => 'edit_theme_options',
		'title' => __('Senior Care Charity Theme Options', 'senior-care-charity'),
	));

	/*
	* Customizer top header section
	*/
	/*Top Header Options*/
	$wp_customize->add_section('senior_care_charity_header_section', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Top Header Options', 'senior-care-charity'),
		'panel'       => 'senior_care_charity_panel',
	));

	/*Top header section enable*/
	$wp_customize->add_setting(
		'senior_care_charity_enable_top_header',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'senior_care_charity_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_enable_top_header',
		array(
			'label'       => __('Enable Top Header', 'senior-care-charity'),
			'description' => __('Checked to show the top header section.', 'senior-care-charity'),
			'section'     => 'senior_care_charity_header_section',
			'type'        => 'checkbox',
		)
	);

	/*Location*/
	$wp_customize->add_setting(
		'senior_care_charity_location_text_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_location_text_option',
		array(
			'label'       => __('Edit Location Text', 'senior-care-charity'),
			'section'     => 'senior_care_charity_header_section',
			'type'        => 'text',
		)
	);

	/*Phone Number*/
	$wp_customize->add_setting(
		'senior_care_charity_phone_text_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_phone_text_option',
		array(
			'label'       => __('Edit Phone Number', 'senior-care-charity'),
			'section'     => 'senior_care_charity_header_section',
			'type'        => 'text',
		)
	);

	/*Email*/
	$wp_customize->add_setting(
		'senior_care_charity_email_text_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_email_text_option',
		array(
			'label'       => __('Edit Email Address', 'senior-care-charity'),
			'section'     => 'senior_care_charity_header_section',
			'type'        => 'text',
		)
	);

	/*Facebook Link*/
	$wp_customize->add_setting(
		'senior_care_charity_facebook_link_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_facebook_link_option',
		array(
			'label'       => __('Edit Facebook Link', 'senior-care-charity'),
			'section'     => 'senior_care_charity_header_section',
			'type'        => 'url',
		)
	);

	/*Twitter Link*/
	$wp_customize->add_setting(
		'senior_care_charity_twitter_link_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_twitter_link_option',
		array(
			'label'       => __('Edit Twitter Link', 'senior-care-charity'),
			'section'     => 'senior_care_charity_header_section',
			'type'        => 'url',
		)
	);

	/*Youtube Link*/
	$wp_customize->add_setting(
		'senior_care_charity_youtube_link_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_youtube_link_option',
		array(
			'label'       => __('Edit Youtube Link', 'senior-care-charity'),
			'section'     => 'senior_care_charity_header_section',
			'type'        => 'url',
		)
	);

	/*Instagram Link*/
	$wp_customize->add_setting(
		'senior_care_charity_instagram_link_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_instagram_link_option',
		array(
			'label'       => __('Edit Instagram Link', 'senior-care-charity'),
			'section'     => 'senior_care_charity_header_section',
			'type'        => 'url',
		)
	);

	/*Pintrest Link*/
	$wp_customize->add_setting(
		'senior_care_charity_pintrest_link_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_pintrest_link_option',
		array(
			'label'       => __('Edit Pintrest Link', 'senior-care-charity'),
			'section'     => 'senior_care_charity_header_section',
			'type'        => 'url',
		)
	);

	/*Donate Now Link*/
	$wp_customize->add_setting(
		'senior_care_charity_donate_link_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_donate_link_option',
		array(
			'label'       => __('Edit Donate Now Link', 'senior-care-charity'),
			'section'     => 'senior_care_charity_header_section',
			'type'        => 'url',
		)
	);

	/*
	* Customizer main slider section
	*/
	/*Main Slider Options*/
	$wp_customize->add_section('senior_care_charity_slider_section', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Main Slider Options', 'senior-care-charity'),
		'panel'       => 'senior_care_charity_panel',
	));

	/*Main Slider Enable Option*/
	$wp_customize->add_setting(
		'senior_care_charity_enable_slider',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'senior_care_charity_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_enable_slider',
		array(
			'label'       => __('Enable Main Slider', 'senior-care-charity'),
			'description' => __('Checked to show the main slider', 'senior-care-charity'),
			'section'     => 'senior_care_charity_slider_section',
			'type'        => 'checkbox',
		)
	);

	for ($i=1; $i <= 3; $i++) { 

		/*Main Slider Image*/
		$wp_customize->add_setting(
			'senior_care_charity_slider_image'.$i,
			array(
				'capability'    => 'edit_theme_options',
		        'default'       => '',
		        'transport'     => 'postMessage',
		        'sanitize_callback' => 'esc_url_raw',
	    	)
	    );

		$wp_customize->add_control( 
			new WP_Customize_Image_Control( $wp_customize, 
				'senior_care_charity_slider_image'.$i, 
				array(
			        'label' => __('Edit Slider Image ', 'senior-care-charity') .$i,
			        'description' => __('Edit the slider image.', 'senior-care-charity'),
			        'section' => 'senior_care_charity_slider_section',
				)
			)
		);

		/*Main Slider Heading*/
		$wp_customize->add_setting(
			'senior_care_charity_slider_heading'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'senior_care_charity_slider_heading'.$i,
			array(
				'label'       => __('Edit Heading Text ', 'senior-care-charity') .$i,
				'description' => __('Edit the slider heading text.', 'senior-care-charity'),
				'section'     => 'senior_care_charity_slider_section',
				'type'        => 'text',
			)
		);

		/*Main Slider Content*/
		$wp_customize->add_setting(
			'senior_care_charity_slider_text'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'senior_care_charity_slider_text'.$i,
			array(
				'label'       => __('Edit Content Text ', 'senior-care-charity') .$i,
				'description' => __('Edit the slider content text.', 'senior-care-charity'),
				'section'     => 'senior_care_charity_slider_section',
				'type'        => 'text',
			)
		);

		/*Main Slider Button1 Text*/
		$wp_customize->add_setting(
			'senior_care_charity_slider_button1_text'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'senior_care_charity_slider_button1_text'.$i,
			array(
				'label'       => __('Edit Button #1 Text ', 'senior-care-charity') .$i,
				'description' => __('Edit the slider button text.', 'senior-care-charity'),
				'section'     => 'senior_care_charity_slider_section',
				'type'        => 'text',
			)
		);

		/*Main Slider Button1 URL*/
		$wp_customize->add_setting(
			'senior_care_charity_slider_button1_link'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			'senior_care_charity_slider_button1_link'.$i,
			array(
				'label'       => __('Edit Button #1 URL ', 'senior-care-charity') .$i,
				'description' => __('Edit the slider button url.', 'senior-care-charity'),
				'section'     => 'senior_care_charity_slider_section',
				'type'        => 'url',
			)
		);
	}

	/*
	* Customizer Event section
	*/
	/*Event Options*/
	$wp_customize->add_section('senior_care_charity_events_section', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Upcoming Events Option', 'senior-care-charity'),
		'panel'       => 'senior_care_charity_panel',
	));

	/*Event Enable Option*/
	$wp_customize->add_setting(
		'senior_care_charity_enable_event',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'senior_care_charity_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_enable_event',
		array(
			'label'       => __('Enable Event Section', 'senior-care-charity'),
			'description' => __('Checked to show the category', 'senior-care-charity'),
			'section'     => 'senior_care_charity_events_section',
			'type'        => 'checkbox',
		)
	);

	/*Event Heading*/
	$wp_customize->add_setting(
		'senior_care_charity_event_heading',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_event_heading',
		array(
			'label'       => __('Edit Section Heading', 'senior-care-charity'),
			'description' => __('Edit event section heading', 'senior-care-charity'),
			'section'     => 'senior_care_charity_events_section',
			'type'        => 'text',
		)
	);

	/*Event Text*/
	$wp_customize->add_setting(
		'senior_care_charity_event_text',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_event_text',
		array(
			'label'       => __('Edit Section Text', 'senior-care-charity'),
			'description' => __('Edit event section text', 'senior-care-charity'),
			'section'     => 'senior_care_charity_events_section',
			'type'        => 'text',
		)
	);

	for ($i=1; $i <= 4; $i++) { 

		/*Event Image*/
		$wp_customize->add_setting(
			'senior_care_charity_category_image'.$i,
			array(
				'capability'    => 'edit_theme_options',
		        'default'       => '',
		        'transport'     => 'postMessage',
		        'sanitize_callback' => 'esc_url_raw',
	    	)
	    );

		$wp_customize->add_control( 
			new WP_Customize_Image_Control( $wp_customize, 
				'senior_care_charity_category_image'.$i, 
				array(
			        'label' => __('Edit Event Image ', 'senior-care-charity') .$i,
			        'description' => __('Edit the category image.', 'senior-care-charity'),
			        'section' => 'senior_care_charity_events_section',
				)
			)
		);

		/*Event Heading*/
		$wp_customize->add_setting(
			'senior_care_charity_category_heading'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'senior_care_charity_category_heading'.$i,
			array(
				'label'       => __('Edit Heading', 'senior-care-charity') .$i,
				'description' => __('Edit event heading text.', 'senior-care-charity'),
				'section'     => 'senior_care_charity_events_section',
				'type'        => 'text',
			)
		);

		/*Event Content*/
		$wp_customize->add_setting(
			'senior_care_charity_category_text'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'senior_care_charity_category_text'.$i,
			array(
				'label'       => __('Edit Content', 'senior-care-charity') .$i,
				'description' => __('Edit event content text.', 'senior-care-charity'),
				'section'     => 'senior_care_charity_events_section',
				'type'        => 'text',
			)
		);

		/*Event Date*/
		$wp_customize->add_setting(
			'senior_care_charity_event_date'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'senior_care_charity_event_date'.$i,
			array(
				'label'       => __('Edit Date', 'senior-care-charity') .$i,
				'description' => __('Edit event date and time.', 'senior-care-charity'),
				'section'     => 'senior_care_charity_events_section',
				'type'        => 'text',
			)
		);

		/*Event Address*/
		$wp_customize->add_setting(
			'senior_care_charity_event_address'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'senior_care_charity_event_address'.$i,
			array(
				'label'       => __('Edit Address', 'senior-care-charity') .$i,
				'description' => __('Edit event location.', 'senior-care-charity'),
				'section'     => 'senior_care_charity_events_section',
				'type'        => 'text',
			)
		);

		/*Event Button*/
		$wp_customize->add_setting(
			'senior_care_charity_category_button1_text'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'senior_care_charity_category_button1_text'.$i,
			array(
				'label'       => __('Edit Button Text', 'senior-care-charity') .$i,
				'description' => __('Edit event button text.', 'senior-care-charity'),
				'section'     => 'senior_care_charity_events_section',
				'type'        => 'text',
			)
		);

		/*Event Button Link*/
		$wp_customize->add_setting(
			'senior_care_charity_category_button1_link'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			'senior_care_charity_category_button1_link'.$i,
			array(
				'label'       => __('Edit Button Link ', 'senior-care-charity') .$i,
				'description' => __('Edit event button link.', 'senior-care-charity'),
				'section'     => 'senior_care_charity_events_section',
				'type'        => 'url',
			)
		);
	}

	/*
	* Customizer Footer Section
	*/
	/*Footer Options*/
	$wp_customize->add_section('senior_care_charity_footer_section', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Footer Options', 'senior-care-charity'),
		'panel'       => 'senior_care_charity_panel',
	));


	/*Footer Social Menu Option*/
	$wp_customize->add_setting(
		'senior_care_charity_footer_social_menu',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'senior_care_charity_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_footer_social_menu',
		array(
			'label'       => __('Enable Footer Social Menu', 'senior-care-charity'),
			'description' => __('Checked to show the footer social menu. Go to Dashboard >> Appearance >> Menus >> Create New Menu >> Add Custom Link >> Add Social Menu >> Checked Social Menu >> Save Menu.', 'senior-care-charity'),
			'section'     => 'senior_care_charity_footer_section',
			'type'        => 'checkbox',
		)
	);	

	/*Go To Top Option*/
	$wp_customize->add_setting(
		'senior_care_charity_enable_go_to_top_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'senior_care_charity_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_enable_go_to_top_option',
		array(
			'label'       => __('Enable Go To Top', 'senior-care-charity'),
			'description' => __('Checked to enable Go To Top option.', 'senior-care-charity'),
			'section'     => 'senior_care_charity_footer_section',
			'type'        => 'checkbox',
		)
	);

	/*Footer Copyright Text Enable*/
	$wp_customize->add_setting(
		'senior_care_charity_copyright_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'senior_care_charity_copyright_option',
		array(
			'label'       => __('Edit Copyright Text', 'senior-care-charity'),
			'description' => __('Edit the Footer Copyright Section.', 'senior-care-charity'),
			'section'     => 'senior_care_charity_footer_section',
			'type'        => 'text',
		)
	);
}
add_action( 'customize_register', 'senior_care_charity_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function senior_care_charity_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function senior_care_charity_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function senior_care_charity_customize_preview_js() {
	wp_enqueue_script( 'senior-care-charity-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), SENIOR_CARE_CHARITY_VERSION, true );
}
add_action( 'customize_preview_init', 'senior_care_charity_customize_preview_js' );
