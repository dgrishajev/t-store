var $ = require('jquery');
var slick = require('slick-carousel');

module.exports = (function() {

  if ( $(window).width() > 992 ) {

    $('.advantages-slider').slick({
      dots: true,
      draggable: true,
      infinite: false,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000
    });

    $('.clients-slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      infinite: true,
      dots: false,
      autoplay: true,
      autoplaySpeed: 2000
    });

  }

  jQuery('.carousel').carousel();


})();