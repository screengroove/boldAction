<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

 <div class="mission-block">
   <?php get_template_part( 'template-parts/nav-fixed' ); ?>
  <h1 class="title-bold"><span>NEWS</span></h1>
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/stripes.png" alt="">
</div>

<section class="ltgray-block">
  <div class="news-block">
    <div class="news-block_photo" style="background-image: url( <?php echo the_post_thumbnail_url( 'full' ) ?> )">
    </div>
          <?php do_action( 'foundationpress_before_content' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="news-block_deetsWrap">

        <h3 class="news-name"><?php the_title() ?></h3>
      <div class="news-block_deets">
        <p class="nb-meta"><i class="fa fa-user" aria-hidden="true"></i><?php the_author(); ?> </p>
         <p class="nb-meta"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('F j, Y'); ?></p>
         <?php pvc_post_views(  ); ?>
      </div>
     
    </div>
  </div>
  <div class="news-block_bio">

          <p><?php the_content(); ?></p>
        <?php do_action( 'foundationpress_post_before_entry_content' ); ?>
  <?php endwhile;?>
  </div>  
</section>

   <!-- CTA TEMPLATE PART -->
 <?php get_template_part( 'template-parts/home-cta' ); ?>
 <div class="spacer"></div>




