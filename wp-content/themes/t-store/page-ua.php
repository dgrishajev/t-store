<?php 
  /*
    Template Name: Ukrainian Front Page
  */
?>

<?php get_header(); ?>

<main class="main-content">
  
  <?php 

    get_template_part('blocks/ua/top');

    get_template_part('blocks/ua/about');

    get_template_part('blocks/ua/products');

    get_template_part('blocks/ua/reviews');

    get_template_part('blocks/ua/clients');

    get_template_part('blocks/ua/process');

    get_template_part('blocks/ua/printing');

    get_template_part('blocks/ua/contact');

    get_template_part('blocks/ua/contact-form');

  ?>

</main>

<?php get_footer(); ?>