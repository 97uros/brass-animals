<?php
/**
 * Template Name: Page template
 *
 */

get_header();
the_post();
?>

<?php
get_template_part( 'template-parts/content', 'page' );
get_footer();