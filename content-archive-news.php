<ul class="news-archive__list">
    <?php
    $the_query = get_all_posts('news');
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
    ?>
            <li class="news-archive__item">
                <p class="news-archive__date"><?php the_time('Y-m-d'); ?></p>
                <a href="<?php the_permalink(); ?>">
                    <h1 class="news-archive__title"><?php echo wp_trim_words( get_the_title(), 50, '...' ); ?></h1>
                </a>
            </li>
    <?php endwhile;
        wp_reset_postdata();
    endif; ?>
</ul>