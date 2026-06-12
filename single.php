<?php get_header(); ?>

<div class="l-single l-wrapper">

  <?php
    $cat = get_the_category();
    $cat = $cat[0];
  ?>

  <div class="l-page-head">
    <div class="l-page-head__bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/news/bg_head-pc.png" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/img/news/bg_head-sp.png" alt="事業">
      </picture>
    </div><!-- /.l-page-head__bg -->
    <div class="l-page-head__texts">
      <h1 class="l-page-head__title l-page-head__title--info">
        <span class="l-page-head__ja">お知らせ・活動レポート</span>
        <span class="l-page-head__en">Information & Activity Report</span>
      </h1>
    </div><!-- /.l-page-head__texts -->
  </div><!-- /.l-page-head -->

  <?php echo get_template_part('template-parts/breadcrumb'); ?>

  <div class="l-single-contents">
    <div class="l-single-contents__inner l-inner">
      <?php	while (have_posts()): the_post(); ?>
        <h1 class="l-single-contents__title"><?php the_title(); ?></h1>
        <div class="l-single-contents__meta">
          <?php
            if($cat) {
              echo '<span class="l-single-contents__category ' . $cat->slug . '">' . $cat->cat_name . '</span>';
            }
          ?>
          <time class="l-single-contents__date" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
        </div>
        <div class="l-single-contents__body">
          <?php the_content() ?>
        </div>
        <div class="l-single-nav">
          <div class="l-single-nav__page">
            <?php
              $prev_post = get_previous_post();
              $next_post = get_next_post();
            ?>
            <?php if( $prev_post ): ?>
              <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="l-single-nav__prev">前の記事</a>
            <?php endif; ?>
            <?php if( $next_post ): ?>
              <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="l-single-nav__next">次の記事</a>
            <?php endif; ?>
          </div>
          <div class="l-single-nav__archive">
            <a href="<?php echo esc_url(home_url('/news/')); ?>">記事一覧に戻る</a>
          </div>
        </div><!-- /.l-single-nav -->
      <?php endwhile; ?>
    </div><!-- /.l-single-contents__inner -->
  </div><!-- /.l-single-contents -->

</div><!-- /.l-wrapper -->

<?php get_footer(); ?>