<div class="bgDark cta">
  <div class="inner">
    <?php get_template_part('template-parts/bookBtns'); ?>
  </div><!-- /inner -->
</div><!-- /cta -->
<?php if (is_page('gastroscopy')) :?>
<?php elseif (is_home() || is_front_page() || (is_page("colonoscopy"))): ?>
<?php else : ?>
  <?php if (!is_post_type_archive('faq')): ?>
    <?php get_template_part('template-parts/hours'); ?>
  <?php endif; ?>
<?php endif; ?>
