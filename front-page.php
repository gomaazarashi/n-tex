<?php get_header(); ?>
<div class="p-home l-wrapper">

  <div class="p-home-mv">
    <div class="p-home-mv__mov">
      <video src="<?php echo get_template_directory_uri(); ?>/movie/mov_kv.mp4" autoplay muted loop playsinline></video>
    </div>
    <div class="p-home-mv__text-wrap">
      <p class="p-home-mv__text">挑戦する<br>&emsp;技術へ<br>&emsp;&emsp;人へ<br>&emsp;&emsp;&emsp;未来へ。</p>
    </div>
  </div><!-- /.p-home-mv -->

  <section class="p-home-about">
    <div class="p-home-about__inner">
      <div class="p-home-about__contents l-inner">
        <?php echo get_template_part('template-parts/breadcrumb'); ?>
        <div class="c-sec-heading p-home-about__heading">
          <h2 class="c-sec-heading__en">ABOUT NTex</h2>
          <p class="c-sec-heading__ja">私たちについて</p>
        </div><!-- /.c-sec-heading -->
        <p class="p-home-about__lead">富士の裾野からリユース・地域密着を大切に、<br class="u-pc">アットホームな社風でサステナブルな暮らしを支えています。</p>
        <p class="p-home-about__text">私たちNTexは、リサイクルインクやアロマ製品の製造など、多彩なサービスを通じて、<br class="u-pc">持続可能で心地よい暮らしを支えています。地元に根ざし、社員一人ひとりが主役となり、<br class="u-pc">温かい職場から新しい価値を届け続けています。</p>
        <div class="p-home-about__more">
          <a href="<?php echo esc_url(home_url('/company/')); ?>" class="c-btn-more">
            <span class="c-btn-more__text">About</span>
            <div class="c-btn-more__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon_more-blue.svg" alt="more">
            </div>
          </a>
        </div><!-- /.p-home-about__more -->
      </div>
      <div class="p-home-about-slide">
        <div class="p-home-about-slide__inner about-swiper">
          <ul class="p-home-about-slide__list swiper-wrapper">
            <li class="p-home-about-slide__item swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/about_img01.png" alt="私たちについて">
            </li>
            <li class="p-home-about-slide__item swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/about_img02.png" alt="私たちについて">
            </li>
            <li class="p-home-about-slide__item swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/about_img03.png" alt="私たちについて">
            </li>
            <li class="p-home-about-slide__item swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/about_img04.png" alt="私たちについて">
            </li>
            <li class="p-home-about-slide__item swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/about_img05.png" alt="私たちについて">
            </li>
          </ul>
        </div>
      </div><!-- /.p-home-about-slide -->
    </div><!-- /.p-home-about__inner -->
  </section><!-- /.p-home-about -->

  <section class="p-home-sustainable">
    <div class="p-home-sustainable__inner l-inner">
      <div class="c-sec-heading c-sec-heading--wh p-home-sustainable__heading">
        <h2 class="c-sec-heading__en">SUSTAINABLE SOCIETY</h2>
        <p class="c-sec-heading__ja">使い捨てない、地球と環境を考えた事業</p>
      </div><!-- /.c-sec-heading -->
      <p class="p-home-sustainable__lead">人にも地球にもやさしく。<br>循環する社会、地球にやさしい選択を事業の中心に。</p>
      <p class="p-home-sustainable__text">私たちは、インクカートリッジの再生や植物由来製品の製造など、環境に配慮した事業を展開しています。富士山のふもと、自然豊かなこの地で育まれた企業だからこそ、次世代に美しい自然を残すための選択を大切にしています。</p>
      <div class="p-home-sustainable__more">
        <a href="https://www.ntexjp.co.jp/155/" class="c-btn-more c-btn-more--wh">
          <span class="c-btn-more__text">SDGs</span>
          <div class="c-btn-more__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_more-green.svg" alt="more">
          </div>
        </a>
      </div>
    </div><!-- /.p-home-sustainable__inner -->
  </section><!-- /.p-home-sustainable -->

  <section class="p-home-banners">
    <div class="p-home-banners__inner l-inner">
      <div class="p-home-banners__contents">
        <div class="p-home-banners__item">
          <a href="https://www.ntexjp.co.jp/157/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/bnr_01.png" alt="コンプライアンス宣言">
          </a>
        </div>
        <div class="p-home-banners__item">
          <a href="https://www.ntexjp.co.jp/159/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/bnr_02.png" alt="3UP宣言">
          </a>
        </div>
      </div><!-- /.p-home-banners__contents -->
    </div><!-- /.p-home-banners__inner -->
  </section><!-- /.p-home-banners -->

  <section class="p-home-service">
    <div class="p-home-service__inner l-inner">
      <div class="p-home-service__contents">
        <div class="p-home-service__left">
          <div class="c-sec-heading p-home-service__heading">
            <h2 class="c-sec-heading__en">SERVICE</h2>
            <p class="c-sec-heading__ja">事業案内</p>
          </div><!-- /.c-sec-heading -->
          <p class="p-home-service__lead">人にも地球にもやさしく。<br>循環する社会、地球にやさしい選択を<br class="u-sp">事業の中心に。</p>
          <div class="p-home-service-slide u-sp">
            <div class="p-home-service-slide__inner service-swiper-sp">
              <ul class="p-home-service-slide__list swiper-wrapper">
                <li class="p-home-service-slide-item swiper-slide">
                  <div class="p-home-service-slide-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/service_img01.png" alt="エコリカ">
                  </div>
                  <div class="p-home-service-slide-item__meta">
                    <div class="p-home-service-slide-item__logos">
                      <div class="p-home-service-slide-item__logo ecorica">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ecorica_logo.png" alt="エコリカ">
                      </div>
                    </div>
                    <div class="p-home-service-slide-item__titles">
                      <p class="p-home-service-slide-item__title">エコリカ</p>
                      <p class="p-home-service-slide-item__sub">（リサイクルインクカートリッジ事業）</p>
                    </div>
                  </div><!-- /.p-home-service-slide-item__meta -->
                  <p class="p-home-service-slide-item__text">エコリカは、使用済み純正インクカートリッジを回収し、洗浄・再充填して再利用するリサイクルインクのパイオニアブランドです。環境に配慮した独自の循環システムで、エコマーク認定や多数の受賞実績も誇ります。<br>NTexは製造元として高品質な製品づくりを支えています。</p>
                </li>
                <li class="p-home-service-slide-item swiper-slide">
                  <div class="p-home-service-slide-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img02.png" alt="プレジール">
                  </div>
                  <div class="p-home-service-slide-item__meta">
                    <div class="p-home-service-slide-item__logos">
                      <div class="p-home-service-slide-item__logo plaisir">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plaisir_logo.png" alt="プレジール">
                      </div>
                    </div>
                    <div class="p-home-service-slide-item__titles">
                      <p class="p-home-service-slide-item__title">プレジール</p>
                      <p class="p-home-service-slide-item__sub">（互換インクカートリッジ事業）</p>
                    </div>
                  </div><!-- /.p-home-service-slide-item__meta -->
                  <p class="p-home-service-slide-item__text">インク残量表示に完全対応しており純正品と同様に使用できる互換インクカートリッジです。幅広いラインナップを取り揃え、携帯電話からも繋がるフリーダイヤルでサポートも充実。</p>
                </li>
                 <li class="p-home-service-slide-item swiper-slide">
                  <div class="p-home-service-slide-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img04.png" alt="Rinoka">
                  </div>
                  <div class="p-home-service-slide-item__meta">
                    <div class="p-home-service-slide-item__logos">
                      <div class="p-home-service-slide-item__logo rinoka">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rinoka_logo02.png" alt="Rinoka">
                      </div>
                    </div>
                    <div class="p-home-service-slide-item__titles">
                      <p class="p-home-service-slide-item__title">Rinoka　梨之香</p>
                      <p class="p-home-service-slide-item__sub">（アロマ商品生産販売事業）</p>
                    </div>
                  </div><!-- /.p-home-service-slide-item__meta -->
                  <p class="p-home-service-slide-item__text">梨之香は、山梨県富士川町で採れる自然素材（実生の柚子の廃棄皮、耕作放棄地を再生し育てたハーブ、間伐した樹木の林地残材）を使用したエッセンシャルオイルとアロマウォーター等を通じて、日々の生活に彩りや刺激、癒しをお届けします。</p>
                </li>
                <li class="p-home-service-slide-item swiper-slide">
                  <div class="p-home-service-slide-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img05.png" alt="カスタマーサポート代行サービス">
                  </div>
                  <div class="p-home-service-slide-item__meta">
                    <div class="p-home-service-slide-item__logos">
                      <div class="p-home-service-slide-item__logo ilrental">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/swissm_logo.png" alt="SwissMilitary">
                      </div>
                      <div class="p-home-service-slide-item__logo tavishot">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mgaming_logo.png" alt="M-Gaming">
                      </div>
                       <div class="p-home-service-slide-item__logo tavishot">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deli_logo.png" alt="DELIジャパン">
                      </div>
                    </div>
                    
                    <div class="p-home-service-slide-item__titles">
                      <p class="p-home-service-slide-item__title">カスタマーサポート代行サービス</p>
                      <p class="p-home-service-slide-item__sub">（カスタマーサポート事業）</p>
                    </div>
                  </div><!-- /.p-home-service-slide-item__meta -->
                  <p class="p-home-service-slide-item__text">SwissMilitary、M-GAMING、DELIジャパンなど複数ブランドのカスタマーサポートを一手に担当。製品に関するご質問やご相談、ご不明な点など、経験豊かなスタッフが迅速で丁寧にお応えいたします。お客様の満足度向上を目指し、信頼されるサービスをお約束いたします。
