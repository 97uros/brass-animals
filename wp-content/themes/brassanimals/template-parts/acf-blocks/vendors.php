<section class="vendors-block">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <h2><?php the_sub_field('vendors_title'); ?></h2>
        <?php if( have_rows('vendors_repeater') ): ?>
          <div class="row">
            <?php while( have_rows('vendors_repeater') ) : the_row();?>
              <div class="col-xl-4 col-sm-6">
                <div class="vendors-block__wrap">
                  <a href="<?php the_sub_field('vendors_category_link'); ?>">
                    <?php if( get_sub_field('vendors_name') ): ?>
                      <h3 class="equal-height"><?php the_sub_field('vendors_name'); ?></h3>
                    <?php  endif; ?>
                    <?php if( get_sub_field('vendors_image') ): ?>
                      <div class="vendors-block__image-wrap">
                        <div class="vendors-block__image">
                          <?php the_sub_field('vendors_image'); ?>
                        </div>
                        <div class="vendors-block__shadow"></div>
                      </div>
                    <?php  endif; ?>
                  </a>
                </div>
              </div>
            <?php endwhile;?>
          </div>
        <?php  endif; ?>
        <?php the_sub_field('vendors_text'); ?>
        <?php if( get_sub_field('vendors_cta') ): ?>
          <?php $vendors_cta = get_sub_field("vendors_cta"); ?>
          <a class="button button--primary" target="<?= $vendors_cta['target'] ?>" href="<?= $vendors_cta['url'] ?>"><?= $vendors_cta['title'] ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>