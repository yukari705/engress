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


// ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
    array(
        'place_global' => 'Global',
        'place_footer' => 'Footer-nav',
    )
);

// ウィジェット機能を有効化
if (function_exists('register_sidebar')) {
    register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'sidebar',
    'before_widget' => '<aside>',
    'after_widget' => '</aside>',
    'before_title' => '<h2 class="sidebar__title">',
    'after_title' => '</h2>'
    ));
}