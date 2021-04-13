            <li>
                <a class="blog-archive__item" href="<?php the_permalink(); ?>">
                    <figure class="blog-archive__img"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></figure>
                    <span class="blog-archive__category">
                        <?php
                        $categories = get_the_category();
                        $category = $categories[0];
                        echo $category->name; ?>
                    </span>
                    <div class="blog-archive__body">
                        <p class="blog-archive__date"><?php the_time('Y-m-d'); ?></p>
                        <h1 class="blog-archive__title"><?php the_title(); ?></h1>
                        <?php if (is_page('blog') || is_archive()) : ?>
                            <p><?php echo get_the_excerpt(); ?></p>
                        <?php endif; ?>
                    </div>
                </a>
            </li>