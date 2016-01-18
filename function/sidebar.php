<?php 
//REGISTER SIDEBARS
	add_action( 'widgets_init', 'my_register_sidebars' );

	function my_register_sidebars() {
	register_sidebar(
		array(
			'id' => 'sidebar',
			'name' => __( 'Full Calendar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	register_sidebar(
		array(
			'id' => 'events',
			'name' => __( 'Events List' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
}