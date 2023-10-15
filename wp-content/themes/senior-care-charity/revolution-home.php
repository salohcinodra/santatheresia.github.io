<?php
/**
 * Template Name: Home Page
 */

get_header();
?>

<main id="primary">

    <?php 
    $main_slider_wrap = absint(get_theme_mod('senior_care_charity_enable_slider', 1));
    if($main_slider_wrap == 1){ 
    ?>

    <section id="main-slider-wrap">
        <div class="owl-carousel">
            <?php for ($i=1; $i <= 3; $i++) { ?>
                <div class="main-slider-inner-box">
                    <?php if ( get_theme_mod('senior_care_charity_slider_image'.$i) ) : ?>
                        <img src="<?php echo esc_url( get_theme_mod('senior_care_charity_slider_image'.$i) ); ?>">
                        <div class="main-slider-content-box">
                            <?php if ( get_theme_mod('senior_care_charity_slider_heading'.$i) ) : ?><h3><?php echo esc_html( get_theme_mod('senior_care_charity_slider_heading'.$i) ); ?></h3><hr><?php endif; ?>
                            <?php if ( get_theme_mod('senior_care_charity_slider_text'.$i) ) : ?><p><?php echo esc_html( get_theme_mod('senior_care_charity_slider_text'.$i) ); ?></p><?php endif; ?>
                            <div class="main-slider-button">
                                <?php if ( get_theme_mod('senior_care_charity_slider_button1_link'.$i) ||  get_theme_mod('senior_care_charity_slider_button1_text'.$i )) : ?><a href="<?php echo esc_url( get_theme_mod('senior_care_charity_slider_button1_link'.$i) ); ?>"><?php echo esc_html( get_theme_mod('senior_care_charity_slider_button1_text'.$i) ); ?></a><?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php } ?>
        </div>
    </section>

    <?php } ?>

    <?php 
    $main_expert_wrap = absint(get_theme_mod('senior_care_charity_enable_event', 1));
    if($main_expert_wrap == 1){ 
    ?>

    <section id="main-expert-wrap">
        <div class="container">
            <div class="heading-expert-wrap">
                <?php if ( get_theme_mod('senior_care_charity_event_heading') ) : ?><h3><?php echo esc_html( get_theme_mod('senior_care_charity_event_heading') ); ?></h3><hr><?php endif; ?>
                <?php if ( get_theme_mod('senior_care_charity_event_text') ) : ?><p><?php echo esc_html( get_theme_mod('senior_care_charity_event_text') ); ?></p><?php endif; ?>
            </div>
            <div class="grid-container">
                <?php for ($i=1; $i <= 4; $i++) { ?>
                    <div class="grid-item">
                        <div class="top-expert-wrap">
                            <div class="flex-row">
                                <div class="top-expert-left">
                                    <?php if ( get_theme_mod('senior_care_charity_category_image'.$i) ) : ?><img src="<?php echo esc_url( get_theme_mod('senior_care_charity_category_image'.$i) ); ?>"><?php endif; ?>
                                </div>
                                <div class="top-expert-right">
                                    <?php if ( get_theme_mod('senior_care_charity_category_heading'.$i) ) : ?><h4><?php echo esc_html( get_theme_mod('senior_care_charity_category_heading'.$i) ); ?></h4><hr><?php endif; ?>
                                    <?php if ( get_theme_mod('senior_care_charity_category_text'.$i) ) : ?><p><?php echo esc_html( get_theme_mod('senior_care_charity_category_text'.$i) ); ?></p><?php endif; ?>
                                    <?php if ( get_theme_mod('senior_care_charity_event_date'.$i) ) : ?><p><i class="fas fa-clock"></i><?php echo esc_html( get_theme_mod('senior_care_charity_event_date'.$i) ); ?></p><?php endif; ?>
                                    <?php if ( get_theme_mod('senior_care_charity_event_address'.$i) ) : ?><p><i class="fas fa-map-marker-alt"></i><?php echo esc_html( get_theme_mod('senior_care_charity_event_address'.$i) ); ?></p><?php endif; ?>
                                    <div class="main-expert-button">
                                        <?php if ( get_theme_mod('senior_care_charity_category_button1_link'.$i) ||  get_theme_mod('senior_care_charity_category_button1_text'.$i )) : ?><a href="<?php echo esc_url( get_theme_mod('senior_care_charity_category_button1_link'.$i) ); ?>"><?php echo esc_html( get_theme_mod('senior_care_charity_category_button1_text'.$i) ); ?></a><?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php } ?>
    
</main>

<?php
get_footer();