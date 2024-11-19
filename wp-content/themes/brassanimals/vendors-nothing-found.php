<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="vendors__filter-wrap">
        <div class="vendors__filter">
          <h4>filter by:</h4>
          <span id="vendors__results">
          <?php echo do_shortcode('[fe_open_button]'); ?>	
          </span>
        </div>
        <?php echo do_shortcode('[fe_chips]'); ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-2 col-md-3">
      <aside class="vendors__sidebar">
      <?php echo do_shortcode('[fe_widget show_count="yes"]'); ?>
      <span class="vendors__all">+ View All</span>
      </aside>
    </div>
    <div class="col-xl-10 col-md-9">
      <article id="post-0" class="nothing-found nothing-found--vendors">
        <header class="entry-header">
          <img width="135" src="<?php echo get_template_directory_uri().'/assets/images/drum.png'; ?>">
          <h2 class="entry-title"><?php esc_html_e( 'Oops, We Couldn’t Find Any Results', 'wp-basic' ); ?></h2>
        </header><!-- /.entry-header -->
        <p><?php esc_html_e( 'Please try another keyword', 'wp-basic' ); ?></p>
      </article><!-- /#post-0 -->
    </div>
  </div>
</div>
<?php
get_footer();

