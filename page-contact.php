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
    <div class="c-sec-heading p-contact__heading">
      <h2 class="c-sec-heading__en">CONTACT</h2>
      <p class="c-sec-heading__ja">お問い合わせ</p>
    </div><!-- /.c-sec-heading -->

    <div class="p-contact-step">
      <ul class="p-contact-step__list">
        <li class="p-contact-step__item">
          <div class="p-contact-step__circle input">入力</div>
          <p class="p-contact-step__text">項目への入力を<br class="u-sp">お願いします</p>
        </li>
        <li class="p-contact-step__item">
          <div class="p-contact-step__circle disable">確認</div>
          <p class="p-contact-step__text disable">入力内容の確認を<br class="u-sp">お願いします</p>
        </li>
        <li class="p-contact-step__item">
          <div class="p-contact-step__circle disable">完了</div>
          <p class="p-contact-step__text disable">お問い合わせ<br class="u-sp">ありがとうございました</p>
        </li>
      </ul>
    </div><!-- /.p-contact-step -->

    <div class="p-contact-contents">
      <div class="p-contact-contents__inner l-inner">
        <?php the_content(); ?>
      </div>
    </div><!-- /.p-contact-contents -->
  </div><!-- /.p-contact__wrap -->

</div><!-- /.l-wrapper -->

<?php get_footer(); ?>