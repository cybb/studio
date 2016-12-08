<?php


// ----- подключение jQuey ------------


add_action('wp_enqueue_scripts' , 'my_script');

function my_script(){

	wp_deregister_script('jquery-core');
	wp_register_script('jquery-core' , 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
	
	wp_enqueue_script('jquery');
	
}

add_action('wp_enqueue_scripts' , 'dropdown_jquery');

function dropdown_jquery(){
	
	wp_register_script('jquery3' , '')
	
}













?>