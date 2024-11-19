<?php
/**
 * Template Name: single location-city
 *
 */

get_header();
the_post();
?>
<section class="singlecity">          
  <section class="hero">
    <div class="hero__overlay" style="background: url('<?php bloginfo('template_url');?>/assets/images/hero-overlay.png') center/cover no-repeat;"></div>
    <?php if(get_field('city_hero_image')) : ?>
      <div class="hero__image" style="background: url('<?php echo the_field('city_hero_image')?>') center/cover no-repeat;">
    <?php else:
      $post_data = get_post($post);
      $slug = $post_data->post_name; ?>
      <div class="hero__image" style="background: url('<?php bloginfo('template_url'); ?>/assets/images/<?php echo $slug .".png"; ?>') center/cover no-repeat;">
    <?php endif; ?>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="hero__title">
            <h1><?php echo get_post_field('post_title', $id); ?></h1>                  
            <p><?php echo the_field('city_hero_subtitle'); ?></p>
            <?php if( get_field('hero_block_button','options') ): ?>
              <?php $read_more_link = get_field("hero_block_button",'options'); ?>
              <a class="button button--primary" target="<?= $read_more_link['target'] ?>" href="<?= $read_more_link['url'] ?>"><?= $read_more_link['title'] ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php if( have_rows('hero_block_partners','options') ): ?>
        <div class="row g-0">
          <div class="col-xxl-8 offset-xxl-2 col-xl-10 offset-xl-1">
            <div class="partners">
              <?php while( have_rows('hero_block_partners','options') ) : the_row();?>
                <img src="<?php the_sub_field('partner_image'); ?>" alt="">
              <?php endwhile;?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
    </div>
  </section>
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="singlecity__dropdown">
            <div id="data_list" class="datalist">
              <form class="bandform" id="bandform" name="bandform" method="get" action="<?php bloginfo('url'); ?>">
              <?php wp_dropdown_pages(array(
                'child_of' => get_queried_object_id(),
                'show_option_none'=> 'Choose a band type',
                'id' => 'data_options',
                'depth' => 1,
                'class' => 'form-select'
              )); ?>
              </form>
            </div>
            <div class="buttondiv">
              <button form="bandform" class="buttonFind"><strong>GO</strong></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="singlecity__text">
          <div class="container">
            <div class="row">
              <div class="col">
                <?php echo get_post_field('post_content', $id); ?>   
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="vendors-block vendors-block--cards">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <?php if( have_rows('link_cards_repeater','options') ): ?>
            <div class="row">
              <?php while( have_rows('link_cards_repeater','options') ) : the_row();
                $link_cards_cta = get_sub_field("link_cards_cta",'options'); ?>
                <div class="col-lg-4 col-sm-6 mb-50">
                  <div class="vendors-block__wrap">
                    <a href="<?= $link_cards_cta['url'] ?>">
                    <?php if( get_sub_field('link_cards_image','options') ): ?>
                      <div class="vendors-block__image-wrap">
                        <div class="vendors-block__image">
                          <?php the_sub_field('link_cards_image','options'); ?>
                        </div>
                        <div class="vendors-block__shadow"></div>
                        </div>
                    <?php endif; ?>
                      </a>
                    <?php if( get_sub_field('link_cards_title','options') ): ?>
                      <h3 class="equal-height"><?php the_sub_field('link_cards_title','options'); ?></h3>
                    <?php  endif; ?>
                    <?php if( get_sub_field('link_cards_text','options') ): ?>
                      <p><?php the_sub_field('link_cards_text','options'); ?></p>
                    <?php  endif; ?>
                    <?php if( get_sub_field('link_cards_cta','options') ): ?>
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
  <div class="singlecity__videos">                
      <?php get_template_part('/template-parts/acf-blocks/videos'); ?>          
  </div>
  <div class="singlecity__testimonials">
    <section class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col">
            <?php if( have_rows('testimonial_repeater','options') ): ?>
              <div class="owl-carousel owl-theme" id="testimonial_slide">
                <?php while( have_rows('testimonial_repeater','options') ): the_row(); 
                  $text = get_sub_field('testimonial_text','options');
                  $name = get_sub_field('testimonial_name','options');
                  $date = get_sub_field('testimonial_date','options');
                ?>
                  <div class="owl-item__inner">
                    <div class="owl-item__wrapper">
                      <h5><?php echo $name; ?></h5>
                      <span class="testimonials__date"><?php echo $date; ?></span>
                      <?php echo $text; ?>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>
            <?php else : ?>
            <?php if( have_rows('testimonial_repeater', 'option') ): ?>
              <div class="owl-carousel owl-theme" id="testimonial_slide">
                <?php while( have_rows('testimonial_repeater', 'option') ): the_row(); 
                  $text = get_sub_field('testimonial_text', 'option');
                  $name = get_sub_field('testimonial_name', 'option');
                  $date = get_sub_field('testimonial_date', 'option');
                ?>
                  <div class="owl-item__inner">
                    <div class="owl-item__wrapper">
                      <h5><?php echo $name; ?></h5>
                      <span class="testimonials__date"><?php echo $date; ?></span>
                      <?php echo $text; ?>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>
            <?php endif ?>
            <?php endif ?>
            <hr>
            <?php if( have_rows('testimonial_awards', 'option') ): ?>
              <div class="testimonials__award">
                <?php while( have_rows('testimonial_awards', 'option') ): the_row(); 
                  $text = get_sub_field('testimonial_text', 'option');
                ?>
                <?php 
                  $award_image = get_sub_field('award_image', 'option');
                  if( !empty( $award_image ) ): ?>
                    <img src="<?php echo esc_url($award_image['url']); ?>" alt="<?php echo esc_attr($award_image['alt']); ?>" />
                  <?php endif; ?>
                <?php endwhile; ?>
              </div>
            <?php endif ?>
          </div>
        </div>
      </div>
    </section>       
  </div>
  <div class="singlecity__latestposts">
    <?php get_template_part( 'template-parts/latest', 'posts' ); ?>
  </div>
  <section class="cta-block">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h4><?php the_field('cta_block_title', 'option'); ?></h4>
          <?php if( get_field('cta_block_link', 'option') ): ?>
            <?php $cta_link = get_field('cta_block_link', 'option'); ?>
            <a class="button button--secondary" target="<?= $cta_link['target'] ?>" href="<?= $cta_link['url'] ?>"><?= $cta_link['title'] ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>          
</section>
<?php
get_template_part( 'template-parts/content', 'page' );
get_footer();