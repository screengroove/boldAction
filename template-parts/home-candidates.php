    <?php
      const POSTS_PER_PAGE = 20;
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $query = new Wp_Query(array(
       'post_type' => "candidates",
       'paged' => $paged,
       'orderby'=> 'menu_order',
       'order'=>'ASC',
       'posts_per_page' => POSTS_PER_PAGE
      ));
    ?>



    
 <?php if ($query->have_posts()) :  ?>
<div class="spacer"></div>
<section data-scroll-index="1" id="candidate-section" class="gray-block">
  <div class="block-title">
    <h2><span>BOLD</span> Candidates </h2>
    <p>Endorsed Candidates</p>
  </div>
  <!-- CANDIDATES IMAGE GRID -->
   <div id="candidate-grid" class="image-grid">
   <?php while ($query->have_posts()) : $query->the_post(); ?>
     <?php get_template_part( 'template-parts/candidate-grid-item', get_post_format() ); ?>
     <?php endwhile; ?>
  </div>
</section>



<?php else : ?>
           
<?php endif; // End have_posts() check. ?>