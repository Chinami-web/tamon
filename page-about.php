<?php
/*
Template Name: 当院の紹介
*/
?>
<?php get_header(); ?>

<main id="js-topContents">

  <section class="pol">
    <div class="inner">
      <h2 class="subTtl subTtl--lg">
        <span class="below">Treatment policy</span><!-- /below -->
        <span class="upper">治療方針</span><!-- /upper -->
      </h2><!-- /subTtl -->
      <div class="pol__img">
        <picture>
          <source type="image/webp" srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/about1.webp">
          <img loading="lazy" width="1000" height="477" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/about1.jpg" alt="院長 長島多聞の写真">
        </picture>
      </div>

      <div class="pol__wrap">
        <h3 class="pol__ttl">地域で幅広く、<br>たくさんの患者さんへ<br><span class="accent">安心の診療</span>を</h3><!-- /pol__ttl -->
        <div class="pol__contents">ホームページをご覧頂き、ありがとうございます。 <br>多聞内科クリニックの院長、長島　多聞(たもん)です。<br>
          このたび高崎市福島町で内科クリニックを開院させていただくこととなりました。<br>
          医療を行うにあたり、「患者さんが、自分、もしくは自分の家族であった場合、どのような検査や治療をしていくか。」を意識し診察にあたってきました。<br>
          今後もこの気持ちを忘れることなく診療に取り組んでいきます。 <br>目指すクリニックは、適切な医療をし、皆様に安心して頂けるクリニック、<br>自分の家族、友人、知人に自信をもって紹介できるクリニック。<br>
          そのため、今までの経験を活かし、ＣＴや内視鏡検査を導入し、継続的な医療支援を行い、職員全員で、皆様の笑顔を見られるようサポートしていきます。<br>
          病気のことだけでなく、気になる症状や健康上の相談でも、何かございましたら、<span class="block">お気軽にご相談ください。</span> <br>今後ともよろしくお願いいたします。</div><!-- /pol__contents -->
      </div><!-- /pol__wrap -->
    </div><!-- /inner -->
  </section><!-- /pol -->

  <section class="doc bgDark">
    <div class="inner">
      <h2 class="subTtl subTtl--lg">
        <span class="below">Doctor introduction</span><!-- /below -->
        <span class="upper">医師紹介</span><!-- /upper -->
      </h2><!-- /subTtl -->
      <div class="doc__wrap">
        <div class="doc__img">
          <picture>
            <source type="image/webp" srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/doctor1.webp">
            <img loading="lazy" width="440" height="486" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/about/doctor1.jpg" alt="院長 長島多聞の写真">
          </picture>
        </div><!-- /doc__img -->
        <div class="doc__contents doc__box">
          <ul class="doc__list">
            <li class="doc__item">
              <dl>
                <dt>経 歴</dt>
                <dd>群馬県出身<br>前橋高等学校卒<br>岩手医科大学卒<br>
                  東京大学医学部附属病院、長野県の佐久市立国保浅間総合病院で研修。<br>地元の群馬に戻り、群馬大学に入局。<br>
                  済生会前橋病院、伊勢崎市民病院、前橋日赤、西群馬病院、渋川医療センターなどの勤務を経て、2022年4月に多聞内科クリニックを開院。
                  <a href="https://tamon-naika.com/wp-content/uploads/2025/01/0129.pdf" class="btn" target="_blank" rel="noopener">西群馬病院での医師生活について</a><!-- /btn -->
                </dd>
              </dl>
            </li><!-- /doc__item -->
            <li class="doc__item">
              <dl>
                <dt>資格・所属　</dt>
                <dd>日本内科学会 総合内科専門医<br>日本消化器病学会 専門医<br>日本肝臓学会 専門医<br>日本消化器内視鏡学会 専門医<br>日本プライマリ・ケア連合学会
                  認定医<br>身体障害者福祉法指定医<br>難病指定医</dd>
              </dl>
            </li><!-- /doc__item -->
          </ul><!-- /doc__list -->
        </div><!-- /doc__contents -->
      </div><!-- /doc__wrap -->
      <ul class="doc__list _full">
        <li class="doc__item">
          <dl>
            <dt>主な連携医療機関</dt>
            <dd>
              <ul>
              <li><a target="_blank" href="https://hospital.med.gunma-u.ac.jp">群馬大学医学部附属病院</a></li>
              <li><a target="_blank" href="https://takasaki.hosp.go.jp">高崎総合医療センター</a></li>
              <li><a target="_blank" href="https://www.maebashi.jrc.or.jp">前橋赤十字病院</a></li>
              <li><a target="_blank" href="http://www.maebashi.saiseikai.or.jp">群馬県済生会前橋病院</a></li>
              <li><a target="_blank" href="https://hidaka02-kai.com">日高病院</a></li>
              <li><a target="_blank" href="http://www.hidaka-kai.com/heisei/">平成日高クリニック</a></li>
              <li><a target="_blank" href="https://shibukawa.hosp.go.jp">渋川医療センター</a></li>
              <li><a target="_blank" href="https://www.makikai.jp">真木病院</a></li>
              </ul>
              <br><p>など</p>
            </dd>
          </dl>
        </li><!-- /doc__item -->
      </ul><!-- /doc__list -->
    </div><!-- /inner -->
  </section><!-- /doc -->


  <section class="facility gallery">
    <div class="inner">
      <h2 class="mainTtl">
        <span class="mainTtl__inner">
          <span class="upper">Facility introduction</span><!-- /upper -->
          <!-- <span class="below">設備・施設紹介</span> -->
          <span class="below">施設紹介</span>
        </span><!-- /mainTtl__inner -->
      </h2><!-- /mainTtl -->

      <?php get_template_part('template-parts/facility'); ?>
    
      <!-- <div class="tab">
        <input id="equipment" type="radio" name="tab" class="tab__switch" checked="checked"><label class="tab__label" for="equipment">設備紹介</label>

        <div class="tab__contents">
          <?php //get_template_part('template-parts/equipment'); ?>


        </div> 

        <input id="facility" type="radio" name="tab" class="tab__switch"><label class="tab__label" for="facility">施設紹介</label>
 
        <div class="tab__contents">
          <?php// get_template_part('template-parts/facility'); ?>
        </div>


      </div> -->


    </div><!-- /inner -->
  </section><!-- /facility -->



  <?php get_template_part('template-parts/cta'); ?>

</main>

<?php get_footer(); ?>