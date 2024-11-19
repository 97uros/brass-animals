<?php
/**
 * The Template for displaying Category Archive pages.
 */

get_header();

if ( have_posts() ) :
?>
<?php get_template_part( 'template-parts/hero-music' ); ?>
  <div class="container">
    <section class="music">
      <div class="row">
        <div class="col">
          <?php get_template_part( 'music', 'title' ); ?>
        </div>
      </div>
      <div class="row">
        <?php
          while ( have_posts() ) :
            the_post();
            get_template_part( 'music', 'content' );
          endwhile;
          else :
            get_template_part( 'template-parts/hero-music' );
            get_template_part( 'search-nothing', 'found' );
          endif;
          wp_reset_postdata();
        ?>
      </div>
      
    </section>
  </div>
  <?php get_template_part( 'template-parts/cta' ); ?>
<?php get_footer();