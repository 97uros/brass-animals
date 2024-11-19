<?php
/**
 * The Template for displaying Archive pages.
 */

get_header();

if ( have_posts() ) :
?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <header class="page-header">
        <h1 class="page-title">
          <?php
            if ( is_day() ) :
              printf( esc_html__( 'Daily Archives: %s', 'wp-basic' ), get_the_date() );
            elseif ( is_month() ) :
              printf( esc_html__( 'Monthly Archives: %s', 'wp-basic' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'wp-basic' ) ) );
            elseif ( is_year() ) :
              printf( esc_html__( 'Yearly Archives: %s', 'wp-basic' ), get_the_date( _x( 'Y', 'yearly archives date format', 'wp-basic' ) ) );
            else :
              esc_html_e( 'Blog Archives', 'wp-basic' );
            endif;
          ?>
        </h1>
      </header>
      <?php
        get_template_part( 'archive', 'loop' );
      else :
        // 404.
        get_template_part( 'content', 'none' );
      endif;

      wp_reset_postdata(); // End of the loop.
      ?>
    </div>
  </div>
</div>
<?php
get_footer();
