<?php
/**
 * The Template for displaying Archive pages.
 */

get_header(); ?>

<?php get_template_part( 'template-parts/hero-music' ); ?>

<?php if ( have_posts() ) :
?>
<div class="container">
  <div class="row">
    <div class="col">
      <?php
        get_template_part( 'music', 'loop' );
      else :
        get_template_part( 'nothing', 'found' );
      endif;

      wp_reset_postdata(); // End of the loop.
      ?>
    </div>
  </div>
</div>
<?php get_template_part( 'template-parts/cta' ); ?>
<?php
get_footer();
