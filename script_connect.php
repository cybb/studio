<?php


// ----- подключение jQuey ------------


add_action('wp_enqueue_scripts' , 'my_script');

function my_script(){

 wp_deregister_script('jquery-core');
  
 wp_register_script('jquery-core' , 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
  
 wp_register_script('jquery-drop' , 'localhost/www/Studio/wp-content/themes/studio/assets/js/jquery.dropotron.min.js');
  
 wp_register_script('main-js', 'localhost/www/Studio/wp-content/themes/studio/assets/js/main.js');
    
 wp_register_script('skel-js' ,'localhost/www/Studio/wp-content/themes/studio/assets/js/skel.min.js');
  
    
 wp_register_script('util-js' , 'localhost/www/Studio/wp-content/themes/studio/assets/js/util.js');
  
  
	
wp_enqueue_script(array('jquery-core', 
                  'jquery-drop',
                  'main-js',
                  'skel-js',
                  'util-js'));
	
}

 
	 












?>