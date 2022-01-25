<?php 

//Создаем ACF-группу с помощью php-кода
//Можно закомментить строчку ниже и вместо php-кода импортировать json-файл в папке acf
include_once( get_template_directory() . '/acf/acf-group.php' );

//Theme supports
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
	
//Load styles & scripts	
function theme_scripts() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );	


//Получаем данные горячих точек и возвращаем в виде массива
function get_acf_dots_data($page_id) {
	$hot_count = get_field('hot_count');
	if ($hot_count) {
		$counter = 1;
		$dots = array();
		$row = array();
		
		while ($counter <= $hot_count):
			$row['x'] = get_field('hot_x_' . $counter, $page_id);
			$row['y'] = get_field('hot_y_' . $counter, $page_id);
			$row['text'] = get_field('hot_text_' . $counter, $page_id);
			$dots[] = $row;
			$counter++;
		endwhile; 
		
		return $dots;
	}
	
	else {
		return array();
	}
}

//Подключение скриптов необходимых для работы Горячих точек в админке
function acf_dots_enqueue_scripts() {
	wp_enqueue_script( 'acf-dots-js', get_template_directory_uri() . '/js/acf-dots.js', array(), '1.0.0', true );
	
	$dots_data = get_acf_dots_data($_REQUEST['post']);
	wp_localize_script('acf-dots-js', 'dots_data', $dots_data);
}

add_action('acf/input/admin_enqueue_scripts', 'acf_dots_enqueue_scripts');



	