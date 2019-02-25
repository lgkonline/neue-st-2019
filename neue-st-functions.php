<?php

function neue_st_post_thumbnail() {
	?>
	<figure class="post-thumbnail">
		<a class="post-thumbnail-inner" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
				<img />
			<?php else : ?>
				<?php the_post_thumbnail( 'post-thumbnail' ); ?>
			<?php endif; ?>
		</a>
	</figure>

	<?php
}