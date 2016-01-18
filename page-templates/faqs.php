<?php
/*
Template Name: FAQs
*/
?>
<?php add_action('wp_print_styles', 'stylesheet');
function stylesheet(){?>
	<style></style>
<?php } ?>

<?php get_header();?>
<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<?php //if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
		<div id="content" class="site-content faqs" role="main">
			<?php while ( have_posts() ) : the_post();
					the_content();
				endwhile; ?>

			<?php query_posts(array(
		        'post_type' => 'faqs',
		        'showposts' => -1,
				'orderby' => 'date',
				'order' => 'ASC'
		    )); ?>
			<?php while (have_posts()) : the_post();
				get_template_part( 'content', 'faqs' );
				endwhile;?>
		</div><!-- #content -->
		<?php get_sidebar( 'content' ); ?>
	</div><!-- #primary -->
</div><!-- #main-content -->

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("h3").click(function() {
	        jQuery(this).nextUntil('h3').slideToggle('slow');
	        jQuery(this).toggleClass('active');
	    });
    });
</script>

<?php get_footer();