jQuery(function () {



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
  var thumbnailSwiper1 = new Swiper("#js-thumbnailSwiper1", options);
  var thumbnailSwiper2 = new Swiper("#js-thumbnailSwiper2", options);


  var options_main1 = {
    loop: true,
    centeredSlides: true,
    effect: "fade",
    thumbs: {
      swiper: thumbnailSwiper1,
    },
    navigation: {
      nextEl: "#swiper-button-next-gallery1",
      prevEl: "#swiper-button-prev-gallery1",
    }
  };
  var options_main2 = {
    loop: true,
    centeredSlides: true,
    effect: "fade",
    thumbs: {
      swiper: thumbnailSwiper2,
    },
    navigation: {
      nextEl: "#swiper-button-next-gallery2",
      prevEl: "#swiper-button-prev-gallery2",
    }
  };


  //物件メインスライダー
  var mainSwiper1 = new Swiper("#js-mainSwiper1", options_main1);
  var mainSwiper2 = new Swiper("#js-mainSwiper2", options_main2);
});