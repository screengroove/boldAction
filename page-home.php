<?php
/**
 * Template Name: Homepage
 * Description: Will be Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

  <!-- NAV TEMPLATE PART -->
 <?php get_template_part( 'template-parts/nav' ); ?>

 <!-- HERO TEMPLATE PART -->
 <?php get_template_part( 'template-parts/home-hero' ); ?>
<div class="spacer"></div>
  <!-- MISSION TEMPLATE PART -->
  <?php get_template_part( 'template-parts/home-mission' ); ?>
  

  <!-- CANDIDATES TEMPLATE PART -->
  <?php get_template_part( 'template-parts/home-candidates' ); ?>
  <div class="spacer"></div>

    <!-- SOCIAL TEMPLATE PART -->
  <?php get_template_part( 'template-parts/home-social' ); ?>
  <div class="spacer"></div>

  <!-- NEWS TEMPLATE PART -->
  <?php get_template_part( 'template-parts/home-news' ); ?>
  <div class="spacer"></div>

    <!-- MEMBERS TEMPLATE PART -->
  <?php get_template_part( 'template-parts/home-members' ); ?>
  <div class="spacer"></div>

   <!-- FAST FACTS TEMPLATE PART -->
  <?php get_template_part( 'template-parts/home-facts' ); ?>
  <div class="spacer"></div>

   <!-- CTA TEMPLATE PART -->
 <?php get_template_part( 'template-parts/home-cta' ); ?>
 <div class="spacer"></div>

  <!-- FOOTER TEMPLATE PART -->
 <?php get_template_part( 'template-parts/home-footer' ); ?>









 <?php get_footer();