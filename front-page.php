<?php get_header(); ?>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div style="display: none">
				<h2>The official government &amp; community website of Milford, Nebraska</h2>
				<p>Milford was established in 1864. The town has a rich history, with pioneer stories, the coming of the railroad, a spring of medicinal waters and a legend of an Indian princess.</p>
				<p>In 1941, Milford became the first site in the nation of vocational education with the establishment of the Nebraska Trade School which later became Southeast Community College.</p>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<div id="slideshow">
							<div class="cycle-slideshow"
								data-cycle-slides="> div"
							    data-cycle-auto-height=container
							    data-cycle-center-horz=true
								data-cycle-center-vert=true
							    >
							  <?php if( get_field('slideshow')): ?>
								<?php while( has_sub_field('slideshow') ):
									$image = get_sub_field('image');
								?>
									<div>
									    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
									    <div class="txt">
									      <h4><?php the_sub_field('title'); ?></h4>
									    </div>
									</div>
								<?php endwhile; endif;  ?>
							</div>
							<!--
<a class="cycle-prev"></a>
							<a class="cycle-next"></a>
-->
							<div class="cycle-pager"></div>
						</div>
						<?php wp_nav_menu(array( 'menu' => 'quick')); ?>
					</div><!-- .entry-content -->
					<div class="entry">
						<div class="contain">
						<div class="col"><?php //dynamic_sidebar( 'events' ); ?>
							<a class="button baseball" target="_blank" href="https://docs.google.com/spreadsheets/d/1UWKKEIdhJdziYHAYOAMyuVttaPiOJfUtxGf9j3Xxesw/edit?usp=sharing<?php //the_field('schedule_upload'); ?>"><span><?php echo date('Y'); ?></span> <p>Baseball Field Schedule</p><div class="clear"></div></a>
							<?php if( get_field('notice')): ?>
								<div class="notice">
									<h3>Notice</h3>
									<p><?php the_field('notice'); ?></p>
								</div>
							<?php endif;  ?>
						</div>
						<div class="content">
							<?php the_content(); ?>
							<?php edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); ?>
						</div>
						<div class="col"><?php dynamic_sidebar('sidebar'); ?></div>
						<div class="clear"></div>
						<div class="mask"></div>
						</div>
					</div>

				</article><!-- #post-## -->
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<script>
	jQuery('.cycle-slideshow').cycle({
		timeout: 6000,
		speed: 2000,
		prev: '.cycle-prev',
		next: '.cycle-next',
		pager: '.cycle-pager'
		});
</script>
<?php get_footer();