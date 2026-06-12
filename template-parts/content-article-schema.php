<?php
  $link = get_the_permalink($post->ID);
  $title = get_the_title($post->ID);
  $thumbnail_id = get_post_thumbnail_id($post);
  $imageobject = wp_get_attachment_image_src($thumbnail_id, 'full');
  $scm_content = wp_strip_all_tags(get_the_content());
  $scm_content = mb_substr($scm_content, 0, 120, 'UTF-8');
  $ahthor_info = get_field('author_info');
  $datePublished = get_the_date(DATE_ISO8601);
  $dateModified = get_the_date(DATE_ISO8601);
  $logoUrl = get_template_directory_uri() . '/img/logo.svg'; // ロゴ画像のパスを入力
?>

<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Article",
    "mainEntityOfPage":{
      "@type":"WebPage",
      "@id":"<?php echo $link; ?>"
    },
    "headline":"<?php echo $title; ?>",
    "image": {
      "@type": "ImageObject",
      "url": "<?php echo $imageobject[0]; ?>",
      "height": "<?php echo $imageobject[2]; ?>",
      "width": "<?php echo $imageobject[1]; ?>"
    },
    "datePublished": "<?php echo $datePublished; ?>",
    "dateModified": "<?php echo $dateModified; ?>",
    "author": {
      "@type": "Person",
      "name": "<?php the_author(); ?>",
      "url": "<?php echo home_url('/'); ?>"
    },
    "publisher": {
      "@type": "Organization",
      "name": "<?php bloginfo('name') ?>",
      "logo": {
        "@type": "ImageObject",
        "url": "<?php echo $logoUrl ?>",
        "width": 800,
        "height": 109
      }
    },
    "description": "<?php echo $scm_content; ?>..."
  }
</script>