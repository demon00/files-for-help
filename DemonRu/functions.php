<?php
function enqueue_styles() {
  wp_enqueue_style( 'myThemes-style', get_stylesheet_uri());
  wp_register_style( 'main.css', get_template_directory_uri() . '/css/main.css', array(), '0.1' );
  wp_enqueue_style( 'main.css', get_template_directory_uri() . '/css/main.css', array(), '0.1' );
  wp_register_style( 'style2.css', get_template_directory_uri() . '/css/style2.css', array(), '0.1' );
  wp_enqueue_style( 'style2.css', get_template_directory_uri() . '/css/style2.css', array(), '0.1' );
  wp_register_style( 'animate.css', get_template_directory_uri() . '/css/animate.css', array(), '0.1' );
  wp_enqueue_style( 'animate.css', get_template_directory_uri() . '/css/animate.css', array(), '0.1' );
  wp_register_style( 'font-awesome', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.min.css', array(), '0.1' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.min.css', array(), '0.1' );
  wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Cabin|Open+Sans+Condense d:300|Montserrat');
  wp_enqueue_style( 'font-style');
  wp_register_style( 'media.css', get_template_directory_uri() . '/css/media.css', array(), '0.1' );
  wp_enqueue_style( 'media.css', get_template_directory_uri() . '/css/media.css', array(), '0.1' );
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function my_scripts_method() {
  wp_deregister_script( 'jquery-core' );
  wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
  wp_enqueue_script( 'jquery' );
}   
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function enqueue_scripts () {
  wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '0.1', true );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '0.1', true );
  wp_register_script( 'wowjs', get_template_directory_uri() . '/js/wow.min.js', array(), '0.1', true );
  wp_enqueue_script( 'wowjs', get_template_directory_uri() . '/js/wow.min.js', array(), '0.1', true );
  wp_add_inline_script('wowjs', '  new WOW().init();');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

// allow SVG uploads
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
  $existing_mimes['svg'] = 'image/svg+xml';
  return $existing_mimes;
}
function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
 }
 add_action('admin_head', 'fix_svg');

?>
