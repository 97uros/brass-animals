<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */


if (have_rows('page_blocks')) :

  while (have_rows('page_blocks')) : the_row();

    if (get_row_layout() == "hero_main") :
      include "acf-blocks/hero.php";

    elseif (get_row_layout() == "hero_logo") :
      include "acf-blocks/hero-logo.php";

    elseif (get_row_layout() == "cta") :
      include "acf-blocks/cta.php";

    elseif (get_row_layout() == "events") :
      include "acf-blocks/events.php";
      
    elseif (get_row_layout() == "latestposts") :
      include "acf-blocks/latestposts.php";

    elseif (get_row_layout() == "testimonials") :
      include "acf-blocks/testimonials.php";

    elseif (get_row_layout() == "gallery_slide") :
      include "acf-blocks/galleryslide.php";
      ?>
    <div class="singlecity__videos">                
      <?php get_template_part('/template-parts/acf-blocks/videos'); ?>          
    </div>
      <?php
    elseif (get_row_layout() == "vendors") :
      include "acf-blocks/vendors.php";

    elseif (get_row_layout() == "text") :
      include "acf-blocks/text.php";

    elseif (get_row_layout() == "link_cards") :
      include "acf-blocks/link-cards.php";

    elseif (get_row_layout() == "gallery") :
      include "acf-blocks/gallery.php";

    elseif (get_row_layout() == "faq") :
      include "acf-blocks/faq.php";

    elseif (get_row_layout() == "locations") :
      include "acf-blocks/locations.php";
    
    elseif (get_row_layout() == "hero-inner") :
      include "acf-blocks/hero-inner.php";

    elseif (get_row_layout() == "form") :
      include "acf-blocks/form.php";

    elseif (get_row_layout() == "videos") :
      include "acf-blocks/videos.php";

    endif;
  endwhile;
endif;