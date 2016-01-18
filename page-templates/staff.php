<?php
/*
Template Name: Meet the Staff
*/
?>
<?php add_action('wp_print_styles', 'stylesheet');
function stylesheet(){?>
	<style></style>
<?php } ?>

<?php get_header();?>
<div id="main-content" class="main-content">
	<?php if ( has_post_thumbnail() ) {
		twentyfourteen_post_thumbnail();
		} else { ?>
		<div class="post-thumbnail">
			<img src="http://milehighendo.com/wordpress/wp-content/uploads/2013/12/banner.jpg" class="wp-post-image" alt="banner" />
		</div>
	<?php } ?>
	<div id="primary" class="content-area">
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
		<div id="content" class="site-content staff" role="main">
			<?php while ( have_posts() ) : the_post();
					the_content();
				endwhile; ?>
			
			<?php query_posts(array( 
		        'post_type' => 'staff',
		        'showposts' => -1,
				'orderby' => 'menu_order',
				'order' => 'ASC'
		    )); ?>
			<?php while (have_posts()) : the_post();
				get_template_part( 'content', 'staff' ); 
				endwhile;?>
		</div><!-- #content -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->
</div><!-- #main-content -->
    
<?php get_footer();