<footer class="main-footer">

  <div class="footer-inner-wrap">
    <!-- <div class="footer-social-wrap">
      <a href="https://facebook.com" target="_blank" class="social-link">
        <?php echo file_get_contents( get_template_directory_uri() . '/assets/build/img/svg/facebook.svg' ) ?>
      </a>
    </div>
    <div class="footer-social-wrap">
      <a href="https://instagram.com" target="_blank" class="social-link">
        <?php echo file_get_contents( get_template_directory_uri() . '/assets/build/img/svg/instagram.svg' ) ?>
      </a>
    </div> -->

      <?php

        if( is_front_page() ) {

          $copyright_text = 'Все права защищены';

        }

        else {

          while ( have_posts() ) : the_post();

            if ( get_page_template_slug( $post->ID ) == 'page-ua.php' || $post->post_type == 'fabric' ) {
              $copyright_text = 'Усі права застережено';
            } else {
              if ( get_page_template_slug( $post->ID ) == 'page-en.php' || $post->post_type == 'item' ) {
                $copyright_text = 'All rights reserved';
              } else {
                $copyright_text = 'Все права защищены';
              }
            }

          endwhile;

        }

      ?>

    <p class="footer-inner-text">T-STORE <br><?php echo date('Y'); ?> &copy; <?php echo $copyright_text; ?></p>
  </div>
  
  <?php wp_footer(); ?>

</footer>

</body>
</html>