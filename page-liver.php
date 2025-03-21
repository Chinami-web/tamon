<?php
/*
Template Name: 肝臓内科
*/
?>
<?php get_header(); ?>

<main id="js-topContents">

  <div class="index">
    <div class="inner">
      <ul class="index__list">
        <li class="index__item"><a href="<?php echo do_shortcode('[home_url]'); ?>general">
            <img loading="lazy" width="65" height="65" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/treatment1.svg" alt="内科">
            <span>内科</span>
          </a></li><!-- /index__item -->
        <li class="index__item"><a href="<?php echo do_shortcode('[home_url]'); ?>gastroenterology">
            <img loading="lazy" width="65" height="65" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/treatment2.svg" alt="消化器内科">
            <span>消化器内科</span>
          </a></li><!-- /index__item -->
        <li class="index__item current"><a href="<?php echo do_shortcode('[home_url]'); ?>liver">
            <img loading="lazy" width="65" height="65" src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/top/treatment3.svg" alt="肝臓内科">
            <span>肝臓内科</span>
          </a></li><!-- /index__item -->
      </ul><!-- /index__list -->
    </div><!-- /inner -->
  </div><!-- /index -->

  <section class="med">
    <div class="inner">
      <p class="med__desc">
      健康診断で肝機能障害や脂肪肝を指摘された場合、お酒などで体調が悪い場合など、相談ください。
      </p><!-- /med__desc -->

      <div class="med__block">
        <div class="ex">
          <h2 class="mainTtl mainTtl--sm">
            <span class="mainTtl__inner">
              <span class="upper">For example</span><!-- /upper -->
              <span class="below">例えば<br class="show--sp">このような症状が気になった場合<span class="block">ご相談ください</span></span><!-- /below -->
            </span><!-- /mainTtl__inner -->
          </h2>
          <ul class="ex__list">
            <li class="ex__item">
              <div class="ex__img">
                <picture>
                  <source type="image/webp" srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/liver/ex1.webp">
                  <img loading="lazy" width="270" height="167" data-js-ofi src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/liver/ex1.jpg" alt="だるさ">
                </picture>
              </div><!-- /ex__img -->
              <h3 class="ex__ttl">だるさ</h3><!-- /ex__ttl -->
            </li><!-- /ex__item -->
            <li class="ex__item">
              <div class="ex__img">
                <picture>
                  <source type="image/webp" srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/liver/ex2.webp">
                  <img loading="lazy" width="270" height="167" data-js-ofi src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/liver/ex2.jpg" alt="倦怠感">
                </picture>
              </div><!-- /ex__img -->
              <h3 class="ex__ttl">倦怠感</h3><!-- /ex__ttl -->
            </li><!-- /ex__item -->
            <li class="ex__item">
              <div class="ex__img">
                <picture>
                  <source type="image/webp" srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/liver/ex3.webp">
                  <img loading="lazy" width="270" height="167" data-js-ofi src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/liver/ex3.jpg" alt="高脂血症">
                </picture>
              </div><!-- /ex__img -->
              <h3 class="ex__ttl">高脂血症</h3><!-- /ex__ttl -->
            </li><!-- /ex__item -->
            <li class="ex__item">
              <div class="ex__img">
                <picture>
                  <source type="image/webp" srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/liver/ex4.webp">
                  <img loading="lazy" width="270" height="167" data-js-ofi src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/liver/ex4.jpg" alt="高尿酸血症">
                </picture>
              </div><!-- /ex__img -->
              <h3 class="ex__ttl">高尿酸血症</h3><!-- /ex__ttl -->
            </li><!-- /ex__item -->
            <li class="ex__item">
              <div class="ex__img">
                <picture>
                  <source type="image/webp" srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/liver/ex5.webp">
                  <img loading="lazy" width="270" height="167" data-js-ofi src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/liver/ex5.jpg" alt="黄疸（からだが黄色くなる）">
                </picture>
              </div><!-- /ex__img -->
              <h3 class="ex__ttl">黄疸<br class="show--sp">（からだが黄色くなる）</h3><!-- /ex__ttl -->
            </li><!-- /ex__item -->
            <li class="ex__item">
              <div class="ex__img">
                <picture>
                  <source type="image/webp" srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/liver/ex6.webp">
                  <img loading="lazy" width="270" height="167" data-js-ofi src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/liver/ex6.jpg" alt="浮腫み">
                </picture>
              </div><!-- /ex__img -->
              <h3 class="ex__ttl">浮腫み</h3><!-- /ex__ttl -->
            </li><!-- /ex__item -->
            <li class="ex__item">
              <div class="ex__img">
                <picture>
                  <source type="image/webp" srcset="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/liver/ex7.webp">
                  <img loading="lazy" width="270" height="167" data-js-ofi src="<?php echo do_shortcode('[theme_url]'); ?>/assets/img/liver/ex7.jpg" alt="肥満症(メタボリックシンドローム)">
                </picture>
              </div><!-- /ex__img -->
              <h3 class="ex__ttl">肥満症<br><span class="sm">(メタボリックシンドローム)</span></h3><!-- /ex__ttl -->
            </li><!-- /ex__item -->
          </ul><!-- /ex__list -->
        </div><!-- /ex -->

        <!-- <ul class="type">
          <li class="type__item"><a class="js-jump" href="#disease01">B型慢性肝炎</a></li>
          <li class="type__item"><a class="js-jump" href="#disease02">C型慢性肝炎</a></li>
          <li class="type__item"><a class="js-jump" href="#disease03">自己免疫性肝炎</a></li>
          <li class="type__item"><a class="js-jump" href="#disease04">原発性胆汁性胆管炎</a></li>
          <li class="type__item"><a class="js-jump" href="#disease05">アルコール性肝障害</a></li>
          <li class="type__item"><a class="js-jump" href="#disease06">薬剤性肝障害</a></li>
          <li class="type__item"><a class="js-jump" href="#disease07">急性肝炎</a></li>
        </ul> -->

        <ul class="med__list">
          <li class="med__item" id="disease01">
            <h2 class="lineTtl">B型慢性肝炎</h2><!-- /lineTtl -->
            <p class="med__txt">B型慢性肝炎は、B型肝炎ウイルス（HBV）の感染が持続することによって起こる病気です。<br>HBVは血液感染、性交渉および母子感染などにより感染します。 消化器症状、倦怠感(けんたいかん)、黄疸(おうだん)が主なものですが、急性肝炎と異なり、慢性肝炎では徐々に肝臓が破壊されていくため自覚症状が出ないことがほとんどです。ただし、持続感染者のなかでも肝炎が急速に進行（急性増悪(ぞうあく)、急性肝不全(急性肝不全)）することがあり、このような場合には自覚症状が出現しますので注意が必要です。<br>B型肝炎は、肝硬変に進行しなくても肝がんを生じることがあるため、腹部エコーなどによる半年に1度ほどの定期的な画像検査を行うことが推奨されております。</p><!-- /med__txt -->
		　　<a href="https://tamon-naika.com/555/" class="colorLink">肝炎とはどんな病気？＞</a>
          </li><!-- /med__item -->
          <li class="med__item" id="disease02">
            <h2 class="lineTtl">C型慢性肝炎</h2><!-- /lineTtl -->
            <p class="med__txt">C型肝炎ウイルス（HCV）に感染し、肝機能の異常が持続的に続く病気です。通常、6カ月以上にわたって肝炎が続く場合を慢性肝炎といいます。<br>
            症状は現れません。しかし、無治療だと約7割でウイルスは排除されず持続感染に移行します。この状態になると自然治癒するのは極めてまれで、大部分の人が慢性肝炎になります。<br>C型慢性肝炎の場合、自覚症状がほとんどないのが特徴です。 C型肝炎ウイルスに感染すると急性肝炎が起こり、時に全身倦怠(けんたい)感に引き続き食欲不振、悪心(おしん)、嘔吐(おうと)などの症状が出現することがありますが、症状が出ることは少なく、そのまま慢性化する人がほとんどです。 C型肝炎の治療は、以前はインターフェロンによる非常に困難な治療でした。<br>しかし、近年、DAA(Direct Acting Antivirals、直接作用型抗ウイルス剤)製剤による経口インターフェロンフリー製剤の開発により数週間の内服にて、ほぼすべての患者さん（95％以上）が治癒できるようになりました。 <br>DAA製剤は非常に有効な薬剤なのですが、薬剤の価格が高額なため、「肝炎助成金」による助成金を用いて一定額の支払いのみで、あとは公費で補助されます。
            </p><!-- /med__txt -->
		　　<a href="https://tamon-naika.com/555/" class="colorLink">肝炎とはどんな病気？＞</a>
          </li><!-- /med__item -->
          <li class="med__item" id="disease03">
            <h2 class="lineTtl">肝硬変</h2><!-- /lineTtl -->
            <p class="med__txt">
            進行した肝硬変になると腹水が貯留して腹部膨満感が出現、黄疸が認められることがあります。また、アンモニアが高値になると意識混濁状態になる肝性脳症(かんせいのうしょう)が出現します。<br> 手掌紅斑(しゅしょうこうはん)、クモ状血管腫、女性化乳房などが認められることがあり、非代償期(ひだいしょうき)（肝硬変）には、浮腫(ふしゅ)、腹水(ふくすい)、黄疸(おうだん)、食道・胃静脈瘤(じょうみゃくりゅう)、肝性脳症(かんせいのうしょう)(意識障害)などの合併症が現れることがあります。
            </p><!-- /med__txt -->
          </li><!-- /med__item -->
          <li class="med__item" id="disease04">
            <h2 class="lineTtl">自己免疫性肝炎</h2><!-- /lineTtl -->
            <p class="med__txt">
              病気の発症や進行に自己免疫、つまり患者さん自身の免疫反応が深く関与して発症する慢性的な肝炎です。<br>
              自己免疫性肝炎の発病は一般的には緩やかであり、症状も軽微なことが多いとされていますが、治療を行わないと肝硬変に進行することがあります。幸いなことに、多くの患者さんで副腎皮質ステロイド薬によりその進行を止めることが可能な場合が多いので、病気の早期診断・早期治療が大切です。<br>
              自己免疫性肝炎の発症頻度は、2018年に行われた厚生労働省「難治性の肝・胆道疾患に関する調査研究」班が行った全国疫学調査によると、全国の自己免疫性肝炎の患者数は推定約30,325名、人口10万人当たりの有病率は23.9でした。2004年に行った全国疫学調査では推定患者数9,533名、有病率8.7であり、14年間でおよそ３倍に増加し、ほぼ欧米並みと近年増加しています。<br>
              自己免疫性肝炎の発症の原因は現在も不明です。抗核抗体などの自己抗体陽性、高IgG血症、他の自己免疫疾患の合併が多いこと、副腎皮質ステロイド治療に対する良好な反応などから、免疫システムの破綻による自己免疫機序の関与が想定されています。もともとの「遺伝要因」に、何らかの「引き金（環境要因）」が加わって発症すると推定されていますが、現時点でその「引き金」が何であるかはわかっておりません。
              また、自己免疫性肝炎の患者さんは、副腎皮質ステロイド薬を急に中止すると肝炎が再発してしまうことがあるので注意が必要です。<br>
              また、副腎皮質ステロイド薬の副作用の１つに脂肪肝、糖尿病を生じやすくなってしまうことがありますので、副腎皮質ステロイド薬内服中の患者さんは敵的な脂肪肝、糖尿病の検査も重要です。
            </p><!-- /med__txt -->
          </li><!-- /med__item -->
          <li class="med__item" id="disease05">
            <h2 class="lineTtl">原発性胆汁性胆管炎</h2><!-- /lineTtl -->
            <p class="med__txt">病気の発症や進行に自己免疫、つまり患者さん自身の免疫反応が深く関与して発症する慢性的な肝炎です。<br>
              自己免疫性肝炎の発病は一般的には緩やかであり、症状も軽微なことが多いとされていますが、治療を行わないと肝硬変に進行することがあります。幸いなことに、多くの患者さんで副腎皮質ステロイド薬によりその進行を止めることが可能な場合が多いので、病気の早期診断・早期治療が大切です。<br>
              自己免疫性肝炎の発症頻度は、2018年に行われた厚生労働省「難治性の肝・胆道疾患に関する調査研究」班が行った全国疫学調査によると、全国の自己免疫性肝炎の患者数は推定約30,325名、人口10万人当たりの有病率は23.9でした。2004年に行った全国疫学調査では推定患者数9,533名、有病率8.7であり、14年間でおよそ３倍に増加し、ほぼ欧米並みと近年増加しています。
              自己免疫性肝炎の発症の原因は現在も不明です。抗核抗体などの自己抗体陽性、高IgG血症、他の自己免疫疾患の合併が多いこと、副腎皮質ステロイド治療に対する良好な反応などから、免疫システムの破綻による自己免疫機序の関与が想定されています。もともとの「遺伝要因」に、何らかの「引き金（環境要因）」が加わって発症すると推定されていますが、現時点でその「引き金」が何であるかはわかっておりません。<br>
              また、自己免疫性肝炎の患者さんは、副腎皮質ステロイド薬を急に中止すると肝炎が再発してしまうことがあるので注意が必要です。<br>
              また、副腎皮質ステロイド薬の副作用の１つに脂肪肝、糖尿病を生じやすくなってしまうことがありますので、副腎皮質ステロイド薬内服中の患者さんは敵的な脂肪肝、糖尿病の検査も重要です。
            </p><!-- /med__txt -->
          </li><!-- /med__item -->
          <li class="med__item" id="disease06">
            <h2 class="lineTtl">アルコール性肝障害</h2><!-- /lineTtl -->
            <p class="med__txt">アルコールの過剰摂取で最初に生じるのはアルコール性脂肪肝です。<br>それでもなお大量飲酒を続けると、約２割の人にアルコール性肝障害が起こります。<br>
              アルコール性肝障害のなかには、肝性脳症(かんせいのうしょう)、肺炎、急性腎不全(きゅうせいじんふぜん)、消化管出血などの合併症やエンドトキシン血症などを伴い、1カ月以内に死亡する重症型アルコール性肝炎と呼ばれる病態があります。幸い重症化しない場合でも、長期に大量飲酒を続けるとアルコール性肝線維症(かんせんいしょう)を経て、アルコール性肝硬変(かんこうへん)になることがあります。<br>
              飲酒の機会は男性に多いのですが、同じ量の長期大量飲酒だと女性のほうに早く肝障害が現れることがわかっていますので、注意が必要です。また、C型肝炎ウイルスを合併している場合にはすみやかに肝硬変に進行し、肝細胞がんを合併しやすいので注意が必要です。<br>
            </p>
			   <a href="https://tamon-naika.com/410/" class="colorLink">アルコール性肝障害とは？治療や予防方法＞</a><!-- /med__txt -->
          </li><!-- /med__item -->
          <li class="med__item" id="disease07">
            <h2 class="lineTtl">薬剤性肝障害</h2><!-- /lineTtl -->
            <p class="med__txt">副作用を生じる人は特定の薬物に対する感受性が高いのですが、最初に使用する前に副作用が生じることを予測することは困難です。<br>
              薬剤性肝障害には肝細胞を破壊する「肝細胞障害型」、黄疸を生じる「胆汁うっ滞型」、両方を生じる「混合型」があります。 <br>これに対し、中毒性肝障害では薬物そのものがそもそも肝臓の毒となり、
              一定の量より過剰に薬剤を摂取すると肝障害を来すものです。<br>
              軽症の場合は自覚症状がないですが、重症化すると全身の倦怠感(けんたいかん)や吐き気、嘔吐、黄疸(おうだん)などを来し、肝不全(かんふぜん)から死亡に至ることもしばしばです。<br>
            </p><!-- /med__txt -->
          </li><!-- /med__item -->
          <li class="med__item" id="disease08">
            <h2 class="lineTtl">脂肪肝</h2><!-- /lineTtl -->
            <p class="med__txt">
            脂肪肝とは、肝細胞に中性脂肪が脂肪滴として過剰に沈着している、脂肪沈着症を言います。原因は、食べ過ぎ、飲み過ぎ、運動不足などの生活習慣にあります。これらの原因はいずれも糖尿病、高血圧症、動脈硬化などの生活習慣病の原因となるためその治療が大切です。
            </p><!-- /med__txt -->
            <a href="https://tamon-naika.com/326/" class="colorLink">脂肪肝について原因や症状＞</a><!-- /colorLink -->
          </li><!-- /med__item -->
        </ul><!-- /med__list -->

      </div><!-- /med__block -->


    </div><!-- /inner -->
  </section><!-- /med -->

  <?php get_template_part('template-parts/cta'); ?>
</main>

<?php get_footer(); ?>