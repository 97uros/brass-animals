<section class="hero">
  <div class="hero__overlay" style="background: url('<?php bloginfo('template_url');?>/assets/images/hero-overlay.png') center/cover no-repeat;"></div>
  <div class="hero__image hero__image--logo" style="background-image: url('<?php the_sub_field('hero_logo_background'); ?>')">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="hero__title">
            <?php if( get_sub_field('hero_logo_image') ): ?>
              <img src="<?php the_sub_field('hero_logo_image'); ?>" alt="">
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php if( have_rows('hero_partners') ): ?>
        <div class="row g-0">
          <div class="col-xxl-8 offset-xxl-2 col-xl-10 offset-xl-1">
            <div class="partners">
              <?php while( have_rows('hero_partners') ) : the_row();?>
                <img src="<?php the_sub_field('hero_partners_image'); ?>" alt="">
              <?php endwhile;?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>