<div class="col-lg-4 col-md-6">
  <div class="blog-wrap">
    <div class="blog-wrap__thumbnail">
      <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wp-basic' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
        <?php the_post_thumbnail(); ?>
      </a>
    </div>
    <h2 class="equal-height">
      <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wp-basic' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
    </h2>
    <p><?php echo get_excerpt(150); ?></p>
  </div>																				
</div>								