<section class="latestposts">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="latestposts__title">
          <h3>Latest Blog Posts</h3>
          <div class="lastposts-block__more">
            <a href="/blog">All Blog Posts</a>
          </div>
          
        </div>
      </div>
    </div>
    <div class="row">
      <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'blogPosts' ); ?>
        <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</section>