<?php
/*
Template Name: TOP
*/
?>
<?php get_header(); ?>

<main>
  <!-- ===============================================================================================
mv
================================================================================================ -->
  <div class="mv" id="js-topImg">
    <div class="inner">
      <div class="mv__contents">
        <div class="mv__slideShow">
          <div class="swiper-container mv__swiper">
            <h2 class="mv__ttl"><img loading="lazy" width="132" height="358" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/mv-ttl.svg" alt="よく聞き、よく診る地域医療の入り口に立つような存在として"></h2>
            <!--/mv__ttl -->
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <picture>
                  <source srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/mv-bg1.webp" media="(min-width: 1000px)" type="image/webp">
                  <source srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/mv-bg1-sp.webp" media="(max-width: 999px)" type="image/webp">
                  <img width="1000" height="430" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/mv-bg1.jpg" alt="多聞内科クリニック 外観">
                </picture>
              </div>
            </div><!-- /swiper  -->
          </div>
          <!--          <div class="mv__icon"><img loading="lazy" width="85" height="85" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/open-sp.svg" alt="4/4(月)NEW OPEN"></div> /mv__icon -->
          <?php /*
          <div class="mv__box">
            <picture>
              <source media="(min-width: 1000px)" srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/mv-box.svg">
              <source media="(max-width: 999px)" srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/mv-box-sp.svg">
              <img loading="lazy" width="575" height="137" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/mv-box.svg" alt="4/4(月)NEW OPEN 4/2(土)4/3(日)9:00-13:00内覧会開催">
            </picture>
          </div>
          */ ?>
          <!-- /mv__wrap -->
        </div><!-- /mv__slideShow -->
      </div><!-- /mv__contents -->
    </div><!-- /inner -->
  </div><!-- /mv -->

  <div class="newsSlide">
    <div class="inner">
      <div class="newsSlide__slideShow">
        <div class="swiper-container newsSlide__swiper">
          <div class="swiper-wrapper">
            <a href="https://tamon-naika.com/1001/" class="swiper-slide" target="_blank">
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/banner_pirori.jpg" alt="ピロリ菌検査について" width="316" height="197" loading="lazy">
            </a>
            <a href="https://page.line.me/990khkls?openQrModal=true" class="swiper-slide" target="_blank">
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/banner_line.png" alt="LINE" width="316" height="197" loading="lazy">
            </a>
            <a href="https://tamon-naika.com/364/" class="swiper-slide">
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/banner_hatsunetsu.png" alt="発熱時の診察について" width="316" height="197" loading="lazy">
            </a>
            <a href="https://www.instagram.com/tamonnaika/" class="swiper-slide" target="_blank">
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/banner_insta.png" alt="Instagram" width="316" height="197" loading="lazy">
            </a>
            <a href="https://tamon-naika.com/about-vaccines/" class="swiper-slide" target="_blank">
              <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/banner_vakzin.jpg" alt="ワクチンについて width=" 316" height="197" loading="lazy">
            </a>
          </div><!-- /swiper  -->
        </div>
        <div class="swiper-pagination" id="swiper-pagination-newsSlide"></div>
        <div class="swiper-button-prev" id="swiper-button-prev-newsSlide"></div>
        <div class="swiper-button-next" id="swiper-button-next-newsSlide"></div>
        <!-- /newsSlide__wrap -->
      </div><!-- /newsSlide__slideShow -->
    </div><!-- /.inner -->
  </div><!-- /.newsSlide -->

  <?php /*
  <div>
    <div class="inner">
      <ul class="linkBtn">
        <li class="linkBtn__item linkBtn__item--full"><a href="https://tamon-naika.com/364/">
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/banner_shinryo.svg" loading="lazy" width="485" height="123" alt="">
          </a></li><!-- /linkBtn__item -->
<!--
        <li class="linkBtn__item linkBtn__item--full"><a href="https://tamon-naika.com/472/">
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/bnr01.jpg" loading="lazy" width="485" height="123" alt="">
          </a></li> /linkBtn__item
-->
        <li class="linkBtn__item linkBtn__item--insta"><a href="https://www.instagram.com/tamonnaika/" target="_blank">
            <img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/insta.svg" loading="lazy" width="66" height="66" alt="">
            <div class="linkBtn__contents">
              <p class="linkBtn__ttl">公式Instagram</p><!-- /linkBtn__ttl -->
              <p class="linkBtn__txt">公式インスタグラム始めました</p><!-- /linkBtn__txt -->
            </div><!-- /linkBtn__contents -->
          </a></li><!-- /linkBtn__item -->
      </ul><!-- /link -->
    </div><!-- /inner -->
  </div>

  */ ?>

  <!-- ===============================================================================================
