<?php get_header(); ?>

<section class="blog-archive">
    <div class="section__inner">
        <h2 class="section__title">新着一覧</h2>
        <?php get_template_part('content-archive-blog'); ?>
    </div><!-- /.section__inner -->
</section><!-- /.blog-archive -->

<?php get_template_part('pagination'); ?>

<?php get_footer(); ?>