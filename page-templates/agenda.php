<?php
/*
Template Name: Agenda
*/
?>
<?php get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<?php get_sidebar(); ?>
		<?php //if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
							<h2><?php the_title(); ?></h2>
							<h3>Agenda</h3>

							<?php if( get_field('agenda') ): ?>
 								<?php while( has_sub_field('agenda') ): ?>
							 		<a target="_blank" href="<?php the_sub_field('file'); ?>"><?php the_sub_field('title'); ?></a>
								<?php endwhile; ?>
							<?php endif; ?>

							<h3>Minutes</h3>
							<?php the_content(); ?>
							<ul class="minutes">
							  <?php if( have_rows('minutes') ): ?>
								  <?php while( have_rows('minutes') ): the_row(); ?>
									<li>
										<h3><?php the_sub_field('Year'); ?></h3>
										<?php if( have_rows('minutes1') ): ?>
										  <p>
										  <?php while( have_rows('minutes1') ): the_row(); ?>
											<a href="<?php the_sub_field('file'); ?>"><?php the_sub_field('title'); ?></a>
										  <?php endwhile; ?>
										  </p>
										<?php endif; ?>
									</li>
								  <?php endwhile; ?>
							<?php endif; ?>

						<!-- past minutes -->
							  <?php if( have_rows('past_minutes') ): ?>
							     <?php while( have_rows('past_minutes') ): the_row(); ?>
									<li>
							          <h3><?php the_sub_field('year'); ?></h3>
							          <?php the_sub_field('links'); ?>
									</li>
							     <?php endwhile; ?>
							  <?php endif; ?>
							</ul>
							<?php edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-## -->

				<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer();?>