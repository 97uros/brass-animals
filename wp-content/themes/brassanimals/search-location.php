<?php
  /**
   * The Template for displaying Search Results location pages.
   */

  get_header(); ?>

  <?php get_template_part( 'template-parts/acf-blocks/hero-inner' ); ?>
  
  <?php if ( have_posts() ) :
  ?>
    
    <div class="sticky-wrapper">
      <div class="container">
        <?php
          get_template_part( 'location', 'loop' );
        ?>
      </div>
    </div>
  <?php
    else :
  ?>
    <div class="mt-5">
      <?php get_template_part( 'nothing', 'found' ); ?>
    </div>
    <?php
    endif;
    wp_reset_postdata(); ?>
  <?php get_footer(); ?>