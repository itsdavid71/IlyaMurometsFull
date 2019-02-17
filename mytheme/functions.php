<?php
require 'metaBoxClass.php';

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );

add_theme_support( 'post-thumbnails' );


remove_filter('the_content', 'wpautop');

function enqueue_styles() {
    wp_enqueue_style( 'theme-style', get_template_directory_uri().'/style.css');

	wp_enqueue_style( 'theme-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
function enqueue_scripts () {
	wp_register_script('jquery-custom-script', 'http://code.jquery.com/jquery-3.3.1.min.js', true);
    wp_register_script('jquery-migrate-custom-script', 'http://code.jquery.com/jquery-migrate-3.0.1.min.js', true);
    wp_register_script('onepagenav-custom-script', 'https://lib.arvancloud.com/ar/jquery-one-page-nav/3.0.0/jquery.nav.min.js', true);
    wp_register_script('main-custom-script', get_template_directory_uri().'/js/main.js', true);

	wp_enqueue_script('jquery-custom-script');
	wp_enqueue_script('jquery-migrate-custom-script');
	wp_enqueue_script('onepagenav-custom-script');
	wp_enqueue_script('main-custom-script');
}
add_action('wp_footer', 'enqueue_scripts');

show_admin_bar(false);


	
function ajax_handler() {
	status_header(200);
	$post_data = array(
		'post_status'   => 'private',
		'post_type'     => 'orders',
		'post_title'         => 'Обращение от '.strip_tags( $_POST['name'] ).'. Получено в '.date('H:i:s d.m.Y'),
		'meta_input'    => array( 
			'my1_name'      => strip_tags( $_POST['name'] ),
			'my1_email'     => strip_tags( $_POST['email'] ), 
			'my1_message'   => strip_tags( $_POST['message'] ),
			'my1_brand'     => strip_tags( $_POST['brand'])
			)
	);
	wp_insert_post($post_data);
	header('Location: '.$_SERVER['HTTP_REFERER']);
}
	
	
add_action('admin_post_nopriv_contact', 'ajax_handler');
add_action('admin_post_contact', 'ajax_handler');

add_action( 'init', 'true_register_post_type_init' ); // Использовать функцию только внутри хука init
 
function true_register_post_type_init() {

	$brands = array(
		'label'  => null,
		'labels' => array(
			'name' => 'Бренды',
			'singular_name' => 'Бренд', // админ панель Добавить->Функцию
			'add_new' => 'Добавить бренд',
			'add_new_item' => 'Добавить новый бренд', // заголовок тега <title>
			'edit_item' => 'Редактировать бренд',
			'new_item' => 'Новый бренд',
			'all_items' => 'Все бренды',
			'view_item' => 'Просмотр брендов на сайте',
			'search_items' => 'Искать бренды',
			'not_found' =>  'Брендов не найдено.',
			'not_found_in_trash' => 'В корзине нет брендов.',
			'menu_name' => 'Бренды' // ссылка в меню в админке
		),
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true, 
		'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports' => array('title', 'brandname', 'editor', 'branddesc', 'brandimage', 'brandgood', 'brandlink')
	);



	$order = array(
		'label'  => null,
		'labels' => array(
			'name' => 'Обращения',
			'singular_name' => 'Обращение', // админ панель Добавить->Функцию
			'add_new' => 'Добавить обращение',
			'add_new_item' => 'Добавить новое обращение', // заголовок тега <title>
			'edit_item' => 'Редактировать обращение',
			'new_item' => 'Новое обращение',
			'all_items' => 'Все обращения',
			'view_item' => 'Просмотр обращени1 на сайте',
			'search_items' => 'Искать обращения',
			'not_found' =>  'Обращений не найдено',
			'not_found_in_trash' => 'В корзине нет обращений',
			'menu_name' => 'Обращения' // ссылка в меню в админке
		),
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true, 
		'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'name', 'message', 'brand', 'email')
	);

	register_post_type('brands', $brands);
	register_post_type('orders', $order);
}

class_exists('Kama_Post_Meta_Box') && new Kama_Post_Meta_Box(
	array(
		'id'         => 'my',
		'title'      => 'Информация о бренде',
		'post_type'  => 'brands',
		'fields'     => array(
			'brandname' => array('type'=>'text', 'title'=>'Название бренда (серый текст в общей выдаче информации по бренду напр Lefard)'),
			'branddesc' => array('type'=>'text', 'title'=>'Описание бренда (черный текст в общей выдаче, напр Посуда)'),
			'brandimage'=> array('type'=>'image', 'title'=>'Логотип бренда'),
			'brandgood' => array('type'=>'image', 'title'=>'Картинка товара бренда'),
			'brandlink' => array('type'=>'text', 'title'=>'Ссылка на страницу бренда'),
		),
	)
);

class_exists('Kama_Post_Meta_Box') && new Kama_Post_Meta_Box(
	array(
		'id'        => 'my1',
		'title'     => 'Информация об обращении',
		'post_type' => 'order',
		'fields'    => array(
			'name'    => array('type'=>'text', 'title'=>'Имя. Компания'),
			'message' => array('type'=>'text', 'title'=>'Сообщение \ контактный телефон'),
			'brand'   => array('type'=>'text', 'title'=>'Название бренда интересующей продукции'),
			'email'   => array('type'=>'text', 'title'=>'E-mail'),
		),
	)
);