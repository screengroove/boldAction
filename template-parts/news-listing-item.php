<?php
$urls = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
   $url = $urls[0];
?>

<div class="news-listing-item">
  <h6><?php the_time('F j, Y'); ?></h6>
    <a  href="<?php the_permalink() ?>">
      <h3><?php the_title() ?></h3>
    </a>
  <a  href="<?php the_permalink() ?>">  
  <div class="news-grid_thumb" style="background-image: url( <?php the_post_thumbnail_url( 'full' ); ?>  )"></div>
  </a>
  <div class="news-listing_deets"> 
    <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 500, '...');?>  </p>

    <a class="read-more" href="<?php the_permalink() ?>">
      Continue Reading<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </a>
  </div>
</div>