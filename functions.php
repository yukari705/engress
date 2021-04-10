<?php
// CSS, jsの読み込み
function my_enqueue_scripts() {
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/css/style.css',
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


// ブログ、お知らせのBreadcrumbsにアーカイブページの項目を追加
function insert_breadcrumb_item($breadcrumb_trail) {
    if (is_single()) {
        $breadcrumb = new bcn_breadcrumb();
        $breadcrumb->set_title('ブログ');
        $breadcrumb->set_url(home_url('blog'));
        $breadcrumb->set_linked(true);
        $stuck = array_pop($breadcrumb_trail->breadcrumbs); // 「ブログ」を一時退避
        $breadcrumb_trail->breadcrumbs[] = $breadcrumb; // 「ブログ」を追加
        $breadcrumb_trail->breadcrumbs[] = $stuck; // 「ホーム」を戻す
    }
}
add_action('bcn_after_fill', 'insert_breadcrumb_item');


// ブログの全投稿を取得
function get_all_posts() {
    $paged = (int) get_query_var('paged');
    $args = array(
        'posts_per_page' => 10,
        'paged' => $paged,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish'
    );
    if (is_front_page()) {
        $args['posts_per_page'] = 3;
    }
    $all_posts = new WP_Query($args);
    return $all_posts;
}
