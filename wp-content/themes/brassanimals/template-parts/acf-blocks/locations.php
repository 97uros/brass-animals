<section class="locations">
  <div class="container">
    <div class="row">    
      <div class="col">
        <div class="locations__title">
          <h2><?php the_sub_field('locations_title'); ?></h2>
        </div>
      </div>	
    </div>
    <div class="row">
      <div class="col">
        <div class="locations__map">
          <?php echo do_shortcode("[display-map id='9880']"); ?>
        </div>    
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="locations__description">
          <p><?php the_sub_field('locations_description'); ?></p>
        </div>    
      </div>
    </div>
  </div>
</section>