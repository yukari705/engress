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
            <figure class="post__img"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></figure>
            <div class="post__content"><?php the_content(); ?>
            </div>
        <?php
          endwhile;
        endif;
        ?>
      </article>
      <aside class="recommend-article">
        <h2>おすすめの記事</h2>
        <ul class="blog-archive tag">
          <?php
          $tag_posts = get_posts(array(
            'post_type' => 'post', // 投稿タイプ
            'tag'    => 'pickup', // タグをスラッグで指定する場合
            'posts_per_page' => 3, // 表示件数
            'orderby' => 'date', // 表示順の基準
            'order' => 'DESC' // 昇順・降順
          ));
          if ($tag_posts) : foreach ($tag_posts as $post) : setup_postdata($post); ?>
              <?php get_template_part('content-archive-blog'); ?>
          <?php endforeach;
          endif;
          wp_reset_postdata(); ?>
        </ul>
      </aside>
    </div><!-- /.col1 -->
    <div class="col2">
      <?php get_sidebar(); ?>
    </div><!-- /.col2 -->
  </div><!-- /.section__inner -->
</div><!-- /.post--blog -->

<?php get_footer(); ?>