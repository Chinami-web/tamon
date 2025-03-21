jQuery(function($) {
    // タブの切り替え
    $('.faq-tab__menu-item').on('click', function() {
      const category = $(this).data('category');
      console.log('Tab clicked:', category);
      $('.faq-tab__menu-item').removeClass('is-active');
      $(this).addClass('is-active');
      $('.faq-tab__content').removeClass('is-show');
      const targetContent = $('.faq-tab__content[data-category="' + category + '"]');
      targetContent.addClass('is-show');
    });

    // FAQ項目のアコーディオン
    $('.js-faq-question').on('click', function() {
      console.log('FAQ item clicked');
      const isCurrentlyOpen = $(this).hasClass('is-open');
      console.log('Is currently open:', isCurrentlyOpen);

      // 全てのFAQ項目をクローズ状態にリセット
      $('.js-faq-question').removeClass('is-open');
      $('.faq-list__item-answer').slideUp(400);

      // クリックされた項目が閉じていた場合のみ開く
      if (!isCurrentlyOpen) {
        console.log('Opening FAQ item');
        $(this).addClass('is-open');
        $(this).closest('.faq-list__item').find('.faq-list__item-answer').slideDown(400);
      } else {
        console.log('Closing FAQ item');
      }
    });

    // 初期状態のログ
    console.log('Initial FAQ items:', $('.js-faq-question').length);
    console.log('Initial question wrappers:', $('.faq-list__item-question-wrapper').length);
});

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM Content Loaded');

    // ページネーション要素の存在確認
    const paginationElement = document.getElementById('faq-pagination');
    console.log('Pagination Element:', paginationElement);

    // 現在のURL確認
    console.log('Current URL:', window.location.href);
    console.log('Hash:', window.location.hash);

    if (window.location.hash === '#faq-pagination') {
        console.log('Hash matches #faq-pagination');
        const element = document.getElementById('faq-pagination');
        if (element) {
            console.log('Scrolling to element');
            element.scrollIntoView({ behavior: 'smooth' });
        }
    }

    // ページネーションリンクの確認
    const paginationLinks = document.querySelectorAll('#faq-pagination a');
    console.log('Pagination Links found:', paginationLinks.length);

    paginationLinks.forEach((link, index) => {
        console.log(`Link ${index} href:`, link.getAttribute('href'));

        link.addEventListener('click', function(e) {
            console.log('Link clicked');
            const href = this.getAttribute('href');
            console.log('Clicked link href:', href);

            if (href) {
                console.log('New URL will be:', href + '#faq-pagination');
                // デバッグ用にイベントの動作を確認
                e.preventDefault();
                window.location.href = href + '#faq-pagination';
            }
        });
    });
});
