<?php
/*
Template Name: 受付・ご予約について
*/
?>
<?php get_header(); ?>

<main id="js-topContents">


  <section class="med">
    <div class="inner">
      <ul class="med__list">
        <li class="med__item">
          <h2 class="lineTtl">初診の方へ</h2><!-- /lineTtl -->
          <p class="med__txt">当院は完全予約制ではありません。<br>予約外での初診診療も受付けておりますので、診察時間内にご来院ください。<br>
            ただし予約時間が長くなるケースがありますので電話かWEB予約より予約してからのご来院をお勧めしております。</p><!-- /med__txt -->
        </li><!-- /med__item -->
        <li class="med__item">
          <h2 class="lineTtl">ご持参いただくもの</h2><!-- /lineTtl -->

          <ul class="card">
            <li class="card__item">
              <h3 class="card__ttl"><img loading="lazy" width="38" height="26" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/reserve/icon1.svg" alt="">健康保険証
              </h3><!-- /card__ttl -->
            </li><!-- /card__item -->
            <li class="card__item">
              <h3 class="card__ttl"><img loading="lazy" width="27" height="32" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/reserve/icon2.svg" alt="">お薬手帳
              </h3><!-- /card__ttl -->
              <p class="card__txt">お持ちでない場合は、お薬をご持参ください。</p><!-- /card__txt -->
            </li><!-- /card__item -->
            <li class="card__item">
              <h3 class="card__ttl"><img loading="lazy" width="27" height="32" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/reserve/icon3.svg" alt="">各種医療受給者証
              </h3><!-- /card__ttl -->
              <p class="card__txt">公費負担を受けられている方は、<br>公費受給者証をお持ちください。</p><!-- /card__txt -->
            </li><!-- /card__item -->
            <li class="card__item">
              <h3 class="card__ttl"><img loading="lazy" width="27" height="32" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/reserve/icon4.svg" alt="">紹介状
              </h3><!-- /card__ttl -->
              <p class="card__txt">今まで他の医療機関にて通院していた方は、<br>可能な限り紹介状をご持参ください。</p><!-- /card__txt -->
            </li><!-- /card__item -->
          </ul><!-- /card -->

        </li><!-- /med__item -->
        <li class="med__item">
          <h2 class="lineTtl">ご予約方法</h2><!-- /lineTtl -->
          <div class="med__txt">当院ではWEB予約受付を行っております。ぜひご活用ください。お電話でのご予約も承ります。<br>予約受付についてはあくまでもスムーズにご案内させていただくためのものとなります。<br>ご予約した時間にすぐに診察をするということではございませんので、ご了承ください。ご予約の際はお時間に余裕を持ちご予約ください。<br>胃カメラ、大腸内視鏡検査のご予約時間は限られておりますので、詳しくはWEB予約ページにて時間のご確認、 またはお電話にてご連絡ください。大腸内視鏡検査については検査の前に診察が必要となりますので、ご希望の方はまずは受診ください。
            <?php get_template_part('template-parts/bookBtns'); ?>
          </div><!-- /med__txt -->

        </li><!-- /med__item -->
        <!-- <li class="med__item">
          <div class="med__clm">
            <div class="med__contents">
              <h2 class="lineTtl">問診表</h2>
              <p class="med__txt">当院では初診時以下の問診票のご記入を<br class="show--pc">お願いしております。<br>
                事前にご記入いただいた問診票を<br>お持ちいただくとよりスムーズな診察が可能です。</p>
            </div>
            <div class="btns">
              <a href="<?php echo do_shortcode('[theme_url]'); ?>/assets/pdf/monshinhyo.pdf" class="btn" target="_blank" rel="noopener">問診票</a>
              <a href="" class="btn" target="_blank" rel="noopener">診察申込書</a>
            </div>
          </div>

        </li> -->
      </ul><!-- /med__list -->


    </div><!-- /inner -->
  </section><!-- /med -->
  <?php get_template_part('template-parts/hours'); ?>

  <?php get_template_part('template-parts/access'); ?>
</main>

<?php get_footer(); ?>