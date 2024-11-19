
  <?php
  /**
   * The Template for displaying Search Results events pages.
   */

  get_header(); ?>

  <?php get_template_part( 'template-parts/hero-events' ); ?>

  <?php if ( have_posts() ) :
  ?>

    <div class="sticky-wrapper">
      <div class="container">
        <?php
          get_template_part( 'event', 'loop' );
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

