<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<section class="events__single">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <button class="link" type="button" onclick="history.back();">
          <i class="far fa-long-arrow-left"></i> 
          <span>Return to previous page</span>
        </button> 
        <?php if ( have_posts() ) :
          while ( have_posts() ) :
            the_post();?>
            <h2><?php the_field('events_title'); ?></h2>
            <?php the_field('events_text'); ?>
            <?php if( have_rows('events_gallery') ): ?>
              <div class="gallery">
                <div class="row">
                  <?php while( have_rows('events_gallery') ) : the_row();?>
                    <div class="col-xl-4 col-md-6 item">
                      <div class="gallery__wrap">
                        <?php the_sub_field('gallery_images'); ?>
                        <h4><?php the_sub_field('gallery_title'); ?></h4>
                        <h5><?php the_sub_field('gallery_location'); ?></h5>
                      </div>
                    </div>
                  <?php endwhile;?>
                </div>
                <div class="gallery__button">
                  <button class="btn btn--primary" id="gallery__more">Load More</button>
                </div>
              </div>
            <?php  endif; ?>
          <?php 
          endwhile;
        endif;
        wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>
<section class="testimonials">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php if( have_rows('testimonial_repeater','options') ): ?>
          <div class="owl-carousel owl-theme" id="testimonial_slide">
            <?php while( have_rows('testimonial_repeater','options') ): the_row(); 
              $text = get_sub_field('testimonial_text','options');
              $name = get_sub_field('testimonial_name','options');
              $date = get_sub_field('testimonial_date','options');
            ?>
              <div class="owl-item__inner">
                <div class="owl-item__wrapper">
                  <h5><?php echo $name; ?></h5>
                  <span class="testimonials__date"><?php echo $date; ?></span>
                  <?php echo $text; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php else : ?>
        <?php if( have_rows('testimonial_repeater', 'option') ): ?>
          <div class="owl-carousel owl-theme" id="testimonial_slide">
            <?php while( have_rows('testimonial_repeater', 'option') ): the_row(); 
              $text = get_sub_field('testimonial_text', 'option');
              $name = get_sub_field('testimonial_name', 'option');
              $date = get_sub_field('testimonial_date', 'option');
            ?>
              <div class="owl-item__inner">
                <div class="owl-item__wrapper">
                  <h5><?php echo $name; ?></h5>
                  <span class="testimonials__date"><?php echo $date; ?></span>
                  <?php echo $text; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif ?>
        <?php endif ?>
        <hr>
        <?php if( have_rows('testimonial_awards', 'option') ): ?>
          <div class="testimonials__award">
            <?php while( have_rows('testimonial_awards', 'option') ): the_row(); 
              $text = get_sub_field('testimonial_text', 'option');
            ?>
            <?php 
              $award_image = get_sub_field('award_image', 'option');
              if( !empty( $award_image ) ): ?>
                <img src="<?php echo esc_url($award_image['url']); ?>" alt="<?php echo esc_attr($award_image['alt']); ?>" />
              <?php endif; ?>
            <?php endwhile; ?>
          </div>
        <?php endif ?>
      </div>
    </div>
  </div>
</section>  
<?php get_template_part( 'template-parts/latest', 'posts'); ?>
<?php get_template_part( 'template-parts/vendors', 'block'); ?>
<?php get_template_part( 'template-parts/cta' ); ?>

<?php

get_footer();
