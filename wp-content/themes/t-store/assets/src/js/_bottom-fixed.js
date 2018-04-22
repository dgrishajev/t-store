var $ = require('jquery');

module.exports = (function() {

  if ( $('#contact-block').length ) {
  
    localStorage.slideUp = 'true';

    $(window).scroll(function() {
      if ( $(window).scrollTop() > 0 && ( $(window).scrollTop() + $(window).height() ) < $('#contact-block').offset().top && localStorage.slideUp === 'true' && $(window).width() > 1024 ) {
        $('.bottom-fixed-wrap').addClass('slided-up');
      } else {
        if ( $(window).scrollTop() === 0 || ( $(window).scrollTop() + $(window).height() ) > $('#contact-block').offset().top && $(window).width() > 1024 ) {
          $('.bottom-fixed-wrap').removeClass('slided-up');
        }
      }
    });

  }

})();