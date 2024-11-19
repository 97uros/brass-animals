<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/ef33ab82de.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<?php
  $navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
  $navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

  $search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'wp-basic' ); ?></a>

<div id="wrapper">
  <header class="header"> 
    <nav id="header" class="navbar navbar-expand-lg <?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
      <div class="container">
        <div class="logo-wrap">
          <a href="<?php bloginfo('url');?>">
            <?php
              $info_block = get_field('info_block', 'option');
              if( $info_block ): ?>
              <img src="<?php echo $info_block['header_logo']; ?>" alt="header logo">
            <?php endif; ?>
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'wp-basic' ); ?>">
          <img src="<?php bloginfo('template_url');?>/assets/images/menu.svg" alt="menu">
        </button>

        <div id="navbar" class="collapse navbar-collapse">
          <span class="navbar-toggler-close" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar"><img src="<?php bloginfo('template_url');?>/assets/images/close.svg"></span>
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'main-menu',
                'container'      => '',
                'menu_class'     => 'navbar-nav',
                'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                'walker'         => new WP_Bootstrap_Navwalker(),
              )
            );

            if ( '1' === $search_enabled ) :
          ?>
          <?php
            endif;
          ?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /#header -->
  </header>
