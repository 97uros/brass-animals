<div class="col-lg-3">
  <h5>
    <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wp-basic' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
      <?php the_title(); ?>
    </a>
  </h5>
</div>
<div class="col-lg-3">
  <h5><?php echo get_the_term_list(get_the_ID(), 'artist', '', ', ', ''); ?></h5>
</div>
<div class="col-lg-4">
  <h5><?php echo get_the_term_list(get_the_ID(), 'genre', '', ', ', ''); ?></h5>
</div>
<div class="col-lg-2">
  <div class="music__wrap">
    <div class="music__instrumental">
      <?php echo get_the_term_list(get_the_ID(), 'instrumental', '', ', ', ''); ?>            
    </div>
    <div class="music__media">
      <?php echo get_the_term_list(get_the_ID(), 'media', '', ''); ?> 
    </div>
  </div>
</div>
