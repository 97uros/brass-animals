<section class="hero">
  <div class="hero__overlay" style="background: url('<?php bloginfo('template_url');?>/assets/images/musical-instruments.png') top/cover no-repeat;"></div>
  <div class="hero__image hero__image--small" style="background-image: url('<?php the_sub_field('hero_inner_image'); ?>')">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="hero__title">
            <?php if( get_sub_field('hero_inner_title') ): ?>
              <h1><?php the_sub_field('hero_inner_title'); ?></h1>
            <?php endif; ?>
            <?php if( get_sub_field('hero_inner_text') ): ?>
              <div class="row">
                <div class="col-lg-8 offset-lg-2">
                  <p><?php the_sub_field('hero_inner_text'); ?></p>
                </div>
              </div>
            <?php endif; ?>            
            <?php if( is_page('Locations') ) : ?>
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="hero__dropdown">
                      <div class="custom-select">
                        <form class="statesform" id="statesform" name="statesform" method="get" action="<?php bloginfo('url'); ?>">
                          <?php wp_dropdown_pages(array(
                          'child_of' => get_queried_object_id(),
                          'show_option_none'=> 'Choose a city or state',
                          'id' => 'states',
                          'depth' => 1,
                          'class' => 'form-select js-example-basic-single'
                          )); ?>
                        </form>
                      </div>
                      <div class="buttondiv">
                        <button form="statesform" class="buttonFind" id="buttonFind"><strong>GO</strong></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>               
            <?php endif;?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>