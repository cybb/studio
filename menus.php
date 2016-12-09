<?php


function main_menu(){  
	register_nav_menu('main_menu' , 'Главное меню'); 
}

add_action('after_setup_theme', 'main_menu');








?>