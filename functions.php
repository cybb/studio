<?php 

//include
include('widget_operations.php');
include('sidebar_register.php');
include('menus.php');
include('script_connect.php');





// clear img 

add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);
function remove_width_attribute($html){
	$html = preg_replace('/(width|height)="\d*"\s/' , "" , $html);
	return $html;
}


// add picture theme support
add_theme_support('post-thumbnails');






























?>