<section class="galleryslide pb-0">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2><?php the_sub_field('gallery_main_title'); ?></h2>
        <?php if( have_rows('gallery_repeat') ): ?>
          <div class="gallery">
            <div class="row">
              <?php while( have_rows('gallery_repeat') ) : the_row();?>
                <div class="col-xl-4 col-md-6 item">
                  <div class="gallery__wrap">
                    <?php the_sub_field('gallery_image'); ?>
                    <h4><?php the_sub_field('gallery_name'); ?></h4>
                    <h5><?php the_sub_field('gallery_locations'); ?></h5>
                  </div>
                </div>
              <?php endwhile;?>
            </div>
            <div class="gallery__button">
              <button class="btn btn--primary" id="gallery__more">Load More</button>
            </div>
          </div>
        <?php  endif; ?>
      </div>
    </div>
  </div>
</section>