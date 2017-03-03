


<section class="news-grid">
    <?php
        $args = array( // Define WP Query Parameters
        'post_type' => 'post',
        'posts_per_page'=> '3',
        );
        $the_query = new WP_Query( $args );
        while ($the_query -> have_posts()) : $the_query -> the_post();
    ?>
           
           <?php get_template_part( 'template-parts/news-grid-item', get_post_format() ); ?>
    <?php
        endwhile;
        wp_reset_postdata(); //reset
    ?>
</section>