<?php
// Добавление <title>
add_theme_support( 'title-tag' );

// Добавление скриптов и стилей
function my_theme_load_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri() '/style.css');
  // wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '0.1' );
  wp_enqueue_style( 'style2', get_template_directory_uri() . '/css/style2.css', array(), '0.1' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.min.css', array(), '0.1' );
  // wp_enqueue_style( 'mq1366', get_template_directory_uri() . '/css/mq1366.css', array(), '0.1' );
  // wp_enqueue_style( 'mq1260', get_template_directory_uri() . '/css/mq1260.css', array(), '0.1' );
  // wp_enqueue_style( 'mq980', get_template_directory_uri() . '/css/mq980.css', array(), '0.1' );
  // wp_enqueue_style( 'mq_small', get_template_directory_uri() . '/css/mq_small.css', array(), '0.1' );

  wp_enqueue_script( 'main', get_template_directory_uri() . 'js/main.js', array(), '0.1', true );
  // wp_enqueue_script( 'wowjs', get_template_directory_uri() . 'js/wow.min.js', array(), '0.1', true );
};
add_action('wp_enqueue_script', 'my_theme_load_resources');
?>