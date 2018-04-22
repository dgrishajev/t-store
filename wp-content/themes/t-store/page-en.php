<?php 
  /*
    Template Name: English Front Page
  */
?>

<?php get_header(); ?>

<main class="main-content">
  
  <?php 

    get_template_part('blocks/en/top');

    get_template_part('blocks/en/about');

    get_template_part('blocks/en/products');

    get_template_part('blocks/en/reviews');

    get_template_part('blocks/en/clients');

    get_template_part('blocks/en/process');

    get_template_part('blocks/en/printing');

    get_template_part('blocks/en/contact');

    get_template_part('blocks/en/contact-form');

  ?>

</main>

<?php get_footer(); ?>