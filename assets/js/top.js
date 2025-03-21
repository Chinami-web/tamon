jQuery(function () {

  /* MV スライダー  */
  var mvSwiper = new Swiper(".mv__swiper", {
    // オプションパラメータ(一部のみ抜粋)
    loop: true, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    // autoHeight: true,
    speed: 1200, // スライドが切り替わるトランジション時間(ミリ秒)。
    direction: "horizontal", // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: "fade", // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
    slidesPerView: 1, // 何枚のスライドを表示するか
    spaceBetween: 10, // スライド間の余白サイズ(ピクセル)
    autoplay: {
      delay: 4000, // スライドが切り替わるまでの表示時間(ミリ秒)
      // disableOnInteraction: false, // ユーザーのスワイプ操作を検出したら自動再生を中止するか
    },

  });

  //サムネイル
  var options = {
    freeMode: true,
    slidesPerView: 2, // 何枚のスライドを表示するか
    spaceBetween: 12, // スライド間の余白サイズ(ピクセル)
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    loop: true,
    // レスポンシブ化条件
    breakpoints: {
      1000: {
        slidesPerView: 3,
        spaceBetween: 25,
        centeredSlides: false,
      },
    },
  };



  // サムネイル
  var thumbnailSwiper = new Swiper("#js-thumbnailSwiper1", options);


  var options_main = {
    loop: true,
    centeredSlides: true,
    effect: "fade",
    thumbs: {
      swiper: thumbnailSwiper,
    },
    navigation: {
      nextEl: "#swiper-button-next-gallery1",
      prevEl: "#swiper-button-prev-gallery1",
    }
  };


  var mainSwiper = new Swiper("#js-mainSwiper1", options_main);



    /* newsSlide スライダー  */
    var newsSlideSwiper = new Swiper(".newsSlide__swiper", {
      // オプションパラメータ(一部のみ抜粋)
      loop: true, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
      // autoHeight: true,
      speed: 1200, // スライドが切り替わるトランジション時間(ミリ秒)。
      direction: "horizontal", // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
      effect: "slide", // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
      slidesPerView: 2.3, // 何枚のスライドを表示するか
      spaceBetween: 10, // スライド間の余白サイズ(ピクセル)
      // autoplay: {
      //   delay: 4000, // スライドが切り替わるまでの表示時間(ミリ秒)
      //   // disableOnInteraction: false, // ユーザーのスワイプ操作を検出したら自動再生を中止するか
      // },
      navigation: {
        nextEl: "#swiper-button-next-newsSlide",
        prevEl: "#swiper-button-prev-newsSlide",
      },
      pagination: {
        el: "#swiper-pagination-newsSlide",
         type: "progressbar",
        // clickable: true,
      },
      // レスポンシブ化条件
      breakpoints: {
        
      500: {
        slidesPerView: 3,
        spaceBetween: 25,
        centeredSlides: false,
      }
    },
  
    });
});