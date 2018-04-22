var $ = require('jquery');

module.exports = (function() {

  var top = 0;
  $('body').hasClass('logged-in') ? top += 32 : top += 0;

  $('body.page-template a[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      localStorage.slideUp = 'false';
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        if ( $(window).width() < 1025 ) {
          $('.hamburger-icon').toggleClass('opened');
          $('.main-header').toggleClass('expanded');
          $('.header-menu-wrap').slideToggle(200);
        }
        $('body').addClass('scrolling');
        $('html, body').animate({
          scrollTop: target.offset().top - top
        }, 1000, function() {
          localStorage.slideUp = 'true';
          if ( ( $(window).scrollTop() + $(window).height() ) < $('#contact-block').offset().top && $(window).width() > 1024 ) {
            $('.bottom-fixed-wrap').addClass('slided-up');
          }
        });
        setTimeout(function() { $('body').removeClass('scrolling'); }, 1000);
        return false;
      }
    }
  });

  $('body.single a[href*="#"]:not([href="#"])').click(function(event) {
    event.preventDefault();
    var newPath = '',
        anchorPath = '#' + event.target.getAttribute('href').split('#')[1];
    if ( ~window.location.pathname.indexOf('product') ) {
      newPath = '/ru' + anchorPath;
    }
    if ( ~window.location.pathname.indexOf('fabric') ) {
      newPath = '/ua' + anchorPath;
    }
    if ( ~window.location.pathname.indexOf('item') ) {
      newPath = '/en' + anchorPath;
    }
    window.location.href = newPath;
  });
  
})();