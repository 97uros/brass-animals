<section class="galleryslide">
  <div class="container">
    <div class="row">
      <div class="col-xxl-10 offset-xxl-1">
        <h2><?php the_sub_field('gallery_title'); ?></h2>
        <div class="galleryslide__more galleryslide__more--large">
          <?php if( get_sub_field('gallery_more') ): ?>
            <?php $gallery_more = get_sub_field('gallery_more'); ?>
            <a class="link" target="<?= $gallery_more['target'] ?>" href="<?= $gallery_more['url'] ?>"><?= $gallery_more['title'] ?></a>            
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <?php if( have_rows('gallery_repeater') ): ?>
          <div class="owl-carousel owl-theme" id="gallery_slide">
            <?php while( have_rows('gallery_repeater') ): the_row(); 
            ?>
              <?php 
              $image = get_sub_field('gallery_image');
                if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
            <?php endwhile; ?>
          </div>
        <?php endif ?>
      </div>
    </div>
    <div class="galleryslide__more galleryslide__more--small">
      <?php if( get_sub_field('gallery_more') ): ?>
        <?php $gallery_more = get_sub_field('gallery_more'); ?>
        <a class="link" target="<?= $gallery_more['target'] ?>" href="<?= $gallery_more['url'] ?>"><?= $gallery_more['title'] ?></a>            
      <?php endif; ?>
    </div>
    <div class="row">
      <div class="col-xxl-10 offset-xxl-1">
        <?php the_sub_field('gallery_text'); ?>
      </div>
    </div>
  </div>
</section>