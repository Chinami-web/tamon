<?php
// include_once 'template-parts/simplify.php';

/**
 * テーマのセットアップ
 **/
function my_setup()
{
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');

/**
 * CSSとJavaScriptの読み込み
 */
function my_script_init()
{


  if (is_home() || is_front_page() || is_page('about')) {
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/vendor/swiper.min.css', array(), '1.0.3', 'all');
  }
  if (is_page('exam') || is_page('gastroscopy') || is_page('colonoscopy')) {
    wp_enqueue_style('scroll', get_template_directory_uri() . '/assets/css/vendor/scroll-hint.css', array(), '1.0.3', 'all');
    wp_enqueue_script('scroll', get_template_directory_uri() . '/assets/js/vendor/scroll-hint.min.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('scrollable', get_template_directory_uri() . '/assets/js/scroll.min.js', array('jquery'), '1.0.1', true);
  }
  wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.76', 'all');

  if (is_page_template('page-common.php')) {
    wp_enqueue_style('page-common', get_template_directory_uri() . '/assets/css/page-common.css', array(), '1.0.0', 'all');
  }
  if (is_page_template('page-home.php') || is_post_type_archive('faq')) {
    wp_enqueue_style('faq', get_template_directory_uri() . '/assets/css/faq.css', array(), '1.0.0', 'all');
    wp_enqueue_script('faq', get_template_directory_uri() . '/assets/js/faq.js', array('jquery'), '1.0.0', true);
  }

  wp_enqueue_script('apps', get_template_directory_uri() . '/assets/js/vendor/app.js', array('jquery'), '1.0.0', true);
  if (is_home() || is_front_page() || is_page('about')) {
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/vendor/swiper.min.js', array('jquery'), '1.0.0', true);
  }
  wp_enqueue_script('all-common', get_template_directory_uri() . '/assets/js/common.min.js', array('jquery'), '1.0.8', true);
  if (is_home() || is_front_page()) {
    wp_enqueue_script('top', get_template_directory_uri() . '/assets/js/top.js', array('jquery'), '1.0.1', true);
  }

  if (is_page('about')) {
    wp_enqueue_script('about', get_template_directory_uri() . '/assets/js/about.min.js', array('jquery'), '1.0.1', true);
  }
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * google font挿入
 */
/*add_action('wp_head',function(){
  ?>
  <link rel="preconnect" href="https://fonts.googleapis.com" />

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"  rel="stylesheet" />
  <?php
  });"/




/**
 * スラッグ取得
 */
function get_page_name()
{
    global $post;
    $slug = '';

    if (is_404()) {
        $slug = 'notFound';
    } else if (is_post_type_archive('faq')) {
        $slug = 'page-faq';
    } else if (is_archive() || is_single()) {
        $slug = 'info';
    } else if (is_home() || is_front_page()) {
        $slug = 'top';
    } else if (is_page() && $post) {
        if ($post->post_parent) {
            $parent = get_post($post->post_parent);
            if ($parent && in_array($parent->post_name, ['general', 'gastroenterology', 'liver'])) {
                $slug = 'lower-template';
            } else {
                $slug = $post->post_name;
            }
        } else {
            $slug = $post->post_name;
        }
    }

    return $slug;
}


/**
 * ページサブタイトル取得
 */
function get_page_desc()
{
  global $post;
  $desc = "";
  if (is_404()) {
    $desc = "404";
  } else if (is_post_type_archive('faq')) {
    $desc = "FAQ";
  } else if (is_archive() || is_single()) {
    $desc = "News & Column";
  } else if (is_page('about')) {
    $desc = "Introduction of our hospital";
  } else if (is_page('general') || is_page('gastroenterology') || is_page('liver') || is_page('gastroscopy') || is_page('colonoscopy')) {
    $desc = "診療案内";
  } else if (is_page('reserve')) {
    $desc = "About reception / reservation";
  } else if (is_page('exam')) {
    $desc = "About various examinations";
  } else if (is_page() && $post->post_parent && get_post($post->post_parent)->post_name === "general") {
    $desc = "一般内科";
  } else if (is_page() && $post->post_parent && get_post($post->post_parent)->post_name === "gastroenterology") {
    $desc = "消化器内科";
  } else if (is_page() && $post->post_parent && get_post($post->post_parent)->post_name === "liver") {
    $desc = "肝臓内科";
  }
  return $desc;
}


/*/**
 * デフォルトjQueryの削除
 */
function adjust_jquery_files()
{
  // WordPress本体のjquery.jsを読み込まない
  wp_deregister_script('jquery');

  // jQueryをキューにセット
  wp_register_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.5.1.js', null, null, true); // 修正箇所
  // jQueryの読み込み
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'adjust_jquery_files');

/**
 * テーマフォルダまでのURL
 */
function theme_shortcode()
{
  return esc_url(get_template_directory_uri());
}
add_shortcode('theme_url', 'theme_shortcode');


/**
 * ホームURL
 */
function home_shortcode()
{
  return esc_url(home_url('/'));
}
add_shortcode('home_url', 'home_shortcode');

// アイキャッチ画像を追加
add_theme_support('post-thumbnails');


// プレビュー
function add_block_editor_styles()
{
  wp_enqueue_style('editor-styles', get_stylesheet_directory_uri() . '/assets/css/page-common-editor.css');
}
add_action('enqueue_block_editor_assets', 'add_block_editor_styles');



function add_custom_class_to_specific_template_editor() {
  global $pagenow, $post;

  // 現在の画面が編集画面であるか確認
  if ( $pagenow == 'post.php' && isset($post) ) {
      // 該当のページが 'page-common.php' テンプレートを使用しているか確認
      if ( get_page_template_slug( $post->ID ) === 'page-common.php' ) {
          ?>
          <script type="text/javascript">
              document.addEventListener("DOMContentLoaded", function() {
                  // エディターのDOM構造が生成されるまで500ミリ秒ごとにチェック
                  const intervalId = setInterval(function() {
                      const editorWrapper = document.querySelector('.editor-styles-wrapper.block-editor-writing-flow');
                      if (editorWrapper) {
                          editorWrapper.classList.add('page-common-editor'); // 追加したいクラス名
                          clearInterval(intervalId); // クラスが追加されたらsetIntervalを停止
                      }
                  }, 500);
              });
          </script>
          <?php
      }
  }
}
add_action('admin_footer', 'add_custom_class_to_specific_template_editor');

// カスタム投稿タイプのページネーション用リライトルールを追加
function custom_rewrite_rules() {
    add_rewrite_rule(
        'faq/page/([0-9]+)/?$',
        'index.php?post_type=faq&paged=$matches[1]',
        'top'
    );
}
add_action('init', 'custom_rewrite_rules');

/**
 * Gutenbergエディタ用のスクリプトとスタイルの読み込み
 */
function enqueue_block_editor_assets() {
    // lodashの読み込み
    wp_enqueue_script(
        'lodash',
        'https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js',
        array(),
        '4.17.21'
    );

    // エディタ用のスタイル
    wp_enqueue_style(
        'editor-styles',
        get_stylesheet_directory_uri() . '/assets/css/page-common-editor.css',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/css/page-common-editor.css')
    );

    // カスタムブロック用のスクリプト
    wp_enqueue_script(
        'custom-blocks',
        get_template_directory_uri() . '/assets/js/blocks.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'lodash'),
        '1.0.89.1'
    );

    // Gutenbergフォーマット用のスクリプト
    wp_enqueue_script(
        'gutenberg-formats',
        get_template_directory_uri() . '/assets/js/gutenberg-formats.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'lodash'),
        '1.0.89.1'
    );
}
add_action('enqueue_block_editor_assets', 'enqueue_block_editor_assets');



