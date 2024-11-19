<?php
/**
 * The Template for displaying music single posts.
 */

get_header(); ?>

<?php get_template_part( 'template-parts/hero-music' ); ?>

<?php if( get_field('music_video') ): ?>
  <section class="music__media-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <?php the_field('music_video'); ?>
          <h4>
            <?php 
              $terms = get_the_terms($post->ID, 'artist');
              foreach ($terms as $term) {
                $term_link = get_term_link($term, 'artist');
                if (is_wp_error($term_link))
                  continue;
                echo $term->name;
              }
            ?>
            - <?php the_title(); ?>
          </h4>
          <h6><?php the_field('band_name'); ?></h6>
        </div>
      </div> 
    </div>
  </section>
<?php endif; ?>

<?php if (!get_field('music_video')) : ?>

  <?php if( get_field('audio_player') ): ?>
    <section class="music__media-wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <?php the_field('audio_player'); ?>
              <h4>
              <?php 
                $terms = get_the_terms($post->ID, 'artist');
                foreach ($terms as $term) {
                    $term_link = get_term_link($term, 'artist');
                    if (is_wp_error($term_link))
                        continue;
                    echo $term->name;
                }
              ?>
              - <?php the_title(); ?>
              </h4>
            <h6><?php the_field('band_name'); ?></h6>
          </div>
        </div> 
      </div>
    </section>
  <?php endif; ?>

<?php endif; ?>

<div class="container">
  <div class="row">
    <div class="col">
      <?php get_template_part( 'music', 'loop' ); ?>
    </div>
  </div>
</div>

<?php get_template_part( 'template-parts/cta' ); ?>

<?php

get_footer();
