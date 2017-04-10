<?php
$urls = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
   $url = $urls[0];
?>

<div class="news-grid_item">
   <a  href="<?php the_permalink() ?>">
  <div class="news-grid_thumb" style="background-image: url( <?php the_post_thumbnail_url( 'full' ); ?>  )"></div>
   </a>
  <div class="news-grid_deets">
    <div>
     <a  href="<?php the_permalink() ?>">
    <h3><?php the_title() ?></h3>
    </a>
    <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 70, '...');?>  </p>
    </div>
      <div class="news-grid_meta">
    <span>
      <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('F j, Y'); ?></p> 
    </span>
    <a class="read-more" href="<?php the_permalink() ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
  </div>
  </div>

</div>