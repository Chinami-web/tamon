<?php get_header(); ?>

<main id="js-topContents">

  <div class="infoList">
    <div class="inner">
      <div class="infoTab">
        <h2 class="infoTab__item infoTab__item--news   <?php if (get_the_category()[0]->slug === 'news') {
                                                          echo "active";
                                                        } ?>"><a href="<?php echo do_shortcode('[home_url]'); ?>category/news">NEWS</a></h2><!-- /infoTab__item -->
        <h2 class="infoTab__item infoTab__item--column   <?php if (get_the_category()[0]->slug === 'column') {
                                                            echo "active";
                                                          } ?>"><a href="<?php echo do_shortcode('[home_url]'); ?>category/column">COLUMN</a></h2><!-- /infoTab__item -->
      </div><!-- /infoTab -->

      <?php
      if (have_posts()) : ?>
        <ul class="update__list">
          <?php
          while (have_posts()) :
            the_post();

          ?>

            <?php get_template_part('template-parts/infoItem'); ?>

          <?php endwhile; ?>
        </ul><!-- /update__list -->
      <?php else : ?>
        <p class="update__prepare">現在準備中です。少々お待ちください。</p>
      <?php endif;
      wp_reset_postdata(); ?>

    </div><!-- /inner -->
  </div><!-- /infoList -->



  <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 
  ?>
    <!-- pagination -->
    <div class="pagination">
      <?php
      echo
      paginate_links(
        array(
          'end_size' => 0, //ページ番号のリストの両端（最初と最後）にいくつの数字を表示するか
          'mid_size' => 1, //現在のページの両側にいくつの数字を表示するか。ただし現在のページは含みません
          'prev_next' => true,
          'prev_text' => '',
          'next_text' => '',
        )
      );
      ?>
    </div><!-- /pagination -->
  <?php endif; ?>

  <?php get_template_part('template-parts/cta'); ?>

</main>

<?php get_footer(); ?>