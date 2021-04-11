<?php get_header(); ?>

<section class="blog-archive">
    <div class="section__inner">
        <h2 class="section__title">
            <?php
            if (is_page('blog')) :
                echo '新着';
            elseif (is_archive()) :
                $category =  get_the_category();
                echo $category[0]->cat_name;
            endif; ?>一覧
        </h2>
        <ul>
            <?php
            if (is_page('blog')) :
                $the_query = get_all_posts('post');
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                        get_template_part('content-archive-blog');
                    endwhile;
                    wp_reset_postdata();
                endif;
            elseif (is_archive()) :
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        get_template_part('content-archive-blog');
                    endwhile;
                    wp_reset_postdata();
                endif;
            endif; ?>
        </ul>
    </div><!-- /.section__inner -->
</section><!-- /.blog-archive -->

<?php get_template_part('pagination'); ?>

<?php get_footer(); ?>