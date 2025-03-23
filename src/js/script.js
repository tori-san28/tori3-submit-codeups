
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
//ナビバートグル
$('.js-hamburger').on('click', function () {
    if ($('.js-hamburger').hasClass('is-open')) {
      $('.js-drawer-menu').fadeOut();//fadeOutでメニューをblockに
      $(this).removeClass('is-open');
      $('.js-header').removeClass('is-open');
      
    } else {
      $('.js-drawer-menu').fadeIn();
      $(this).addClass('is-open');
      $('.js-header').addClass('is-open');
    }
    if (jQuery(".js-header").hasClass("is-open")) {
      // メニューが開いている間はスクロールを無効にする
      jQuery("body").css("overflow", "hidden");
    } else {
      // メニューが閉じたらスクロールを有効にする
      jQuery("body").css("overflow", "");
    }
  });
  //ドロワーメニューをPCのサイズにリサイズされたら消す。
  function checkWindowSize() {
    if ($(window).width() > 767) {
      $('.js-drawer-menu').fadeOut();
      $('.js-hamburger').removeClass('is-open');
      $('.js-header').removeClass('is-open');
    }
  }
  $(window).resize(function() {
    checkWindowSize();
  });

  //swiper
  var swiper01 = new Swiper(".js-main-visual-swiper", {
    autoplay: {
      delay: 5000,
    },
    effect: 'fade',
    fadeEffect: {
    crossFade: true // スライドが完全に切り替わるように
    },
    allowTouchMove: false,
    loop: true,
  });

  var swiper02 = new Swiper(".js-campaign", {
    spaceBetween: 24,
    slidesPerView: 1.25,
    breakpoints: {
      500: {
        spaceBetween: 24,
        slidesPerView: 2,
      },
      768: {
        spaceBetween: 40,
        slidesPerView: 2.5,
      },
      900: {
        spaceBetween: 40,
        slidesPerView: 3,
      },
      1250: {
        spaceBetween: 40,
        slidesPerView: 3.5,
       },
      1600: {
        spaceBetween: 40,
        slidesPerView: 4,
       },
      
  },
    centeredSlides: false,
    loop: true,
    navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
  });

  // トップに戻るボタン
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1000) {
      $("#back-to-top").fadeIn();
    } else {
      $("#back-to-top").fadeOut();
    }
  });

  $("#back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 500);
  });

  //要素の取得とスピードの設定
  var box = $('.colorbox'),
      speed = 700;  
   
  //.colorboxの付いた全ての要素に対して下記の処理を行う
    box.each(function(){
        //背景色となるdiv要素を追加
        $(this).append('<div class="color"></div>')
        var color = $(this).find($('.color')),
        image = $(this).find('img');
        var counter = 0;
    　 //最初は画像を透明、幅を０％にする。
        image.css('opacity','0');
        color.css('width','0%');
        //inviewを使って背景色が画面に現れたら処理をする
        //widthを0から100％に伸びる。100%になったら画像を表示（opactity:1）
        //left:0(right:auto)と切り替え、widthを100%から0%へ縮める
        //counterを1にして繰り返ししないようにする
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


//ここから下層ページ

//モーダル
jQuery(function ($) { 
$(".js-openModal").on('click',function(e){
  e.preventDefault();
  let target = jQuery(this).data("target");
  let modal = document.getElementById(target);
  $("#" + target)[0].showModal();
  $("html, body").css("overflow", "hidden");
});

//モーダルコンテンツ以外をクリックしたらモーダルを閉じる
$("dialog").on("click", function (e) {
    e.preventDefault();
    if (!$(e.target).closest(".modal-aboutus__wrapper").length) {
      $(this)[0].close();
      $("html, body").css("overflow", "auto");
      $(document.activeElement).blur();
    }  
  });
});

//タブ
// タブをクリックすると
jQuery(function ($) {
  $(".js-tab-menu").on("click", function () {
    // 現在選択されているタブからis-activeを外す
    $(".tab-list__menu.is-active").removeClass("is-active");
    $(".archive-information__contents.is-active").removeClass("is-active");
    // クリックされたタブにis-activeクラスを付与
    $(this).addClass("is-active");
    // クリックされた要素が何番目か取得（クリックしたタブのインデックス番号を取得）
    const index = $(this).index();
    // クリックしたタブのインデックス番号と同じコンテンツを表示
    $(".js-tab-contents").hide().eq(index).fadeIn(300);
  });

 //タブへダイレクトリンクの実装
    //リンクからハッシュを取得
  // $(".sp-nav__sub-item-link,.footer-nav__sub-item-link").on("click", function () {
  //     const gclass = this.getAttribute('class');
  //     console.log("class=" + gclass);
  //     const nlink = gclass.split('js-link-')[1]; // #以降の部分を取得
  //     console.log(nlink); // 取得した#以降の部分を表示
  //     console.log("link no=" + nlink);
  //     //コンテンツ非表示・タブを非アクティブ
  //     $(".tab-list__menu").removeClass("is-active");
  //     $(".archive-information__contents").removeClass("is-active");
  //     //コンテンツ表示
  //     $(".archive-information__contents").eq(nlink - 1).addClass("is-active");
  //     //タブのアクティブ化
  //     $(".tab-list__menu").eq(nlink - 1).addClass("is-active");
  //     // クリックしたタブのインデックス番号と同じコンテンツを表示
  //     $(".js-tab-contents").hide().eq(nlink - 1).fadeIn(300);
  //   });
});

//アコーディオン(faq)
jQuery(function ($) {
  $(".faq-list:first-of-type .faq-list__answer").css("display", "block");
  // はじめのアコーディオンを開いておく
  $(".faq-list:first-of-type .faq-list__question").addClass("is-open");  
  $(".js-faq-list").on("click", function () {
    $(this).next().slideToggle(200);
    $(this).toggleClass("is-open", 200);
  });
});

//アコーディオン(blogのアーカイブ)
jQuery(function ($) {
  $(".blog-archive-list:first-of-type .blog-archive-list__months").css("display", "block");
  // はじめのアコーディオンを開いておく
  $(".blog-archive-list:first-of-type .blog-archive-list__year").addClass("is-open");
  $(".blog-archive-list__year").on("click", function () {
    $(this).next().slideToggle(200);
    $(this).toggleClass("is-open", 200);
  });
});