<?php get_header(); ?>

<main id="js-topContents">

  <div class="post">
    <div class="inner">
      <div class="news__wrap">
        <?php
        $cat = get_the_category()[0];

        ?>
        <time class="news__time" datetime="<?php the_time('c'); ?>">公開日：<span><?php the_time('Y.m.d') ?></span  ></time>
        <?php if (get_the_modified_time('Y.m.d') != get_the_time('Y.m.d')) : ?>
        <time class="news__time" datetime="<?php the_modified_time('c'); ?>">更新日：<span><?php the_modified_time('Y.m.d') ?></span    ></time>
      <?php endif; ?>
      <h1 class="news__ttl"><?php the_title(); ?></h1><!-- /news__ttl -->
      <!-- /news__txt -->
      </div>
      <?php
      if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="post__contents">
            <?php the_content(); ?>
          </div><!-- /post__contents -->
      <?php endwhile;
      endif; ?>
    </div><!-- /inner -->
  </div><!-- /post -->


  <?php
  $prevpost = get_adjacent_post();
  $nextpost = get_adjacent_post(false, '', false);

  if ($prevpost || $nextpost) { //前の記事、次の記事いずれか存在しているとき
    echo '<ul class="paging">';

    if ($prevpost) { //前の記事が存在しているとき
      $prevpost_ttl = "PREV";
      echo '<li class="paging__item _prev"><a href="' . get_permalink($prevpost->ID) . '">' . $prevpost_ttl . '</a></li>';
    } else {
      echo '<li class="paging__item _prev"></li>';
    }

    if ($nextpost) { //次の記事が存在しているとき
      $nextpost_ttl = "NEXT";
      echo '<li class="paging__item _next"><a href="' . get_permalink($nextpost->ID) . '">' . $nextpost_ttl . '</a></li>';
    } else {
      echo '<li class="paging__item _next"></li>';
    }

    echo '</ul>';
  }
  ?>

  <?php get_template_part('template-parts/cta'); ?>
</main><!-- /info -->


<?php get_footer(); ?>
