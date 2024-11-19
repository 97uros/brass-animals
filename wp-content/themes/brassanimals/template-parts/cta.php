<section class="cta-block">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h4><?php the_field('cta_block_title', 'option'); ?></h4>
        <?php if( get_field('cta_block_link', 'option') ): ?>
          <?php $cta_link = get_field('cta_block_link', 'option'); ?>
          <a class="button button--secondary" target="<?= $cta_link['target'] ?>" href="<?= $cta_link['url'] ?>"><?= $cta_link['title'] ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>