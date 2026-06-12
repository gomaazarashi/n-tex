<?php get_header(); ?>

<div class="p-product l-wrapper">

  <div class="l-page-head">
    <div class="l-page-head__bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/product/bg_head-pc.png" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/product/bg_head-sp.png" alt="事業">
      </picture>
    </div><!-- /.l-page-head__bg -->
    <div class="l-page-head__texts">
      <h1 class="l-page-head__title">
        <span class="l-page-head__ja">製品紹介</span>
        <span class="l-page-head__en">Product introduction</span>
      </h1>
    </div><!-- /.l-page-head__texts -->
  </div><!-- /.l-page-head -->

  <?php echo get_template_part('template-parts/breadcrumb'); ?>

  <div class="p-product-link">
    <div class="p-product-link__inner l-inner">
      <ul class="p-product-link__list">
        <li class="p-product-link__item">
          <a href="#ecorica">
            <div class="p-product-link__img ecorika">
              <img src="<?php echo get_template_directory_uri(); ?>/img/ecorica_logo02.png" alt="エコリカ">
            </div>
            <p class="p-product-link__lead">リサイクルインク<br class="u-lt-l">カートリッジ事業</p>
            <p class="p-product-link__title ecorika">ecorica　エコリカ</p>
            <div class="p-product-link__arrow">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon_arrow_dawn-bk.svg" alt="矢印">
            </div>
          </a>
        </li>
        <li class="p-product-link__item">
          <a href="#plaisir">
            <div class="p-product-link__img plaisir">
              <img src="<?php echo get_template_directory_uri(); ?>/img/plaisir_logo.png" alt="プレジール">
            </div>
            <p class="p-product-link__lead">互換インク<br class="u-lt-l">カートリッジ事業</p>
            <p class="p-product-link__title plaisir">Plaisir　プレジール</p>
            <div class="p-product-link__arrow">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon_arrow_dawn-bk.svg" alt="矢印">
            </div>
          </a>
        </li>
        <li class="p-product-link__item">
          <a href="#rinoka">
            <div class="p-product-link__img rinoka">
              <img src="<?php echo get_template_directory_uri(); ?>/img/rinoka_logo02.png" alt="Rinoka">
            </div>
            <p class="p-product-link__lead">アロマ商品生産販売事業</p>
            <p class="p-product-link__title rinoka">Rinoka　梨之香</p>
            <div class="p-product-link__arrow">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon_arrow_dawn-bk.svg" alt="矢印">
            </div>
          </a>
        </li>
      </ul>
    </div><!-- /.p-product-link__inner -->
  </div><!-- /.p-product-link -->

  <section id="ecorica" class="p-product-ecorica">
    <div class="p-product-ecorica__inner l-inner">
      <div class="p-product-ecorica__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ecorica_logo02.png" alt="エコリカ">
      </div>
      <p class="p-product-ecorica__lead">使用済み純正カートリッジを回収しリユースしている環境にやさしいサステナブル製品です。<br>信頼の証　「エコマーク」　取得。環境破壊物質、人体に影響のある物質は入っていません。</p>
      <div class="p-product-ecorica__items product-ecorica-swiper">
        <ul class="p-product-ecorica__list swiper-wrapper">
          <li class="p-product-ecorica-item swiper-slide">
            <div class="p-product-ecorica-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/ecorica_img01.png" alt="ECI-C331-6P">
            </div>
            <p class="p-product-ecorica-item__text">ECI-C331-6P</p>
          </li>
          <li class="p-product-ecorica-item swiper-slide">
            <div class="p-product-ecorica-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/ecorica_img02.png" alt="ECI-C365B／ECI-C366C">
            </div>
            <p class="p-product-ecorica-item__text">ECI-C365B／ECI-C366C</p>
          </li>
          <li class="p-product-ecorica-item swiper-slide">
            <div class="p-product-ecorica-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/ecorica_img03.png" alt="ECI-EKAM-6P">
            </div>
            <p class="p-product-ecorica-item__text">ECI-EKAM-6P</p>
          </li>
          <li class="p-product-ecorica-item swiper-slide">
            <div class="p-product-ecorica-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/ecorica_img04.png" alt="ECI-EMUG-4P">
            </div>
            <p class="p-product-ecorica-item__text">ECI-EMUG-4P</p>
          </li>
          <li class="p-product-ecorica-item swiper-slide">
            <div class="p-product-ecorica-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/ecorica_img05.png" alt="ECI-BR411-4P">
            </div>
            <p class="p-product-ecorica-item__text">ECI-BR411-4P</p>
          </li>
          <li class="p-product-ecorica-item swiper-slide">
            <div class="p-product-ecorica-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/ecorica_img06.png" alt="ECI-BR412-4P">
            </div>
            <p class="p-product-ecorica-item__text">ECI-BR412-4P</p>
          </li>
          <li class="p-product-ecorica-item swiper-slide">
            <div class="p-product-ecorica-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/ecorica_img07.png" alt="ECI-RC43B">
            </div>
            <p class="p-product-ecorica-item__text">ECI-RC43B</p>
          </li>
          <li class="p-product-ecorica-item swiper-slide">
            <div class="p-product-ecorica-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/ecorica_img08.png" alt="ECI-EKEN-MB / ECI-ETAK（各4色）">
            </div>
            <p class="p-product-ecorica-item__text">ECI-EKEN-MB / ECI-ETAK（各4色）</p>
          </li>
        </ul>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div><!-- /.p-product-ecorica__items -->
      <div class="p-product-ecorica-bnr">
        <a href="https://www.ecorica.jp/"target="_blank" rel="noopener noreferrer">
          <div class="p-product-ecorica-bnr__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/product/ecorica_bnr.png" alt="エコリカ">
          </div>
          <p class="p-product-ecorica-bnr__text">詳しくは株式会社エコリカのホームページでご覧になれます。<span></span></p>
        </a>
      </div><!-- /.p-product-ecorica-bnr -->
    </div><!-- /.p-product-ecorica__inner -->
  </section><!-- /.p-product-ecorica -->

  <section id="plaisir" class="p-product-plaisir">
    <div class="p-product-plaisir__inner l-inner">
      <div class="p-product-plaisir__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/plaisir_logo.png" alt="プレジール">
      </div>
      <p class="p-product-plaisir__title">「プレジールは大量印刷の味方です」</p>
      <p class="p-product-plaisir__lead">インク残量表示に完全対応しており純正品と同様に使用できる互換インクカートリッジです。<br>幅広いラインナップを取り揃え、携帯電話からも繋がるフリーダイヤルでサポートも充実。</p>
      <div class="p-product-plaisir__items product-plaisir-swiper">
        <ul class="p-product-plaisir__list swiper-wrapper">
          <li class="p-product-plaisir-item swiper-slide">
            <div class="p-product-plaisir-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/plaisir_img01.png" alt="PLE-C331XL-6P">
            </div>
            <p class="p-product-plaisir-item__text">PLE-C331XL-6P</p>
          </li>
          <li class="p-product-plaisir-item swiper-slide">
            <div class="p-product-plaisir-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/plaisir_img02.png" alt="PLE-C381XL-6P">
            </div>
            <p class="p-product-plaisir-item__text">PLE-C381XL-6P</p>
          </li>
          <li class="p-product-plaisir-item swiper-slide">
            <div class="p-product-plaisir-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/plaisir_img03.png" alt="PLE-EITH-6P">
            </div>
            <p class="p-product-plaisir-item__text">PLE-EITH-6P</p>
          </li>
          <li class="p-product-plaisir-item swiper-slide">
            <div class="p-product-plaisir-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/plaisir_img04.png" alt="PLE-EKUIL-6P">
            </div>
            <p class="p-product-plaisir-item__text">PLE-EKUIL-6P</p>
          </li>
          <li class="p-product-plaisir-item swiper-slide">
            <div class="p-product-plaisir-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/plaisir_img05.png" alt="PLE-BR3111-4P">
            </div>
            <p class="p-product-plaisir-item__text">PLE-BR3111-4P</p>
          </li>
          <li class="p-product-plaisir-item swiper-slide">
            <div class="p-product-plaisir-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/plaisir_img06.png" alt="BPL-BR3119-4P">
            </div>
            <p class="p-product-plaisir-item__text">BPL-BR3119-4P</p>
          </li>
          <li class="p-product-plaisir-item swiper-slide">
            <div class="p-product-plaisir-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/plaisir_img07.png" alt="PLE-RC42HB">
            </div>
            <p class="p-product-plaisir-item__text">PLE-RC42HB</p>
          </li>
          <li class="p-product-plaisir-item swiper-slide">
            <div class="p-product-plaisir-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/plaisir_img08.png" alt="PLE-RC43B">
            </div>
            <p class="p-product-plaisir-item__text">PLE-RC43B</p>
          </li>
        </ul>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div><!-- /.p-product-plaisir__items -->
      <div class="p-product-plaisir-bnr">
        <a href="https://www.e-plaisir.co.jp/"target="_blank" rel="noopener noreferrer">
          <div class="p-product-plaisir-bnr__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/product/plaisir_bnr.png" alt="プレジール">
          </div>
          <p class="p-product-plaisir-bnr__text">詳しくは株式会社プレジールのホームページでご覧になれます。<span></span></p>
        </a>
      </div><!-- /.p-product-plaisir-bnr -->
    </div><!-- /.p-product-plaisir__inner -->
  </section><!-- /.p-product-plaisir -->

  <section id="rinoka" class="p-product-rinoka">
    <div class="p-product-rinoka__inner l-inner">
      <div class="p-product-rinoka__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/rinoka_logo02.png" alt="エコリカ">
      </div>
      <p class="p-product-rinoka__lead">梨之香は、山梨県富士川町で採れる自然素材（実生の柚子の廃棄皮、耕作放棄地を再生し育てたハーブ、間伐した樹木の林地残材）を<br>使用したエッセンシャルオイルとアロマウォーター等を通じて、日々の生活に彩りや刺激、癒しをお届けします。
