	<a class="image-grid_sm " href="<?php the_permalink() ?>"
		style="background-image: url( <?php echo the_post_thumbnail_url( 'full' ) ?> )">
		<figcaption>
			<p><?php the_title() ?></p>
		<em><?php the_field('organizational_role'); ?></em>
		</figcaption>
	</a>