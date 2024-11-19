<div class="music__title">
  <h2>Music We Perform</h2>
  <div class="music__title-inner">
    <div class="music__dropdown">
      <div class="music__dropdown__wrap">
        <button class="music__dropdown-btn" type="button" id="dropdownartist" data-bs-toggle="dropdown" aria-expanded="false">
          <span>Artists</span>
          <div class="music__dropdown-caret">
            <i class="fal fa-angle-down"></i>
          </div>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownartist">
          <?php
            $terms = get_terms(
              array(
                'taxonomy'   => 'artist',
                'hide_empty' => false,
              )
            );
            if ( ! empty( $terms ) && is_array( $terms ) ) {
              foreach ( $terms as $term ) { ?>
                <li>
                  <a href="<?php echo esc_url( get_term_link( $term ) ) ?>">
                    <?php echo $term->name; ?>
                  </a>
                </li>
              <?php
              }
            }
          ?>
        </ul>
      </div>
      <div class="music__dropdown__wrap">
        <button class="music__dropdown-btn" type="button" id="dropdowngenre" data-bs-toggle="dropdown" aria-expanded="false">
          <span>Genre</span>
          <div class="music__dropdown-caret">
            <i class="fal fa-angle-down"></i>
          </div>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdowngenre">
          <?php
            $terms = get_terms(
              array(
                'taxonomy'   => 'genre',
                'hide_empty' => false,
              )
            );
            if ( ! empty( $terms ) && is_array( $terms ) ) {
              foreach ( $terms as $term ) { ?>
                <li>
                  <a href="<?php echo esc_url( get_term_link( $term ) ) ?>">
                    <?php echo $term->name; ?>
                  </a>
                </li>
              <?php
              }
            }
          ?>
        </ul>
      </div>
    </div>
    <!-- Comment out for first phase 
      <div class="music__filter"> 
        <a href="<?php // bloginfo('url');?>/instrumental/instrumental">
          Instrumental
          <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
          </label>
        </a>
        <a href="<?php // bloginfo('url');?>/media/audio/">
          Audio only
          <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
          </label>
        </a>
        <a href="<?php // bloginfo('url');?>/media/video/">
          With video
          <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
          </label>
        </a>
      </div>
    -->
  </div>
</div>
<div class="row music__row">
  <div class="col-4 col-md-3">
    <h3>Song</h3>
  </div>
  <div class="col-5 col-md-3">
      <h3>Artist</h3>
  </div>
  <div class="col-4 d-none-small">
    <h3>Genre</h3>
  </div>
  <div class="col-3 col-md-2">
    <h3 class="d-none-small">Instrumental</h3>
  </div>
</div>