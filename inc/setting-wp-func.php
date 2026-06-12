<?php
/* -------------------------------------------------------------------
自作関数
--------------------------------------------------------------------*/

/**
 * ループ内カテゴリーの表示
 *
 * @return void
 */
function loop_cat() {
  global $post;
  $categories = get_the_category($post->ID);
  $loop_cat_show = '';

  if($categories) {
    $cat = $categories[0]; //複数登録されている場合、一番最初のカテゴリー情報を取得
    $catName = $cat->cat_name;
    $catParent = $cat->parent;
    $thisCat = $cat->cat_ID;
    $cat_slug  = $cat->category_nicename;

    $count = 1;
      foreach( $categories as $category ){
      if($count == 1) {
        if($catParent == 0) { //一番上の親カテゴリーなら
          $loop_cat_show .= '<a href="'.get_category_link($category).'" class="cat cat--'.$cat_slug.'">'.$catName.'</a>';
        } else {
          $ancestor = array_pop(get_ancestors( $thisCat, 'category' ));
          $loop_cat_show .= '<a href="'.get_category_link($ancestor).'" class="cat cat--'.$cat_slug.'">'.get_cat_name($ancestor).'</a>';
        }
        $count++;
      }
    }
  }
  return $loop_cat_show;
}