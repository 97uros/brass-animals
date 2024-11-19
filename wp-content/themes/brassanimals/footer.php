    <footer class="footer">
      <div class="container">
        <div class="footer__inner">
          <div class="row">
            <div class="col-lg-3">
              <div class="footer__info">
                <?php
                $info_block = get_field('info_block', 'option');
                if( $info_block ): ?>
                  <a class="footer__logo" href="<?php echo esc_url( home_url( '/' )); ?>">
                    <img src="<?php echo $info_block['footer_logo']; ?>" alt="footer logo">
                  </a>
                  <address class="footer__address">
                    <ul>
                      <li>
                        <a href="tel:<?php echo $info_block['phone']; ?>">
                          <span class="footer__address-wrap">
                            <i class="fas fa-phone"></i>
                            <?php echo $info_block['phone']; ?>
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="mailto:<?php echo $info_block['email']; ?>">
                          <span class="footer__address-wrap">
                            <i class="fas fa-envelope"></i>
                            <?php echo $info_block['email']; ?>
                          </span>
                        </a>
                      </li>
                    </ul>
                  </address>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
              <h6><?php echo $info_block['menu_title']; ?></h6>
              <?php
                wp_nav_menu(array(
                  'theme_location'    => 'footer-menu',
                  'container'       => 'div',
                  'menu_id'         => false,
                  'menu_class'      => 'footer__menu',
                ));
              ?>
            </div>
            <div class="col-lg-4 col-md-5 col-6">
              <?php
                wp_nav_menu(array(
                  'theme_location'    => 'footer-menu-two',
                  'container'       => 'div',
                  'menu_id'         => false,
                  'menu_class'      => 'footer__menu mt footer__spacing',
                ));
              ?>
            </div>
            <div class="col-lg-3 col-md-4">
              <?php
                wp_nav_menu(array(
                  'theme_location'    => 'footer-menu-three',
                  'container'       => 'div',
                  'menu_id'         => false,
                  'menu_class'      => 'footer__menu mt footer__spacing--small',
                ));
              ?>
              <div class="footer__social">
                <div>
                  <?php
                    if ( ! have_rows( 'social_media', 'option' ) ) {
                      return false;
                    }
                    if ( have_rows( 'social_media', 'option' ) ) : ?>
                      <?php while ( have_rows( 'social_media', 'option' ) ) : the_row();
                        if ( have_rows( 'social_media_links' ) ) : ?>
                        <ul class="footer__social-icon">
                          <?php while ( have_rows( 'social_media_links' ) ) : the_row(); ?>
                            <li>
                              <a target="_blank" href="<?php the_sub_field('social_media_link'); ?>"><?php the_sub_field('social_media_icon'); ?></a>
                            </li>
                          <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
      <section class="footer__legal">
        <div class="container">
          <div class="row">
            <div class="col">
              <p><?php printf( esc_html__( '&copy; %1$s %2$s - All Rights Reserved', 'wp-basic' ), date_i18n( 'Y' ), get_bloginfo( 'name', 'display' ) ); ?></p>
            </div>
          </div>
        </div>
      </section>
    </footer>



    </div><!-- /#wrapper -->
    <?php
      wp_footer();
    ?>
  </body>
</html>
