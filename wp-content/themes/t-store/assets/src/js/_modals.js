var $ = require('jquery');

module.exports = (function() {

  $('.contact-btn').click(function() {
    $('.contact-form-inner-success').hide();
    $('.contact-form-inner-default').show();
    localStorage.subject = $(this).data('subject');
    $('input[name="your-subject"]').val(localStorage.subject);
    $('html, body').animate({
      scrollTop: 0
    }, 500, function() {
      $('body').addClass('no-scroll');
      $('#contact-form-modal').fadeIn(100);
      $('.bg').fadeIn(100);
    });
    localStorage.slideUp = 'false';
    if ( $('.bottom-fixed-wrap').length ) {
      $('.bottom-fixed-wrap').removeClass('slided-up');
    }
    return false;
  });

  // $('.plus-icon-cont').on('click touchend', function() {
  //   $('.product-modal[data-product-id="' + $(this).data('product-id') + '"]').addClass('visible');
  //   $('.bg').fadeIn(100);
  //   localStorage.slideUp = 'false';
  //   $('.bottom-fixed-wrap').removeClass('slided-up');
  // });

  $('.modal-close-icon, .bg').click(function() {
    $('#contact-form-modal').fadeOut(100);
    $('.bg').fadeOut(100);
    $('body').removeClass('no-scroll');
    localStorage.slideUp = 'true';
    if ( $(window).scrollTop() > 200 && $(window).scrollTop() < 4641 && $(window).width() > 1024 ) {
      $('.bottom-fixed-wrap').addClass('slided-up');
    }
  });

  $('.hide-success').click(function() {
    $('#contact-form-modal').fadeOut(100);
    $('.bg').fadeOut(100);
    $('body').removeClass('no-scroll');
    return false;
  })

})();