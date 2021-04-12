<?php
// CSS, jsの読み込み
function my_enqueue_scripts()
{
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


// ページのタイトルを取得
function get_main_title()
{
    if (is_post_type_archive('news')) :
        return get_post_type_object(get_post_type())->label;
    elseif (is_archive()) :
        $page_id = get_page_by_path('blog')->ID;
        return get_the_title($page_id);
    elseif (is_page('contact') || is_page('thanks')) :
        $page_id = get_page_by_path('contact')->ID;
        return get_the_title($page_id) . '・資料請求';
    elseif (is_page()) :
        return get_the_title();
    endif;
}


// ブログのBreadcrumbsにアーカイブページの項目を追加
function insert_breadcrumb_item($breadcrumb_trail)
{
    if (
        (is_single() && !is_singular('news')) ||
        is_archive() && !is_post_type_archive('news')
    ) {
        $breadcrumb = new bcn_breadcrumb();
        $breadcrumb->set_title('ブログ');
        $breadcrumb->set_url(home_url('blog'));
        $breadcrumb->set_linked(true);
        $stuck = array_pop($breadcrumb_trail->breadcrumbs); // 「ホーム」を一時退避
        $breadcrumb_trail->breadcrumbs[] = $breadcrumb; // 「ブログ」を追加
        $breadcrumb_trail->breadcrumbs[] = $stuck; // 「ホーム」を戻す
    }
}
add_action('bcn_after_fill', 'insert_breadcrumb_item');


// 投稿を取得
function get_all_posts($post_type)
{
    $paged = (int) get_query_var('paged');
    $args = array(
        'posts_per_page' => 10,
        'paged' => $paged,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => $post_type,
        'post_status' => 'publish'
    );
    if (is_front_page()) {
        $args['posts_per_page'] = 3;
    }
    $all_posts = new WP_Query($args);
    return $all_posts;
}


// 抜粋文のデフォルト文字数の定義
function cms_excerpt_more()
{
    return '...';
}
add_filter('excerpt_more', 'cms_excerpt_more');
function cms_excerpt_length()
{
    return 60;
}
add_filter('excerpt_length', 'cms_excerpt_length', 999);
