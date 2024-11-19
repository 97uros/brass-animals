<?php
/**
 * Template Name: Not found
 * Description: Page template 404 Not found.
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
          <img width="180" src="<?php echo get_template_directory_uri().'/assets/images/drum-stars.png'; ?>">
          <h2>Oops, This Page Could Not Be Found</h2>
          <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
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
