<div id="contact-form-modal">
  
  <div class="contact-form-inner-default">

    <h1 class="title contact-form-title">GET IN TOUCH</h1>

    <p class="desc contact-form-desc">Leave you contacts and we will call you</p>

    <div class="phone-icon-cont">
      <?php echo file_get_contents( get_template_directory_uri() . '/assets/build/img/svg/phone.svg' ) ?>
    </div>

    <div class="modal-close-icon" onclick="">
      <?php echo file_get_contents( get_template_directory_uri() . '/assets/build/img/svg/close.svg' ) ?>
    </div>
    
    <?php echo do_shortcode('[contact-form-7 id="195" title="Основная контактная форма на английском"]'); ?>

  </div>

  <div class="contact-form-inner-success">
    
    <div class="success-icon-cont">
      <?php echo file_get_contents( get_template_directory_uri() . '/assets/build/img/svg/success.svg' ) ?>
    </div>

    <h1 class="contact-form-success-text">Thank you! Our manager will contact <br class="contact-success-break">you soon</h1>

    <a href="#" class="btn contact-success-btn hide-success">BACK TO THE STORE</a>

  </div>  

</div>