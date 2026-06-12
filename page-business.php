<?php get_header(); ?>

<div class="p-business l-wrapper">

  <div class="l-page-head">
    <div class="l-page-head__bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/business/bg_head-pc.png" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/business/bg_head-sp.png" alt="事業">
      </picture>
    </div><!-- /.l-page-head__bg -->
    <div class="l-page-head__texts">
      <h1 class="l-page-head__title">
        <span class="l-page-head__ja">事業案内</span>
        <span class="l-page-head__en">Business information</span>
      </h1>
    </div><!-- /.l-page-head__texts -->
  </div><!-- /.l-page-head -->

  <?php echo get_template_part('template-parts/breadcrumb'); ?>

  <section class="p-business-intro">
    <div class="p-business-intro__inner l-inner">
      <div class="p-business-intro-head">
        <h2 class="p-business-intro-head__title">基盤となる事業</h2>
        <p class="p-business-intro-head__lead">使い捨てない、地球と環境を考えた事業</p>
        <p class="p-business-intro-head__text">当社はリサイクルインクブランド「エコリカ」や互換インク「プレジール」の製造販売をはじめ、アロマ商品の企画・生産販売を展開しています。暮らしを便利に彩る多彩なサービスを通じて、環境配慮と快適さを両立し、地域とともに持続可能な社会づくりに貢献しています。</p>
      </div><!-- /.p-business-intro-head -->
      <ul class="p-business-intro__list">
        <li class="p-business-intro-item p-business-intro-item--ecorica">
          <a href="#ecorica">
            <div class="p-business-intro-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img01.png" alt="エコリカ">
            </div>
            <div class="p-business-intro-item__body">
              <div class="p-business-intro-item__logos">
                <div class="p-business-intro-item__logo p-business-intro-item__logo--ecorica">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/ecorica_logo02.png" alt="エコリカ">
                </div>
              </div><!-- /.p-business-intro-item__logos -->
              <p class="p-business-intro-item__business u-lt-m">リサイクルインクカートリッジ事業</p>
              <p class="p-business-intro-item__title">ecorica　エコリカ</p>
              <div class="p-business-intro-item__texts">
                <p class="p-business-intro-item__text u-lt-m">エコリカは、使用済み純正インクカートリッジを回収し、洗浄・再充填して再利用するリサイクルインクのパイオニアブランドです。環境に配慮した独自の循環システムで、エコマーク認定や多数の受賞実績も誇ります。NTexは製造元として高品質な製品づくりを支えています。</p>
                <p class="p-business-intro-item__business u-lt-l">リサイクル<br>インクカートリッジ事業</p>
                <div class="p-business-intro-item__more">
                  <div class="p-business-intro-item__more-text">
                    <span>くわしく見る</span>
                  </div>
                </div>
              </div>
            </div><!-- /.p-business-intro-item__body -->
          </a>
        </li>
        <li class="p-business-intro-item p-business-intro-item--plaisir">
          <a href="#plaisir">
            <div class="p-business-intro-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img02.png" alt="プレジール">
            </div>
            <div class="p-business-intro-item__body">
              <div class="p-business-intro-item__logos">
                <div class="p-business-intro-item__logo p-business-intro-item__logo--plaisir">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/plaisir_logo.png" alt="プレジール">
                </div>
              </div><!-- /.p-business-intro-item__logos -->
              <p class="p-business-intro-item__business u-lt-m">互換インクカートリッジ事業</p>
              <p class="p-business-intro-item__title">Plaisir　プレジール</p>
              <div class="p-business-intro-item__texts">
                <p class="p-business-intro-item__text u-lt-m">インク残量表示に完全対応しており純正品と同様に使用できる互換インクカートリッジです。幅広いラインナップを取り揃え、携帯電話からも繋がるフリーダイヤルでサポートも充実。</p>
                <p class="p-business-intro-item__business u-lt-l">互換インク<br>カートリッジ事業</p>
                <div class="p-business-intro-item__more">
                  <div class="p-business-intro-item__more-text">
                    <span>くわしく見る</span>
                  </div>
                </div>
              </div>
            </div><!-- /.p-business-intro-item__body -->
          </a>
        </li>
        <li class="p-business-intro-item p-business-intro-item--rinoka">
          <a href="#rinoka">
            <div class="p-business-intro-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img04.png" alt="Rinoka">
            </div>
            <div class="p-business-intro-item__body">
              <div class="p-business-intro-item__logos">
                <div class="p-business-intro-item__logo p-business-intro-item__logo--rinoka">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/rinoka_logo02.png" alt="Rinoka">
                </div>
              </div><!-- /.p-business-intro-item__logos -->
              <p class="p-business-intro-item__business u-lt-m">アロマ商品開発事業</p>
              <p class="p-business-intro-item__title">Rinoka</p>
              <div class="p-business-intro-item__texts">
                <p class="p-business-intro-item__text u-lt-m">梨之香は、山梨県富士川町で採れる自然素材（実生の柚子の廃棄皮、耕作放棄地を再生し育てたハーブ、間伐した樹木の林地残材）を使用したエッセンシャルオイルとアロマウォーター等を通じて、日々の生活に彩りや刺激、癒しをお届けします。</p>
                <p class="p-business-intro-item__business u-lt-l">アロマ商品開発事業</p>
                <div class="p-business-intro-item__more">
                  <div class="p-business-intro-item__more-text">
                    <span>くわしく見る</span>
                  </div>
                </div>
              </div>
            </div><!-- /.p-business-intro-item__body -->
          </a>
        </li>
        <li class="p-business-intro-item p-business-intro-item--rental">
          <a href="#ilrental">
            <div class="p-business-intro-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img05.png" alt="カスタマーサポート代行サービス">
            </div>
            <div class="p-business-intro-item__body">
              <div class="p-business-intro-item__logos">
                <div class="p-business-intro-item__logo p-business-intro-item__logo--ilrental">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/swissm_logo.png" alt="SwissMilitary">
                </div>
                <div class="p-business-intro-item__logo p-business-intro-item__logo--tavishot p-business-intro-item__logo--mgaming">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/mgaming_logo.png" alt="M-GAMING">
                </div>
                <div class="p-business-intro-item__logo p-business-intro-item__logo--tavishot p-business-intro-item__logo--deli">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/deli_logo.png" alt="DELIジャパン">
                </div>
              </div><!-- /.p-business-intro-item__logos -->
              <p class="p-business-intro-item__business u-lt-m">カスタマーサポート事業</p>
              <p class="p-business-intro-item__title">カスタマーサポート代行サービス</p>
              <div class="p-business-intro-item__texts">
                <p class="p-business-intro-item__text u-lt-m">SwissMilitary、M-GAMING、DELIジャパンなど複数ブランドのカスタマーサポートを一手に担当。製品に関するご質問やご相談、ご不明な点など、経験豊かなスタッフが迅速で丁寧にお応えいたします。お客様の満足度向上を目指し、信頼されるサービスをお約束いたします。
