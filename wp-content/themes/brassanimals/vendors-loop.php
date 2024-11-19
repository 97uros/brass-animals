<?php
/**
 * The template for displaying the archive loop.
 */

if ( have_posts() ) :
?>
  <section class="vendors">
  <?php $wp_query = new WP_Query( array(
        'posts_per_page' => 6,
        'post_type' => 'vendors',
        'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
        'orderby'   => array(
            'name' =>'ASC',
          )
      )); ?>
    <div class="row">    
      <?php
      while ( $wp_query->have_posts() ) :
        $wp_query->the_post(); ?>
        <div class="col-12">
          <div class="vendors__wrap">
            <div class="row">
              <div class="col-12 col-md-5">
                <?php
                  if ( has_post_thumbnail() ) :
                    echo '<div class="vendors__thumbnail">' . get_the_post_thumbnail( get_the_ID() ) . '</div>';
                  endif;
                ?>
              </div>
              <div class="col-12 col-md-7">
                <div class="vendors__inner">
                  <h2><?php the_title(); ?></h2>
                  <div class="vendors__location">
                    <i class="fal fa-map-marker-alt"></i>
                    <?php get_taxonony_toDisplay($post->ID, 'country' ); ?>
                    <?php get_taxonony_toDisplay($post->ID, 'city' ); ?> 
                  </div>
                  <p><?php the_content(); ?></p>
                  <div class="vendors__button">
                    <?php 
                    $link = get_field('vendors_link');
                    if( $link ): 
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                      ?>
                      <a class="btn btn--primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
        </div>
      <?php endwhile; ?>
      <div class="vendors__pagination">
          <?php echo paginate_links(array (
            'prev_text' => '<span><i class="far fa-long-arrow-left"></i></span>',
            'next_text' => '<span><i class="far fa-long-arrow-right"></i></span>'
          )); ?>
        </div>
    </div>
  </section>
<?php
endif;

wp_reset_postdata();


