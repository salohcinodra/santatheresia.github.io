<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lead Education
 */

if ( is_archive() || lead_education_is_latest_posts() || is_404() || is_search() ) {
	$archive_sidebar = get_theme_mod( 'lead_education_archive_sidebar', 'right' ); 
	if ( 'no' === $archive_sidebar ) {
		return;
	}
} elseif ( is_single() ) {
    $lead_education_post_sidebar_meta = get_post_meta( get_the_ID(), 'lead-education-select-sidebar', true );
	$global_post_sidebar = get_theme_mod( 'lead_education_global_post_layout', 'right' ); 

	if ( ! empty( $lead_education_post_sidebar_meta ) && ( 'no' === $lead_education_post_sidebar_meta ) ) {
		return;
	} elseif ( empty( $lead_education_post_sidebar_meta ) && 'no' === $global_post_sidebar ) {
		return;
	}
} elseif ( lead_education_is_frontpage_blog() || is_page() ) {
	if ( lead_education_is_frontpage_blog() ) {
		$page_id = get_option( 'page_for_posts' );
	} else {
		$page_id = get_the_ID();
	}
	
    $lead_education_page_sidebar_meta = get_post_meta( $page_id, 'lead-education-select-sidebar', true );
	$global_page_sidebar = get_theme_mod( 'lead_education_global_page_layout', 'right' ); 

	if ( ! empty( $lead_education_page_sidebar_meta ) && ( 'no' === $lead_education_page_sidebar_meta ) ) {
		return;
	} elseif ( empty( $lead_education_page_sidebar_meta ) && 'no' === $global_page_sidebar ) {
		return;
	}
}

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
