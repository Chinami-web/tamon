<?php
// FAQアーカイブページ用の変数設定
global $page_slug, $page_title;
$page_slug = 'faq';
$page_title = 'よくある質問';
$page_id = $page_slug;  // スラッグをページIDとして使用
get_header();
?>

<!-- ===============================================================================================
faq
================================================================================================ -->
<main id="js-topContents">
  <section class="faq" id="faq-pagination">
    <div class="inner">
      <h2 class="mainTtl">
        <span class="mainTtl__inner">
          <span class="upper">FAQ</span>
          <span class="below">よくある質問</span>
        </span>
      </h2>

      <div class="faq-tab">
        <ul class="faq-tab__menu">
          <li class="faq-tab__menu-item is-active" data-category="all">
            ALL
          </li>
          <?php
          $faq_categories = get_terms(array(
            'taxonomy' => 'faq_category',
            'hide_empty' => true,
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
              'posts_per_page' => -1,
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
            else: ?>
              <li class="faq-list__item--empty">現在FAQは登録されていません。</li>
            <?php endif; ?>
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
        <p class="faq__text">
          風邪について詳しくはクリニックへお問い合わせください。
        </p>

    </div>
  </section>
  <?php get_template_part('template-parts/cta'); ?>
</main>

<?php get_footer(); ?>
