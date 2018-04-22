<?php get_header(); ?>

<main class="main-content">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="product-page-wrap">
        
      <?php if ( get_field('first_image') || get_field('second_image') || get_field('third_image') ) : ?>

      <?php $hasAtLeastTwoImages = ( get_field('first_image') && get_field('second_image') ) || 
                                   ( get_field('first_image') && get_field('third_image') ) || 
                                   ( get_field('second_image') && get_field('third_image') ); ?>

        <div class="product-modal-left sub-block">

          <div id="product-<?php echo $post->ID; ?>-slider" class="carousel slide <?php if ( $hasAtLeastTwoImages ) { echo 'padded-left'; } ?>" data-ride="carousel">
            
            <?php if ( $hasAtLeastTwoImages ) : ?>

              <!-- Indicators -->
              <ol class="carousel-indicators">
                <?php if ( get_field('first_image') ) : ?>
                  <li data-target="#product-<?php echo $post->ID; ?>-slider" data-slide-to="0" class="active">
                    <img src="<?php the_field('first_image'); ?>" alt="Item photo" class="carosel-dot-img">
                  </li>
                <?php endif; ?>
                <?php if ( get_field('second_image') ) : ?>
                  <li data-target="#product-<?php echo $post->ID; ?>-slider" data-slide-to="1">
                    <img src="<?php the_field('second_image'); ?>" alt="Item photo" class="carosel-dot-img">
                  </li>
                <?php endif; ?>
                <?php if ( get_field('third_image') ) : ?>
                  <li data-target="#product-<?php echo $post->ID; ?>-slider" data-slide-to="2">
                    <img src="<?php the_field('third_image'); ?>" alt="Item photo" class="carosel-dot-img">
                  </li>
                <?php endif; ?>
                <?php if ( get_field('fourth_image') ) : ?>
                  <li data-target="#product-<?php echo $post->ID; ?>-slider" data-slide-to="3">
                    <img src="<?php the_field('fourth_image'); ?>" alt="Item photo" class="carosel-dot-img">
                  </li>
                <?php endif; ?>
                <?php if ( get_field('fifth_image') ) : ?>
                  <li data-target="#product-<?php echo $post->ID; ?>-slider" data-slide-to="4">
                    <img src="<?php the_field('fifth_image'); ?>" alt="Item photo" class="carosel-dot-img">
                  </li>
                <?php endif; ?>
                <?php if ( get_field('sixth_image') ) : ?>
                  <li data-target="#product-<?php echo $post->ID; ?>-slider" data-slide-to="5">
                    <img src="<?php the_field('sixth_image'); ?>" alt="Item photo" class="carosel-dot-img">
                  </li>
                <?php endif; ?>
                <?php if ( get_field('seventh_image') ) : ?>
                  <li data-target="#product-<?php echo $post->ID; ?>-slider" data-slide-to="6">
                    <img src="<?php the_field('seventh_image'); ?>" alt="Item photo" class="carosel-dot-img">
                  </li>
                <?php endif; ?>
                <?php if ( get_field('eighth_image') ) : ?>
                  <li data-target="#product-<?php echo $post->ID; ?>-slider" data-slide-to="7">
                    <img src="<?php the_field('eighth_image'); ?>" alt="Item photo" class="carosel-dot-img">
                  </li>
                <?php endif; ?>
              </ol>

            <?php endif; ?>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <?php if ( get_field('first_image') ) : ?>
                <div class="item active">
                  <img src="<?php the_field('first_image'); ?>" alt="Item photo" class="carousel-slide-img">
                </div>
              <?php endif; ?>
              <?php if ( get_field('second_image') ) : ?>
                <div class="item">
                  <img src="<?php the_field('second_image'); ?>" alt="Item photo" class="carousel-slide-img">
                </div>
              <?php endif; ?>
              <?php if ( get_field('third_image') ) : ?>
                <div class="item">
                  <img src="<?php the_field('third_image'); ?>" alt="Item photo" class="carousel-slide-img">
                </div>
              <?php endif; ?>
              <?php if ( get_field('fourth_image') ) : ?>
                <div class="item">
                  <img src="<?php the_field('fourth_image'); ?>" alt="Item photo" class="carousel-slide-img">
                </div>
              <?php endif; ?>
              <?php if ( get_field('fifth_image') ) : ?>
                <div class="item">
                  <img src="<?php the_field('fifth_image'); ?>" alt="Item photo" class="carousel-slide-img">
                </div>
              <?php endif; ?>
              <?php if ( get_field('sixth_image') ) : ?>
                <div class="item">
                  <img src="<?php the_field('sixth_image'); ?>" alt="Item photo" class="carousel-slide-img">
                </div>
              <?php endif; ?>
              <?php if ( get_field('seventh_image') ) : ?>
                <div class="item">
                  <img src="<?php the_field('seventh_image'); ?>" alt="Item photo" class="carousel-slide-img">
                </div>
              <?php endif; ?>
              <?php if ( get_field('eighth_image') ) : ?>
                <div class="item">
                  <img src="<?php the_field('eighth_image'); ?>" alt="Item photo" class="carousel-slide-img">
                </div>
              <?php endif; ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#product-<?php echo $post->ID; ?>-slider" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#product-<?php echo $post->ID; ?>-slider" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>

        </div>

      <?php endif; ?>

      <div class="<?php if ( get_field('first_image') || get_field('second_image') || get_field('third_image') ) { echo 'product-modal-right'; } ?> sub-block">

        <h3 class="product-modal-title"><?php the_title(); ?></h3>
        <div class="product-modal-desc"><?php the_field('description'); ?></div>
        <div class="product-modal-contents"><?php the_field('contents'); ?></div>
        <?php if ( get_field('color_1') || get_field('color_2') || get_field('color_3') || get_field('color_4') || get_field('color_5') || get_field('color_6') || get_field('color_7') || get_field('color_8') ) : ?>
          <div class="colours-wrap">
            <p class="colours-title">Colours: </p>
            <?php if ( get_field('color_1') ) : ?>
              <div class="color-label" style="background-color: <?php the_field('color_1'); ?>;"></div>
            <? endif; ?>
            <?php if ( get_field('color_2') ) : ?>
              <div class="color-label" style="background-color: <?php the_field('color_2'); ?>;"></div>
            <?php endif; ?>
            <?php if ( get_field('color_3') ) : ?>
              <div class="color-label" style="background-color: <?php the_field('color_3'); ?>;"></div>
            <?php endif; ?>
            <?php if ( get_field('color_4') ) : ?>
              <div class="color-label" style="background-color: <?php the_field('color_4'); ?>;"></div>
            <?php endif; ?>
            <?php if ( get_field('color_4') ) : ?>
              <div class="color-label" style="background-color: <?php the_field('color_5'); ?>;"></div>
            <?php endif; ?>
            <?php if ( get_field('color_6') ) : ?>
              <div class="color-label" style="background-color: <?php the_field('color_6'); ?>;"></div>
            <?php endif; ?>
            <?php if ( get_field('color_7') ) : ?>
              <div class="color-label" style="background-color: <?php the_field('color_7'); ?>;"></div>
            <?php endif; ?>
            <?php if ( get_field('color_8') ) : ?>
              <div class="color-label" style="background-color: <?php the_field('color_8'); ?>;"></div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <?php if ( get_field('price_5_20') || get_field('price_21_50') || get_field('price_51_100') ) : ?>
          <div class="prices-wrap">
            <?php if ( get_field('price_5_20') ) : ?>
              <div class="price-wrap">
                <p class="price-count">5-20 pcs.</p>
                <p class="price-number"><?php the_field('price_5_20') ?></p>
              </div>
            <?php endif; ?>
            <?php if ( get_field('price_21_50') ) : ?>
              <div class="price-wrap">
                <p class="price-count">21-50 pcs.</p>
                <p class="price-number"><?php the_field('price_21_50') ?></p>
              </div>
            <?php endif; ?>
            <?php if ( get_field('price_51_100') ) : ?>
              <div class="price-wrap">
                <p class="price-count">51-100 pcs.</p>
                <p class="price-number"><?php the_field('price_51_100') ?></p>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <a href="#" class="btn contact-btn" data-subject="Buy a product (<?php the_title(); ?>)">Buy</a>
        <div class="size-chart-cont">
          <h3 class="size-chart-title">Size chart</h3>
          <div class="size-chart-imgs-cont">
            <?php if ( get_field('size_chart') ) { ?>
              <div class="size-chart-img-cont">
                <img src="<?php the_field('size_chart'); ?>" alt="Size chart" class="size-chart-img">
              </div>
            <?php } else { if ($post->ID == 177) { ?>
              <div class="size-chart-img-cont">
                <img src="/wp-content/uploads/2018/03/light-sweatshirt-size-chart.png" alt="Size chart" class="size-chart-img">
              </div>
            <?php } } ?>
            <div class="plan-img-cont">
              <img src="<?php echo get_template_directory_uri() . '/assets/src/img/png/plan.png'; ?>" alt="Plan" class="plan-img">
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="bg" onclick=""></div>

    <?php get_template_part('blocks/en/contact-form'); ?>

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