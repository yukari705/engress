<?php get_header(); ?>

<section class="contact">
    <div class="section__inner">
        <div class="contact-form">
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div><!-- /.contact-form -->
    </div><!-- /.section__inner -->
</section><!-- /.contact -->

<?php get_footer(); ?>