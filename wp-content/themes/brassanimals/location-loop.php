<?php
/**
 * The template for displaying the location loop.
 */

if ( have_posts() ) :
?>
  <section class="location-overview">
    <div class="row">
      <?php
      
      while ( have_posts() ) :
        the_post();
        if(get_post_type() === 'page') { ?>
        <div class="col-lg-3 col-sm-6">
          <a class="location-overview__block" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wp-basic' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
            <h2><?php the_title(); ?></h2>
          </a>
        </div>
      <?php } ?>
      <?php endwhile; ?>
    </div>
  </section>
<?php
endif;

wp_reset_postdata();

wp_basic_content_nav( 'nav-below' );

