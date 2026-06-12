<?php get_header() ?>

<div class="l-wrapper">
  <?php echo get_template_part('template-parts/breadcrumb'); ?>
  <main>

    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <?php get_template_part('template-parts/content', 'loop'); ?>
      <?php endwhile; ?>

      <?php
        $args = array(
          'prev_text' => '<<',
          'next_text' => '>>'
        );
        if (paginate_links($args)) {
          echo '<div class="post-pagination">'.paginate_links($args).'</div>';
        }
      ?>

    <?php else: ?>
      <p>投稿はありません。</p>
    <?php endif; ?>

  </main>
</div><!-- /.container -->

<?php get_footer(); ?>