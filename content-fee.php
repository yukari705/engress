<li class="fee-list__item
<?php if (get_sub_field('course_recommend')) :
    echo 'recommend';
endif; ?>">
    <dl>
        <div class="fee-list__recommend
        <?php if (get_sub_field('course_recommend')) :
    echo 'is-show';
endif; ?>"></div>
        <dt class="fee-list__name">
            <?php the_sub_field('course_name'); ?>プラン
        </dt>
        <dd class="fee-list__fee">
            <p><?php echo number_format(get_sub_field('course_fee')); ?>円~</p>
            *月額（税抜価格）
        </dd>
        <?php
        $contents = get_sub_field('course_content');
        if ($contents) : ?>
            <ul class="fee-list__content">
                <?php foreach ($contents as $content) : ?>
                    <li>
                        <?php echo $content; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <p>＊別途ご相談ください</p>
        <?php endif; ?>
    </dl>
</li><!-- /.fee-list__item -->