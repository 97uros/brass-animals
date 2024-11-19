<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <?php if ( have_posts() ) :
        while ( have_posts() ) :
          the_post();

          get_template_part( 'content', 'single' );
        endwhile;
      endif;

      wp_reset_postdata(); ?>

    </div>
  </div>
  <?php if( get_field('post_more') ): ?>
    <div class="row">
      <div class="col">
        <div class="content__cta">
          <img src="<?php echo get_template_directory_uri().'/assets/images/logo-gray.svg'; ?>" alt="logo">
          <div>
            <h4>
              <?php the_field('post_more'); ?>
              <?php $post_link = get_field("post_link"); ?>
            </h4>
            <h4><a target="<?= $post_link['target'] ?>" href="<?= $post_link['url'] ?>"><?= $post_link['title'] ?></a></h4>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="row">
    <div class="col">
      <div class="share">
        <ul>
          <li>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank">
              <i class="fab fa-facebook-f" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>" target="_blank">
              <i class="fab fa-twitter" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>" target="_blank">
              <i class="fab fa-linkedin" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php get_template_part( 'template-parts/latest', 'posts' ); ?>

<?php

get_footer();
