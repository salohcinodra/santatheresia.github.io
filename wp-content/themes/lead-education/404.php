<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Lead Education
 */

get_header(); ?>
    <div id="page-site-header" class="relative" style="background-image: url('<?php echo esc_url( get_header_image() ) ; ?>');">
        <div class="overlay"></div>
        <div class="container">         
            <header class="page-header ">
                <?php
                    the_archive_title( '<h2 class="page-title">', '</h2>' );
                    the_archive_description( '<div class="archive-description">', '</div>' );
                ?>
            </header><!-- .page-header -->
            <?php  
            $breadcrumb_enable = get_theme_mod( 'lead_education_breadcrumb_enable', true );
            if ( $breadcrumb_enable ) : 
                ?>
                <div id="breadcrumb-list">
                    <?php echo lead_education_breadcrumb( array( 'show_on_front'   => false, 'show_browse' => false ) ); ?>  
                </div><!-- #breadcrumb-list -->
            <?php endif; ?>
        </div><!-- #page-header -->
    </div><!-- #page-header -->

    <div id="content-wrapper" class="container pt">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div class="single-wrapper">

                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'lead-education' ); ?></p>

                    <?php get_search_form(); ?>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
        
    </div><!-- #inner-content-wrapper-->

<?php
get_footer();
