<div class="container">
  <div class="row">
    <div class="col-12">
      <article id="post-0" class="nothing-found">
        <header class="entry-header">
          <img width="135" src="<?php echo get_template_directory_uri().'/assets/images/drum.png'; ?>">
          <h2 class="entry-title"><?php esc_html_e( 'Oops, We Couldn’t Find Any Results', 'wp-basic' ); ?></h2>
        </header><!-- /.entry-header -->
        <p><?php esc_html_e( 'Please try another keyword', 'wp-basic' ); ?></p>
      </article><!-- /#post-0 -->
    </div>
  </div>
</div>
<?php get_template_part( 'template-parts/latest', 'posts' ); ?>
