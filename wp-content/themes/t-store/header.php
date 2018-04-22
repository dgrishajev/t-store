<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#000000">
  <title>T-Store – <?php if ( is_front_page() ) { echo 'Одежда украинского пошива по оптовым ценам'; } else { echo 'Clothing of Ukrainian tailoring at wholesale prices'; } ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
  <header class="main-header">

    <div class="header-menu-wrap">

      <?php

        if( is_front_page() ) {

          $menu = array(
           'container' => false,
           'theme_location' => 'top-ru-menu',
           'menu_class' => 'top-menu'
          );

        }

        else {

          while ( have_posts() ) : the_post();

            if ( get_page_template_slug( $post->ID ) == 'page-ua.php' || $post->post_type == 'fabric' ) {
              $slug = 'ua';
            } else {
              if ( get_page_template_slug( $post->ID ) == 'page-en.php' || $post->post_type == 'item' ) {
                $slug = 'en';
              } else {
                $slug = 'ru';
              }
            }

          endwhile;

          $menu = array(
           'container' => false,
           'theme_location' => 'top-' . $slug . '-menu',
           'menu_class' => 'top-menu'
          );

        }

        wp_nav_menu($menu);

      ?>

    </div>
      
    <div class="hamburger-icon">
      <span class="hamburger-icon-bar"></span>
      <span class="hamburger-icon-bar"></span>
      <span class="hamburger-icon-bar"></span>
      <span class="hamburger-icon-bar"></span>
    </div>    

  </header>