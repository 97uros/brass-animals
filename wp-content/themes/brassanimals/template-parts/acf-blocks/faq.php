<section class="faq">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Frequently Asked Questions</h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <?php if ( have_rows('faq_repeater') ) : ?>
          <div class="faq__accordion">
            <?php $item=1;?>
            <?php while( have_rows('faq_repeater') ) : the_row(); ?>
              <?php 
                $aria = 'aria-expanded="false"';
                $collapseClass = '';
              ?>
              <div class="faq__items">
                <div class="faq__heading" id="heading<?php echo $item;?>">
                  <h4>
                    <button class="faq__question" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $item;?>" <?php echo $aria;?> aria-controls="collapse<?php echo $item;?>">
                      <span><?php echo get_sub_field('question'); ?></span>
                      <div class="ms-3">
                        <i class="fas fa-plus"></i>
                        <i class="fas fa-minus"></i>
                      </div>
                    </button>
                  </h4>
                </div>
                <div id="collapse<?php echo $item;?>" class="collapse <?php echo $collapseClass;?>"
                  aria-labelledby="heading<?php echo $item;?>" data-parent="#accordion">
                  <div class="faq__body">
                    <?php echo get_sub_field('answer'); ?>
                  </div>
                </div>
              </div>
            <?php $item++;?>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

