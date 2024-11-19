
<section class="events">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2><?php the_sub_field('events_title'); ?></h2>
      </div>
    </div>
    <div class="events__event">
      <?php $args = array(
        'post_type' => 'events',
        'post_status' => 'publish',
        'category_name' => 'featured-one',
        'posts_per_page' => 1,
      );
        $arr_posts = new WP_Query( $args );
          
        if ( $arr_posts->have_posts() ) :
          
          while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
            ?>
            <?php get_template_part( 'template-parts/acf-blocks/partials/event' ); ?>
          <?php
        endwhile;
      endif;
      wp_reset_query();
      ?>
      <?php $args = array(
        'post_type' => 'events',
        'post_status' => 'publish',
        'category_name' => 'featured-two',
        'posts_per_page' => 1,
      );
        $arr_posts = new WP_Query( $args );
          
        if ( $arr_posts->have_posts() ) :
          
          while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
            ?>
            <?php get_template_part( 'template-parts/acf-blocks/partials/event' ); ?>
          <?php
        endwhile;
      endif;
      wp_reset_query();
      ?>
      <?php $args = array(
        'post_type' => 'events',
        'post_status' => 'publish',
        'category_name' => 'featured-three',
        'posts_per_page' => 1,
      );
        $arr_posts = new WP_Query( $args );
          
        if ( $arr_posts->have_posts() ) :
          
          while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
            ?>
            <?php get_template_part( 'template-parts/acf-blocks/partials/event' ); ?>
          <?php
        endwhile;
      endif;
      wp_reset_query();
      ?>
      <?php $args = array(
        'post_type' => 'events',
        'post_status' => 'publish',
        'category_name' => 'featured-four',
        'posts_per_page' => 1,
      );
        $arr_posts = new WP_Query( $args );
          
        if ( $arr_posts->have_posts() ) :
          
          while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
            ?>
            <?php get_template_part( 'template-parts/acf-blocks/partials/event' ); ?>
          <?php
        endwhile;
      endif;
      wp_reset_query();
      ?>
      <?php $args = array(
        'post_type' => 'events',
        'post_status' => 'publish',
        'category_name' => 'featured-five',
        'posts_per_page' => 1,
      );
        $arr_posts = new WP_Query( $args );
          
        if ( $arr_posts->have_posts() ) :
          
          while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
            ?>
            <?php get_template_part( 'template-parts/acf-blocks/partials/event' ); ?>
          <?php
        endwhile;
      endif;
      wp_reset_query();
      ?>
      <a href="/events">
        <div>
          <div class="events__more">
            <?php get_template_part('assets/images/inline', 'more.svg'); ?>
          </div>
          <h4>Explore All Events</h4>
        </div>
      </a>
    </div>
    <div class="row">
      <div class="col-xxl-8 offset-xxl-2 col-xl-10 offset-xl-1">
        <p><?php the_sub_field('events_text'); ?></p>
      </div>
    </div>
  </div>
</section>