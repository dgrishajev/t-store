<div id="contact-form-modal">
  
  <div class="contact-form-inner-default">

    <h1 class="title contact-form-title">НАДІСЛАТИ ЗАПИТ</h1>

    <p class="desc contact-form-desc">Залиште свої контакти і ми Вам зателефонуємо.</p>

    <div class="phone-icon-cont">
      <?php echo file_get_contents( get_template_directory_uri() . '/assets/build/img/svg/phone.svg' ) ?>
    </div>

    <div class="modal-close-icon" onclick="">
      <?php echo file_get_contents( get_template_directory_uri() . '/assets/build/img/svg/close.svg' ) ?>
    </div>
    
    <?php echo do_shortcode('[contact-form-7 id="226" title="Основная контактная форма на украинском"]'); ?>

  </div>

  <div class="contact-form-inner-success">
    
    <div class="success-icon-cont">
      <?php echo file_get_contents( get_template_directory_uri() . '/assets/build/img/svg/success.svg' ) ?>
    </div>

    <h1 class="contact-form-success-text">Дякуємо! Наш менеджер невдовзі <br class="contact-success-break">зателефонує вам</h1>

    <a href="#" class="btn contact-success-btn hide-success">НАЗАД ДО САЙТУ</a>

  </div>  

</div>