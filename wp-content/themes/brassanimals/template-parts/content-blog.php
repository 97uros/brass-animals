<?php
/**
 * Template part for displaying blog content in index.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
?>
<?php get_header(); ?>
<div class="blog-wrap__container">
  <div class="container">
    <div class="row">    
      <div class="col">
        <div class="wrapper">
          <?php include get_template_directory() . '/searchform.php'; ?>
        </div>
      </div>	
    </div>
    <div class="row">
      <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'blogPosts' ); ?>
        <?php endwhile; ?>
          <div class="pagination">
            <div class="pagination__inner"><?php next_posts_link( '&larr; Older posts' ); ?></div>
            <div class="pagination__inner"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
          </div> 
      <?php endif; ?>
    </div>
  </div>
</div>	       
<?php get_footer();?>











