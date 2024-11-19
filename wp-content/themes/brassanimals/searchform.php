<?php
/**
 * The template for displaying search forms.
 */
?>
<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="input-group">
    <input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'wp-basic' ); ?>" />
    <input type="hidden" name="post_type" value="post" />
    <button type="submit" name="submit" class="searchbutton"><i class="fa fa-search searchimg"></i></button>
  </div><!-- /.input-group -->
</form>
