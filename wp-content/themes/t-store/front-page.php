<?php 
  /*
    Template Name: Russian Front Page
  */
?>

<?php get_header(); ?>

<main class="main-content">
  
  <?php 

    get_template_part('blocks/ru/top');

    get_template_part('blocks/ru/about');

    get_template_part('blocks/ru/products');

    get_template_part('blocks/ru/reviews');

    get_template_part('blocks/ru/clients');

    get_template_part('blocks/ru/process');

    get_template_part('blocks/ru/printing');

    get_template_part('blocks/ru/contact');

    get_template_part('blocks/ru/contact-form');

  ?>

</main>

<?php get_footer(); ?>