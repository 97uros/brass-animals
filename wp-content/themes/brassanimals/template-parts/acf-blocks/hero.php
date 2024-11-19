<section class="hero">
  <div class="hero__overlay" style="background: url('<?php bloginfo('template_url');?>/assets/images/hero-overlay.png') center/cover no-repeat;"></div>
  <div class="hero__image" style="background-image: url('<?php the_sub_field('hero_image'); ?>')">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="hero__title">
            <?php if( get_sub_field('hero_title') ): ?>
              <h1><?php the_sub_field('hero_title'); ?></h1>
            <?php endif; ?>
            <?php if( get_sub_field('hero_text') ): ?>
              <p class="hero__paragraph"><?php the_sub_field('hero_text'); ?></p>
            <?php endif; ?>
            <?php if( get_sub_field('hero_button') ): ?>
              <?php $read_more_link = get_sub_field("hero_button"); ?>
              <a class="button button--primary" target="<?= $read_more_link['target'] ?>" href="<?= $read_more_link['url'] ?>"><?= $read_more_link['title'] ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php if( have_rows('partners') ): ?>
        <div class="row g-0">
          <div class="col-xxl-8 offset-xxl-2 col-xl-10 offset-xl-1">
            <div class="partners">
              <?php while( have_rows('partners') ) : the_row();?>
                <img src="<?php the_sub_field('partner_image'); ?>" alt="">
              <?php endwhile;?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>