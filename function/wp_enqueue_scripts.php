<?php
function enqueue(){
	wp_deregister_script('jquery');
	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
	
	/*
wp_register_style('normalize', get_stylesheet_directory_uri().'/css/normalize.css', NULL, '2.0.1');
	wp_register_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css', NULL, '2.1.1');
	wp_register_style('media', get_stylesheet_directory_uri().'/css/media.css', NULL, '1.0');
	wp_register_style('font', get_stylesheet_directory_uri().'/css/font.css', NULL, '1.0');
	wp_enqueue_style('theme', get_stylesheet_uri(), array('normalize','bootstrap','media','font'), '1.0.5');
*/
	wp_register_script('modernizr', get_stylesheet_directory_uri().'/js/modernizr.js', NULL, '2.7.1');
	wp_register_script('functions', get_stylesheet_directory_uri().'/js/functions.js');
	wp_register_script('cycle2', get_stylesheet_directory_uri().'/js/jquery.cycle2.min.js', array('jquery'), '1.01');
	
	wp_register_script('fancybox2', get_stylesheet_directory_uri().'/js/source/jquery.fancybox.js', NULL, '2.1.4');
		
	//styles
	wp_register_style('fancybox2', get_stylesheet_directory_uri().'/js/source/jquery.fancybox.css', NULL, '2.1.4');
	
	
	wp_enqueue_script(array('jquery','functions','modernizr','fancybox2'));
	
	if (is_front_page()){
		wp_enqueue_script(array('cycle2'));
	}
	
	//if (is_page(21)){
		wp_enqueue_style('fancybox2');
	//}
}
add_action('wp_enqueue_scripts', 'enqueue');
?>