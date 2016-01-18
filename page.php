<?php get_header(); ?>

<div id="main-content" class="main-content">
	
	<div id="primary" class="content-area">
		<?php get_sidebar(); ?>
		<?php //if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post();
					get_template_part( 'content', 'page' );
				endwhile; ?>

		</div><!-- #content -->
		
		<!-- <div class="clear"></div> -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer();