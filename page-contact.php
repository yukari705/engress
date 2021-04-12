<?php get_header(); ?>

<section class="contact">
    <div class="section__inner">
        弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
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