<?php
/**
 * The template for displaying content in the single.php template.
 *
 */
?>
<div class="content content__single">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <button class="link" type="button" onclick="history.back();">
      <i class="far fa-long-arrow-left"></i> 
      <span>Return to previous page</span>
    </button> 
    <h1><?php the_title(); ?></h1>
    <?php
      if ( has_post_thumbnail() ) :
        echo '<div class="content__thumbnail">' . get_the_post_thumbnail( get_the_ID() ) . '</div>';
      endif;
      the_content();
    ?>
  </article>
</div>
