<?php
// リサイズされる画像の画質を100%にする
add_filter('jpeg_quality', function($arg){return 100;});
// サムネイルの設定
add_theme_support('post-thumbnails'); // サムネイルを有効化
add_image_size('pmAndBlog', 480, 260,true);
add_image_size('ogimg', 1200, 630, true);
// デフォルトの画像サイズを生成しない
add_filter('intermediate_image_sizes_advanced', 'remove_image_sizes');
// css,js読み込み
add_action('wp_enqueue_scripts', 'soune_scripts');

//ダッシュボードの設定
include_once('inc/setting-dashboard.php');

//カスタム投稿の設定
//include_once('inc/setting-custom-post.php');

//自作関数
include_once('inc/setting-wp-func.php');

/**
 * デフォルトの画像サイズを生成しない
 *
 * @param [type] $sizes
 * @return void
 */
function remove_image_sizes($sizes) {
  unset( $sizes['thumbnail']);
  unset( $sizes['medium']);
  unset( $sizes['large']);
  return $sizes;
}

/**
 * css,js読み込み
 *
 * @return void
 */
function soune_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.1.1' );
  wp_enqueue_style('add-font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Zen+Antique&display=swap', array(), null);
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array('style'), '8.0.0');
  wp_enqueue_style( 'soune-style', get_template_directory_uri().'/css/style.css', array('style'), '1.1.1' );
  wp_deregister_script('jquery'); // WordPressで用意されているjQueryを読み込まない記述
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0');
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.0.0', true);
  wp_enqueue_script( 'soune-js', get_template_directory_uri() . '/js/main.js', array(), filemtime( get_template_directory() . '/js/main.js' ), true );
}

// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

// サンクスページをインデックスしない
function add_noindex_to_thankyou_page() {
  if (is_page('thanks')) {
    echo '<meta name="robots" content="noindex, follow" />';
  }
}
add_action('wp_head', 'add_noindex_to_thankyou_page');

// メニュー追加
add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

add_action( 'after_setup_theme', function(){
  register_nav_menus( array(
  'sp-menu' => 'SPメニュー',
  'pc-menu' => 'PCメニュー',
  'footer-menu' => 'フッターメニュー',
  ) );
} );

// 投稿のみスラッグをID
function custom_auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
  if ( $post_type == 'post' ) {
    $slug = $post_ID;
  }
  return $slug;
}
add_filter( 'wp_unique_post_slug', 'custom_auto_post_slug', 10, 4 );

function add_cache_control_for_thanks_page() {
  if ( is_page('thanks') ) {
    echo '<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">' . "\n";
    echo '<meta http-equiv="Pragma" content="no-cache">' . "\n";
    echo '<meta http-equiv="Expires" content="0">' . "\n";
  }
}
add_action('wp_head', 'add_cache_control_for_thanks_page');

function add_cache_control_for_contact_page() {
  if ( is_page('contact') ) {
    echo '<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">' . "\n";
    echo '<meta http-equiv="Pragma" content="no-cache">' . "\n";
    echo '<meta http-equiv="Expires" content="0">' . "\n";
  }
}
add_action('wp_head', 'add_cache_control_for_contact_page');

add_action('wp_footer', function () {
  if (is_page('thanks')) {
    ?>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        history.replaceState(null, null, location.href);
        window.addEventListener('popstate', function () {
          window.location.href = '/contact/';
        });
      });
    </script>
    <?php
  }

  if (is_page('contact')) {
    ?>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector('form.wpcf7-form');
        if (form) {
          form.reset();
        }
      });
    </script>
    <?php
  }
});

// custom.css を読み込む
function ntex_enqueue_custom_styles() {
    wp_enqueue_style(
        'ntex-custom',
        get_template_directory_uri() . '/css/custom.css',
        array('soune-style'),
        filemtime(get_template_directory() . '/css/custom.css')
    );
}
add_action('wp_enqueue_scripts', 'ntex_enqueue_custom_styles', 999);
