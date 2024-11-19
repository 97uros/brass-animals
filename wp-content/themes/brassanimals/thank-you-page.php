<?php
/**
 * Template Name: Thank you page
 * Description: Page template for thank you page.
 *
 */

get_header();

$search_enabled = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>
<div class="not-found">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="nothing-found nothing-found--404">
          <img width="134" src="<?php echo get_template_directory_uri().'/assets/images/trumpet.png'; ?>">
          <h2>Thank you!</h2>
          <?php the_content() ?>
          <div class="nothing-found__button">
            <a class="btn btn--primary" href="<?php bloginfo('url');?>">Back to home</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
