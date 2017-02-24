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

 <!-- HERO TEMPLATE PART -->
 <?php get_template_part( 'template-parts/home-hero' ); ?>

  <!-- MISSION TEMPLATE PART -->
  <?php get_template_part( 'template-parts/home-mission' ); ?>

  <!-- CANDIDATES TEMPLATE PART -->
  <?php get_template_part( 'template-parts/home-candidates' ); ?>









 <?php get_footer();