</p>
                <p class="p-business-intro-item__business u-lt-l">カスタマーサポート事業</p>
                <div class="p-business-intro-item__more">
                  <div class="p-business-intro-item__more-text">
                    <span>くわしく見る</span>
                  </div>
                </div>
              </div>
            </div><!-- /.p-business-intro-item__body -->
          </a>
        </li>
                <li class="p-business-intro-item p-business-intro-item--rental">
          <a href="#ilrental">
            <div class="p-business-intro-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img06.png" alt="リペア工房">
            </div>
            <div class="p-business-intro-item__body">
              <div class="p-business-intro-item__logos">
                <div class="p-business-intro-item__logo p-business-intro-item__logo--ilrental">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/swissm_logo.png" alt="SwissMilitary">
                </div>
                <div class="p-business-intro-item__logo p-business-intro-item__logo--tavishot p-business-intro-item__logo--mgaming">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/mgaming_logo.png" alt="M-GAMING">
                </div>
                <div class="p-business-intro-item__logo p-business-intro-item__logo--tavishot p-business-intro-item__logo--deli">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/deli_logo.png" alt="DELIジャパン">
                </div>
              </div><!-- /.p-business-intro-item__logos -->
              <p class="p-business-intro-item__business u-lt-m">リペア事業</p>
              <p class="p-business-intro-item__title">リペア工房</p>
              <div class="p-business-intro-item__texts">
                <p class="p-business-intro-item__text u-lt-m">アーケードコントローラー、シュレッダーなど各種製品の修理に対応しています。熟練の技術者による確かな修理で、大切な製品を長くご愛用いただけるようサポートいたします。修理に関するご相談もお気軽にお問い合わせください。※本業務は各ブランドからの委託によりリペアをおこなっております
