<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<h3><?php the_title(); ?><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow.png"></span></h3>
		<div class="answer">
		<?php
			the_content();
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );

			edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
		?>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->