update
================================================================================================ -->

  <?php
  $all_posts = get_posts(array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC'
  ));
  global $post;
  if ($all_posts) : ?>

    <section class="update" id="js-topContents">
      <div class="inner">
        <div class="update__wrap">
          <div class="update__info">
            <h2 class="subTtl">
              <span class="below">News & Column</span>
              <span class="upper">お知らせ＆コラム</span>
            </h2>
            <!-- pc表示 -->
            <a href="<?php echo do_shortcode('[home_url]'); ?>category/news" class="btn show--pc">More</a>
          </div>
          <div class="update__contents">

            <!-- tab  -->
            <div class="tab">
              <input id="all" type="radio" name="tab" class="tab__switch" checked><label class="tab__label" for="all">ALL</label>
              <!-- tab__contents  -->
              <div class="tab__contents">

                <?php
                if ($all_posts) : ?>
                  <ul class="update__list">
                    <?php if ($all_posts) : foreach ($all_posts as $post) : setup_postdata($post); ?>
                        <?php get_template_part('template-parts/infoItem'); ?>
                    <?php endforeach;
                    endif; ?>
                  </ul>
                <?php else : ?>
                  <p>現在準備中です。少々お待ちください。</p>
                <?php endif;
                wp_reset_postdata(); ?>
              </div> <!-- /tab__contents  -->

              <input id="news" type="radio" name="tab" class="tab__switch"><label class="tab__label" for="news">お知らせ</label>
              <!-- tab__contents  -->
              <div class="tab__contents">

                <?php
                $news_posts = get_posts(array(
                  'post_type' => 'post',
                  'posts_per_page' => 3,
                  'category_name' => 'news',
                  'orderby' => 'date',
                  'order' => 'DESC'
                ));
                global $post;
                if ($news_posts) : ?>
                  <ul class="update__list">
                    <?php if ($news_posts) : foreach ($news_posts as $post) : setup_postdata($post); ?>
                        <?php get_template_part('template-parts/infoItem'); ?>
                    <?php endforeach;
                    endif; ?>
                  </ul>
                <?php else : ?>
                  <p>現在準備中です。少々お待ちください。</p>
                <?php endif;
                wp_reset_postdata(); ?>
              </div> <!-- /tab__contents  -->

              <input id="column" type="radio" name="tab" class="tab__switch"><label class="tab__label" for="column">コラム</label>
              <!-- tab__contents  -->
              <div class="tab__contents">
                <?php
                $column_posts = get_posts(array(
                  'post_type' => 'post',
                  'posts_per_page' => 3,
                  'category_name' => 'column',
                  'orderby' => 'date',
                  'order' => 'DESC'
                ));
                global $post;
                if ($column_posts) : ?>
                  <ul class="update__list">
                    <?php if ($column_posts) : foreach ($column_posts as $post) : setup_postdata($post); ?>
                        <?php get_template_part('template-parts/infoItem'); ?>
                    <?php endforeach;
                    endif; ?>
                  </ul>
                <?php else : ?>
                  <p>現在準備中です。少々お待ちください。</p>
                <?php endif;
                ?>
              </div> <!-- /tab__contents  -->


            </div><!-- /tab  -->

            <!-- sp表示 -->
            <a href="<?php echo do_shortcode('[home_url]'); ?>category/news" class="btn  show--sp">More</a>
          </div>
        </div>
      </div>
    </section>
  <?php endif;
  wp_reset_postdata(); ?>

  <!-- ===============================================================================================
