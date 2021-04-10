<ul>
    <?php
    $the_query = get_all_posts('post');
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
    ?>
        <li>
            <a class="blog-archive__item" href="<?php the_permalink(); ?>">
                <figure class="blog-archive__img"><?php the_post_thumbnail(); ?></figure>
                <span class="blog-archive__category">
                    <?php
                    $categories = get_the_category();
                    $category = $categories[0];
                    echo $category->name; ?>
                </span>
                <div class="blog-archive__body">
                    <p class="blog-archive__date"><?php the_time('Y-m-d'); ?></p>
                    <h1 class="blog-archive__title"><?php the_title(); ?></h1>
                    <?php if (is_page('blog')) : ?>
                        <p><?php echo get_the_excerpt(); ?></p>
                    <?php endif; ?>
                </div>
            </a>
        </li>
    <?php endwhile;
        wp_reset_postdata();
    endif; ?>
</ul>