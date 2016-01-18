<?php
/*
Template Name: Business Directory
*/
?>
<?php add_action('wp_print_styles', 'stylesheet');
function stylesheet(){?>
	<style></style>
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

			<?php if( get_field('categories')): ?>
				<?php while( has_sub_field('categories') ): ?>
				    <h3><?php the_sub_field('category'); ?>
				    	<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow.png"></span>
				    </h3>
				    <div class="links">
				      <?php the_sub_field('businesses'); ?>
				    </div>
				<?php endwhile;
			endif;  ?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("h3").click(function() {
	        jQuery(this).nextUntil('h3').slideToggle('slow');
	        jQuery(this).toggleClass('active');
	        });
        jQuery('p:empty').remove();
        jQuery('p').each(function(){
		    var value = $.trim($(this).html());
		    if(value == '&nbsp;'){
		        $(this).remove();
		    }
		});
    });
</script>

<?php get_footer();