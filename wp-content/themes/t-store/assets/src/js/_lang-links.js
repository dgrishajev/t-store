var $ = require('jquery');

module.exports = (function() {

  var itemEn = '<li class="en-page-link-item lang-link-item menu-item menu-item-type-custom menu-item-object-custom" data-lang="en"></li>',
      itemUa = '<li class="ua-page-link-item lang-link-item menu-item menu-item-type-custom menu-item-object-custom" data-lang="ua"></li>',
      itemRu = '<li class="ru-page-link-item lang-link-item menu-item menu-item-type-custom menu-item-object-custom" data-lang="ru"></li>';

  $('body.page-template-front-page ul.top-menu, body.single-product ul.top-menu').append(itemEn, itemUa);

  $('body.page-template-page-en ul.top-menu, body.single-item ul.top-menu').append(itemUa, itemRu);

  $('body.page-template-page-ua ul.top-menu, body.single-fabric ul.top-menu').append(itemEn, itemRu);

  $('body.page-template .lang-link-item').click(function(event) {
    window.location.hash = '';
    window.location.pathname += '/' + event.target.dataset.lang;
  });

  $('body.page-template .ru-page-link-item').click(function() {
    window.location.hash = '';
    window.location.pathname = '';
  });

  $('body.single-product .en-page-link-item').click(function() {
    window.location.href = window.location.href.replace('product', 'item');
  });

  $('body.single-product .ua-page-link-item').click(function() {
    window.location.href = window.location.href.replace('product', 'fabric');
  });

  $('body.single-item .ua-page-link-item').click(function() {
    window.location.href = window.location.href.replace('item', 'fabric');
  });

  $('body.single-item .ru-page-link-item').click(function() {
    window.location.href = window.location.href.replace('item', 'product');
  });

  $('body.single-fabric .en-page-link-item').click(function() {
    window.location.href = window.location.href.replace('fabric', 'item');
  });

  $('body.single-fabric .ru-page-link-item').click(function() {
    window.location.href = window.location.href.replace('fabric', 'product');
  });

})();