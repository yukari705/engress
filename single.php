<?php get_header(); ?>

<div class="post--blog">
  <div class="section__inner">
    <div class="col1">
      <article>
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <ul class="post__category">
              <?php
              $categories = get_the_category();
              foreach ($categories as $category) : ?>
                <li>
                  <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"> <?php echo $category->name; ?>
                  </a>
                <li>
                <?php
              endforeach; ?>
            </ul>
            <h1 class="post__title"><?php the_title(); ?></h1>
            <div class="post__above">
              <?php wp_social_bookmarking_light_output_e(); ?>
              <p class="post__date"><?php the_time('Y-m-d'); ?></p>
            </div>
            <figure class="post__img"><?php the_post_thumbnail(); ?></figure>
            <div class="post__content"><?php the_content(); ?>
            </div>
        <?php
          endwhile;
        endif;
        ?>
      </article>
      <aside class="recommend-article">
        <h2>おすすめの記事</h2>
      </aside>
    </div><!-- /.col1 -->
    <div class="col2">
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

                  <figure><?php the_post_thumbnail(); ?></figure>

                  <p><?php the_title(); ?></p>
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
    </div><!-- /.col2 -->
  </div><!-- /.section__inner -->
</div><!-- /.post--blog -->

<?php get_footer(); ?>