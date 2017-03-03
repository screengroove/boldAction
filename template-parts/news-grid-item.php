<?php
$urls = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
   $url = $urls[0];
?>

<div class="news-grid_item">
  <div class="news-grid_thumb" style="background-image: url( <?php the_post_thumbnail_url( 'full' ); ?>  )"></div>
  <div class="news-grid_deets">
    <h3><?php the_title() ?></h3>
    <p><?php the_excerpt(); ?>  </p>

  </div>
</div>