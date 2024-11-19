<section class="video">
  <div class="video__favorite">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="video__wrap">
            <?php if (get_field('video_main')) {
              the_field('video_main');
            } else { 
              the_field('video_main', 'options');
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="latestposts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="latestposts__title">
            <h3><?php the_field('video_subtitle', 'option'); ?></h3>
            <div class="lastposts-block__more">
              <?php if( get_field('videos_link', 'option') ) { ?>
                <?php $videos_link = get_field('videos_link', 'option'); ?>
                <a target="<?= $videos_link['target'] ?>" href="<?= $videos_link['url'] ?>"><?= $videos_link['title'] ?>
                </a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php if (have_rows('video_suggestions') ) { ?>
          <?php while (have_rows('video_suggestions') ) :the_row(); ?>
            <div class="col-lg-4 col-md-6">
              <?php echo get_sub_field('video_suggestion'); ?>
            </div>
          <?php endwhile;
        } else {(have_rows('video_suggestions', 'options') ) ?>
          <?php while (have_rows('video_suggestions', 'options') ) :the_row(); ?>
            <div class="col-lg-4 col-md-6">
              <?php echo get_sub_field('video_suggestion', 'options'); ?>
            </div>
          <?php endwhile; ?>
        <?php } ?>
      </div>
    </div>
  </section>
</section>

