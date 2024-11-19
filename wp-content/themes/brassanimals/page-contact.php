<?php
/**
 * Template Name: Contact Page
 */

get_header();
?>
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-6">
          <div class="contact__content">
            <?php the_field('contact_field'); ?>
          </div>
        </div>
        <div class="col-xl-5 offset-xl-2 col-lg-6">
          <div class="contact__form">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
