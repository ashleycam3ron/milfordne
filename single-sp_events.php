<?php get_header(); ?>

	<div id="primary" class="content-area">
		<?php get_sidebar(); ?>
		<div id="content" class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					get_template_part( 'content', 'page' );

					// Previous/next post navigation.
					//twentyfourteen_post_nav();

				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer();