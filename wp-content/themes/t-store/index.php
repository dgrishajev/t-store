<?php get_header(); ?>

<main class="main-content">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <p><?php the_content(); ?></p>

  <?php endwhile; else : ?>

    <p><?php _e("Sorry, no posts matched your criteria"); ?></p>

  <?php endif; ?>

</main>

<?php get_footer(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65841188-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-65841188-1');
</script>