<?php
function my_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','my_theme_support');


function my_theme_scripts() {
  wp_enqueue_style( 'ress-css', 'https://unpkg.com/ress/dist/ress.min.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'basic-css', get_template_directory_uri() . '/assets/css/style.css', array('ress-css'), '1.0.0', 'all' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,400&family=Noto+Sans+JP:wght@400;700&display=swap', array(), null );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('script_jquery'), '1.0.0', true );
  wp_enqueue_script('script_jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.4.min.js', array(), '3.6.4', true);
  wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/a145c2daf4.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

