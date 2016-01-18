<?php add_action('wp_print_styles', 'stylesheet');
function stylesheet(){?>
	<style>
		.answer{display: none;}
	</style>
<?php } ?>

<?php get_header(); ?>

	<section id="primary" class="content-area">
		<?php get_sidebar(); ?>
		<div id="content" class="site-content" role="main">
			<h2>FAQs</h2>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', 'faqs' );
					endwhile;
					// Previous/next page navigation.
					twentyfourteen_paging_nav();

				else : get_template_part( 'content', 'none' );
				endif; ?>
		</div><!-- #content -->
	</section><!-- #primary -->
<script type="text/javascript">
	$(document).ready(function() {
		$("h3").click(function() {$(this).nextUntil('h3').slideToggle('slow');
			jQuery(this).toggleClass('active');
		});
	});
</script>
<?php get_footer();