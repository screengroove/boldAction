	
	<div class="image-grid_item "
		style="background-image: url( <?php echo the_post_thumbnail_url( 'full' ) ?> )">
		<figcaption>
			<?php the_title() ?>
		</figcaption>
		<a class="hover-link" href="<?php the_permalink() ?>">
			<i class="fa fa-link" aria-hidden="true"></i>
		</a>
	</div>