<?php get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<?php get_sidebar(); ?>
		<div id="content" class="site-content" role="main">
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php endwhile; ?>
			</article><!-- #post-## -->
		</div><!-- #content -->

		<!-- <div class="clear"></div> -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer();
