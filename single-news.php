<?php get_header(); ?>

<div class="post--news">
    <div class="section__inner">
        <article>
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <h1 class="post__title"><?php the_title(); ?></h1>
                    <p class="post__date"><?php the_time('Y-m-d'); ?></p>
                    <div class="post__content"><?php the_content(); ?></div>
            <?php
                endwhile;
            endif;
            ?>
        </article>
    </div><!-- /.section__inner -->
</div><!-- /.post--news -->


<?php get_footer(); ?>