<section class="vendors-block vendors-block--cards">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <?php if( have_rows('link_cards_repeater') ): ?>
          <div class="row">
            <?php while( have_rows('link_cards_repeater') ) : the_row();
             $link_cards_cta = get_sub_field("link_cards_cta"); ?>
              <div class="col-lg-4 col-sm-6 mb-50">
                <div class="vendors-block__wrap">
                  <a href="<?= $link_cards_cta['url'] ?>">
                    <?php if( get_sub_field('link_cards_image') ): ?>
                      <div class="vendors-block__image-wrap">
                        <div class="vendors-block__image">
                          <?php the_sub_field('link_cards_image'); ?>
                        </div>
                        <div class="vendors-block__shadow"></div>
                      </div>
                    <?php  endif; ?>
                  </a>
                  <?php if( get_sub_field('link_cards_title') ): ?>
                    <h3 class="equal-height"><?php the_sub_field('link_cards_title'); ?></h3>
                  <?php  endif; ?>
                  <?php if( get_sub_field('link_cards_text') ): ?>
                    <p><?php the_sub_field('link_cards_text'); ?></p>
                  <?php  endif; ?>
                  <?php if( get_sub_field('link_cards_cta') ): ?>
                    <div class="vendors-block__button">
                      <a class="btn btn--primary" target="<?= $link_cards_cta['target'] ?>" href="<?= $link_cards_cta['url'] ?>"><?= $link_cards_cta['title'] ?>
                      </a>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php endwhile;?>
          </div>
        <?php  endif; ?>
      </div>
    </div>
  </div>
</section>