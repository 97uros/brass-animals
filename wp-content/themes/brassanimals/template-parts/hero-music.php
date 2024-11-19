<section class="hero">
  <div class="hero__overlay" style="background: url('<?php bloginfo('template_url');?>/assets/images/hero-overlay.png') center/cover no-repeat;"></div>
  <div class="hero__image hero__image--small" style="background-image: url('<?php the_field('hero_music_image', 'option'); ?>')">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="hero__title">
            <?php if( get_field('hero_music_title', 'option') ): ?>
              <h1><?php the_field('hero_music_title', 'option'); ?></h1>
            <?php endif; ?>
            <?php if( get_field('hero_music_text', 'option') ): ?>
              <div class="row">
                <div class="col-lg-8 offset-lg-2">
                  <p><?php the_field('hero_music_text', 'option'); ?></p>
                </div>
              </div>
            <?php endif; ?>
            <form class="search-form" role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
              <div class="searchwrap">
                <i class="far fa-search"></i>
                <input type="text" name="s" class="form-control" placeholder="Search song title"/>
                <input type="hidden" name="post_type" value="music" />
                <button type="submit" name="submit" class="searchbutton">Find</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>