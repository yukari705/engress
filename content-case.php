<li class="cases__item">
    <p class="cases__overview">
        <?php the_sub_field('overview'); ?>
    </p>
    <figure class="cases__img">
        <?php
        $image_id = get_sub_field('image');
        echo wp_get_attachment_image($image_id);
        ?>
    </figure>
    <p class="cases__profession">
        <?php the_sub_field('profession'); ?>
    </p>
    <p class="cases__name">
        <?php the_sub_field('name'); ?>さん
    </p>
    <p class="cases__score">
        <?php the_sub_field('duration'); ?>ヶ月で
        TOEFL
        <?php the_sub_field('score_before'); ?>→
        <?php the_sub_field('score_after'); ?>点
    </p>
</li><!-- /.cases__item -->