	<div class="image-grid_sm "
		style="background-image: url( <?php echo the_post_thumbnail_url( 'full' ) ?> )">
		<figcaption>
			<p><?php the_title() ?></p>
		<em><?php the_field('organizational_role'); ?></em>
		</figcaption>
		<a class="hover-link" href="<?php the_permalink() ?>">
			<i class="fa fa-mouse-pointer" aria-hidden="true"></i>
		</a>
	</div>