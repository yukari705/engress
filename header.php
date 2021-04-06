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

  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header__left">
        <a class="header__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
        <nav>
        </nav>
      </div><!-- /.header__left -->
      <div class="header__right">
        <div class="header__info">
          <p class="header__info--hour">平日08:00〜20:00</p>
          <p class="header__info--tel">0123-456-7890</p>
        </div>
        <a class="header__btn--contact" href="">お問い合わせ</a>
        <a class="header__btn--request" href="">資料請求</a>
      </div><!-- /.header__right -->
    </div><!-- /.header__inner -->
  </header>