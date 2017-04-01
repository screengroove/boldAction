<?php
/**
 * Template Name: News Listing Page
 * Description:News Listing Feed

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
  <h1 class="title-bold"><span>NEWS</span></h1>
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/stripes.png" alt="">
</div>

<section class="ltgray-block">
  <div class="news-list">
        <?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>


	<!-- the loop -->
	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
		<!--<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>-->
    	<?php get_template_part( 'template-parts/news-listing-item', 'none' ); ?>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
  </div>

</section>

   <!-- CTA TEMPLATE PART -->
 <?php get_template_part( 'template-parts/home-cta' ); ?>
 <div class="spacer"></div>

    <!-- FOOTER TEMPLATE PART -->
 <?php get_template_part( 'template-parts/home-footer' ); ?>






 <?php get_footer();