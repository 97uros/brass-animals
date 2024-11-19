<section class="vendors-block vendors-block--cards">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <?php if( have_rows('link_cards_repeater','options') ): ?>
          <div class="row">
            <?php while( have_rows('link_cards_repeater','options') ) : the_row();
              $link_cards_cta = get_sub_field("link_cards_cta",'options'); 
              $link_cards_image = get_sub_field('link_cards_image', 'options');
              $link_cards_title = get_sub_field('link_cards_title', 'options');
              $link_cards_text = get_sub_field('link_cards_text', 'options');
              ?>
              <div class="col-lg-4 col-sm-6 mb-50">
                <div class="vendors-block__wrap">
                  <a href="<?= $link_cards_cta['url'] ?>">
                  <?php if( $link_cards_image ): ?>
                    <div class="vendors-block__image-wrap">
                      <div class="vendors-block__image">
                        <?php echo $link_cards_image; ?>
                      </div>
                      <div class="vendors-block__shadow"></div>
                      </div>
                  <?php endif; ?>
                    </a>
                  <?php if( $link_cards_title ): ?>
                    <h3 class="equal-height"><?php echo $link_cards_title; ?></h3>
                  <?php  endif; ?>
                  <?php if( $link_cards_text ): ?>
                    <p><?php echo $link_cards_text; ?></p>
                  <?php  endif; ?>
                  <?php if( $link_cards_cta ): ?>
                    <div class="vendors-block__button">
                      <a class="btn btn--primary" target="<?= $link_cards_cta['target'] ?>" href="<?= $link_cards_cta['url'] ?>"><?= $link_cards_cta['title'] ?>
                      </a>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php endwhile;?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>