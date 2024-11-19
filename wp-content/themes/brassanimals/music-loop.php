<?php
/**
 * The template for displaying the music loop.
 */

if ( have_posts() ) :
?>
  <section class="music">
    <?php get_template_part( 'music', 'title' ); ?>
    <div class="row">
      <?php     
        $args = array(
          'post_type'        => 'music',
          'posts_per_page'   => -1,
          'orderby' => 'title',
          'order' => 'ASC',
        );
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            get_template_part( 'music', 'content' );
          }
        } 
      ?>
    </div>
  </section>
<?php
endif;

wp_reset_postdata();
