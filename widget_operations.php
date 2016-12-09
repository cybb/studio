<?php

// ======= DISABLE STANDART WIDGETS ++++----------

function delete_Widgets(){
	
unregister_widget('WP_Widget_Pages');            // Виджет страниц
unregister_widget('WP_Widget_Calendar');         // Календарь
unregister_widget('WP_Widget_Archives');         // Архивы
unregister_widget('WP_Widget_Links');            // Ссылки
unregister_widget('WP_Widget_Meta');             // Мета виджет
unregister_widget('WP_Widget_Search');           // Поиск
//unregister_widget('WP_Widget_Text');             // Текст
unregister_widget('WP_Widget_Categories');       // Категории
unregister_widget('WP_Widget_Recent_Posts');     // Последние записи
unregister_widget('WP_Widget_Recent_Comments');  // Последние комментарии
unregister_widget('WP_Widget_RSS');              // RSS
unregister_widget('WP_Widget_Tag_Cloud');        // Облако меток
unregister_widget('WP_Nav_Menu_Widget');         // Меню
	

}

// выполнили отключение виджетов
add_action('widgets_init', 'delete_Widgets'); 

















?>