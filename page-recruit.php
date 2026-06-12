<?php get_header(); ?>

<div class="p-recruit l-wrapper">

  <div class="l-page-head">
    <div class="l-page-head__bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/recruit/bg_head-pc.png" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/bg_head-sp.png" alt="事業">
      </picture>
    </div><!-- /.l-page-head__bg -->
    <div class="l-page-head__texts">
      <h1 class="l-page-head__title">
        <span class="l-page-head__ja">採用情報</span>
        <span class="l-page-head__en">Recruitment information</span>
      </h1>
    </div><!-- /.l-page-head__texts -->
  </div><!-- /.l-page-head -->

  <?php echo get_template_part('template-parts/breadcrumb'); ?>

  <section class="p-recruit-intro">
    <div class="p-recruit-intro__inner l-inner">
      <div class="c-sec-heading p-recruit-intro__heading">
        <h2 class="c-sec-heading__en">RECRUIT</h2>
        <p class="c-sec-heading__ja">採用情報</p>
      </div><!-- /.c-sec-heading -->
      <div class="p-recruit-intro__contents">
        <div class="p-recruit-intro__item">
          <p class="p-recruit-intro__text">仲間がいれば<br>仕事は楽しい</p>
          <div class="p-recruit-intro__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/intro_img01.png" alt="">
          </div>
        </div><!-- /.p-recruit-intro__item -->
        <div class="p-recruit-intro__item">
          <p class="p-recruit-intro__text">仕事が楽しければ<br>人生は豊かになる</p>
          <div class="p-recruit-intro__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/intro_img02.png" alt="">
          </div>
        </div><!-- /.p-recruit-intro__item -->
      </div><!-- /.p-recruit-intro__contents -->
    </div><!-- /.p-recruit-intro__inner -->
  </section><!-- /.p-recruit-intro -->

  <section class="p-recruit-concept">
    <div class="p-recruit-concept__slide recruit-concept-swiper">
      <ul class="p-recruit-concept__list swiper-wrapper">
        <li class="p-recruit-concept__item swiper-slide">
          <div class="p-recruit-concept__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/concept_img01.jpg" alt="背景">
          </div>
        </li>
        <li class="p-recruit-concept__item swiper-slide">
          <div class="p-recruit-concept__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/concept_img02.jpg" alt="背景">
          </div>
        </li>
        <li class="p-recruit-concept__item swiper-slide">
          <div class="p-recruit-concept__img top">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/concept_img03.png" alt="背景">
          </div>
        </li>
      </ul>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <p class="p-recruit-concept__text">私たちと一緒に、<br class="u-pc">お客様に喜ばれるものづくり、<br class="u-sp">サービスに取り組んでみませんか？</p>
    </div><!-- /.p-recruit-concept__slide -->
  </section><!-- /.p-recruit-concept -->

  <section class="p-recruit-talent">
    <div class="p-recruit-talent__inner l-inner">
      <div class="c-sec-heading p-recruit-talent__heading">
        <h2 class="c-sec-heading__en">TALENT</h2>
        <p class="c-sec-heading__ja">求める人物像</p>
      </div><!-- /.c-sec-heading -->
      <ul class="p-recruit-talent__list">
        <li class="p-recruit-talent-item">
          <div class="p-recruit-talent-item__contents">
            <div class="p-recruit-talent-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/talent_img01.png" alt="協調性がある">
            </div>
            <div class="p-recruit-talent-item__texts">
              <p class="p-recruit-talent-item__title">協調性がある</p>
              <p class="p-recruit-talent-item__text u-pc">ただ単に同僚と仲良くするだけでなく、立場や考え方が違う人とも協調し、相手を尊重しながら意見をまとめることのできる方。自身の感情を落ち着いてコントロールし、助け合いとルールを大切にしながら、良好な人間関係とチームワークで組織の成果をあげられる方を応援します。</p>
            </div>
          </div><!-- /.p-recruit-talent-item__contents -->
          <p class="p-recruit-talent-item__text u-sp">ただ単に同僚と仲良くするだけでなく、立場や考え方が違う人とも協調し、相手を尊重しながら意見をまとめることのできる方。自身の感情を落ち着いてコントロールし、助け合いとルールを大切にしながら、良好な人間関係とチームワークで組織の成果をあげられる方を応援します。</p>
        </li>
        <li class="p-recruit-talent-item">
          <div class="p-recruit-talent-item__contents">
            <div class="p-recruit-talent-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/talent_img02.png" alt="挑戦することを恐れない">
            </div>
            <div class="p-recruit-talent-item__texts">
              <p class="p-recruit-talent-item__title">挑戦することを恐れない</p>
              <p class="p-recruit-talent-item__text u-pc">「挑戦」とは、まだ見ぬ世界に一歩踏み出すこと。 最初は不安や失敗もあるかもしれませんが、少しずつでも前に進むことで確実に成長していけます。 「失敗」は学びのはじまりです。何がうまくいかなかったかを見つめ直し、「次はどうするか」を考えることで、次の一歩がより確かなものになります。 そんなふうに「挑戦」を重ねていくことで、経験が自分の強みになり大きな成長につながります。 私たちは、「勇気を持って一歩を踏み出せる人」を応援します。</p>
            </div>
          </div><!-- /.p-recruit-talent-item__contents -->
          <p class="p-recruit-talent-item__text u-sp">挑戦」とは、まだ見ぬ世界に一歩踏み出すこと。 最初は不安や失敗もあるかもしれませんが、少しずつでも前に進むことで確実に成長していけます。 「失敗」は学びのはじまりです。何がうまくいかなかったかを見つめ直し、「次はどうするか」を考えることで、次の一歩がより確かなものになります。 そんなふうに「挑戦」を重ねていくことで、経験が自分の強みになり大きな成長につながります。 私たちは、「勇気を持って一歩を踏み出せる人」を応援します。</p>
        </li>
        <li class="p-recruit-talent-item">
          <div class="p-recruit-talent-item__contents">
            <div class="p-recruit-talent-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/talent_img03.png" alt="向上心・発想力がある">
            </div>
            <div class="p-recruit-talent-item__texts">
              <p class="p-recruit-talent-item__title">向上心・発想力がある</p>
              <p class="p-recruit-talent-item__text u-pc">現状にとらわれず、新しい知識や技術を意欲的に吸収して自分を磨き続け、固定観念にしばられることなく、柔軟な発想で課題を前向きに解決へ導ける方。新しい仕組みづくりを楽しみながら、多様な経験を通して自分の可能性を広げ、そして何よりも「好奇心にあふれている」そんな方を応援します。</p>
            </div>
          </div><!-- /.p-recruit-talent-item__contents -->
          <p class="p-recruit-talent-item__text u-sp">現状にとらわれず、新しい知識や技術を意欲的に吸収して自分を磨き続け、固定観念にしばられることなく、柔軟な発想で課題を前向きに解決へ導ける方。新しい仕組みづくりを楽しみながら、多様な経験を通して自分の可能性を広げ、そして何よりも「好奇心にあふれている」そんな方を応援します。</p>
        </li>
      </ul>
    </div><!-- /.p-recruit-talent__inner -->
  </section><!-- /.p-recruit-talent -->

  <section class="p-recruit-data">
    <div class="p-recruit-data__inner l-inner">
      <div class="c-sec-heading p-recruit-data__heading">
        <h2 class="c-sec-heading__en">DATA IN NUMBERS</h2>
        <p class="c-sec-heading__ja">数字でみるエヌテックス</p>
      </div><!-- /.c-sec-heading -->
      <ul class="p-recruit-data__list">
        <li class="p-recruit-data-item">
          <p class="p-recruit-data-item__title"><span>従業員数</span></p>
          <div class="p-recruit-data-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/data_img01.png" alt="従業員数">
          </div>
          <p class="p-recruit-data-item__text"><span class="large">79</span><span class="small">名</span></p>
          <p class="p-recruit-data-item__desc">（内、派遣スタッフ11名）<br>※2026年6月1日時点</p>
        </li>
        <li class="p-recruit-data-item">
          <p class="p-recruit-data-item__title"><span>従業員男女比率</span></p>
          <div class="p-recruit-data-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/data_img02.png" alt="従業員男女比率">
          </div>
          <p class="p-recruit-data-item__text">男37<span class="small">%</span><br>女63<span class="small">%</span></p>
        </li>
        <li class="p-recruit-data-item">
          <p class="p-recruit-data-item__title"><span>年間休日数</span></p>
          <div class="p-recruit-data-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/data_img03.png" alt="年間休日数">
          </div>
          <p class="p-recruit-data-item__text">125<span class="small">日</span></p>
          <p class="p-recruit-data-item__desc">（2025年）</p>
        </li>
        <li class="p-recruit-data-item">
          <p class="p-recruit-data-item__title"><span>有給取得率</span></p>
          <div class="p-recruit-data-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/data_img04.png" alt="有給取得率">
          </div>
          <p class="p-recruit-data-item__text">90.1<span class="small">%</span></p>
          <p class="p-recruit-data-item__desc small">（付与日数:1,262日 取得日数：1,137日）<br><span>（対象期間：2024年3月11日～2025年3月10日）</span></p>
        </li>
        <li class="p-recruit-data-item">
          <p class="p-recruit-data-item__title"><span>平均残業時間</span></p>
          <div class="p-recruit-data-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/data_img05.png" alt="平均残業時間">
          </div>
          <p class="p-recruit-data-item__text">23.8<span class="small">分</span></p>
          <p class="p-recruit-data-item__desc">正規社員1人/日あたり</p>
        </li>
        <li class="p-recruit-data-item">
          <p class="p-recruit-data-item__title"><span>女性管理職</span></p>
          <div class="p-recruit-data-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/data_img06.png" alt="女性管理職">
          </div>
          <p class="p-recruit-data-item__text">実績あり</p>
        </li>
        <li class="p-recruit-data-item">
          <p class="p-recruit-data-item__title"><span>育児休業取得率</span></p>
          <div class="p-recruit-data-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/data_img07.png" alt="育児休業取得率">
          </div>
          <p class="p-recruit-data-item__text">100<span class="small">%</span></p>
        </li>
        <li class="p-recruit-data-item">
          <p class="p-recruit-data-item__title"><span>男性の育休取得実績</span></p>
          <div class="p-recruit-data-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/data_img08.png" alt="男性の育休取得実績">
          </div>
          <p class="p-recruit-data-item__text">あり</p>
        </li>
        <li class="p-recruit-data-item">
          <p class="p-recruit-data-item__title"><span>介護休業取得実績</span></p>
          <div class="p-recruit-data-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/data_img09.png" alt="介護休業取得実績">
          </div>
          <p class="p-recruit-data-item__text">あり</p>
        </li>
      </ul>
    </div><!-- /.p-recruit-data__inner -->
  </section><!-- /.p-recruit-data -->

  <section class="p-recruit-interview">
    <div class="p-recruit-interview__inner l-inner">
      <div class="c-sec-heading p-recruit-interview__heading">
        <h2 class="c-sec-heading__en">INTERVIEW</h2>
        <p class="c-sec-heading__ja">先輩インタビュー</p>
      </div><!-- /.c-sec-heading -->
      <ul class="p-recruit-interview__list">
        <?php
          $args = array(
            'post_type' => 'post',
            'p' => 217, 
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $interview_belong = get_field('interview_belong');
          $interview_year = get_field('interview_year');
          $interview_lead = get_field('interview_lead');
          $interview_text = get_field('interview_excerpt');
        ?>
          <li class="p-recruit-interview-item">
            <div class="p-recruit-interview-item__contents">
              <div class="p-recruit-interview-item__img">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="p-recruit-interview-item__texts">
                <p class="p-recruit-interview-item__title"><?php the_title(); ?></p>
                <p class="p-recruit-interview-item__belong"><span>所属：</span><?php echo $interview_belong; ?></p>
                <p class="p-recruit-interview-item__year"><span>入社年：</span><?php echo $interview_year; ?></p>
                <p class="p-recruit-interview-item__lead"><?php echo $interview_lead; ?></p>
                <p class="p-recruit-interview-item__text"><?php echo $interview_text; ?></p>
              </div>
            </div>
            <div class="p-recruit-interview-item__more">
              <a href="<?php the_permalink(); ?>" class="c-btn-more">
                <span class="c-btn-more__text">MORE</span>
                <div class="c-btn-more__icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_more-blue.svg" alt="more">
                </div>
              </a>
            </div>
          </li>
        <?php
          endwhile;
          endif;
          wp_reset_postdata();
        ?>
        <?php
          $args = array(
            'post_type' => 'post',
            'p' => 225, 
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $interview_belong = get_field('interview_belong');
          $interview_year = get_field('interview_year');
          $interview_lead = get_field('interview_lead');
          $interview_text = get_field('interview_excerpt');
        ?>
          <li class="p-recruit-interview-item">
            <div class="p-recruit-interview-item__contents">
              <div class="p-recruit-interview-item__img">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="p-recruit-interview-item__texts">
                <p class="p-recruit-interview-item__title"><?php the_title(); ?></p>
                <p class="p-recruit-interview-item__belong"><span>所属：</span><?php echo $interview_belong; ?></p>
                <p class="p-recruit-interview-item__year"><span>入社年：</span><?php echo $interview_year; ?></p>
                <p class="p-recruit-interview-item__lead"><?php echo $interview_lead; ?></p>
                <p class="p-recruit-interview-item__text"><?php echo $interview_text; ?></p>
              </div>
            </div>
            <div class="p-recruit-interview-item__more">
              <a href="<?php the_permalink(); ?>" class="c-btn-more">
                <span class="c-btn-more__text">MORE</span>
                <div class="c-btn-more__icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_more-blue.svg" alt="more">
                </div>
              </a>
            </div>
          </li>
        <?php
          endwhile;
          endif;
          wp_reset_postdata();
        ?>
        <?php
          $args = array(
            'post_type' => 'post',
            'p' => 194, 
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $interview_belong = get_field('interview_belong');
          $interview_year = get_field('interview_year');
          $interview_lead = get_field('interview_lead');
          $interview_text = get_field('interview_excerpt');
        ?>
          <li class="p-recruit-interview-item">
            <div class="p-recruit-interview-item__contents">
              <div class="p-recruit-interview-item__img">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="p-recruit-interview-item__texts">
                <p class="p-recruit-interview-item__title"><?php the_title(); ?></p>
                <p class="p-recruit-interview-item__belong"><span>所属：</span><?php echo $interview_belong; ?></p>
                <p class="p-recruit-interview-item__year"><span>入社年：</span><?php echo $interview_year; ?></p>
                <p class="p-recruit-interview-item__lead"><?php echo $interview_lead; ?></p>
                <p class="p-recruit-interview-item__text"><?php echo $interview_text; ?></p>
              </div>
            </div>
            <div class="p-recruit-interview-item__more">
              <a href="<?php the_permalink(); ?>" class="c-btn-more">
                <span class="c-btn-more__text">MORE</span>
                <div class="c-btn-more__icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_more-blue.svg" alt="more">
                </div>
              </a>
            </div>
          </li>
        <?php
          endwhile;
          endif;
          wp_reset_postdata();
        ?>
      </ul>
    </div><!-- /.p-recruit-interview__inner -->
  </section><!-- /.p-recruit-interview -->

  <section class="p-recruit-activity">
    <div class="p-recruit-activity__inner l-inner">
      <div class="c-sec-heading p-recruit-activity__heading">
        <h2 class="c-sec-heading__en">ACTIVITY</h2>
        <p class="c-sec-heading__ja">活動レポート</p>
      </div><!-- /.c-sec-heading -->
      <div class="p-recruit-activity__contents-wrap">
        <div class="p-recruit-activity__contents recruit-activity-swiper">
          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
              'paged' => $paged,
              'posts_per_page' => 3,
              'post_status' => 'publish',
              'post_type' => 'post',
              'category_name' => 'activity',
              'orderby' => 'date',
              'order' => 'DESC'
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) :
          ?>
            <ul class="l-news__list p-recruit-activity__list swiper-wrapper">
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <?php
                $excerpt_title = get_field('excerpt_title');
                $excerpt_content = get_field('excerpt_content');
              ?>
                <li class="l-news__item p-recruit-activity__item swiper-slide">
                  <a href="<?php the_permalink(); ?>">
                    <div class="l-news__img">
                      <?php if(has_post_thumbnail()):
                        the_post_thumbnail();
                        else:
                      ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.jpg" alt="no image">
                      <?php endif; ?>
                    </div>
                    <div class="l-news__body">
                      <div class="l-news__meta">
                        <?php
                          $cat = get_the_category();
                          $cat = $cat[0];
                          if($cat) {
                            echo '<span class="l-news__category ' . $cat->slug . '">' . $cat->cat_name . '</span>';
                          }
                        ?>
                      </div>
                      <p class="l-news__title">
                        <?php
                          if($excerpt_title) {
                            echo $excerpt_title;
                          } else {
                            the_title();
                          }
                        ?>
                      </p>
                      <p class="l-news__text">
                        <?php
                        if($excerpt_content) {
                          $post_content = $excerpt_content;
                        } else {
                          $post_content = $post->post_content;
                        }
                        if(mb_strlen($post_content, 'UTF-8')>120){
                          $content= mb_substr(strip_tags($post_content), 0, 120, 'UTF-8');
                          echo $content.'…';
                        }else{
                          echo strip_tags($post_content);
                        }
                        ?>
                      </p>
                    </div>
                  </a>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php endif;  ?>
        </div><!-- /.p-recruit-activity__contents -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div><!-- /.p-recruit-activity__contents-wrap -->
      <div class="c-btn-more__more p-recruit-activity__more c-btn-more--wh">
        <?php
        $category = get_category_by_slug('activity');
        $category_link = get_category_link($category->term_id);
        ?>
        <a href="<?php echo esc_url( $category_link ); ?>" class="c-btn-more">
          <span class="c-btn-more__text">活動レポート一覧</span>
          <div class="c-btn-more__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_more-blue.svg" alt="more">
          </div>
        </a>
      </div>
    </div><!-- /.p-recruit-activity__inner -->
  </section><!-- /.p-recruit-activity -->

  <section class="p-recruit-entry">
    <a href="<?php echo esc_url(home_url('/545/')); ?>">
      <div class="p-recruit-entry__inner">
        <div class="p-recruit-entry__contents">
          <div class="p-recruit-entry__texts">
            <p class="p-recruit-entry__title">ENTRY</p>
            <p class="p-recruit-entry__text">応募はこちらから</p>
          </div>
        </div>
      </div>
    </a>
  </section><!-- /.p-recruit-entry -->

</div><!-- /.l-wrapper -->

<?php get_footer(); ?>