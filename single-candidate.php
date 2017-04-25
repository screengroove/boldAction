<?php
/**
 * Template Name: Candidate Detail
 * Description: Will be Homepage
 * Template Post Type: candidates
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>


 <div class="mission-block">
   <?php get_template_part( 'template-parts/nav-fixed' ); ?>
  <h1 class="title-bold"><span>BOLD</span> CANDIDATE</h1>
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/stripes.png" alt="">
</div>

<section class="ltgray-block">
  <div class="profile-block">
    <div class="profile-block_photo" style="background-image: url( <?php echo the_post_thumbnail_url( 'full' ) ?> )">
    </div>
    <div class="profile-block_deetsWrap">

      <div class="profile-block_deets">
        <div class="district-code"><?php the_field('district'); ?></div>
        <h3 class="profile-name"><?php the_title() ?></h3>
        <a href="<?php the_field('donateLink'); ?>" target="_blank" class="btn-round">
          DONATE
        </a>
      </div>
      <?php if( get_field('website_url') ): ?>
        <a href="<?php the_field('website_url'); ?>" target="_blank" class="profile-url">Visit Candidate's Website</a> 
      <?php endif; ?>  
    </div>
  </div>
  <div class="profile-block_bio">
      <?php do_action( 'foundationpress_before_content' ); ?>
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