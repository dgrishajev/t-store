var $ = require('jquery');

module.exports = (function() {

  $('.hamburger-icon').click(function() {
    $(this).toggleClass('opened');
    $('.main-header').toggleClass('expanded');
    $('.header-menu-wrap').slideToggle(200);
  });

})();