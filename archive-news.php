<?php get_header(); ?>

<section class="news-archive">
  <div class="section__inner">
    <h2 class="section__title"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?>
一覧</h2>
    <ul class="news-archive__list">
      <?php
      $the_query = get_all_posts('news');
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
      ?>
          <li class="news-archive__item">
            <p class="news-archive__date"><?php the_time('Y-m-d'); ?></p>
            <a href="<?php the_permalink(); ?>">
              <h1 class="news-archive__title"><?php the_title(); ?></h1>
            </a>
          </li>
      <?php endwhile;
        wp_reset_postdata();
      endif; ?>
    </ul>
  </div><!-- /.section__inner -->
</section><!-- /.news-archive -->
<aside class="pagenation">
  <?php get_pagenation(); ?>
</aside>

<?php get_footer(); ?>