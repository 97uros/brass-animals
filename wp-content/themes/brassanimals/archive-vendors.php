<?php
/**
 * The Template for displaying Archive pages.
 */

get_header(); ?>

<?php get_template_part( 'template-parts/hero-vendors' ); ?>

<?php if ( have_posts() ) :
?>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="vendors__filter-wrap">
        <div class="vendors__filter">
          <h4>filter by:</h4>
          <span id="vendors__results">
            <?php echo do_shortcode('[fe_open_button]'); ?>
          </span>
        </div>
        <?php echo do_shortcode('[fe_chips]'); ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-2 col-md-3">
      <aside class="vendors__sidebar">
      <?php echo do_shortcode('[fe_widget show_count="yes"]'); ?>
      <!-- <span class="vendors__all">+ View All</span> -->
      </aside>
    </div>
    <div class="col-xl-10 col-md-9">
      <?php
        get_template_part( 'vendors', 'loop' );
      else :
        get_template_part( 'vendors-nothing', 'found' );
      endif;

      wp_reset_postdata(); // End of the loop.
      ?>
    </div>
  </div>
</div>
<?php
get_footer();
