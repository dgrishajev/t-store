<div id="products-block" class="site-block">

  <h3 class="title">T-STORE PRODUCTS</h3>

  <hr class="divider">

  <p class="desc">All T-Store products are made on Ukrainian factories out of best Turkish fabric and match standard European patterns. You get high-quality clothing with fits standard sizes, doesn’t sit down or stretch and does not tear off.</p>

  <div class="product-blocks-wrap">

    <?php
      $args = array(
        'post_type' => 'item',
        'orderby' => 'date',
        'order' => 'ASC'
      );
      $the_query = new WP_Query( $args );
      $i = 1;
      while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>
    
    <?php if ( $i%3==1 ) echo '<div class="products-row">'; ?>

      <div class="product-block sub-block">
        <div class="product-img-block" style="background: url(<?php the_field('main_image'); ?>) center center no-repeat;" onclick = "void(0)" data-product-id="<?php echo $post->ID; ?>">
          <a href="<?php the_permalink(); ?>">
            <div class="plus-icon-cont">
              <?php echo file_get_contents( get_template_directory_uri() . '/assets/build/img/svg/view.svg' ) ?>
            </div>
            <div class="product-img-hover-bg"></div>
          </a>
        </div>
        <p class="product-title">
          <a href="<?php the_permalink(); ?>" class="product-link">
            <?php the_title(); ?>
          </a>
        </p>
      </div>

    <?php if ( $i%3==0 ) echo '</div>'; ?>

    <?php $i++; ?>

    <?php
      endwhile;
      wp_reset_query(); 
    ?>

    <?php if ( $i%3!==0 ) echo '</div>' ?>

  </div>

</div>