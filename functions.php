<?php
// CSS, jsの読み込み
function my_enqueue_scripts() {
    wp_enqueue_style(
        'style',
        get_template_directory_uri().'/css/style.css',
        array()
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// アイキャッチ画像を利用できるようにする
add_theme_support('post-thumbnails');

    // ヘッダー用のサイズ設定
    add_image_size('masthead', 2560, 440, true);