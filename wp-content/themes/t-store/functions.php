<?php

add_theme_support('menus');

function t_store_register_theme_menus() {
  register_nav_menus(
    array(
      'top-en-menu' => __('Верхнее меню на английском'),
      'top-ua-menu' => __('Верхнее меню на украинском'),
      'top-ru-menu' => __('Верхнее меню на русском')
    )
  );
}

add_action('init', 't_store_register_theme_menus');

function t_store_theme_styles() {
  wp_enqueue_style('bootstrap_min_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
  wp_enqueue_style('bootstrap_theme_min_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css');
  wp_enqueue_style('slick_css', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css');
  wp_enqueue_style('slick_min_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 't_store_theme_styles');

function t_store_theme_js() {
  wp_enqueue_script('bootstrap_min_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '', true);
  wp_enqueue_script('slick_min_js', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array('jquery'), '', true);
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/build/js/app.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 't_store_theme_js');

?>