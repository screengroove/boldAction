	<div class="image-grid_sm "
		style="background-image: url( <?php echo the_post_thumbnail_url( 'full' ) ?> )">
		<figcaption>
			<p><?php the_title() ?></p>
		</figcaption>
		<a class="hover-link" href="<?php the_permalink() ?>">
			<i class="fa fa-link" aria-hidden="true"></i>
		</a>
	</div>