</p>
                </li>
                <li class="p-home-service-slide-item swiper-slide">
                  <div class="p-home-service-slide-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img06.png" alt="リペア工房">
                  </div>
                  <div class="p-home-service-slide-item__meta">
                    <div class="p-home-service-slide-item__logos">
                      <div class="p-home-service-slide-item__logo ilrental">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/swissm_logo.png" alt="SwissMilitary">
                      </div>
                      <div class="p-home-service-slide-item__logo tavishot">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mgaming_logo.png" alt="M-Gaming">
                      </div>
                      <div class="p-home-service-slide-item__logo tavishot">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deli_logo.png" alt="DELIジャパン">
                      </div>
                    </div>
                    
                    <div class="p-home-service-slide-item__titles">
                      <p class="p-home-service-slide-item__title">リペア工房</p>
                      <p class="p-home-service-slide-item__sub">（リペア事業）</p>
                    </div>
                  </div><!-- /.p-home-service-slide-item__meta -->
                  <p class="p-home-service-slide-item__text">アーケードコントローラー、シュレッダーなど各種製品の修理に対応しています。熟練の技術者による確かな修理で、大切な製品を長くご愛用いただけるようサポートいたします。修理に関するご相談もお気軽にお問い合わせください。</p>
                </li>
              </ul>
            </div><!-- /.p-home-service-slide__inner -->
            <div class="swiper-pagination"></div>
          </div><!-- /.p-home-service-slide -->
          <p class="p-home-service__text">私たちは、インクカートリッジの再生や植物由来製品の製造など、環境に配慮した事業を展開しています。富士山のふもと、自然豊かなこの地で育まれた企業だからこそ、次世代に美しい自然を残すための選択を大切にしています。</p>
          <div class="p-home-service__more">
            <a href="<?php echo esc_url(home_url('/business/')); ?>" class="c-btn-more">
              <span class="c-btn-more__text">SERVICE</span>
              <div class="c-btn-more__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_more-blue.svg" alt="more">
              </div>
            </a>
          </div><!-- /.p-home-service__more -->
        </div><!-- /.p-home-service__left -->
        <div class="p-home-service__right u-pc">
          <div class="p-home-service-slide--pc">
            <div class="p-home-service-slide__inner service-swiper-pc">
              <ul class="p-home-service-slide__list swiper-wrapper">
                <li class="p-home-service-slide-item swiper-slide">
                  <div class="p-home-service-slide-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/service_img01.png" alt="エコリカ">
                  </div>
                  <div class="p-home-service-slide-item__meta">
                    <div class="p-home-service-slide-item__logos">
                      <div class="p-home-service-slide-item__logo ecorica">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ecorica_logo.png" alt="エコリカ">
                      </div>
                    </div>
                    <div class="p-home-service-slide-item__titles">
                      <p class="p-home-service-slide-item__title">エコリカ</p>
                      <p class="p-home-service-slide-item__sub">（リサイクルインクカートリッジ事業）</p>
                    </div>
                  </div><!-- /.p-home-service-slide-item__meta -->
                  <p class="p-home-service-slide-item__text">エコリカは、使用済み純正インクカートリッジを回収し、洗浄・再充填して再利用するリサイクルインクのパイオニアブランドです。環境に配慮した独自の循環システムで、エコマーク認定や多数の受賞実績も誇ります。<br>NTexは製造元として高品質な製品づくりを支えています。</p>
                </li>
                <li class="p-home-service-slide-item swiper-slide">
                  <div class="p-home-service-slide-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img02.png" alt="プレジール">
                  </div>
                  <div class="p-home-service-slide-item__meta">
                    <div class="p-home-service-slide-item__logos">
                      <div class="p-home-service-slide-item__logo plaisir">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plaisir_logo.png" alt="プレジール">
                      </div>
                    </div>
                    <div class="p-home-service-slide-item__titles">
                      <p class="p-home-service-slide-item__title">プレジール</p>
                      <p class="p-home-service-slide-item__sub">（互換インクカートリッジ事業）</p>
                    </div>
                  </div><!-- /.p-home-service-slide-item__meta -->
                  <p class="p-home-service-slide-item__text">インク残量表示に完全対応しており純正品と同様に使用できる互換インクカートリッジです。幅広いラインナップを取り揃え、携帯電話からも繋がるフリーダイヤルでサポートも充実。</p>
                </li>
                <li class="p-home-service-slide-item swiper-slide">
                  <div class="p-home-service-slide-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img04.png" alt="Rinoka">
                  </div>
                  <div class="p-home-service-slide-item__meta">
                    <div class="p-home-service-slide-item__logos">
                      <div class="p-home-service-slide-item__logo rinoka">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rinoka_logo02.png" alt="Rinoka">
                      </div>
                    </div>
                    <div class="p-home-service-slide-item__titles">
                      <p class="p-home-service-slide-item__title">Rinoka　梨之香</p>
                      <p class="p-home-service-slide-item__sub">（アロマ商品生産販売事業）</p>
                    </div>
                  </div><!-- /.p-home-service-slide-item__meta -->
                  <p class="p-home-service-slide-item__text">梨之香は、山梨県富士川町で採れる自然素材（実生の柚子の廃棄皮、耕作放棄地を再生し育てたハーブ、間伐した樹木の林地残材）を使用したエッセンシャルオイルとアロマウォーター等を通じて、日々の生活に彩りや刺激、癒しをお届けします。</p>
                </li>
                <li class="p-home-service-slide-item swiper-slide">
                  <div class="p-home-service-slide-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img05.png" alt="カスタマーサポート代行サービス">
                  </div>
                  <div class="p-home-service-slide-item__meta">
                    <div class="p-home-service-slide-item__logos">
                      <div class="p-home-service-slide-item__logo ilrental">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/swissm_logo.png" alt="カスタマーサポート代行サービス">
                      </div>
                      <div class="p-home-service-slide-item__logo tavishot">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mgaming_logo.png" alt="カスタマーサポート代行サービス">
                      </div>
                      <div class="p-home-service-slide-item__logo tavishot">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deli_logo.png" alt="カスタマーサポート代行サービス">
                      </div>
                    </div>
                    <div class="p-home-service-slide-item__titles">
                      <p class="p-home-service-slide-item__title">カスタマーサポート代行サービス</p>
                      <p class="p-home-service-slide-item__sub">（カスタマーサポート事業）</p>
                    </div>
                  </div><!-- /.p-home-service-slide-item__meta -->
                  <p class="p-home-service-slide-item__text">SwissMilitary、M-GAMING、DELIジャパンなど複数ブランドのカスタマーサポートを一手に担当。製品に関するご質問やご相談、ご不明な点など、経験豊かなスタッフが迅速で丁寧にお応えいたします。お客様の満足度向上を目指し、信頼されるサービスをお約束いたします。</p>
                </li>
                 <li class="p-home-service-slide-item swiper-slide">
                  <div class="p-home-service-slide-item__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img06.png" alt="リペア工房">
                  </div>
                  <div class="p-home-service-slide-item__meta">
                    <div class="p-home-service-slide-item__logos">
                      <div class="p-home-service-slide-item__logo ilrental">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/swissm_logo.png" alt="リペア工房">
                      </div>
                      <div class="p-home-service-slide-item__logo tavishot">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mgaming_logo.png" alt="リペア工房">
                      </div>
                      <div class="p-home-service-slide-item__logo tavishot">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deli_logo.png" alt="リペア工房">
                      </div>
                    </div>
                    <div class="p-home-service-slide-item__titles">
                      <p class="p-home-service-slide-item__title">リペア工房</p>
                      <p class="p-home-service-slide-item__sub">（リペア事業）</p>
                    </div>
                  </div><!-- /.p-home-service-slide-item__meta -->
                  <p class="p-home-service-slide-item__text">アーケードコントローラー、シュレッダーなど各種製品の修理に対応しています。熟練の技術者による確かな修理で、大切な製品を長くご愛用いただけるようサポートいたします。修理に関するご相談もお気軽にお問い合わせください。</p>
                </li>
              </ul>
            </div><!-- /.p-home-service-slide__inner -->
            <div class="swiper-pagination"></div>
          </div><!-- /.p-home-service-slide -->
        </div><!-- /.p-home-service__right -->
      </div><!-- /.p-home-service__contents -->
    </div><!-- /.p-home-service__inner -->
  </section><!-- /.p-home-service -->

  <section class="p-home-info">
    <div class="p-home-info__inner l-inner">
      <div class="p-home-info__heading-wrap">
        <div class="c-sec-heading p-home-info__heading">
          <h2 class="c-sec-heading__en">INFORMATION</h2>
          <p class="c-sec-heading__ja">お知らせ</p>
        </div><!-- /.c-sec-heading -->
      </div><!-- /.p-home-info__heading-wrap -->
      <?php
        $args = array(
          'post_type' => 'post',
          'category_name' => 'information',
          'posts_per_page' => 4,
          'orderby' => 'date',
          'order' => 'DESC',
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
      ?>
        <ul class="p-home-info__list">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <li class="p-home-info__item">
            <a href="<?php the_permalink(); ?>">
              <div class="p-home-info__meta">
                <time datetime="<?php the_time('Y.m.d'); ?>" class="p-home-info__date"><?php the_time('Y.m.d'); ?></time>
                <?php
                  $cat = get_the_category();
                  $cat = $cat[0];
                  $slug = $cat->slug;
                ?>
                <span class="p-home-info__cat <?php echo $slug; ?>"><?php echo $cat->cat_name; ?></span>
              </div>
              <p class="p-home-info__text"><?php the_title(); ?></p>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; wp_reset_postdata(); ?>
      <div class="p-home-info__more">
        <a href="<?php echo esc_url(home_url('/news/')); ?>" class="c-btn-more">
          <span class="c-btn-more__text">お知らせ一覧</span>
          <div class="c-btn-more__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_more-blue.svg" alt="more">
          </div>
        </a>
      </div><!-- /.p-home-info__more -->
    </div><!-- /.p-home-info__inner -->
  </section><!-- /.p-home-info -->

  <section class="p-home-recruit">
    <div class="p-home-recruit__inner l-inner">
      <div class="p-home-recruit__contents">
        <div class="p-home-recruit__images u-lt-m">
          <div class="p-home-recruit__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/recruit_img01.png" alt="社内">
          </div>
          <div class="p-home-recruit__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/recruit_img02.png" alt="社内">
          </div>
        </div><!-- /.p-home-recruit_images -->
        <div class="p-home-recruit__texts">
          <div class="p-home-recruit__heading-wrap">
            <div class="c-sec-heading p-home-recruit__heading">
              <h2 class="c-sec-heading__en">RECRUIT</h2>
              <p class="c-sec-heading__ja">採用</p>
            </div><!-- /.c-sec-heading -->
          </div><!-- /.p-home-recruit__heading-wrap -->
          <p class="p-home-recruit__lead">あなたの想いが、次のNTexをつくる。<br>人と地域とともに成長する<br class="u-sp">仲間を募集しています。</p>
          <p class="p-home-recruit__text">NTexでは、リユースや、ものづくりを通じて人と社会に貢献する仲間を募集しています。アットホームな社風の中で、一人ひとりがアイデアを発信し、地域に根ざした事業を支えています。未経験でも安心して成長できる環境を整え、あなたの「やってみたい」を応援します。</p>
        </div>
        <div class="p-home-recruit__images u-lt-m">
          <div class="p-home-recruit__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/recruit_img03.png" alt="社内">
          </div>
          <div class="p-home-recruit__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/recruit_img04.png" alt="社内">
          </div>
        </div><!-- /.p-home-recruit_images -->
      </div><!-- /.p-home-recruit__contents -->
      <div class="p-home-recruit-slide u-lt-l">
        <div class="p-home-recruit-slide__inner recruit-swiper">
          <ul class="p-home-recruit-slide__list swiper-wrapper">
            <li class="p-home-recruit-slide__item swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/recruit_img01.png" alt="社内">
            </li>
            <li class="p-home-recruit-slide__item swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/recruit_img02.png" alt="社内">
            </li>
            <li class="p-home-recruit-slide__item swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/recruit_img03.png" alt="社内">
            </li>
            <li class="p-home-recruit-slide__item swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/recruit_img04.png" alt="社内">
            </li>
          </ul>
        </div>
      </div><!-- /.p-home-recruit-slide -->
      <div class="p-home-recruit__more">
        <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="c-btn-more">
          <span class="c-btn-more__text">採用</span>
          <div class="c-btn-more__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_more-blue.svg" alt="more">
          </div>
        </a>
      </div><!-- /.p-home-recruit__more -->
    </div><!-- /.p-home-recruit__inner -->
    <div class="p-home-recruit__bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/top/bg_recruit-pc.png" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/bg_recruit-sp.png" alt="ロゴ">
      </picture>
    </div>
  </section><!-- /.p-home-recruit -->

</div><!-- /.l-wrapper -->
<?php get_footer(); ?>