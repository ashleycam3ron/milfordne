

<div class="entry">
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	} else { ?>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/staff.jpg" />
	<?php } ?>
	<?php the_title( '<h2>', '</h2>' ); ?>
	<?php the_excerpt(); ?>
	<?php edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); ?>
</div><!-- .entry -->
