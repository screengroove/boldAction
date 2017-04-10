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

    <div class="news-block_deetsWrap">
      <div class="news-block_deets">
         <h3 class="news-name"><?php the_title() ?></h3>
         <p class="nb-meta"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('F j, Y'); ?></p>
      </div>
    </div>
  </div>
  <!--END news block-->

  <div class="news-block_bio">
      <?php while ( have_posts() ) : the_post(); ?>
          <p><?php the_content(); ?></p>
        <?php do_action( 'foundationpress_post_before_entry_content' ); ?>
  <?php endwhile;?>
  </div>    
</section>

<!-- CTA TEMPLATE PART -->
 <?php get_template_part( 'template-parts/home-cta' ); ?>
 <div class="spacer"></div>

 <!-- FOOTER TEMPLATE PART -->
 <?php get_template_part( 'template-parts/home-footer' ); ?>

 <?php get_footer();




