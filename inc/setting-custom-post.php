<?php
/* ----------------------------------------------------------------------------------
カスタム投稿設定
---------------------------------------------------------------------------------- */

/**
 * カスタム投稿NEWS作成
 *
 * @return void
 */
function create_post_type() {
  register_post_type('news',
    array(
      'label' => 'NEWS',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => true,
      'query_var' => false,
      // ここで好きなスラッグにすることで接続できる
      // with_front これをfalseにすることで自由なリンク先にすることが出来る
      'rewrite' => array( "slug" => "news", "with_front" => false ),
      'has_archive' => true,
      'exclude_from_search' => false,
      'menu_position' => 2,
      'menu_icon' => 'dashicons-networking',
      'supports' => array(
        'title',
        'editor',
        'page-attributes'
      ),
      'taxonomies' => array('news_tax'),
      'labels' => array (
        'name' => 'NEWS',
        'all_items' => 'NEWS一覧'
      )
    )
  );

  register_taxonomy (
    'news_tax',
    'news',
    array(
      'hierarchical' => true,
      'label' => 'カテゴリー',
      'show_ui' => true,
      'query_var' => true,
      // ここが自由用(投稿typeと同じ名前にする)
      // with_front これをfalseにすることで自由なリンク先にすることが出来る
      'rewrite' => array('slug' => 'news',"with_front" => false),
      'singular_label' => 'カテゴリー'
    )
  );
}
add_action( 'init', 'create_post_type' );

/**
 * カスタム投稿のURLをIDに変更（変更後は管理画面→パーマリンク設定で保存ボタンを押す）
 *
 * @param [type] $link
 * @param [type] $post
 * @return void
 */
function my_post_type_link($link, $post) {
  if($post->post_type === 'news') {
    $link = home_url('/news/').$post->ID;
  }
  return $link;
}
add_filter('post_type_link', 'my_post_type_link', 1, 2);

/**
 * リライトルールを追加してIDでのURLをカスタム投稿のURLとして利用可能にする
 *
 * @param [type] $rules
 * @return void
 */
function my_rewrite_rules_array($rules) {
  $new_rules = array(
    'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
  );
  return $new_rules + $rules;
}
add_filter('rewrite_rules_array', 'my_rewrite_rules_array');