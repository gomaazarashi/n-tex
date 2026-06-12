<?php
// 管理画面用 ヘッダー空白解除
add_filter( 'show_admin_bar', '__return_false' );

/**
 * 管理画面下部のバージョン番号を削除
 *
 * @return void
 */
function remove_footer_version() {
  remove_filter('update_footer', 'core_update_footer');
}
add_action('admin_menu', 'remove_footer_version');

/**
 * 不要なウィジェットを削除
 *
 * @return void
 */
function remove_dashboard_widget() {
  remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); // 概要
  remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); // アクティビティ
  remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // クイックドラフト
  remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); // WordPress新着情報
}
add_action('wp_dashboard_setup', 'remove_dashboard_widget' );

/**
 * アイキャッチにテキスト挿入
 *
 * @param [type] $content
 * @return void
 */
function add_featured_image_message( $content ) {
  return $content .= '<p>480px×260px以上の画像を使用してください</p>';
};
add_filter( 'admin_post_thumbnail_html', 'add_featured_image_message');