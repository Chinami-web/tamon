<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5SXMLSH');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_get_document_title(); ?></title>
    <!-- <link rel="icon" href="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/favicon.png" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&family=Roboto&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <meta name="thumbnail" content="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/thumbnail.jpg" />
  </head>
  <body class="<?php echo get_page_name(); ?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns?id=GTM-5SXMLSH"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
      <header class="header" id="js-header">
        <div class="header__inner inner">
        <?php if (is_home() || is_front_page()) : ?>
          <h1 class="header__logo"><a href="<?php echo do_shortcode('[home_url]'); ?>">
              <img loading="lazy" width="163" height="158" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/logo.svg" alt="消化器内科・内科・肝臓内科 高崎の多聞内科クリニック">
            </a></h1>
            <?php else : ?>
              <div class="header__logo"><a href="<?php echo do_shortcode('[home_url]'); ?>">
              <img loading="lazy" width="163" height="158" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/common/logo.svg" alt="消化器内科・内科・肝臓内科 高崎の多聞内科クリニック">
            </a></div>
            <?php endif; ?>
          <!-- /header__logo -->
          <div class="header__contents" id="js-menu">
            <div class="header__wrap">
              <div class="header__info">
                <p>ご予約・お問い合わせ</p>
                <a href="tel:0273100600" class="header__tel">027-310-0600</a>
              </div>
              <div class="header__box">
                <nav class="header__nav">
                <ul class="header__list">
                  <li class="header__item"><a href="<?php echo do_shortcode('[home_url]'); ?>about">当院の紹介</a></li>
                  <li class="header__item header__item--parent"><span class="js-accordion">診療案内</span>
                    <ul class="header__subList">
                      <li class="header__subItem"><a href="<?php echo do_shortcode('[home_url]'); ?>general">内科</a></li><!-- /header__subItem -->
                      <li class="header__subItem"><a href="<?php echo do_shortcode('[home_url]'); ?>gastroenterology">消化器内科</a></li><!-- /header__subItem -->
                      <li class="header__subItem"><a href="<?php echo do_shortcode('[home_url]'); ?>liver">肝臓内科</a></li><!-- /header__subItem -->
                      <li class="header__subItem"><a href="<?php echo do_shortcode('[home_url]'); ?>exam">各種検診</a></li>
					   <li class="header__subItem"><a href="<?php echo do_shortcode('[home_url]'); ?>about-vaccines">ワクチンについて</a></li>
                    </ul>
                  </li>
                  <li class="header__item header__item--parent"><span class="js-accordion">内視鏡検査</span>
                    <ul class="header__subList">
                      <li class="header__subItem"><a href="<?php echo do_shortcode('[home_url]'); ?>gastroscopy">胃カメラ<br class="show--sp">(胃内視鏡検査)</a></li><!-- /header__subItem -->
                      <li class="header__subItem"><a href="<?php echo do_shortcode('[home_url]'); ?>colonoscopy">大腸内視鏡検査</a></li><!-- /header__subItem -->
                      </ul>
                  </li>
                  <li class="header__item"><a href="<?php echo do_shortcode('[home_url]'); ?>reserve">予約受付について</a></li>
                  <li class="header__item"><a href="<?php echo do_shortcode('[home_url]'); ?>category/news">お知らせ</a></li>
                </ul>
                </nav>
                <ul class="header__btns">
                  <li class="header__btn header__btn--web"><a href="https://medical.apokul.jp/web/263/reservations/add" target="_blank" rel="noopener">WEB予約</a></li>
                  <li class="header__btn header__btn--access show--pc"><a href="<?php echo do_shortcode('[home_url]'); ?>#access">アクセス</a></li><!-- /header__btn -->
                  <?php if (!is_home() && !is_front_page()) : ?>
                  <li class="header__btn header__btn--access show--sp"><a href="<?php echo do_shortcode('[home_url]'); ?>#access">アクセス</a></li><!-- /header__btn -->
                  <?php endif; ?>
                </ul><!-- /header__btns -->
              </div><!-- /header__box -->
            </div><!-- /header__wrap -->
          </div>
          <div class="toggle" id="js-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div><!-- /inner header__inner -->
      </header><!-- /header -->


      <?php if (!is_home() &&  !is_front_page()) :
          if (!isset($page_slug)) $page_slug = '';
          if (!isset($page_title)) $page_title = '';
          if (is_post_type_archive('faq')) {
              $page_slug = 'faq';
              $page_title = 'よくある質問';
          } else {
              $page_slug = is_single() ? "info" : get_page_name();
              $page_title = is_single() || is_archive() ? "お知らせ&コラム" : get_the_title();
          }

          if(is_404()){
              $page_title = 'ページが見つかりません';
          }

          if(is_page() && $post->post_parent){
              $page_slug = get_post($post->post_parent)->post_name;
          }
      ?>
      <div class="hero" id="js-topImg">
    <div class="hero__bg">
        <picture>
            <?php if (is_page_template('page-common.php') && has_post_thumbnail()) : ?>
                <!-- page-common.php の場合はサムネイル画像を表示 -->
                <img loading="lazy" width="1280" height="248" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo esc_attr($page_title); ?>">
            <?php else : ?>
                <!-- page-common.php 以外は従来の hero 画像を表示 -->
                <source type="hero__desc" srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/<?php echo esc_attr($page_slug); ?>/hero.webp">
                <img loading="lazy" width="1280" height="248" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/<?php echo esc_attr($page_slug); ?>/hero.jpg" alt="<?php echo esc_attr($page_title); ?>">
            <?php endif; ?>
        </picture>
    </div><!-- /hero__bg -->
    <div class="inner">
        <div class="hero__box">
            <div class="hero__icon">
                <?php if (is_page_template('page-common.php')) : ?>
                    <!-- page-common.php の場合はカスタムフィールドから hero__icon を取得 -->
                    <?php
                    $hero_icon = get_field('hero_icon'); // ACF のカスタムフィールドからアイコンURLを取得
                    if ($hero_icon) : ?>
                        <img width="38" height="38" data-js-ofi src="<?php echo esc_url($hero_icon['url']); ?>" alt="<?php echo esc_attr($hero_icon['alt']); ?>">
                    <?php else : ?>
                        <!-- カスタムフィールドがない場合のデフォルトアイコン -->
                        <img width="38" height="38" data-js-ofi src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/<?php echo esc_attr($page_slug); ?>/hero-icon.svg" alt="">
                    <?php endif; ?>
                <?php else : ?>
                    <!-- page-common.php 以外は従来のアイコンを表示 -->
                    <img width="38" height="38" data-js-ofi src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/<?php echo esc_attr($page_slug); ?>/hero-icon.svg" alt="">
                <?php endif; ?>
            </div><!-- /hero__icon -->

            <?php if (!is_single()) : ?>
                <h1 class="hero__ttl"><?php echo esc_html($page_title); ?></h1><!-- /hero__ttl -->
            <?php else : ?>
                <div class="hero__ttl"><?php echo esc_html($page_title); ?></div><!-- /hero__ttl -->
            <?php endif; ?>

            <p class="hero__desc">
                <?php if (is_page_template('page-common.php')) : ?>
                    <!-- page-common.php の場合はカスタムフィールドから説明を取得 -->
                    <?php
                    $hero_desc = get_field('hero_desc'); // ACF のカスタムフィールドから説明を取得
                    echo esc_html($hero_desc ?: 'デフォルトの説明文');
                    ?>
                <?php else : ?>
                    <!-- page-common.php 以外は従来の説明を表示 -->
                    <?php echo esc_html(get_page_desc()); ?>
                <?php endif; ?>
            </p><!-- /hero__desc -->
        </div><!-- /hero__box -->
    </div><!-- /inner -->
