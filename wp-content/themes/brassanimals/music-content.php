<div class="col-4 col-md-3">
  <h5>
    <?php 
    $video = get_field('music_video');
    $audio = get_field('audio_player');
    if(!$video && !$audio) : ?>
      <a href="#" class="music__linkless" title="<?php printf( esc_attr__( '%s', 'wp-basic' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
    <?php else : ?>
      <?php
        $terms = wp_get_object_terms( $post->ID, 'media' );
        foreach( $terms as $term ) {
          $name = $term->name;
          $title = get_the_title($post->ID);
          $video_player = get_field('music_video', $post->ID);
          $band_name = get_field('band_name', $post->ID);
          $artist_name = get_the_term_list(get_the_ID(), 'artist', '', ', ', '');
          $artist_name = strip_tags($artist_name);
          $id = $post->ID;
          $str_name = strval($name);
          if($str_name === 'Video') {
            echo "<a class='music__active' data-bs-toggle='modal' data-bs-target='#video-{$id}'>{$title}</a>";
            echo "<div class='modal fade' id='video-{$id}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
              echo '<div class="modal-dialog modal-dialog-centered">';
                echo '<div class="modal-content">';
                  echo '<div class="modal-header">';
                    echo '<button type="button" class="fal fa-times" data-bs-dismiss="modal" aria-label="Close"></button>';
                  echo '</div>';
                  echo '<div class="modal-body">';
                    echo $video_player;
                  echo '</div>';
                  echo '<div class="modal-cta">';
                    echo '<a class="btn btn--primary" href="/request-a-quote">Book us now</a>';
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
          } else  {
            echo "<a class='music__active' data-bs-toggle='modal' data-bs-target='#audio-{$id}'>{$title}</a>";
            echo "<div class='modal fade' id='audio-{$id}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
              echo '<div class="modal-dialog modal-dialog-centered">';
                echo '<div class="modal-content">';
                  echo '<div class="modal-header">';
                    echo '<button type="button" class="fal fa-times" data-bs-dismiss="modal" aria-label="Close"></button>';
                  echo '</div>';
                  echo '<div class="modal-body music__media-wrap">';
                    echo $audio;
                    echo '<h4>';
                      echo $artist_name . ' - ' . $title;
                    echo '</h4>';
                    echo '<h6>';
                      echo $band_name;
                    echo '</h6>';
                  echo '</div>';
                  echo '<div class="modal-cta">';
                    echo '<a class="btn btn--primary" href="/request-a-quote">Book us now</a>';
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
          }
        }
      ?>
    <?php endif; ?>
  </h5>
</div>
<div class="col-5 col-md-3">
  <h5><?php echo get_the_term_list(get_the_ID(), 'artist', '', ', ', ''); ?></h5>
</div>
<div class="col-4 d-none-small">
  <h5><?php echo get_the_term_list(get_the_ID(), 'genre', '', ', ', ''); ?></h5>
</div>
<div class="col-3 col-md-2">
  <div class="music__wrap">
    <div class="music__instrumental d-none-small">
    <span>
      <?php
        $terms = wp_get_object_terms( $post->ID, 'instrumental' );

        if($terms) {
          foreach( $terms as $term )
          $term_names[] = $term->name;
          echo implode( ', ', $term_names );
        }
      ?> 
    </span>          
    </div>
    <div class="music__media">
      <?php 
        $terms = wp_get_object_terms( $post->ID, 'media' );
        foreach( $terms as $term ) {
          $name = $term->name;
          $title = get_the_title($post->ID);
          $video_player = get_field('music_video', $post->ID);
          $band_name = get_field('band_name', $post->ID);
          $id = $post->ID;
          $str_name = strval($name);
          if($str_name === 'Video') {
            echo "<a data-bs-toggle='modal' data-bs-target='#video-{$id}'>{$name}</a>";
            echo "<div class='modal fade' id='video-{$id}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
              echo '<div class="modal-dialog modal-dialog-centered">';
                echo '<div class="modal-content">';
                  echo '<div class="modal-header">';
                    echo '<button type="button" class="fal fa-times" data-bs-dismiss="modal" aria-label="Close"></button>';
                  echo '</div>';
                  echo '<div class="modal-body">';
                    echo $video_player;
                  echo '</div>';
                  echo '<div class="modal-cta">';
                    echo '<a class="btn btn--primary" href="/request-a-quote">Book us now</a>';
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
          } else  {
            echo "<a data-bs-toggle='modal' data-bs-target='#audio-{$id}'>{$name}</a>";
            echo "<div class='modal fade' id='audio-{$id}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
              echo '<div class="modal-dialog modal-dialog-centered">';
                echo '<div class="modal-content">';
                  echo '<div class="modal-header">';
                    echo '<button type="button" class="fal fa-times" data-bs-dismiss="modal" aria-label="Close"></button>';
                  echo '</div>';
                  echo '<div class="modal-body music__media-wrap">';
                    echo $audio;
                    echo '<h4>';
                      echo $title;
                    echo '</h4>';
                    echo '<h6>';
                      echo $band_name;
                    echo '</h6>';
                  echo '</div>';
                  echo '<div class="modal-cta">';
                    echo '<a class="btn btn--primary" href="/request-a-quote">Book us now</a>';
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
          }
        } 
      ?> 
    </div>
  </div>
</div>