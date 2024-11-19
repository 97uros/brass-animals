<section class="hero">
  <div class="hero__overlay" style="background: url('<?php bloginfo('template_url');?>/assets/images/hero-overlay.png') center/cover no-repeat;"></div>
  <div class="hero__image hero__image--blog" style="background-image: url('<?php the_field('hero_blog_image', 'option'); ?>')">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="hero__title">
            <?php if( get_field('hero_blog_title', 'option') ): ?>
              <h1><?php the_field('hero_blog_title', 'option'); ?></h1>
            <?php endif; ?>
            <?php if( get_field('hero_blog_text', 'option') ): ?>
              <div class="row">
                <div class="col-lg-8 offset-lg-2">
                  <p><?php the_field('hero_blog_text', 'option'); ?></p>
                </div>
              </div>
            <?php endif; ?>
            <img src="<?php the_field('hero_blog_logo', 'option'); ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>