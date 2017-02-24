<?php
$urls = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
   $url = $urls[0];
?>

<div class="billboard" style="background-image:url(<?php echo $url; ?>)">


<img src="<?php bloginfo('template_directory'); ?>/assets/images/hero_brand.png" alt="">
<form action="" class="inline-form">
  <input type="text" placeholder="Email">
  <input type="text" placeholder="Zip Code">
  <input type="submit" value="SUBMIT">
</form>




</div>