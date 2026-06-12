<?php get_header(); ?>

<div class="p-company l-wrapper">

  <div class="l-page-head">
    <div class="l-page-head__bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/company/bg_head-pc.png" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/company/bg_head-sp.png" alt="事業">
      </picture>
    </div><!-- /.l-page-head__bg -->
    <div class="l-page-head__texts">
      <h1 class="l-page-head__title">
        <span class="l-page-head__ja">会社案内</span>
        <span class="l-page-head__en">Company profile</span>
      </h1>
    </div><!-- /.l-page-head__texts -->
  </div><!-- /.l-page-head -->

  <?php echo get_template_part('template-parts/breadcrumb'); ?>

  <div class="p-company-link">
    <div class="p-company-link__inner l-inner">
      <div class="u-sp">
        <ul class="p-company-link__list">
          <li class="p-company-link__item">
            <a href="#message">トップメッセージ<span></span></a>
          </li>
          <li class="p-company-link__item">
            <a href="#mission">基本理念<span></span></a>
          </li>
        </ul>
        <ul class="p-company-link__list">
          <li class="p-company-link__item">
            <a href="#profile">会社概要<span></span></a>
          </li>
          <li class="p-company-link__item">
            <a href="#history">沿革<span></span></a>
          </li>
          <li class="p-company-link__item">
            <a href="#access">アクセスマップ<span></span></a>
          </li>
        </ul>
      </div><!-- /.u-sp -->
      <div class="u-pc">
        <ul class="p-company-link__list">
          <li class="p-company-link__item">
            <a href="#message">トップメッセージ<span></span></a>
          </li>
          <li class="p-company-link__item">
            <a href="#mission">基本理念<span></span></a>
          </li>
          <li class="p-company-link__item">
            <a href="#profile">会社概要<span></span></a>
          </li>
          <li class="p-company-link__item">
            <a href="#history">沿革<span></span></a>
          </li>
          <li class="p-company-link__item">
            <a href="#access">アクセスマップ<span></span></a>
          </li>
        </ul>
      </div>
    </div><!-- /.p-company-link__inner -->
  </div><!-- /.p-company-link -->

  <section id="message" class="p-company-message">
    <div class="p-company-message__inner l-inner">
      <div class="c-sec-heading p-company-message__heading">
        <h2 class="c-sec-heading__en">TOP Message</h2>
        <p class="c-sec-heading__ja">ご挨拶</p>
      </div><!-- /.c-sec-heading -->
      <div class="p-company-message__contents">
        <div class="p-company-message__right">
          <div class="p-company-message__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/message_img.png" alt="中澤　弘一">
          </div>
          <div class="p-company-message__names u-sp">
            <p class="p-company-message__job">株式会社エヌテックス　代表取締役社長</p>
            <p class="p-company-message__name">中澤　弘一</p>
          </div>
        </div><!-- /.p-company-message__right -->
        <div class="p-company-message__left">
          <p class="p-company-message__lead">あなたの想いが、次のNTexをつくる。<br>人と地域とともに成長する企業を目指します。</p>
          <p class="p-company-message__text">「この人なら安心して仕事を任せられる、ここなら安心して仕事を任せられる企業」を目指し、従業員と共にひとつひとつ最善を尽くし、お客様目線で「より良いモノづくり」を常に追求することが我々の使命と肝に銘じ取り組んでまいります。 <br><br>お客様をすべての起点とし、半歩先取りした気づきをご提供できる人材の育成、 そして、情熱と謙虚な気持ちを持ち合わせ、「仕事に厳しく、人に優しい」風土を醸成する社員教育に力を注いでまいります。</p>
          <div class="p-company-message__names u-pc">
            <p class="p-company-message__job">株式会社エヌテックス　代表取締役社長</p>
            <p class="p-company-message__name">中澤　弘一</p>
          </div>
        </div><!-- /.p-company-message__left -->
      </div><!-- /.p-company-message__contents -->
    </div><!-- /.p-company-message__inner -->
  </section><!-- /.p-company-message -->

  <section id="mission" class="p-company-mission">
    <div class="p-company-mission__inner">
      <div class="c-sec-heading p-company-mission__heading">
        <h2 class="c-sec-heading__en">MISSION</h2>
        <p class="c-sec-heading__ja">基本理念</p>
      </div><!-- /.c-sec-heading -->
      <p class="p-company-mission__lead">
        <span>NTex / エヌテックス の目指すところ</span>
        <span>“ NTex = Next Technologies “</span>
      </p>
      <div class="p-company-mission-philosophy">
        <div class="p-company-mission-philosophy__inner l-inner">
          <div class="p-company-mission-philosophy__contents">
            <div class="p-company-mission-philosophy__top">
              <div class="p-company-mission-philosophy__item"><span>様々な技術と</span><span>業務の複合体</span></div>
              <div class="p-company-mission-philosophy__item"><span>様々な技術分野</span><span>への挑戦</span></div>
            </div>
            <div class="p-company-mission-philosophy__mid">
              <div class="p-company-mission-philosophy__item large"><span>NTex</span><span>MISSION</span></div>
            </div>
            <div class="p-company-mission-philosophy__bottom">
              <div class="p-company-mission-philosophy__item"><span>未知なるもの</span><span>Xヘの挑戦</span></div>
              <div class="p-company-mission-philosophy__item fz-s"><span>様々な技術に<br class="u-sp">挑戦する</span><span>企業を支える</span><span>プロフェッショナル</span><span>集団</span></div>
            </div>
          </div><!-- /.p-company-mission-philosophy__contents -->
        </div><!-- /.p-company-mission-philosophy__inner -->
      </div><!-- /.p-company-mission-philosophy -->
    </div><!-- /.p-company-mission__inner -->
  </section><!-- /.p-company-mission -->

  <section id="profile" class="p-company-profile">
    <div class="p-company-profile__inner l-inner">
      <div class="c-sec-heading p-company-profile__heading">
        <h2 class="c-sec-heading__en">COMPANY PROFILE</h2>
        <p class="c-sec-heading__ja">会社概要</p>
      </div><!-- /.c-sec-heading -->
      <ul class="p-company-profile__list">
        <li class="p-company-profile__item">
          <div class="p-company-profile__title">社名</div>
          <div class="p-company-profile__contents">
            <ul>
              <li><span>株式会社エヌテックス</span></li>
            </ul>
          </div>
        </li>
        <li class="p-company-profile__item">
          <div class="p-company-profile__title">所在地</div>
          <div class="p-company-profile__contents">
            <ul>
              <li>山梨本社：〒400-0502　山梨県南巨摩郡富士川町最勝寺1369-1</li>
              <li>東京支社：〒108-0075　東京都港区港南1丁目8-27　日新ビル11F</li>
            </ul>
          </div>
        </li>
        <li class="p-company-profile__item">
          <div class="p-company-profile__title">設立</div>
          <div class="p-company-profile__contents">
            <ul>
              <li>2018年5月</li>
            </ul>
          </div>
        </li>
        <li class="p-company-profile__item">
          <div class="p-company-profile__title">資本金</div>
          <div class="p-company-profile__contents">
            <ul>
              <li>1000万円（2019年8月30日現在）</li>
            </ul>
          </div>
        </li>
        <li class="p-company-profile__item">
          <div class="p-company-profile__title">役員</div>
          <div class="p-company-profile__contents">
            <ul>
              <li>代表取締役社長　中澤　弘一</li>
              <li>専務取締役　田中　裕之</li>
            </ul>
          </div>
        </li>
        <li class="p-company-profile__item">
          <div class="p-company-profile__title">従業員</div>
          <div class="p-company-profile__contents">
            <ul>
              <li>85名（内、派遣スタッフ14名）　※2025年7月1日時点</li>
            </ul>
          </div>
        </li>
        <li class="p-company-profile__item">
          <div class="p-company-profile__title">従業員男女比率</div>
          <div class="p-company-profile__contents">
            <ul>
              <li>男33％：女67％</li>
            </ul>
          </div>
        </li>
        <li class="p-company-profile__item">
          <div class="p-company-profile__title">TEL</div>
          <div class="p-company-profile__contents">
            <ul>
              <li>0556-22-6511</li>
            </ul>
          </div>
        </li>
        <li class="p-company-profile__item">
          <div class="p-company-profile__title">FAX</div>
          <div class="p-company-profile__contents">
            <ul>
              <li>0556-22-6516</li>
            </ul>
          </div>
        </li>
        <li class="p-company-profile__item">
          <div class="p-company-profile__title">事業内容</div>
          <div class="p-company-profile__contents">
            <ul>
              <li>プリンター用インクカートリッジの開発及び製造販売</li>
              <li>プリンター用インク補給商品の開発及び製造販売</li>
              <li>プリンター用リボンカートリッジ、FAX用リボンの販売</li>
              <li>OA機器関連部材の製造販売及び修理</li>
              <li>電子機器と電子装置及びそれらの周辺機器のレンタル及び販売、並びに修理</li>
              <li>旅行カバン及びレジャー用品等のレンタル及び販売並びに修理</li>
              <li>アロマ関連商品の製造販売</li>
              <li>コールセンターのアウトソーシングサービス</li>
              <li>輸出入代行業</li>
            </ul>
          </div>
        </li>
        <li class="p-company-profile__item">
          <div class="p-company-profile__title">主要取引先</div>
          <div class="p-company-profile__contents">
            <ul>
              <li>株式会社エム・エス・シー</li>
              <li>株式会社エコリカ</li>
              <li>株式会社プレジール</li>
              <li>エレコム株式会社</li>
              <li>ウチダエスコ株式会社</li>
              <li>株式会社オートバックスセブン、他（順不同、敬称略）</li>
            </ul>
          </div>
        </li>
        <li class="p-company-profile__item">
          <div class="p-company-profile__title">取引金融機関</div>
          <div class="p-company-profile__contents">
            <ul>
              <li>山梨中央銀行　青柳支店</li>
              <li>三井住友銀行　五反田支店</li>
              <li>みずほ銀行　日本橋支店</li>
            </ul>
          </div>
        </li>
      </ul>
    </div><!-- /.p-company-profile__inner -->
  </section><!-- /.p-company-profile -->

  <section id="history" class="p-company-history">
    <div class="p-company-history__inner l-inner">
      <div class="c-sec-heading p-company-history__heading">
        <h2 class="c-sec-heading__en">HISTORY</h2>
        <p class="c-sec-heading__ja">沿革</p>
      </div><!-- /.c-sec-heading -->
      <ul class="p-company-history__list">
        <li class="p-company-history__item">
          <div class="p-company-history__title">2018年5月</div>
          <div class="p-company-history__text">株式会社エヌテックス設立　資本金3,000,000円 （本社）山梨県南巨摩郡富士川町最勝寺</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2018年10月</div>
          <div class="p-company-history__text">エステー産業株式会社からインクカートリッジ事業の譲渡を受け操業開始　</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2019年8月</div>
          <div class="p-company-history__text">資本金10,000,000円に増資</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2020年2月</div>
          <div class="p-company-history__text">日本アシスト株式会社からスーツケースレンタル事業「アイエルレンタル」の譲渡を受ける</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2020年6月</div>
          <div class="p-company-history__text">アイエルレンタル事業の運営を開始</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2021年8月</div>
          <div class="p-company-history__text">東京支社を港区港南1-8-27日新ビル11F へ移転</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2021年10月</div>
          <div class="p-company-history__text">株式会社エンカラーズからレンタルカメラ事業「Tavishot」の譲渡を受ける</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2021年11月</div>
          <div class="p-company-history__text">Tavishot事業の運営を開始</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2022年5月</div>
          <div class="p-company-history__text">プライバシーマーク（Ｐマーク）の認証を取得(01)</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2022年6月</div>
          <div class="p-company-history__text">ISO9001/14001　再認証取得</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2023年8月</div>
          <div class="p-company-history__text">SDGsの取組活動を宣言</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2024年4月</div>
          <div class="p-company-history__text">豊かさ共創スリーアップ推進宣言証を取得</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2024年7月</div>
          <div class="p-company-history__text">「やまなし水源地ブランド推進協議会」に加盟</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2024年8月</div>
          <div class="p-company-history__text">プライバシーマーク（Ｐマーク）の認証を更新(02)</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2025年7月</div>
          <div class="p-company-history__text">ISO9001/14001　再認証取得</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2025年8月</div>
          <div class="p-company-history__text">アロマ事業の新ブランド梨之香（りのか）を商標出願</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2025年8月</div>
          <div class="p-company-history__text">山梨クリスタルえるみんの認定を取得</div>
        </li>
        <li class="p-company-history__item">
          <div class="p-company-history__title">2026年1月</div>
          <div class="p-company-history__text">山梨県「豊かさ共創スリーアップ実践企業（プレミアム認証）」認証を取得<br><br>「YAMANASHIワーキングスタイルアワード奨励賞」を受賞<br><br>「やまなし共育（トモイク）未来宣言」を宣言</div>
        </li>
      </ul>
    </div><!-- /.p-company-history__inner -->
    <div class="p-company-history__bg">
      <img src="<?php echo get_template_directory_uri(); ?>/img/company/history_bg.png" alt="ロゴ">
    </div>
  </section><!-- /.p-company-history -->

  <section id="access" class="p-company-access">
    <div class="p-company-access__item">
      <p class="p-company-access__title">山梨本社</p>
      <p class="p-company-access__text">〒400-0502　山梨県南巨摩郡富士川町最勝寺1369-1</p>
      <div class="p-company-access__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6491.702449836072!2d138.45605937703107!3d35.55737633676563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601bf3b626f25843%3A0x513aa6985beb6e9b!2z44Ko44OM44OG44OD44Kv44K5!5e0!3m2!1sja!2sjp!4v1756790802771!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <ul class="p-company-access__images l-inner">
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/yamanashi_img01.png" alt="会社画像">
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/yamanashi_img02.png" alt="会社画像">
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/yamanashi_img03.png" alt="会社画像">
        </li>
      </ul>
    </div><!-- /.p-company-access__item -->
    <div class="p-company-access__item">
      <p class="p-company-access__title">東京支社</p>
      <p class="p-company-access__text">〒108-0075　東京都港区港南1丁目8-27　日新ビル11F</p>
      <div class="p-company-access__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.9150561941324!2d139.7412996770328!3d35.62982053279421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188a4513893499%3A0x2318d9459123bd26!2z44CSMTA4LTAwNzUg5p2x5Lqs6YO95riv5Yy65riv5Y2X77yR5LiB55uu77yY4oiS77yS77yXIOaXpeaWsOODk-ODqyAxMWY!5e0!3m2!1sja!2sjp!4v1756790845212!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <ul class="p-company-access__images l-inner">
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/tokyo_img01.png" alt="会社画像">
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/tokyo_img02.png" alt="会社画像">
        </li>
      </ul>
    </div><!-- /.p-company-access__item -->
    <div class="p-company-access__item">
      <p class="p-company-access__title">OVERSEAS BASES</p>
      <p class="p-company-access__text">Cresc Incorporated<br>フィリピン工場</p>
      <p class="p-company-access__text">Blk. 7 Lot 5, Waterfront Extension, Moonbay Marina, CBD Area,<br>Subic Bay Freeport Zone<br>Philippines, 2222</p>
      <div class="p-company-access__logo p-company-access__logo--ph">
        <img src="<?php echo get_template_directory_uri(); ?>/img/company/ph_logo.png" alt="ロゴ">
      </div>
      <div class="p-company-access__movie-wrap l-inner">
        <div class="p-company-access__movie">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/SeAKrmn_FQk?si=Uh1RL0pKB2v61uud" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div><!-- /.p-company-access__movie-wrap -->
      <div class="p-company-access__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d964.2544221543357!2d120.26971898730001!3d14.824265336129594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33967147aa65f001%3A0xf2bc959ef6401d05!2sCRESC%20Inc.!5e0!3m2!1sja!2sjp!4v1756791074856!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <ul class="p-company-access__images l-inner">
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/ph_img01.png" alt="会社画像">
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/ph_img02.png" alt="会社画像">
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/company/ph_img03.png" alt="会社画像">
        </li>
      </ul>
    </div><!-- /.p-company-access__item -->
  </section><!-- /.p-company-access -->


</div><!-- /.l-wrapper -->

<?php get_footer(); ?>