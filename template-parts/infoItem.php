<?php 
$trim_nunmber = 40;
if (is_home() || is_front_page()) {
  $trim_nunmber = 25;
} ?>

<li class="update__item">
  <a href="<?php echo esc_url(get_permalink()); ?>" class="update__box">
    <div class="update__meta">
      <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d') ?></time>
    </div><!-- /update__meta -->
    <h3 class="update__subTtl"><?php echo wp_trim_words(get_the_title(), $trim_nunmber, '...'); ?></h3>
  </a>
</li>