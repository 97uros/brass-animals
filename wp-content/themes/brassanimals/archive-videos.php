<?php

get_header(); ?>


<?php if ( have_posts() ) :
?>
  <div class="video__archive">
    <div class="container">
      <div class="row">
        <div class="col">
          <button class="link" type="button" onclick="history.back();">
            <i class="far fa-long-arrow-left"></i> 
            <span> Return to previous page</span>
          </button> 
          <h2><?php the_field('videos_main_title', 'option'); ?></h2>
        </div>
      </div>
    </div>

    <?php
        get_template_part( 'videos', 'loop' );
      else :
        get_template_part( 'nothing', 'found' );
      endif;

      wp_reset_postdata(); // End of the loop.
    ?>
  </div>
<?php get_template_part( 'template-parts/cta' ); ?>
<?php
get_footer();
