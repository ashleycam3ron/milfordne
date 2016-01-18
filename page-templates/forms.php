<?php
/*
Template Name: Forms & Applications
*/
?>
<?php add_action('wp_print_styles', 'stylesheet');
function stylesheet(){?>
	<style>#content a{text-transform: lowercase;text-transform: capitalize;display: block;}</style>
<?php } ?>

<?php get_header();?>
<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<?php get_sidebar(); ?>
		<div id="content" class="site-content directory" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title();?></h2>
					<?php the_content();
				endwhile; ?>

			<?php if( get_field('files')): ?>
				<?php while( has_sub_field('files') ): ?>
				    <a target="_blank" href="<?php the_sub_field('file'); ?>"><?php the_sub_field('title'); ?></a>
				<?php endwhile;
			endif;  ?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer();