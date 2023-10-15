<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lead Education
 */

get_header(); ?>
	<div id="content-wrapper" class="pt">
        <div class="container">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                   <?php 
            		$archive_layout = get_theme_mod( 'lead_education_archive_layout', 'col-2' ); 
                	?>
                    <div class="blog-post-wrapper <?php echo esc_attr( $archive_layout ); ?> clear">

						<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) : ?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
								<?php  
								$breadcrumb_enable = get_theme_mod( 'lead_education_breadcrumb_enable', true );
								if ( $breadcrumb_enable ) : 
								    ?>
								    <div id="breadcrumb-list">
								        <div class="wrapper">
								            <?php echo lead_education_breadcrumb( array( 'show_on_front'   => false, 'show_browse' => false ) ); ?>
								        </div><!-- .wrapper -->
								    </div><!-- #breadcrumb-list -->
								<?php endif; ?>

							<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							wp_reset_postdata();


						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>
					</div>
					<?php lead_education_posts_pagination(); ?>
				</main><!-- #main -->
			</div><!-- #primary -->

			<?php get_sidebar(); ?>

		</div><!-- .wrapper -->
    </div><!-- #inner-content-wrapper-->
<?php
get_footer();
