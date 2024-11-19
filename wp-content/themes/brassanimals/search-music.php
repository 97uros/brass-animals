
  <?php
  /**
   * The Template for displaying Search Results Music pages.
   */

  get_header(); ?>

  <?php if ( have_posts() ) :
  ?>

    <div class="sticky-wrapper">
      <?php get_template_part( 'template-parts/hero-music' ); ?>
      <section class="music">
        <div class="container">
          <?php get_template_part( 'music', 'title' ); ?>
          <h4 class="blog_archive_heading">
            <?php
            global $wp_query;
            if($wp_query->found_posts < 2) {
              $result = "result";
            } else {
              $result = "results";
            }
              echo $wp_query->found_posts . " " . $result . " found";
            ?>
          </h4>
          <div class="row">
            <?php
              while ( have_posts() ) :
              the_post(); ?>

              <?php get_template_part( 'music', 'content' ); ?>
            <?php endwhile; ?>
          </div>
        </div>
      </section>
    </div>
  <?php
    else :
  ?>
    <?php get_template_part( 'template-parts/hero-music' ); ?>
    <?php get_template_part( 'search-nothing', 'found' ); ?>
    <?php
    endif;
    wp_reset_postdata(); ?>
  <?php get_template_part( 'template-parts/cta' ); ?>
  <?php get_footer(); ?>