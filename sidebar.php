<aside class="relative-article">
    <h2>関連記事</h2>
    <ul class="relative-article__list">
        <?php
        $post_id = $post->ID;
        $cat = get_the_category($post_id);
        $cat_id = $cat[0]->cat_ID;
        $cat_posts = get_posts(array(
            'post_type' => 'post', // 投稿タイプ
            'category' => $cat_id, // カテゴリID
            'posts_per_page' => 3, // 表示件数
            'orderby' => 'date', // 表示順の基準
            'order' => 'DESC', // 昇順・降順
            'exclude' => $post_id // 表示中の投稿を除外
        ));
        $count = count($cat_posts);
        if ($count >= 1) : foreach ($cat_posts as $post) : setup_postdata($post); ?>
                <li>
                    <a class="relative-article__item" href="<?php the_permalink() ?>">
                        <figure><img src="<?php echo get_the_post_thumbnail_url(); ?>"></figure>
                        <p><?php echo wp_trim_words( get_the_title(), 50, '...' ); ?></p>
                    </a>
                </li>
        <?php endforeach;
            wp_reset_postdata();
        endif ?>
    </ul><!-- /.relative-article__list -->
</aside>
<aside class="category-list">
    <h2>カテゴリー</h2>
    <ul class="category-list__list">
        <?php
        $categories = get_categories();
        foreach ($categories as $category) : ?>
            <li class="category-list__item">
                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                    <?php
                    echo $category->name . ' (' .
                        $category->count . ')'; ?>
                </a>
            </li><!-- /.category-list__item -->
        <?php endforeach; ?>
    </ul><!-- /.category-list__list -->
</aside><!-- /.category-list -->