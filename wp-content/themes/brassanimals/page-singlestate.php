<?php
/**
 * Template Name: single location-state
 */
?>
<section class="singlestate">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="singlestate__link">
          <?php
          $previous = "javascript:history.go(-1)";
          if(isset($_SERVER['HTTP_REFERER'])) {
            $previous = $_SERVER['HTTP_REFERER'];
          }
          ?>
          <a class="link" href="<?= $previous ?>">
            <i class="far fa-long-arrow-left"></i> 
            <span>Return to previous page</span>
          </a>         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="singlestate__content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="singlestate__dropdown">
            <div id="data_list" class="datalist">
              <form class="citiesform" id="citiesform" name="citiesform" method="get" action="<?php bloginfo('url'); ?>">
                <?php wp_dropdown_pages(array(
                  'child_of' => get_queried_object_id(),
                  'show_option_none'=> 'Select your city',
                  'id' => 'data_options',
                  'depth' => 1,
                  'class' => 'form-select'
                  )); ?>
              </form>
            </div>
            <div class="buttondiv">
              <button form="citiesform" class="buttonFind"><strong>GO</strong></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
        <div class="singlestate__wrappermap">
          <div class="map">       
            <?php   
                   
            $locations=array("Alabama (AL)" => 10122,"Arizona (AZ)" => 10129,"Arkansas (AR)" => 10125,"California (CA)" => 10100,"Colorado (CO)" => 10130,"Florida (FL)" => 10121,"Georgia (GA)" => 10120,"Hawaii (HI)" => 10106,"Illinois (IL)" => 10116,"Indiana (IN)" => 10115,"Louisiana (LA)" => 10126,"Massachusetts (MA)" => 10108,"Michigan (MI)" => 10112,"Minnesota (MN)" => 10114,"Mississippi (MS)" => 10124,"Missouri (MO)" => 10123,"Nevada (NV)" => 10135,"New Jersey (NJ)" => 10109,"New York (NY)" => 10107,"North Carolina (NC)" => 10117,"Ohio (OH)" => 10111,"Oklahoma (OK)" => 10127,"Oregon (OR)" => 10132,"Pennsylvania (PA)" => 10110,"South Carolina (SC)" => 10119,"Tennessee (TN)" => 10118,"Texas (TX)" => 10128,"Washington (WA)" => 10131,"Wisconsin (WI)" => 10113,"Alaska (AK)" => 1,"Connecticut (CT)" => 1,"Washington DC (DC)" => 13883,"Delaware (DE)" => 1,"Iowa (IA)" => 1,"Idaho (ID)" => 1,"Kansas (KS)" => 1,"Kentucky (KY)" => 1,"Maryland (MD)" => 1,"Maine (ME)" => 1,"Montana (MT)" => 1,"North Dakota (ND)" => 1,"Nebraska (NE)" => 1,"New Hampshire (NH)" => 1,"New Mexico (NM)" => 1,"Rhode Island (RI)" => 1,"South Dakota (SD)" => 1,"Utah (UT)" => 1,"Virginia (VA)" => 22813,"Vermont (VT)" => 1,"West Virginia (WV)" => 1,"Wyoming (WY)" => 1);

            foreach($locations as $location => $code) {
              if(is_page($location)) {              
                echo do_shortcode("[display-map id='$code']");              
              }
            }
            ?>
          </div>
          <div class="singlestate__back-wrap">
            <a class="singlestate__back" href="/location">
              <span class="singlestate__tooltip">
                Back to full map
              </span>
              <div class="minimap">
                <img src="<?php bloginfo('template_url');?>/assets/images/minimap.svg">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
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

