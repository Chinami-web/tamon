jQuery(function () {



  //object-fit(IE対応)
  var $ofi = jQuery("[data-js-ofi]");
  if ($ofi.length) {
    objectFitImages($ofi.selector);
  };

  iframe_lighter('js-iframeLighter');


  // Topへ戻る
  var pagetop = jQuery("#js-toTop");
  jQuery(window).scroll(function () {
    //100pxスクロールしたら表示
    if (jQuery(this).scrollTop() > 150) {

      pagetop.fadeIn();

    } else {
      pagetop.fadeOut();
    }

    var scrollHeight = jQuery(document).height();
    var scrollPosi = jQuery(window).height() + jQuery(window).scrollTop();
    var diff = 30;
    var bottom = "30px";
    if (jQuery(window).width() <= 999) {
      bottom = "80px";
    }
    var footerHeight = jQuery(".footer").innerHeight() - diff;
    if (scrollHeight - scrollPosi <= footerHeight) {
      jQuery("#js-toTop").css({
        position: "absolute",
        bottom: footerHeight,
      });
    } else {
      jQuery(".toTop").css({
        position: "fixed",
        bottom: bottom,
      });
    }
  });
  pagetop.click(function () {
    jQuery("body,html").animate({
        scrollTop: 0,
      },
      500
    );
    return false;
  });


  // jQuery(window).scroll(function () {
  //   if (!window.matchMedia('(min-width: 1000px)').matches) {
  //   if (jQuery(this).scrollTop() > 150) {
  //     jQuery('#js-header').addClass('shrink');

  //   } else {
  //     if (jQuery('#js-header').hasClass('shrink')) {
  //       jQuery('#js-header').removeClass('shrink');

  //     }
  //   }
  // }
  // });


  jQuery(window).on("scroll", function () {
    var sliderHeight = jQuery("#js-topImg").height();
    var topContents = jQuery("#js-topContents");
    if (window.matchMedia('(min-width: 1000px)').matches) {
      if (sliderHeight - 20 < jQuery(this).scrollTop()) {
        jQuery('#js-header').addClass('fixed');
        topContents.css("margin-top", "130px");
      } else {
        if (jQuery('#js-header').hasClass('fixed')) {
          jQuery('#js-header').removeClass('fixed');
          topContents.css("margin-top", "0");
        }
      }
    } else {
      if (sliderHeight - 20 < jQuery(this).scrollTop()) {
        jQuery('#js-header').addClass('fixed');
        topContents.css("margin-top", "50px");
      } else {
        if (jQuery('#js-header').hasClass('fixed')) {
          jQuery('#js-header').removeClass('fixed');
          topContents.css("margin-top", "0");
        }
      }
    }

  });



  jQuery(".js-accordion").click(function () {
    if (window.matchMedia('(max-width: 999px)').matches) {
      jQuery(this).next().slideToggle();
      // return false;
    }
  });


  jQuery(".js-jump").click(function () {
    //href属性を取得(セクションのidと一致)
    var id = jQuery(this).attr("href");
    var diff = 140;
    if (window.matchMedia('(max-width: 999px)').matches) {
      diff = 20;
    }
    //該当idのセクションのスクロール位置を取得
    var position = jQuery(id).offset().top - diff;
    // var position = jQuery(id).offset().top;

    jQuery("html, body").animate({
        scrollTop: position,
      },
      500
    );
    return false;
  });

  //ドロワーの開閉処理
  var scrollPosition;
  jQuery("#js-toggle").click(function () {
    jQuery(this).toggleClass("active");

    if (jQuery(this).hasClass("active")) {
      jQuery("#js-menu").slideDown();
      scrollPosition = jQuery(window).scrollTop();
      jQuery('body').addClass('fixedContents').css({
        'top': -scrollPosition
      });
    } else {
      jQuery("#js-menu").slideUp();
      //開いていない場合
      jQuery('body').removeClass('fixedContents').css({
        'top': 0
      });
      window.scrollTo(0, scrollPosition);
    }
  });

  var mediaQuery = matchMedia("(max-width: 999px)");

  // ページが読み込まれた時に実行
  handle(mediaQuery);

  // ウィンドウサイズが変更時実行
  mediaQuery.addListener(handle);

  function handle(mq) {
    if (!mq.matches) {
      //ブレイクポイント以上の数値の場合、ドロワー閉じる
      jQuery("#js-menu").css("display", "flex");
      jQuery(".header__subList").css("display", "block");
      jQuery("#js-toggle").removeClass("active");
      if (jQuery('body').hasClass('fixedContents')) {
        jQuery('body').removeClass('fixedContents');
      }
    } else {
      jQuery("#js-menu").css("display", "none");
      jQuery("#js-toggle").removeClass("active");
      jQuery(".header__subList").css("display", "none");
    }
  }


});


// iframe
function iframe_lighter(act_class) {
  jQuery("." + act_class).find('iframe').each(function () {
    var result = jQuery(this).data('src');
    jQuery(this).attr("src", result)
  });
}


//IOSでブラウザバック時にメニューが表示されるのを防止
window.onpageshow = function (event) {
  if (event.persisted) {
    window.location.reload();
  }
};