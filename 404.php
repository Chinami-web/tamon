<?php get_header(); ?>

<main id="js-topContents">


    <div class="inner">
      <p class="notFound__txt">大変申し訳ありません。<br>
        お探しのページは見つかりませんでした。<br>
        ご指定のページは削除されたか、<br class="show--sp">移動した可能性がございます。</p><!-- /notFound__txt -->
      <a class="btn" href="<?php echo do_shortcode('[home_url]'); ?>">TOPに戻る</a>
    </div><!-- /inner -->

  <?php get_template_part('template-parts/cta'); ?>
  <?php get_template_part('template-parts/access'); ?>
</main>

<?php get_footer(); ?>