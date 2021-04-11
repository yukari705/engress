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
<?php get_sidebar(); ?>
    </div><!-- /.col2 -->
  </div><!-- /.section__inner -->
</div><!-- /.post--blog -->

<?php get_footer(); ?>