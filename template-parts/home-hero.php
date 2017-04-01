<?php
$urls = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
   $url = $urls[0];
?>

<div class="billboard" style="background-image:url(<?php echo $url; ?>)">
  <div class="skrim"></div>

<div class="hero-brand">
  <h1 class="hero-brand_top">TAKE</h1>
  <img id="boldBrand" src="<?php bloginfo('template_directory'); ?>/assets/images/hero_animation_logo.png" alt="">
  <h1 class="hero-brand_btm">ACTION</h1>
</div>

<form action="" class="inline-form">
  <input type="text" placeholder="Email">
  <input type="text" placeholder="Zip Code">
  <input type="submit" value="Join List">
</form>
<p class="credit">by CHC BOLD PACK</p>




</div>