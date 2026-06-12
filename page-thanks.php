<?php get_header(); ?>

<div class="p-contact l-wrapper">

  <div class="l-page-head">
    <div class="l-page-head__bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/privacy/bg_head-pc.png" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/privacy/bg_head-sp.png" alt="事業">
      </picture>
    </div><!-- /.l-page-head__bg -->
    <div class="l-page-head__texts">
      <h1 class="l-page-head__title">
        <span class="l-page-head__ja">お問い合わせ</span>
        <span class="l-page-head__en">Contact</span>
      </h1>
    </div><!-- /.l-page-head__texts -->
  </div><!-- /.l-page-head -->

  <?php echo get_template_part('template-parts/breadcrumb'); ?>

  <div class="p-contact__wrap">
    <p class="p-contact-thanks__title">お問い合わせありがとうございます</p>

    <div class="p-contact-step">
      <ul class="p-contact-step__list">
        <li class="p-contact-step__item">
          <div class="p-contact-step__circle input">入力</div>
          <p class="p-contact-step__text disable">項目への入力を<br class="u-sp">お願いします</p>
        </li>
        <li class="p-contact-step__item">
          <div class="p-contact-step__circle input">確認</div>
          <p class="p-contact-step__text disable">入力内容の確認を<br class="u-sp">お願いします</p>
        </li>
        <li class="p-contact-step__item">
          <div class="p-contact-step__circle input">完了</div>
          <p class="p-contact-step__text">お問い合わせ<br class="u-sp">ありがとうござました</p>
        </li>
      </ul>
    </div><!-- /.p-contact-step -->

    <div class="p-contact-contents">
      <div class="p-contact-contents__inner l-inner">
        <p class="p-contact-thanks__text">この度はお問い合わせありがとうございます。<br><br>後ほどスタッフよりメールにてご連絡いたします。</p>
        <div class="p-contact-thanks__prev">
          <a href="<?php echo esc_url(home_url('/')); ?>">トップページへ戻る</a>
        </div>
      </div>
    </div><!-- /.p-contact-contents -->

  </div><!-- /.p-contact__wrap -->

</div><!-- /.l-wrapper -->

<?php get_footer(); ?>