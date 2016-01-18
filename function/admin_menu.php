<?php
function custom_menu($t) {
	#remove menu items
	remove_menu_page('link-manager.php');
	//remove_menu_page('tools.php');
	remove_menu_page('edit-comments.php');
	remove_menu_page('edit.php?post_type=sp_organizer' );
	remove_menu_page( 'edit.php' );                   //Posts
	
	#custom menu labels
	global $menu;
	global $submenu;
	
    foreach($menu as $k=>$v){
	    switch($v[0]){
		    /*case 'Posts':
				$menu[$k][0] = 'News';
				break;
			case 'Appearance':
				$menu[$k][0] = 'Theme';
				break;*/
	    }
    }
}
add_action('admin_menu', 'custom_menu' ,9999);
?>