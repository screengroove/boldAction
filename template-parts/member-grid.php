    <?php
 
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $query = new Wp_Query(array(
       'post_type' => "members",
       'paged' => $paged,
       'orderby'=> 'menu_order',
       'order'=>'ASC',
       'posts_per_page' => 100
      ));
    ?>

    <div class="image-grid" >
      <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        <?php get_template_part( 'template-parts/member-grid-item', get_post_format() ); ?>
      <?php endwhile; ?>

      <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
      <?php endif; // End have_posts() check. ?>
    </div>
