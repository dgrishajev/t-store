<div id="contact-form-modal">
  
  <div class="contact-form-inner-default">

    <h1 class="title contact-form-title">СВЯЖИТЕСЬ СО МНОЙ</h1>

    <p class="desc contact-form-desc">Оставте свои контактные данные и Вам перезвонят</p>

    <div class="phone-icon-cont">
      <?php echo file_get_contents( get_template_directory_uri() . '/assets/build/img/svg/phone.svg' ) ?>
    </div>

    <div class="modal-close-icon" onclick="">
      <?php echo file_get_contents( get_template_directory_uri() . '/assets/build/img/svg/close.svg' ) ?>
    </div>
    
    <?php echo do_shortcode('[contact-form-7 id="42" title="Основная контактная форма на русском"]'); ?>

  </div>

  <div class="contact-form-inner-success">
    
    <div class="success-icon-cont">
      <?php echo file_get_contents( get_template_directory_uri() . '/assets/build/img/svg/success.svg' ) ?>
    </div>

    <h1 class="contact-form-success-text">Спасибо! Менеджер свяжется с Вами в<br class="contact-success-break">ближайшее время</h1>

    <a href="#" class="btn contact-success-btn hide-success">ВЕРНУТЬСЯ К ГЛАВНОЙ</a>

  </div>  

</div>