treatment
================================================================================================ -->
  <section class="treatment">
    <div class="inner">
      <h2 class="mainTtl">
        <span class="mainTtl__inner">
          <span class="upper">Medical Treatment & operation</span><!-- /upper -->
          <span class="below">診療・手術について</span><!-- /below -->
        </span><!-- /mainTtl__inner -->
      </h2><!-- /mainTtl -->
      <ul class="intro">
        <li class="intro__item">
          <div class="intro__wrap">
            <div class="intro__icon"><img loading="lazy" width="65" height="65" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/treatment1-red.svg" alt="内科"></div>
            <h3 class="intro__ttl">内科</h3><!-- /intro__ttl -->
            <p class="intro__txt">高血圧や高コレステロール血症、糖尿病、高尿酸血症などの生活習慣病。 ワクチン接種やアレルギー疾患を対応します。発熱がある場合、コロナの検査も行っております。</p>
            <a href="<?php echo do_shortcode('[home_url]'); ?>general" class="btn">More</a>
          </div><!-- /.intro__wrap -->
          <ul class="symptom">
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>general/#disease01">風邪（かぜ）</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>general/#disease02">睡眠時無呼吸症候群</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>general/#disease03">花粉症</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>general/#disease04">高血圧</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>general/#disease05">脂質異常症（高脂血症）</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>general/#disease06">貧血</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>general/#disease07">お酒をやめられない</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>general/#disease08">高尿酸血症</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>general/#disease09">甲状腺疾患</a>
            </li>
          </ul><!-- /.symptom -->
        </li><!-- /intro__item -->
        <li class="intro__item">
          <div class="intro__wrap">
            <div class="intro__icon"><img loading="lazy" width="65" height="65" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/treatment2-red.svg" alt="消化器内科"></div>
            <h3 class="intro__ttl">消化器内科</h3><!-- /intro__ttl -->
            <p class="intro__txt">消化器内科では主に口から肛門までの消化管（食道・胃・小腸・大腸）や肝臓、胆のう、すい臓の病気を扱っています。胃腸炎など一過性の病気のケースが多いですが、あらゆる可能性を考慮し、内視鏡（胃カメラ、大腸カメラ）をはじめ精査していきます。</p>
            <a href="<?php echo do_shortcode('[home_url]'); ?>gastroenterology" class="btn">More</a>
          </div><!-- /.intro__wrap -->
          <ul class="symptom">
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>gastroenterology/#disease01">胃潰瘍／十二指腸潰瘍</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>gastroenterology/#disease02">ヘリコバクター・<span class="block">ピロリ菌</span></a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>gastroenterology/#disease03">逆流性食道炎</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>gastroenterology/#disease04">早期胃がん</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>gastroenterology/#disease05">過敏性腸症候群</a>
            </li>
            <li>
              <span>胆のう結石</span>
            </li>
            <li>
              <span>膵がん</span>
            </li>
            <li>
              <span>膵炎</span>
            </li>
            <li>
              <span>胆のう炎/胆管炎</span>
            </li>
          </ul><!-- /.symptom -->
        </li><!-- /intro__item -->
        <li class="intro__item">
          <div class="intro__wrap">
            <div class="intro__icon"><img loading="lazy" width="65" height="65" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/treatment3-red.svg" alt="肝臓内科"></div>
            <h3 class="intro__ttl">肝臓内科</h3><!-- /intro__ttl -->
            <p class="intro__txt">肝機能障害が指摘された場合や、肝炎になっている方、脂肪肝や、アルコールによる肝障害が心配な方はご相談ください。すでに肝硬変になっている方や腹水がたまっている方でも対応いたします。</p>
            <a href="<?php echo do_shortcode('[home_url]'); ?>liver" class="btn">More</a>
          </div><!-- /.intro__wrap -->
          <ul class="symptom">
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>liver/#disease01">B型慢性肝炎</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>liver/#disease02">C型慢性肝炎</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>liver/#disease03">肝硬変</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>liver/#disease04">自己免疫性肝炎</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>liver/#disease05">原発性胆汁性胆管炎</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>liver/#disease06">アルコール性肝障害</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>liver/#disease07">薬剤性肝障害</a>
            </li>
            <li>
              <a href="<?php echo do_shortcode('[home_url]'); ?>liver/#disease08">脂肪肝</a>
            </li>
            <li>
              <span>メタボリック症候群</span>
            </li>
          </ul><!-- /.symptom -->
        </li><!-- /intro__item -->
      </ul><!-- /intro -->
    </div><!-- /inner -->
  </section><!-- /treatment -->


  <section class="med">
    <div class="inner">
      <div class="med__block">
        <h2 class="mainTtl mainTtl--bgDark">
          <span class="mainTtl__inner">
            <span class="upper">Gastroenterological medicine</span><!-- /upper -->
            <span class="below">内視鏡</span><!-- /below -->
          </span><!-- /mainTtl__inner -->
        </h2>
        <p class="med__desc">
          当院では胃カメラ（胃内視鏡検査）・大腸内視鏡検査を行なっております。健康診断で「異常」「要再検査」と診断された方や、日常で胃や食道に違和感のある方など、一度診察ください。その結果で胃カメラ（胃内視鏡検査）・大腸内視鏡検査も行うことができます。</p>
        <!-- /med__desc -->

        <div class="link">

          <a href="<?php echo do_shortcode('[home_url]'); ?>gastroscopy" class="link__item link__item--gastro">
            <p class="link__ttl">胃カメラ(胃内視鏡検査)<br class="show--sp">について</p><!-- /link__ttl -->
            <div class="btn btn--primary">詳しくはこちら</div><!-- / -->
          </a><!-- /link__item -->

          <a href="<?php echo do_shortcode('[home_url]'); ?>colonoscopy" class="link__item link__item--colo">
            <p class="link__ttl">大腸内視鏡検査について</p><!-- /link__ttl -->
            <div class="btn btn--primary">詳しくはこちら</div><!-- / -->
          </a><!-- /link__item -->

        </div><!-- /link -->
      </div><!-- /med__block -->

      <div class="med__block">
        <h2 class="mainTtl mainTtl--bgDark">
          <span class="mainTtl__inner">
            <span class="upper">Health checkup and various examinations</span><!-- /upper -->
            <span class="below">健康診断・各種検診</span><!-- /below -->
          </span><!-- /mainTtl__inner -->
        </h2>
        <p class="med__desc">当院では各種検診・特定健診・企業の健康診断を行っています。高崎市在住の18歳以上の方は「健康づくり受診券」を使用し、受診できる検診もございますので、不明点等ございましたらお問い合わせください。</p>
        <!-- /med__desc -->
        <a href="<?php echo do_shortcode('[home_url]'); ?>exam" class="link__item link__item--img">
          <div class="link__img"><img src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/checkup.png" alt="健康診断・各種検診" width="610" height="187" loading="lazy"></div><!-- /.link__img -->
          <div class="link__contents">
            <div class="link__box">
              <p class="link__ttl">健康診断・各種検診<span class="block">について</span></p><!-- /link__ttl -->
              <div class="btn btn--primary">詳しくはこちら</div><!-- / -->
            </div><!-- /.link__box -->
          </div><!-- /.link__contents -->
        </a><!-- /link__item -->
      </div><!-- /med__block -->
    </div><!-- /inner -->
  </section><!-- /med -->

  <?php get_template_part('template-parts/hours'); ?>

  <?php get_template_part('template-parts/access'); ?>

  <!-- ===============================================================================================
