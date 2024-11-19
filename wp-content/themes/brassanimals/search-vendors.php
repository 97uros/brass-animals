
  <?php
  /**
   * The Template for displaying Search Results Vendors pages.
   */

  get_header(); ?>

  <?php if ( have_posts() ) :
  ?>

    <div class="sticky-wrapper">
      <?php
        get_template_part( 'archive', 'vendors' );
      ?>
    </div>
  <?php
    else :
  ?>
    <?php get_template_part( 'template-parts/hero-vendors' ); ?>
    <div class="mt-5">
      <?php get_template_part( 'vendors-nothing', 'found' ); ?>
    </div>
    <?php
    endif;
    wp_reset_postdata(); ?>
  <?php get_footer(); ?>