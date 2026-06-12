<!doctype html>
<html <?php language_attributes(); ?>>

<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NLTLHRF3');</script>
<!-- End Google Tag Manager -->


  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php
    if(get_field('seo_noindex')) {
      echo '<meta name="robots" content="noindex">';
    }
    $site_name = get_bloginfo('name');
    $title = '';
    $desc = get_bloginfo('description');
    $og_img_url = get_template_directory_uri() . "/img/ogp.jpg";
    $seo_title = get_field('seo_title');
    $seo_desc = get_field('seo_desc');
    $seo_keywords = get_field('seo_keywords');

    if(is_front_page()) {
      if(get_option('show_on_front') == 'page' && $seo_title) {
        $title = $seo_title;
      } else {
        $title = $site_name;
      }
      if(get_option('show_on_front') == 'page' && $seo_desc) {
        $desc = $seo_desc;
      }
    } elseif(is_page() || is_single()) {
      if($seo_title) {
        $title = $seo_title;
      } else {
        $title = get_the_title($post->ID).' | '.get_bloginfo('name');
      }
      if($seo_desc) {
        $desc = $seo_desc;
      } elseif($post->content) {
        $content = wp_strip_all_tags(get_the_content());
        $content= mb_substr($content, 0, 120, 'UTF-8');
        $desc = $content;
      }
    } elseif(is_archive() || is_search()) {
      $archive_title = strip_tags(get_the_archive_title());
      $title = $archive_title.'の一覧 | '.get_bloginfo('name');
    }

    // ogpデフォルトはTOPのアイキャッチ画像を使用
    $front_page_id = get_option('page_on_front');
    if(has_post_thumbnail($post)) {
      $og_img_url = get_the_post_thumbnail_url($post->ID, 'ogimg');
    } elseif(has_post_thumbnail($front_page_id)) {
      $og_img_url = wp_get_attachment_image_url($front_page_id, 'ogimg');
    }
  ?>
  <title><?php echo $title ?></title>
  <meta name="description" content="<?php echo $desc; ?>">
  <?php if(get_option('show_on_front') == 'page' && $seo_keywords){ ?>
  <meta name="keywords" content="<?php echo $seo_keywords; ?>">
  <?php } ?>
  <!-- og設定 -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $desc; ?>">
  <meta property="og:url" content="<?php echo  (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];?>">
  <?php if($og_img_url){ ?><meta property="og:image" content="<?php echo $og_img_url; ?>"><?php } ?>
  <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
  <!-- twitter og設定 -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="<?php echo $title; ?>">
  <meta name="twitter:description" content="<?php echo $desc; ?>">
  <?php if($og_img_url){ ?><meta name="twitter:image" content="<?php echo $og_img_url; ?>"><?php } ?>
  <!-- favicon設定 -->
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon.png">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLTLHRF3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <header id="header" class="l-header">
    <div class="l-header__inner">
      <div class="l-header__titles">
        <?php
          if(is_front_page() || is_home()):
            echo '<h1 class="l-header__logo">';
          else:
            echo '<div class="l-header__logo">';
          endif;
        ?>
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="エヌテックス">
          </a>
        <?php
          if(is_front_page() || is_home()):
            echo '</h1>';
          else:
            echo '</div>';
          endif;
        ?>
      </div><!-- /.l-header__titles -->
      <div class="l-header__contents u-lt-m">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'pc-menu',
          'container' => 'nav',
          'container_class' => 'l-header__nav',
          'menu_class' => 'l-header__list',
        ));
        ?>
        <div class="l-header__recruit">
          <a href="<?php echo esc_url(home_url('/recruit/')); ?>"><span>採用情報</span></a>
        </div>
        <div class="l-header__lang">
          <?php echo do_shortcode('[gtranslate]'); ?>
        </div>
      </div><!-- /.l-header__contents -->
      <button type="button" class="l-hamburger u-lt-l">
        <span class="l-hamburger__line"><span class="visually-hidden">メニューを開閉</span></span>
      </button>
    </div><!-- /.l-header__inner -->
    <div class="l-header__line"></div>
  </header><!-- /.l-header -->

  <div class="l-drawer u-lt-l">
    <div class="l-drawer__inner">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'sp-menu',
          'container' => 'nav',
          'container_class' => 'l-drawer__nav',
          'menu_class' => 'l-drawer__list',
          'link_before' => '<span>',
          'link_after' => '</span>',
        ));
        ?>
        <ul class="l-drawer__sub">
          <li>
            <a href="<?php echo esc_url(home_url('/privacy/')); ?>">プライバシーポリシー</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/company/')); ?>">会社概要</a>
        </ul>
        <div class="l-drawer__lang">
          <?php echo do_shortcode('[gtranslate]'); ?>
        </div>
    </div>
  </div><!-- /.l-drawer -->