<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lead Education
 */

$default = lead_education_get_default_mods();
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<!-- supports col-1, col-2, col-3 and col-4 -->
		<!-- supports unequal-width and equal-width -->
		<?php  
		$count = 0;
		for ( $i=1; $i <=4 ; $i++ ) { 
			if ( is_active_sidebar( 'footer-' . $i ) ) {
				$count++;
			}
		}
		
		if ( 0 !== $count ) : ?>
			<div class="footer-widgets-area page-section col-<?php echo esc_attr( $count );?>">
			    <div class="container">
					<?php 
					for ( $j=1; $j <=4; $j++ ) { 
						if ( is_active_sidebar( 'footer-' . $j ) ) {
			    			echo '<div id="box5" class="hentry aos_container">';
							dynamic_sidebar( 'footer-' . $j ); 
			    			echo '</div>';
						}
					}
					?>
				</div><!-- .wrapper -->
			</div><!-- .footer-widget-area -->

		<?php endif;
		 $lead_education_search = array( '[the-year]', '[site-link]' );

        $replace = array( date( 'Y' ), '<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a>' );

        $copyright = str_replace( $lead_education_search, $replace, get_theme_mod( 'lead_education_copyright_txt', $default['lead_education_copyright_txt'] ) );

			?>

			<div class="site-info">
				<!-- supports col-1 and col-2 -->
				<?php 

				?>
				<div class="wrapper">
					<span>	
					<?php echo wp_kses_post(  $copyright ); ?> 	
					<?php echo sprintf( esc_html__( '%1$s by %2$s.', 'lead-education' ), 'Lead Education', '<a target="_blank" href="' . esc_url( 'http://wildthemes.com/' ) . '">Wild Themes</a>' ); ?>	
					</span>	    
				</div><!-- .wrapper -->    
				
			</div><!-- .site-info -->
			
			
	</footer><!-- #colophon -->
	
		<div class="backtotop"><?php echo lead_education_get_svg( array( 'icon' => 'up-arrow' ) ); ?></div>
		
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
