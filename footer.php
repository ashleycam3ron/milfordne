		<nav>
			<h2>Quick Links</h2>
			<?php wp_nav_menu(array( 'menu' => 'quick')); ?>
		</nav>
		<div class="push clear"></div>
		</div><!-- #main -->
	</div><!-- #page -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<nav>
			<h2>Footer Navigation</h2>
			<?php wp_nav_menu(array( 'menu' => 'main', 'depth' => 1)); ?>
		</nav>
		<div class="site-info">
			<p>505 1st Street | Milford, NE 68405  |  402.761.2772</p>
			 &copy; <?php echo date('Y'); ?>  All Rights Reserved.
		</div><!-- .site-info -->
		<div class="clear"></div>
	</footer><!-- #colophon -->

	<?php wp_footer(); ?>

<?php if (get_field('alert', 179)){ ?>
	<script>
		$(document).ready(function (){
        	$('#menu-quick .alert').addClass('on');
		});
    </script>
<?php } ?>
</body>
</html>