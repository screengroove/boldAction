	
	<div class="image-grid_item "
		style="background-image: url( <?php echo the_post_thumbnail_url( 'full' ) ?> )">
		<figcaption>
			<p><?php the_title() ?></p>
			<em><?php the_field('district'); ?></em>
		</figcaption>
		<a class="hover-link" href="<?php the_permalink() ?>">
			<i class="fa fa-mouse-pointer" aria-hidden="true"></i>
		</a>
	</div>