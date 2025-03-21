<?php
/*
Template Name: 汎用テンプレート
*/
?>
<?php get_header(); ?>


<main id="js-topContents" class="page-common">
  <div class="med">
    <div class="inner">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          $content = get_the_content();
          $content = apply_filters('the_content', $content);
          $content = preg_replace_callback('/<h3[^>]*>(.*?)<\/h3>/i', function($matches) {
            static $counter = 1;
            $id = sprintf('%02d', $counter++);
            return "<h3 id=\"$id\">{$matches[1]}</h3>";
          }, $content);
          $content = preg_replace_callback('/<ul class="([^"]*\bjump\b[^"]*\btype\b[^"]*)">(.*?)<\/ul>/s', function($matches) {
            $ul_classes = $matches[1];
            $li_content = preg_replace_callback('/<li>(.*?)<\/li>/i', function($li_matches) {
              static $counter = 1;
              $href = sprintf('#%02d', $counter++);
              return "<li class=\"type__item\"><a class=\"js-jump\" href= \"$href\">{$li_matches[1]}</a></li>";
            }, $matches[2]);
            return "<ul class=\"$ul_classes\">$li_content</ul>";
          }, $content);

          echo $content;
        endwhile;
      endif;
      ?>
    </div><!-- /inner -->
  </div><!-- /med -->
</main>

<?php get_footer(); ?>