</p>
      <div class="p-product-rinoka__items product-rinoka-swiper">
        <ul class="p-product-rinoka__list swiper-wrapper">
          <li class="p-product-rinoka-item swiper-slide">
            <div class="p-product-rinoka-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/rinoka_img01.png" alt="精油（エッセンシャルオイル）">
            </div>
            <p class="p-product-rinoka-item__title">精油<br class="u-lt-l">（エッセンシャルオイル）</p>
            <p class="p-product-rinoka-item__text">梨之香の精油は、実生の柚子の廃棄される皮、間伐材の枝葉、耕作放棄地を耕して育てたハーブ、を原料として、地元の湧き水を使って丁寧に蒸留しています。爽やかでまろやかな香りの精油をお楽しみください。</p>
          </li>
          <li class="p-product-rinoka-item swiper-slide">
            <div class="p-product-rinoka-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/rinoka_img02.png" alt="芳香蒸留水（アロマウォーター）">
            </div>
            <p class="p-product-rinoka-item__title">芳香蒸留水<br class="u-lt-l">（アロマウォーター）</p>
            <p class="p-product-rinoka-item__text">梨之香の芳香蒸留水は精油を生産するときに分離されたウォーター部分をエイジング（熟成）し、香りの強い部分のみをロット化、UVによる殺菌処理を行っています。</p>
          </li>
          <li class="p-product-rinoka-item swiper-slide">
            <div class="p-product-rinoka-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/rinoka_img03.png" alt="アロマグッズ">
            </div>
            <p class="p-product-rinoka-item__title">アロマグッズ</p>
            <p class="p-product-rinoka-item__text">アロマ関連グッズは、山梨県内の伝統工芸の技術を有する会社等、地元企業のご協力を頂き開発・生産を行うものや、精油生産の副産物の残渣を活用し、開発を行っています。</p>
          </li>
          <li class="p-product-rinoka-item swiper-slide">
            <div class="p-product-rinoka-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/product/rinoka_img04.png" alt="蒸留受託">
            </div>
            <p class="p-product-rinoka-item__title">蒸留受託</p>
            <p class="p-product-rinoka-item__text">香Lab.では、水蒸気蒸留法による精油および蒸留水の蒸留の請負を行っています。柑橘類、樹木、ハーブ等の蒸留をご希望の方はお問い合わせフォームからご連絡ください。</p>
          </li>
        </ul>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div><!-- /.p-product-rinoka__items -->
      <div class="p-product-rinoka-bnr">
         <a href="https://www.kaorilabo.jp/"target="_blank" rel="noopener noreferrer">
          <div class="p-product-rinoka-bnr__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/product/rinoka_bnr.png" alt="rinoka">
          </div>
          <p class="p-product-rinoka-bnr__text">詳しくはRinokaのホームページをご覧ください。<span></span></p>
        </a>
      </div><!-- /.p-product-rinoka-bnr -->
    </div><!-- /.p-product-rinoka__inner -->
  </section><!-- /.p-product-rinoka -->

</div><!-- /.l-wrapper -->

<?php get_footer(); ?>