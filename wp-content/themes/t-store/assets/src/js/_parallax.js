var $ = require('jquery');

module.exports = (function() {

  $(window).scroll(function() {

    if( $(window).width() > 1024 ) {

      var scrolled = $(window).scrollTop(),
          parentTop = $('.clients-numbers-wrap').parent().offset().top;
      $('.clients-numbers-bg').css('top', '-' +  ((scrolled - parentTop) * 0.01) + '%');
      // $(this).siblings().find('img').css('top', (0 + (scrolled - parentTop) * 0.5) + 'px');

    }
  
  });

})();