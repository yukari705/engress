<?php get_header(); ?>

<section class="fee-structure">
  <div class="section__inner">
    <h2 class="section__title">料金体系</h2>
    <div class="fee-structure__formula">
      <div>入会金 39,800円</div><span>+</span>
      <div>月額費用</div>
    </div>
    <p>
      Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
    </p>
  </div><!-- /.section__inner -->
</section><!-- /.fee-structure -->

<section class="fee-list">
  <div class="section__inner">
    <h2 class="section__title">料金表</h2>
    <ul class="fee-list__list">
      <?php
      $courses = array('course1', 'course2', 'course3', 'course4');
      foreach ($courses as $course) :
        if (have_rows($course)) :
          while (have_rows($course)) : the_row();
            get_template_part('content-fee');
          endwhile;
        endif;
      endforeach;
      ?>
    </ul><!-- /.fee-list__list -->
  </div><!-- /.section__inner -->
</section><!-- /.fee-list-->

<?php get_footer(); ?>