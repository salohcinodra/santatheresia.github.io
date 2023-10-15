<?php
/**
 * The header for our theme
 *
 * @package Senior Care Charity
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'senior-care-charity' ); ?></a>

	<header id="masthead" class="site-header">

		<?php 
		$top_header = absint(get_theme_mod('senior_care_charity_enable_top_header', 1));

		$has_header_image = has_header_image();

		if($top_header == 1){ 
			?>
			<div class="top-header-wrap">
				<div class="container">
					<div class="flex-row">
						<div class="top-header-left">
							<?php if ( get_theme_mod('senior_care_charity_location_text_option') ) : ?><span><i class="fas fa-map-marker-alt"></i><?php echo esc_html(get_theme_mod('senior_care_charity_location_text_option', '')); ?></span><?php endif; ?>
							<?php if ( get_theme_mod('senior_care_charity_phone_text_option') ) : ?><span><i class="fas fa-phone"></i><?php echo esc_html(get_theme_mod('senior_care_charity_phone_text_option', '')); ?></span><?php endif; ?>
							<?php if ( get_theme_mod('senior_care_charity_email_text_option') ) : ?><span><i class="fas fa-envelope"></i><?php echo esc_html(get_theme_mod('senior_care_charity_email_text_option', '')); ?></span><?php endif; ?>
						</div>
						<div class="top-header-right">
							<?php if ( get_theme_mod('senior_care_charity_facebook_link_option') ) : ?><a href="<?php echo esc_url(get_theme_mod('senior_care_charity_facebook_link_option', '')); ?>"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
							<?php if ( get_theme_mod('senior_care_charity_twitter_link_option') ) : ?><a href="<?php echo esc_url(get_theme_mod('senior_care_charity_twitter_link_option', '')); ?>"><i class="fab fa-twitter"></i></span><?php endif; ?>
							<?php if ( get_theme_mod('senior_care_charity_youtube_link_option') ) : ?><a href="<?php echo esc_url(get_theme_mod('senior_care_charity_youtube_link_option', '')); ?>"><i class="fab fa-youtube"></i></a><?php endif; ?>
							<?php if ( get_theme_mod('senior_care_charity_instagram_link_option') ) : ?><a href="<?php echo esc_url(get_theme_mod('senior_care_charity_instagram_link_option', '')); ?>"><i class="fab fa-instagram"></i></a><?php endif; ?>
							<?php if ( get_theme_mod('senior_care_charity_pintrest_link_option') ) : ?><a href="<?php echo esc_url(get_theme_mod('senior_care_charity_pintrest_link_option', '')); ?>"><i class="fab fa-pinterest-p"></i></a><?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>

		<div class="main-header-wrap">
			<div class="top-box" <?php if (!empty($has_header_image)) { ?> style="background-image: url(<?php echo header_image(); ?>);" <?php } ?>>
				<div class="header-wrap">
					<div class="container">
						<div class="flex-row">
							<div class="main-header main-header-box">
								<div class="site-branding">
									<?php
									the_custom_logo();
									if ( is_front_page() && is_home() ) :
										?>
										<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php
									else :
										?>
										<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
										<?php
									endif;
									$senior_care_charity_description = get_bloginfo( 'description', 'display' );
									if ( $senior_care_charity_description || is_customize_preview() ) :
										?>
										<p class="site-description"><?php echo $senior_care_charity_description; ?></p>
									<?php endif; ?>
								</div>
							</div>
							<div class="nav-box-header-left">
								<div class="section-nav main-header-box">
									<nav id="site-navigation" class="main-navigation">
										<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
										<?php
											wp_nav_menu(
												array(
													'theme_location' => 'menu-1',
													'menu_id'        => 'primary-menu',
												)
											);
										?>
									</nav>
								</div>
							</div>
							<div class="nav-box-header-right">
								<?php if ( get_theme_mod('senior_care_charity_donate_link_option') ) : ?><a href="<?php echo esc_url( get_theme_mod('senior_care_charity_donate_link_option','') ); ?>"><?php esc_html_e('Donate Now','senior-care-charity'); ?></a><?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>