facility
================================================================================================ -->
  <section class="facility gallery">
    <div class="inner">
      <h2 class="mainTtl">
        <span class="mainTtl__inner">
          <span class="upper">Facility introduction</span>
          <span class="below">施設紹介</span>
        </span>
      </h2>
      <?php get_template_part('template-parts/facility'); ?>
    </div>
  </section>

  <!-- ===============================================================================================
faq
================================================================================================ -->
  <section class="faq">
    <div class="inner">
      <h2 class="mainTtl">
        <span class="mainTtl__inner">
          <span class="upper">FAQ</span>
          <span class="below">よくある質問</span>
        </span>
      </h2>

      <div class="faq-tab">
        <ul class="faq-tab__menu faq-tab__menu--home">
          <li class="faq-tab__menu-item is-active" data-category="all">
            ALL
          </li>
          <?php
          $faq_categories = get_terms(array(
            'taxonomy' => 'faq_category',
            'hide_empty' => true,
            'number' => 5,
            'orderby' => 'ID',
            'order' => 'ASC'
          ));
          foreach ($faq_categories as $category) {
          ?>
            <li class="faq-tab__menu-item" data-category="<?php echo esc_attr($category->slug); ?>">
              <?php echo esc_html($category->name); ?>
            </li>
          <?php } ?>
        </ul>

        <div class="faq-tab__content is-show" data-category="all">
          <ul class="faq-list">
            <?php
            $args = array(
              'post_type' => 'faq',
              'posts_per_page' => -5,
              'orderby' => 'ID',
              'order' => 'DESC'
            );
            $faq_query = new WP_Query($args);
            if ($faq_query->have_posts()) :
              while ($faq_query->have_posts()) : $faq_query->the_post(); ?>
                <li class="faq-list__item">
                  <div class="faq-list__item-circle">
                    <div class="faq-list__item-question-wrapper js-faq-question">
                      <span>Q</span>
                      <p class="faq-list__item-question-text"><?php the_title(); ?></p>
                    </div>
                  </div>
                    <div class="faq-list__item-answer">
                      <div class="faq-list__item-answer-wrapper">
                        <?php the_content(); ?>
                      </div>
                    </div>
                </li>
            <?php
              endwhile;
              wp_reset_postdata();
            endif; ?>
          </ul>
        </div>

        <?php
        if ($faq_categories) :
          foreach ($faq_categories as $category) : ?>
            <div class="faq-tab__content" data-category="<?php echo esc_attr($category->slug); ?>">
              <ul class="faq-list">
                <?php
                $args = array(
                  'post_type' => 'faq',
                  'posts_per_page' => -1,
                  'orderby' => 'ID',
                  'order' => 'DESC',
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'faq_category',
                      'field' => 'term_id',
                      'terms' => $category->term_id,
                    ),
                  ),
                );
                $faq_query = new WP_Query($args);
                if ($faq_query->have_posts()) :
                  while ($faq_query->have_posts()) : $faq_query->the_post(); ?>
                    <li class="faq-list__item">
                      <div class="faq-list__item-circle">
                        <p class="faq-list__item-question-wrapper js-faq-question">
                          <span>Q</span><?php the_title(); ?>
                        </p>
                      </div>
                      <div class="faq-list__item-answer">
                        <div class="faq-list__item-answer-wrapper">
                          <?php the_content(); ?>
                        </div>
                      </div>
                    </li>
                  <?php
                  endwhile;
                  wp_reset_postdata();
                else : ?>
                  <li>該当するFAQはありません。</li>
                <?php endif; ?>
              </ul>
            </div>
        <?php endforeach;
        endif; ?>
      </div>
      <div class="faq__btn">
        <a href="<?php echo do_shortcode('[home_url]'); ?>faq" class="btn">More</a>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/cta'); ?>

</main>

<?php get_footer(); ?>
