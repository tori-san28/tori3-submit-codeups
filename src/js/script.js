
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

  //swiper
  var swiper01 = new Swiper(".js-main-visual-swiper", {
    autoplay: {
      delay: 5000,
    },
    loop: true,
  });

  var swiper02 = new Swiper(".js-campaign", {
    spaceBetween: 24,
    breakpoints: {
      768: {
        spaceBetween: 40,
       }
  },
    centeredSlides: false,
    loop: true,
    navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
    breakpoints: {
      768: {
        navigation: {
          nextEl:"",
          prevEl:"",
        },
      }
    },
  });

  //アニメーション
  //要素の取得とスピードの設定
  var box = $('.colorbox'),
  speed = 700;  

  //.colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function(){
  $(this).append('<div class="color"></div>')
  var color = $(this).find($('.color')),
  image = $(this).find('img');
  var counter = 0;

  image.css('opacity','0');
  color.css('width','0%');
  inviewを使って背景色が画面に現れたら処理をする
  color.on('inview', function(){
      if(counter == 0){
        $(this).delay(200).animate({'width':'100%'},speed,function(){
                image.css('opacity','1');
                $(this).css({'left':'0' , 'right':'auto'});
                $(this).animate({'width':'0%'},speed);
              })
          counter = 1;
        }
  });
  });

});
