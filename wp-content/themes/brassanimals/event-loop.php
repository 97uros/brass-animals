<?php
/**
 * The template for displaying the archive loop.
 */

if ( have_posts() ) :
?>
  <section class="events-overview">
    <div class="row">
      <?php
      while ( have_posts() ) :
        the_post(); ?>

        <div class="col-lg-3 col-sm-6">
          <a class="events-overview__block" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'wp-basic' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
          <?php
            if ( has_post_thumbnail() ) :
              echo '<div class="events-overview__thumbnail">' . get_the_post_thumbnail( get_the_ID() ) . '</div>';
            endif;
          ?>
            <h2><?php the_title(); ?></h2>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
<?php
endif;

wp_reset_postdata();

wp_basic_content_nav( 'nav-below' );
