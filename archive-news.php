<?php get_header(); ?>

<section class="news-archive">
  <div class="section__inner">
    <h2 class="section__title"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?>一覧</h2>
    <?php get_template_part('content-archive-news'); ?>
  </div><!-- /.section__inner -->
</section><!-- /.news-archive -->
<?php get_template_part('pagination'); ?>

<?php get_footer(); ?>