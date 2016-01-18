<?php get_header(); ?>

	<div id="primary" class="content-area">
		<?php get_sidebar(); ?>
		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<h2><?php the_title(); ?></h2>

						<?php if (is_single(85)){
							$page_id = 1005;
							$page_data = get_page( $page_id );

							echo apply_filters('the_content', $page_data->post_content);
							} ?>

						<ul class="dept">
						  <?php if( have_rows('members') ): ?>
						     <?php while( have_rows('members') ): the_row(); ?>
								<li>
								  <?php if (get_sub_field('photo')){ ?><img src="<?php the_sub_field('photo'); ?>"/>
								  	<?php } else { ?>
									  	<img class="no-image" src="http://milfordne.gov/wordpress/wp-content/uploads/no-image.jpg"/>
								  	<?php } ?>
						          <h3><?php the_sub_field('name'); ?></h3>
						          <?php if (get_sub_field('title')){ ?><h4><?php the_sub_field('title'); ?></h4><?php } ?>
						          <?php if (get_sub_field('email')){ ?><a href="mailto:<?php the_sub_field('email'); ?>">Email</a><?php } ?>
						          <?php if (get_sub_field('phone')){ ?><p>Tel: <?php the_sub_field('phone'); ?></p><?php } ?>
						          <?php if (get_sub_field('cell')){ ?><p>Cell: <?php the_sub_field('cell'); ?>   </p><?php } ?>
						          <?php if (get_sub_field('fax')){ ?><p>Fax: <?php the_sub_field('fax'); ?>	 </p><?php } ?>
						          <?php if (get_sub_field('address')){ ?><p><?php the_sub_field('address'); ?></p><?php } ?>
						          <div class="clear"></div>
								</li>
						     <?php endwhile; ?>
						  <?php endif; ?>
						</ul>
						<?php
							//the_content();
							edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
						?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

				<?php // Previous/next post navigation.
				//twentyfourteen_post_nav();

				endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer();