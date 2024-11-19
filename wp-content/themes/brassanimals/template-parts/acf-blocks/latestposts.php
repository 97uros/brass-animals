
<section <?php if ( is_front_page() ) : ?>class="lastposts-block" <?php else : ?>class="latestposts"<?php endif; ?>>
  <div class="container">
    <div class="row">
      <div class="col">
        <div <?php if ( is_front_page() ) : ?>class="lastposts-block__title"<?php else : ?>class="latestposts__title"<?php endif; ?>>
          <h2><?php the_sub_field('latest_post_title'); ?></h2>
          <?php if ( !is_front_page() ) : ?> 
            <?php if( get_sub_field('more') ): ?>
              <?php $readmore = get_sub_field('more'); ?>
              <div class="lastposts-block__more">
                <a target="<?= $readmore['target'] ?>" href="<?= $readmore['url'] ?>"><?= $readmore['title'] ?></a>  
              </div>          
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php if ( is_front_page() ) : ?>
      <div class="row">
        <div class="col">
          <div class="lastposts-block__more">
            <?php if( get_sub_field('more') ): ?>
              <?php $readmore = get_sub_field('more'); ?>
              <a target="<?= $readmore['target'] ?>" href="<?= $readmore['url'] ?>"><?= $readmore['title'] ?></a>            
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <div class="row">
      <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'blogPosts' ); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>     
    </div>
  </div>
</section>
