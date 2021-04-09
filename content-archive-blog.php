<ul>
    <?php
    $paged = (int) get_query_var('paged');
    $args = array(
        'posts_per_page' => 10,
        'paged' => $paged,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish'
    );
    if (is_front_page()) :
        $args['posts_per_page'] = 3;
    endif;
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
    ?>
            <li>
                <a class="blog-archive__item" href="<?php the_permalink(); ?>">
                    <figure class="blog-archive__img">
                        <?php the_post_thumbnail(); ?></figure>
                    <span class="blog-archive__category">
                        <?php
                        $categories = get_the_category();
                        $category = $categories[0];
                        echo $category->name; ?>
                    </span>
                    <div class="blog-archive__body">
                        <p class="blog-archive__date"><?php the_time('Y-m-d'); ?></p>
                        <h1 class="blog-archive__title"><?php the_title(); ?></h1>
                        <?php if (is_page('blog')): ?>
                        <p><?php echo get_the_excerpt(); ?></p>
                        <?php endif; ?>
                    </div>
                </a>
            </li>
    <?php endwhile;
    endif; ?>
</ul>