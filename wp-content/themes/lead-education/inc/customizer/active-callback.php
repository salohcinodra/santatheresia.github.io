<?php
/**
 * Wild Themes 
 *
 * @package Lead Education
 * active callbacks.
 * 
 */

/*========================slider==============================*/
/**
 * Check if the slider is enabled
 */
function lead_education_if_slider_enabled( $control ) {
	return 'disable' != $control->manager->get_setting( 'lead_education_slider' )->value();
}

/**
 * Check if the slider is category
 */
function lead_education_if_slider_cat( $control ) {
	return 'cat' === $control->manager->get_setting( 'lead_education_slider' )->value();
}

/**
 * Check if the slider is page
 */
function lead_education_if_slider_page( $control ) {
	return 'page' === $control->manager->get_setting( 'lead_education_slider' )->value();
}

/**
 * Check if the slider is post
 */
function lead_education_if_slider_post( $control ) {
	return 'post' === $control->manager->get_setting( 'lead_education_slider' )->value();
}

/*========================Service==============================*/
/**
 * Check if the service is enabled
 */
function lead_education_if_service_enabled( $control ) {
	return 'disable' != $control->manager->get_setting( 'lead_education_service' )->value();
}

/**
 * Check if the gallery is page
 */
function lead_education_if_service_page( $control ) {
	return 'page' === $control->manager->get_setting( 'lead_education_service' )->value();
}

/*========================Team==============================*/
/**
 * Check if the team is enabled
 */
function lead_education_if_team_enabled( $control ) {
	return 'disable' != $control->manager->get_setting( 'lead_education_team' )->value();
}

/**
 * Check if the gallery is page
 */
function lead_education_if_team_page( $control ) {
	return 'page' === $control->manager->get_setting( 'lead_education_team' )->value();
}

/*========================recent_news==============================*/
/**
 * Check if the recent_news is enabled
 */
function lead_education_if_recent_news_enabled( $control ) {
	return 'disable' != $control->manager->get_setting( 'lead_education_recent_news' )->value();
}

/**
 * Check if the recent_news is category
 */
function lead_education_if_recent_news_cat( $control ) {
	return 'cat' === $control->manager->get_setting( 'lead_education_recent_news' )->value();
}

/**
 * Check if the recent_news is page
 */
function lead_education_if_recent_news_page( $control ) {
	return 'page' === $control->manager->get_setting( 'lead_education_recent_news' )->value();
}

/*==========================About=========================*/
/**
 * Check if the about is enabled
 */
function lead_education_if_about_enabled( $control ) {
	return 'disable' != $control->manager->get_setting( 'lead_education_about' )->value();
}

/**
 * Check if the about is page
 */
function lead_education_if_about_page( $control ) {
	return 'page' === $control->manager->get_setting( 'lead_education_about' )->value();
}

/*========================featured_courses==============================*/
/**
 * Check if the featured_courses is enabled
 */

function lead_education_if_featured_courses_enabled( $control ) {
	return 'disable' != $control->manager->get_setting( 'lead_education_featured_courses' )->value();
}

/**
 * Check if the featured_courses is page
 */
function lead_education_if_featured_courses_page( $control ) {
	return 'page' === $control->manager->get_setting( 'lead_education_featured_courses' )->value();
}


/*==========================CTA=========================*/
/**
 * Check if the cta is enabled
 */
function lead_education_if_cta_enabled( $control ) {
	return 'disable' != $control->manager->get_setting( 'lead_education_cta' )->value();
}

/**
 * Check if the cta is page
 */
function lead_education_if_cta_page( $control ) {
	return 'page' === $control->manager->get_setting( 'lead_education_cta' )->value();
}

/**
 * Check if custom color scheme is enabled
 */
function lead_education_if_custom_color_scheme( $control ) {
	return 'custom' === $control->manager->get_setting( 'lead_education_color_scheme' )->value();
}
