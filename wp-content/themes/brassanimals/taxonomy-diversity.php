<?php
/**
 * The Template for displaying Archive pages.
 */

get_header();

if ( have_posts() ) :
?>
  
  <?php
    get_template_part( 'archive', 'vendors' );
  else : ?>
  <?php get_template_part( 'template-parts/hero-vendors' ); ?>
    <?php  get_template_part( 'nothing', 'found' );
    endif;

    wp_reset_postdata(); // End of the loop.
  ?>
<?php
get_footer();
