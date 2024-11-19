<?php
/**
 * The Template for displaying Search Results pages.
 */

get_header();

if ( have_posts() ) :
?>

  <?php get_template_part( 'template-parts/hero-blog' ); ?>

  <?php
    get_template_part( 'template-parts/content', 'blog' );
    else :
  ?>
  <?php get_template_part( 'template-parts/hero-blog' ); ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="wrapper">
          <?php include get_template_directory() . '/searchform.php'; ?>
        </div>
      </div>
    </div>
  </div>
	<?php get_template_part( 'nothing', 'found' ); ?>
  <?php
  endif;
  wp_reset_postdata(); ?>

<?php get_footer();
