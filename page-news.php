<?php get_header(); ?>

<div class="p-news l-wrapper">

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

  <div class="c-sec-heading p-news__heading">
    <h2 class="c-sec-heading__en">Information & Activity Report</h2>
    <p class="c-sec-heading__ja">お知らせ・活動レポート</p>
  </div><!-- /.c-sec-heading -->

  <div class="p-news-contents">
    <div class="p-news-contents__inner l-inner">
      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
          'paged' => $paged,
          'posts_per_page' => 12,
          'post_status' => 'publish',
          'post_type' => 'post',
          'category_name' => 'information, activity',
          'orderby' => 'date',
          'order' => 'DESC'
      );
      $the_query = new WP_Query( $args );
      if ( $the_query->have_posts() ) :
      ?>
        <ul class="l-news__list">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php
            $excerpt_title = get_field('excerpt_title');
            $excerpt_content = get_field('excerpt_content');
          ?>
            <li class="l-news__item">
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
      <div class="l-pagination">
      <?php 
      if ($the_query->max_num_pages > 1) {
          echo paginate_links(array(
              'base' => get_pagenum_link(1) . '%_%',
              'format' => 'page/%#%/',
              'current' => max(1, $paged),
              'mid_size' => 1,
              'total' => $the_query->max_num_pages,
              'prev_next' => false,
          ));
      }
      wp_reset_postdata();
      ?>
      </div><!-- /.l-pagination -->
    </div><!-- /.p-news-contents__inner -->
  </div><!-- /.p-news-contents -->

</div><!-- /.l-wrapper -->

<?php get_footer(); ?>