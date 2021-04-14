<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="format-detection" content="telephone=no">

  <title><?php bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>" />

  <!-- RESET CSS -->
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/ress/dist/ress.min.css">

  <!-- CSS -->
  <?php if (is_page('fee')) : ?>
    <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
  <?php endif; ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class($class); ?>>
  <header class="header">
    <div class="header__inner">
      <div class="header__left">
        <a class="header__logo" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
        <nav class="header__nav">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'place_global',
              'container' => false
            )
          );
          ?>
        </nav>
      </div><!-- /.header__left -->
      <div class="header__right">
        <div class="info">
          <p class="info--hour">平日08:00〜20:00</p>
          <p class="info--tel">0123-456-7890</p>
        </div>
        <a class="header__btn--request" href="<?php echo esc_url(home_url('contact')); ?>">資料請求</a>
        <a class="header__btn--contact" href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a>
      </div><!-- /.header__right -->
      <button type="button" id="js-hamburger" class="btn--hamburger" area-controls="js-header-nav" area-expanded="false" area-label="メニューを開閉する">
        <span class="hamburger__line"></span>
      </button><!-- /.btn--hamburger -->
    </div><!-- /.header__inner -->
  </header>

  <?php if (is_front_page()) : ?>
    <!-- FRONT PAGE -->
    <section class="top-masthead">
      <div class="top-masthead__content">
        <h1>TOEFL対策はEngress</h1>
        <p>日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p>
        <a class="btn--request" href="<?php echo esc_url(home_url('contact')); ?>">資料請求</a>
        <a class="link" href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a>
      </div><!-- /.top-masthead__content -->
    </section><!-- /.masthead -->

  <?php else : ?>
    <section class="sub-masthead">
      <?php if (!is_single()) : ?>
        <div class="sub-masthead__title">
          <figure class="sub-masthead__img">
            <?php if (is_post_type_archive('news')) : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/masthead/news.png" alt="">
            <?php elseif (is_archive()) :
              $page_id = get_page_by_path('blog')->ID;
              echo get_the_post_thumbnail($page_id);
            ?>
            <?php elseif (is_page('thanks')) :
              $page_id = get_page_by_path('contact')->ID;
              echo get_the_post_thumbnail($page_id);
            ?>
            <?php else :
              the_post_thumbnail('masthead');
            endif;
            ?>
          </figure>
          <h1><?php echo get_main_title(); ?></h1>
        </div><!-- /.sub-masthead__title -->
      <?php endif; ?>
      <div class="sub-masthead__breadcrumbs">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
      </div><!-- /.sub-masthead__breadcrumbs -->
    </section><!-- /.sub-masthead -->
  <?php endif; ?>