</div><!-- /hero -->


      <div class="breadcrumb">
        <div class="inner">
          <ul class="breadcrumb__list">
            <li class="breadcrumb__item"><a href="<?php echo do_shortcode('[home_url]'); ?>">TOP</a></li><!-- /breadcrumb__item -->
            <?php if(is_page() && $post->post_parent): ?>
            <li class="breadcrumb__item"><a href="<?php echo  get_permalink($post->post_parent); ?>"><?php echo get_post($post->post_parent)->post_title; ?></a></li>
            <?php endif; ?>
            <?php if(is_single() && get_the_category()[0]->slug === "news"): ?>
            <li class="breadcrumb__item"><a href="<?php echo do_shortcode('[home_url]'); ?>category/news">お知らせ</a></li><!-- /breadcrumb__item -->
            <?php elseif(is_single() && get_the_category()[0]->slug === "column"): ?>
            <li class="breadcrumb__item"><a href="<?php echo do_shortcode('[home_url]'); ?>category/column">コラム</a></li><!-- /breadcrumb__item -->
            <?php endif; ?>
            <li class="breadcrumb__item">
              <?php
              if(is_category()){
                echo get_the_category()[0]->name;
              } elseif(is_404()){
                echo "ページが見つかりません";
              } elseif(is_post_type_archive('faq')){
                echo "よくある質問";
              } else{
                echo get_the_title();
              }
              ?>
            </li><!-- /breadcrumb__item -->
          </ul><!-- /breadcrumb__list -->
        </div><!-- /inner -->
      </div><!-- /breadcrumb -->
      <?php endif; ?>
