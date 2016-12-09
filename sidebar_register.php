<?php // -------- Регистрируем новые сайдбары  ------------------------------------



$left_main_sb = array('name'=>'left sidebar',
																						'id'=>'left_sb',
																						'description'=>'Это cайдбар слева',
																						'before_widget' => '',
																						'after_widget' => ''
																							); 

register_sidebar($left_main_sb);



$right_main_sb = array('name'=>'right sidebar',
																						'id'=>'right_sb',
																						'description'=>'Это cайдбар спрва',
																						'before_widget' => '',
																						'after_widget' => ''
																							); 
register_sidebar($right_main_sb);

$footer_sb = array('name'=>'footer sidebar',
																						'id'=>'footer_sb',
																						'description'=>'Это cайдбар подвала',
																						'before_widget' => '',
																						'after_widget' => ''
																							); 
 register_sidebar($footer_sb);


 
 

?>