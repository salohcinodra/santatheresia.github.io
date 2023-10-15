<?php
/**
 * Template part for displaying slider section
 *
 * @package Educational Institute
 * @subpackage educational_institute
 */

?>
<?php $static_image= get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>
<?php if( get_theme_mod( 'elearning_education_slider_arrows') != '') { ?>

<section id="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <?php $elearning_education_slide_pages = array();
      for ( $elearning_education_count = 1; $elearning_education_count <= 4; $elearning_education_count++ ) {
        $educational_institute_mod = intval( get_theme_mod( 'elearning_education_slider_page' . $elearning_education_count ));
        if ( 'page-none-selected' != $educational_institute_mod ) {
          $elearning_education_slide_pages[] = $educational_institute_mod;
        }
      }
      if( !empty($elearning_education_slide_pages) ) :
        $elearning_education_args = array(
          'post_type' => 'page',
          'post__in' => $elearning_education_slide_pages,
          'orderby' => 'post__in'
        );
        $elearning_education_query = new WP_Query( $elearning_education_args );
        if ( $elearning_education_query->have_posts() ) :
          $i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php  while ( $elearning_education_query->have_posts() ) : $elearning_education_query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <?php if(has_post_thumbnail()){ ?>
           <img src="<?php the_post_thumbnail_url('full'); ?>"/>
            <?php }else {echo ('<img src="'.$static_image.'">'); } ?>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <h2><?php the_title(); ?></h2>
              <div class="more-btn">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('View All Courses','educational-institute'); ?></a>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
    </a>
  </div>
  <div class="clearfix"></div>
</section>

<?php } ?>
