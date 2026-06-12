<?php get_header(); ?>

<div class="p-404 l-wrapper">

  <div class="l-page-head">
    <div class="l-page-head__bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/privacy/bg_head-pc.png" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/privacy/bg_head-sp.png" alt="事業">
      </picture>
    </div><!-- /.l-page-head__bg -->
    <div class="l-page-head__texts">
      <h1 class="l-page-head__title">
        <span class="l-page-head__ja">404</span>
        <span class="l-page-head__en">Page not found</span>
      </h1>
    </div><!-- /.l-page-head__texts -->
  </div><!-- /.l-page-head -->

  <?php echo get_template_part('template-parts/breadcrumb'); ?>

    <div class="p-404-contents">
      <div class="p-404-contents__inner l-inner">
        <p class="p-404__text">ページが見つかりません。</p>
        <div class="p-404__prev">
          <a href="<?php echo esc_url(home_url('/')); ?>">トップページへ戻る</a>
        </div>
      </div>
    </div><!-- /.p-404-contents -->

</div><!-- /.l-wrapper -->

<?php get_footer(); ?>