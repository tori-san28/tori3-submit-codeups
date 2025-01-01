
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
//ナビバートグル
$('.js-hamburger').on('click', function () {
    if ($('.js-hamburger').hasClass('is-open')) {
      $('.js-drawer-menu').fadeOut();　//fadeOutでメニューをblockに
      $(this).removeClass('is-open');
      $('.js-header').removeClass('is-open');
      
    } else {
      $('.js-drawer-menu').fadeIn();
      $(this).addClass('is-open');
      $('.js-header').addClass('is-open');
    }
  });

  var swiper01 = new Swiper(".js-main-visual-swiper", {
    autoplay: {
      delay: 5000,
    },
    loop: true,
  });

  var swiper02 = new Swiper(".js-campaign", {
    spaceBetween: 24,
    centeredSlides: false,
    loop: true,
    navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        }
  });

});
