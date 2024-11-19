
<section class="cta-block">
  <div class="container">
    <div class="row">
      <div class="col">
        <h4><?php the_sub_field('cta_title'); ?></h4>
        <?php if( get_sub_field('cta_text') ): ?>
          <p><?php the_sub_field('cta_text'); ?></p>
        <?php endif; ?>
        <?php if( get_sub_field('cta_link') ): ?>
          <?php $cta_link = get_sub_field("cta_link"); ?>
          <a class="button button--secondary" target="<?= $cta_link['target'] ?>" href="<?= $cta_link['url'] ?>"><?= $cta_link['title'] ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>