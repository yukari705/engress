<?php get_header(); ?>

<section class="blog-archive">
    <div class="section__inner">
        <h2 class="section__title">新着一覧</h2>
            <?php get_template_part('content-archive-blog'); ?>
    </div><!-- /.section__inner -->
</section><!-- /.blog-archive -->
<aside class="pagenation">
    <?php
    if ($the_query->max_num_pages > 1) :
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%/',
            'current' => max(1, $paged),
            'total' => $the_query->max_num_pages,
            'prev_next' => false
        ));
    endif;
    ?>
</aside>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>