</p>
                <p class="p-business-intro-item__business u-lt-l">リペア事業</p>
                <div class="p-business-intro-item__more">
                  <div class="p-business-intro-item__more-text">
                    <span>くわしく見る</span>
                  </div>
                </div>
              </div>
            </div><!-- /.p-business-intro-item__body -->
          </a>
        </li>
        
      </ul>
    </div><!-- /.p-business-intro__inner -->
  </section><!-- /.p-business-intro -->

  <section id="ecorica" class="p-business-block p-business-ecorica">
    <div class="p-business-block__inner p-business-ecorica__inner l-inner">
      <div class="p-business-block__logo p-business-ecorica__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ecorica_logo02.png" alt="エコリカ">
      </div>
      <h2 class="p-business-block__title">エコリカ</h2>
      <p class="p-business-block__text">エコリカは、使用済み純正インクカートリッジを回収し、洗浄・再充填して再利用するリサイクルインクの<br>パイオニアブランドです。環境に配慮した独自の循環システムで、エコマーク認定や多数の受賞実績も誇ります。<br class="u-lt-m">NTexは製造元として高品質な製品づくりを支えています。</p>
      <div class="p-business-block__mov">
        <video src="<?php echo get_template_directory_uri(); ?>/movie/mov_ecorica.mp4" autoplay muted loop playsinline></video>
      </div>
      <ul class="p-business-block__list">
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--gr">Design and Development</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/ecorica_img01.png" alt="Design and Development">
          </div>
          <h3 class="p-business-block-item__title">設計開発</h3>
          <p class="p-business-block-item__text">品質は設計で決まるとの考えのもと、環境と安全性を重視した基本設計を徹底。インクは発色・耐候性・流動性に優れ、安全試験も実施。ICチップは自社開発や海外企業との技術提携で高品質を実現しています。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--gr">Manufacturing 1</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/ecorica_img02.png" alt="Manufacturing 1">
          </div>
          <h3 class="p-business-block-item__title">製造①</h3>
          <p class="p-business-block-item__text">製造ラインでは各製品の品質基準に則り、お客様に安心してご使用いただけるように品質第一主義でモノづくりに取り組んでいます。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--gr">Manufacturing 2</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/ecorica_img03.png" alt="Manufacturing 2">
          </div>
          <h3 class="p-business-block-item__title">製造②</h3>
          <p class="p-business-block-item__text">自社開発の専用自動機を用いて安定した品質の生産を実現しています。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--gr">Production Technology</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/ecorica_img04.png" alt="Quality Assurance 2">
          </div>
          <h3 class="p-business-block-item__title">生産技術</h3>
          <p class="p-business-block-item__text">インク注入機や各種専用治具の設計と、作業性と安全性に優れた製作まで自社内で行い、機械設備のメンテナンスも継続的に行っています。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--gr">Quality Assurance 1</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/ecorica_img05.png" alt="Quality Assurance 1">
          </div>
          <h3 class="p-business-block-item__title">品質保証①</h3>
          <p class="p-business-block-item__text">工場の徹底した品質管理、また不具合品が発生した場合、対象品を分析して解決策を含めた情報を迅速に工場へフィードバックし、再発防止対策を即時行っています。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--gr">Quality Assurance 2</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/ecorica_img06.png" alt="Quality Assurance 2">
          </div>
          <h3 class="p-business-block-item__title">品質保証②</h3>
          <p class="p-business-block-item__text">原材料は試作段階から厳しく評価され、合格品のみ量産に使用されます。受入検査では適切な抜き取り検査を実施し、不良品の混入を防止。さらに製品ごとに20項目の信頼性評価をクリアしたものだけが新製品として発売されます。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--gr">Production Management</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/ecorica_img07.png" alt="Production Management">
          </div>
          <h3 class="p-business-block-item__title">生産管理</h3>
          <p class="p-business-block-item__text">市場欠品が発生しない様に、需要に即したデリバリーコントロールを各工場と行っています。また海外・国内物流のコントロールも行い、工場とお客様の架け橋となり全社的な最適化を担っています。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--gr">Call Center</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/ecorica_img08.png" alt="Call Center">
          </div>
          <h3 class="p-business-block-item__title">カスタマーサービス</h3>
          <p class="p-business-block-item__text">フリーダイヤルやメールで専任スタッフがインクやプリンター操作の疑問をサポート。接続率98％の「すぐ繋がる」体制で安心してご利用いただけます。</p>
        </li>
      </ul>
    </div><!-- /.p-business-block__inner -->
  </section><!-- /.p-business-ecorica -->

  <section id="plaisir" class="p-business-block p-business-plaisir">
    <div class="p-business-block__inner p-business-plaisir__inner l-inner">
      <div class="p-business-block__logo p-business-plaisir__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/plaisir_logo.png" alt="プレジール">
      </div>
      <h2 class="p-business-block__title p-business-block__title--bk">プレジール</h2>
      <p class="p-business-block__text p-business-block__text--bk">インク残量表示に完全対応しており純正品と同様に使用できる互換インクカートリッジです。<br>幅広いラインナップを取り揃え、携帯電話からも繋がるフリーダイヤルでサポートも充実。</p>
      <ul class="p-business-plaisir__list">
        <li class="p-business-plaisir-item">
          <div class="p-business-plaisir-item__img p-business-plaisir-item__img--01">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/plaisir_img01.png" alt="プリンター3年保証">
          </div>
          <div class="p-business-plaisir-item__texts">
            <h3 class="p-business-plaisir-item__title">プリンター3年保証</h3>
            <p class="p-business-plaisir-item__text">メーカー保証（１年）開始日から３年以内のプリンター本体で、万一、当社のインクが原因で故障した場合、その修理代負担・修理中の代替機を保証します。</p>
          </div>
        </li>
        <li class="p-business-plaisir-item">
          <div class="p-business-plaisir-item__img p-business-plaisir-item__img--02">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/plaisir_img02.png" alt="信頼の国内品質基準">
          </div>
          <div class="p-business-plaisir-item__texts">
            <h3 class="p-business-plaisir-item__title">信頼の国内品質基準</h3>
            <p class="p-business-plaisir-item__text">印字品質やインクの色味、印刷枚数といったインクカートリッジにおいて最も重要な点を、プレジールでは徹底的に検証を行い国内の基準に準拠した品質でお客様にお届けしております。</p>
          </div>
        </li>
        <li class="p-business-plaisir-item">
          <div class="p-business-plaisir-item__img p-business-plaisir-item__img--03">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/plaisir_img03.png" alt="幅広いラインアップ">
          </div>
          <div class="p-business-plaisir-item__texts">
            <h3 class="p-business-plaisir-item__title">幅広いラインアップ</h3>
            <p class="p-business-plaisir-item__text">コンシューマー向けプリンター対応の売れ筋インクから、大判プリンター対応のビジネスインクまで、印刷コスト低減のご要望に幅広くお応えできるラインアップを取り揃えております。</p>
          </div>
        </li>
        <li class="p-business-plaisir-item">
          <div class="p-business-plaisir-item__img p-business-plaisir-item__img--04">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/plaisir_img04.png" alt="安心サポート">
          </div>
          <div class="p-business-plaisir-item__texts">
            <h3 class="p-business-plaisir-item__title">安心サポート</h3>
            <p class="p-business-plaisir-item__text">品質に自信があるから、サポートも充実。インクカートリッジの専門技術者があなたの疑問を解決！携帯電話からも繋がるフリーダイヤルで土日祝日・年末もサポート！</p>
          </div>
        </li>
        <li class="p-business-plaisir-item">
          <div class="p-business-plaisir-item__img p-business-plaisir-item__img--05">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/plaisir_img05.png" alt="コストパフォーマンス">
          </div>
          <div class="p-business-plaisir-item__texts">
            <h3 class="p-business-plaisir-item__title">コストパフォーマンス</h3>
            <p class="p-business-plaisir-item__text">大量印刷する方に!!純正品の使用に比べて25～30％もコストダウン！インクジェットプリンターのヘビーユーザーの味方です!</p>
          </div>
        </li>
      </ul>
    </div><!-- /.p-business-block__inner -->
  </section><!-- /.p-business-plaisir -->

  <section id="ilrental" class="p-business-block p-business-ilrental">
    <div class="p-business-block__inner p-business-ilrental__inner l-inner">
      <div class="p-business-ilrental__logos">
        <div class="p-business-block__logo p-business-ilrental__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/swissm_logo.png" alt="SwissMilitary">
        </div>
        <div class="p-business-block__logo p-business-ilrental__logo p-business-ilrental__logo--mgaming">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mgaming_logo.png" alt="M-GAMING">
        </div>
        <div class="p-business-block__logo p-business-ilrental__logo p-business-ilrental__logo--deli">
          <img src="<?php echo get_template_directory_uri(); ?>/img/deli_logo.png" alt="DELIジャパン">
        </div>
      </div><!-- /.p-business-ilrental__logos -->
      <h2 class="p-business-block__title">カスタマーサポート代行サービス</h2>
      <p class="p-business-block__text">SwissMilitary、M-GAMING、DELIジャパンなど複数ブランドのカスタマーサポートを一手に担当。<br>製品に関するご質問やご相談、ご不明な点など、経験豊かなスタッフが迅速で丁寧にお応えいたします。<br>お客様の満足度向上を目指し、信頼されるサービスをお約束いたします。</p>
      <div class="p-business-block__mov">
        <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img05.png" alt="カスタマーサポート代行サービス">
      </div>
      <ul class="p-business-brand-cards">
        <li class="p-business-brand-card">
          <a href="https://swiss-military.jp/" target="_blank" rel="noopener">
            <div class="p-business-brand-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/business/brand_swissmilitary.jpg" alt="SWISS MILITARY（スイスミリタリー）" loading="lazy">
            </div>
            <div class="p-business-brand-card__body">
              <h3 class="p-business-brand-card__name">SWISS MILITARY（スイスミリタリー）</h3>
              <p class="p-business-brand-card__text">「アフォーダブル・ラグジュアリー」をコンセプトに、高品質な製品を手の届く価格で提供するスイス発のブランド。1984年の設立以来、世界40カ国以上で展開し、スーツケースをはじめとするトラベル用品で高い評価を得ています。丈夫さ・使いやすさ・洗練されたデザインを追求したスーツケースの日本公式サイトです。</p>
              <span class="p-business-brand-card__link">公式サイトを見る<svg class="p-business-brand-card__ext" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="13" height="13" aria-hidden="true"><path fill="currentColor" d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42 9.3-9.29H14V3zM5 5h6v2H7v10h10v-4h2v6H5V5z"/></svg></span>
            </div>
          </a>
        </li>
        <li class="p-business-brand-card">
          <a href="https://m-gaming.jp/" target="_blank" rel="noopener">
            <div class="p-business-brand-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/business/brand_mgaming.jpg" alt="M-GAMING（エムゲーミング）" loading="lazy">
            </div>
            <div class="p-business-brand-card__body">
              <h3 class="p-business-brand-card__name">M-GAMING（エムゲーミング）</h3>
              <p class="p-business-brand-card__text">「海外の優れたゲーミングブランドを日本に」をテーマに、国内では入手が困難な海外ブランドの高品質なゲーミング製品を展開。アーケードコントローラーやゲーミングチェア、マイクロフォンなど多彩な製品を取り扱い、プロゲーマーのネモ選手が完全監修したオリジナルアーケードコントローラー「A01／A02」も手掛けています。</p>
              <span class="p-business-brand-card__link">公式サイトを見る<svg class="p-business-brand-card__ext" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="13" height="13" aria-hidden="true"><path fill="currentColor" d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42 9.3-9.29H14V3zM5 5h6v2H7v10h10v-4h2v6H5V5z"/></svg></span>
            </div>
          </a>
        </li>
        <li class="p-business-brand-card">
          <a href="https://delijapan.com/" target="_blank" rel="noopener">
            <div class="p-business-brand-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/business/brand_deli.jpg" alt="DELIジャパン" loading="lazy">
            </div>
            <div class="p-business-brand-card__body">
              <h3 class="p-business-brand-card__name">DELIジャパン</h3>
              <p class="p-business-brand-card__text">アジア最大級の文具メーカーDELIと株式会社エム・エス・シーが設立した、日本市場向けの合弁会社。シュレッダーや鉛筆削りなどのOA・文具製品から、デザインステーショナリーブランド「nusign」まで幅広く展開。自宅でもオフィスでも頼れる高品質な製品を、全国の家電量販店やオンラインストアで提供しています。</p>
              <span class="p-business-brand-card__link">公式サイトを見る<svg class="p-business-brand-card__ext" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="13" height="13" aria-hidden="true"><path fill="currentColor" d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42 9.3-9.29H14V3zM5 5h6v2H7v10h10v-4h2v6H5V5z"/></svg></span>
            </div>
          </a>
        </li>
      </ul>
      <!---<ul class="p-business-block__list">
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--bl">Return inspection</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/ilrental_img01.png" alt="Return inspection">
          </div>
          <h3 class="p-business-block-item__title">返却点検</h3>
          <p class="p-business-block-item__text">返却されたスーツケースを、スタッフが外観や機能を丁寧に点検します。破損や不具合がないかを確認し、安全にご利用いただける状態であることを確かめます。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--bl">Ozone sterilization</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/ilrental_img02.png" alt="Ozone sterilization">
          </div>
          <h3 class="p-business-block-item__title">オゾン除菌・消臭</h3>
          <p class="p-business-block-item__text">専用のオゾン発生装置を使用し、スーツケース内部や外装に付着した雑菌やウイルスを除去します。さらに、使用中に気になるニオイも分解・消臭することで、安心してご利用いただける清潔な状態を保っています。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--bl">Cleaning</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/ilrental_img03.png" alt="Cleaning">
          </div>
          <h3 class="p-business-block-item__title">清掃作業</h3>
          <p class="p-business-block-item__text">内部のホコリや砂、外装の汚れを専用機材で徹底的に清掃します。衛生的で見た目にもきれいな状態に仕上げ、快適にご利用いただけるよう整備しています。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--bl">Preparation for Shipment</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/ilrental_img04.png" alt="Preparation for Shipment">
          </div>
          <h3 class="p-business-block-item__title">出荷準備</h3>
          <p class="p-business-block-item__text">点検・清掃を終えたスーツケースを出荷時に最終チェック。仕上げに外装拭き上げも行います。付属品の確認や梱包を行い、安心してご利用いただける状態でお客さまのもとへお届けします。</p>
        </li>
      </ul>
      <div class="p-business-block-banner">
        <a href="https://www.ilrental.co.jp/" target="_blank">
          <div class="p-business-block-banner__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/ilrental_bnr.png" alt="カスタマーサポート代行サービス">
          </div>
          <p class="p-business-block-banner__text p-business-block-banner__text--wh">カスタマーサポート代行サービス<span></span></p>
        </a>
      </div>
    </div><!-- /.p-business-block__inner -->
  </section><!-- /.p-business-ilrental -->

  <section class="p-business-block p-business-tavishot">
    <div class="p-business-block__inner p-business-tavishot__inner l-inner">
      <div class="p-business-tavishot__logos">
        <div class="p-business-block__logo p-business-tavishot__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/swissm_logo.png" alt="SwissMilitary">
        </div>
        <div class="p-business-block__logo p-business-tavishot__logo p-business-tavishot__logo--mgaming">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mgaming_logo.png" alt="M-GAMING">
        </div>
        <div class="p-business-block__logo p-business-tavishot__logo p-business-tavishot__logo--deli">
          <img src="<?php echo get_template_directory_uri(); ?>/img/deli_logo.png" alt="DELIジャパン">
        </div>
      </div><!-- /.p-business-tavishot__logos -->
      <h2 class="p-business-block__title p-business-block__title--bk">リペア工房</h2>
      <p class="p-business-block__text p-business-block__text--bk">アーケードコントローラー、シュレッダーなど各種製品の修理に対応しています。<br>熟練の技術者による確かな修理で、大切な製品を長くご愛用いただけるようサポートいたします。<br>修理に関するご相談もお気軽にお問い合わせください。<br>※本業務は各ブランドからの委託によりリペアをおこなっております</p>
      <div class="p-business-block__mov">
        <img src="<?php echo get_template_directory_uri(); ?>/img/business/intro_img06.png" alt="リペア工房">
      </div>
      <ul class="p-business-brand-cards p-business-brand-cards--bk">
        <li class="p-business-brand-card">
          <a href="https://www.ntexjp.co.jp/161/" target="_blank" rel="noopener">
            <div class="p-business-brand-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/business/brand_swissmilitary_repair.jpg" alt="SwissMilitary スーツケース修理" loading="lazy">
            </div>
            <div class="p-business-brand-card__body">
              <h3 class="p-business-brand-card__name">SwissMilitary　スーツケース修理</h3>
              <p class="p-business-brand-card__text">スイスミリタリー製スーツケースの修理を、当社内のスイスミリタリーカスタマーセンターで承っています。キャスターやハンドル、TSAロック、ファスナーなど各部の交換・補修に対応。保証期間内の自然故障は無償修理、保証対象外の場合も有償にて対応いたします。修理のご依頼・ご質問はお問い合わせ窓口からご連絡ください。</p>
              <span class="p-business-brand-card__link">修理案内を見る<svg class="p-business-brand-card__ext" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="13" height="13" aria-hidden="true"><path fill="currentColor" d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42 9.3-9.29H14V3zM5 5h6v2H7v10h10v-4h2v6H5V5z"/></svg></span>
            </div>
          </a>
        </li>
        <li class="p-business-brand-card">
          <a href="https://m-gaming.jp/" target="_blank" rel="noopener">
            <div class="p-business-brand-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/business/brand_mgaming_repair.png" alt="M-GAMING アーケードコントローラー修理" loading="lazy">
            </div>
            <div class="p-business-brand-card__body">
              <h3 class="p-business-brand-card__name">M-GAMING　アーケードコントローラー修理</h3>
              <p class="p-business-brand-card__text">M-GAMINGブランドのアーケードコントローラーをはじめとするゲーミングデバイスの修理に対応しています。プロゲーマーのネモ選手が監修した「A01／A02」など、大切な機材を長くお使いいただけるよう、熟練の技術者が確かな修理でサポート。修理のご相談はM-GAMING公式サイトのサポート窓口へお寄せください。</p>
              <span class="p-business-brand-card__link">公式サイトを見る<svg class="p-business-brand-card__ext" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="13" height="13" aria-hidden="true"><path fill="currentColor" d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42 9.3-9.29H14V3zM5 5h6v2H7v10h10v-4h2v6H5V5z"/></svg></span>
            </div>
          </a>
        </li>
        <li class="p-business-brand-card">
          <a href="https://delijapan.com/product/shredder/" target="_blank" rel="noopener">
            <div class="p-business-brand-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/business/brand_deli_repair.jpg" alt="DELIジャパン シュレッダー修理" loading="lazy">
            </div>
            <div class="p-business-brand-card__body">
              <h3 class="p-business-brand-card__name">DELIジャパン　シュレッダー修理</h3>
              <p class="p-business-brand-card__text">deliシュレッダーの修理に対応しています。A5サイズの卓上型コンパクトモデルから、超静音タイプやオートフィーダー搭載の据え置き型まで、ご家庭・オフィスで活躍する各機種をサポート。修理・製品に関するお問い合わせは、DELIジャパンのサポート窓口（お電話・メール）にて承っています。</p>
              <span class="p-business-brand-card__link">製品ページを見る<svg class="p-business-brand-card__ext" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="13" height="13" aria-hidden="true"><path fill="currentColor" d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42 9.3-9.29H14V3zM5 5h6v2H7v10h10v-4h2v6H5V5z"/></svg></span>
            </div>
          </a>
        </li>
      </ul>
      <!---<ul class="p-business-block__list">
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--bl">Return inspection</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/tavishot_img01.png" alt="Return inspection">
          </div>
          <h3 class="p-business-block-item__title p-business-block-item__title--bk">返却点検</h3>
          <p class="p-business-block-item__text p-business-block-item__text--bk">返却されたカメラや付属品を、スタッフが丁寧に点検します。破損や不具合がないかを確認し、安全にご利用いただける状態であることを確かめます。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--bl">Cleaning (Sanitization)</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/tavishot_img02.png" alt="Cleaning (Sanitization)">
          </div>
          <h3 class="p-business-block-item__title p-business-block-item__title--bk">清掃①</h3>
          <p class="p-business-block-item__text p-business-block-item__text--bk">アルコールなどを用いて機材全体の除菌・消臭を行います。衛生的な状態を維持することで、安心してご利用いただけるよう整えています。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--bl">Cleaning (Detailing)</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/tavishot_img03.png" alt="Cleaning (Detailing)">
          </div>
          <h3 class="p-business-block-item__title p-business-block-item__title--bk">清掃②</h3>
          <p class="p-business-block-item__text p-business-block-item__text--bk">専用の清掃用具を使用し、細かな部分まで丁寧にメンテナンスします。レンズやボタン周りなども入念に清掃し、快適にご利用いただける状態を保ちます。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--bl">Preparation for Shipment</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/tavishot_img04.png" alt="Preparation for Shipment">
          </div>
          <h3 class="p-business-block-item__title p-business-block-item__title--bk">出荷準備</h3>
          <p class="p-business-block-item__text p-business-block-item__text--bk">点検・清掃を終えた機材を出荷時に最終チェック。付属品は実機取付にて全て確認し、すぐにご利用いただける状態でお送りします。</p>
        </li>
      </ul>
      <div class="p-business-block-banner">
        <a href="https://tavishot.com/" target="_blank">
          <div class="p-business-block-banner__img p-business-block-banner__img--tavishot">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/tavishot_bnr.png" alt="リペア工房">
          </div>
          <p class="p-business-block-banner__text p-business-block-banner__text--bl">リペア工房公式サイト<span></span></p>
        </a>
      </div>
    </div><!-- /.p-business-block__inner -->
  </section><!-- /.p-business-tavishot -->

  <section id="rinoka" class="p-business-block p-business-rinoka">
    <div class="p-business-block__inner p-business-rinoka__inner l-inner">
      <div class="p-business-block__logo p-business-rinoka__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/rinoka_logo02.png" alt="梨之香">
      </div>
      <h2 class="p-business-block__title">梨之香</h2>
      <p class="p-business-block__text">梨之香は、山梨県富士川町で採れる自然素材（実生の柚子の廃棄皮、耕作放棄地を再生し育てたハーブ、<br class="u-lt-m">間伐した樹木の林地残材）を使用したエッセンシャルオイルとアロマウォーター等を通じて、<br class="u-lt-m">日々の生活に彩りや刺激、癒しをお届けします。</p>
        <div class="p-business-block__mov">
        <video src="<?php echo get_template_directory_uri(); ?>/movie/mov_rinoka.mp4" autoplay muted loop playsinline></video>
      </div>
      <!---<div class="p-business-rinoka__img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/business/rinoka_kv.png" alt="草木">
      </div>--->
      <ul class="p-business-block__list">
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--gr2">Recycling yuzu peel</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/rinoka_img01.png" alt="Recycling yuzu peel">
          </div>
          <h3 class="p-business-block-item__title">廃棄される柚子果皮の入手</h3>
          <p class="p-business-block-item__text">富士川町で、古くから実生の柚子栽培をされている農園さんから、廃棄される皮を入手し、高品質の精油を作っています。無農薬、化学肥料不使用の実生の柚子はそのままで食べられる程、美味しい柚子です。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--gr2">Herb cultivation</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/rinoka_img02.png" alt="Herb cultivation">
          </div>
          <h3 class="p-business-block-item__title">耕作放棄地の<br>再生によるハーブ栽培</h3>
          <p class="p-business-block-item__text">20年間耕作されず雑草が生い茂っていた土地を、草刈り、伐根、耕耘、苗植え等の作業を行い再生し、この土地に合ったハーブの栽培を無農薬、化学肥料不使用で行っています。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--gr2">Utilizing Thinned Wood</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/rinoka_img03.png" alt="Utilizing Thinned Wood">
          </div>
          <h3 class="p-business-block-item__title">森林の間伐材の活用</h3>
          <p class="p-business-block-item__text">森の木を管理している地元の峡南森林組合が、森林整備の為に行う間伐作業の際に生じる檜や杉の枝葉を入手し、豊かな森林からの恵みを芳醇な香りの精油に生まれ変わらせています。</p>
        </li>
        <li class="p-business-block-item">
          <span class="p-business-block-item__en p-business-block-item__en--gr2">Reliable Distillation Technology</span>
          <div class="p-business-block-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/rinoka_img04.png" alt="Reliable Distillation Technology">
          </div>
          <h3 class="p-business-block-item__title">確かな蒸留技術</h3>
          <p class="p-business-block-item__text">当社の蒸留技術は、株式会社トトラボの故村上志緒代表に約2年間に亘り、直接技術指導を頂いて開発、生産したものです。確かな技術で作られた香りを是非一度お試しください。</p>
        </li>
      </ul>
      <div class="p-business-block-banner">
        <a href="https://www.kaorilabo.jp/"target="_blank" rel="noopener noreferrer">
          <div class="p-business-block-banner__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business/rinoka_bnr.png" alt="Rinoka">
          </div>
          <p class="p-business-block-banner__text p-business-block-banner__text--wh">Rinoka公式サイト<span></span></p>
        </a>
      </div>
    </div><!-- /.p-business-block__inner -->
  </section><!-- /.p-business-rinoka -->

  <!---<section class="p-business-swiss">
    <div class="p-business-swiss__inner l-inner">
      <div class="p-business-swiss__bnr">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/business/bnr_swiss-pc.png" media="(min-width: 768px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/business/bnr_swiss-sp.png" alt="swiss military">
        </picture>
      </div>
      <p class="p-business-swiss__title">リペア工房</p>
      <p class="p-business-swiss__text">SWISS MILITARY 製のスーツケース修理を行っています。<br>詳しくは<a href="<?php echo esc_url(home_url('/161/')); ?>">こちらのページ</a>からご確認いただけます</p>
    </div><!-- /.p-business-swiss__inner -->
  </section><!-- /.p-business-swiss -->

</div><!-- /.l-wrapper -->

<?php get_footer(); ?>