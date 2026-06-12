<div class="c-breadcrumb <?php if(is_front_page() || is_home()){ echo 'c-breadcrumb--home'; } ?>">
  <div class="c-breadcrumb__inner l-inner">
    <div class="c-breadcrumb__wrap">
      <?php
      if ( function_exists( 'bcn_display' ) ) {
      bcn_display();
      }
      ?>
    </div>
  </div>
</div>