<section class="testimonials">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php if( have_rows('testimonial_repeater') ): ?>
          <div class="owl-carousel owl-theme" id="testimonial_slide">
            <?php while( have_rows('testimonial_repeater') ): the_row(); 
              $text = get_sub_field('testimonial_text');
              $name = get_sub_field('testimonial_name');
              $date = get_sub_field('testimonial_date');
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
                  <img width="64" src="<?php echo esc_url($award_image['url']); ?>" alt="<?php echo esc_attr($award_image['alt']); ?>" />
              <?php endif; ?>
            <?php endwhile; ?>
          </div>
        <?php endif ?>

      </div>
    </div>
  </div>
</section>