<?php get_header(); ?>

<section class="intro">
  <div class="section__inner">
    <h2>TOEFL学習でこんな悩みありませんか？</h2>
    <ul>
      <li>勉強の習慣が<br>身についていない</li>
      <li>勉強しているはず<br>なのに点数が伸びない</li>
      <li>正しい勉強方法が<br>わからない</li>
    </ul>
    <div class="intro__box">
      <h2>Engressは<br><span>TOEFLに特化したスクール</span>です</h2>
      <p>完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p>
    </div>
  </div><!-- /.section__inner -->
</section><!-- /.intro -->

<section class="features">
  <div class="section__inner">
    <h2 class="section__title">TOEFL対策に特化したEngress3つの強み</h2>
    <ul class="features__list">
      <li class="features__item">
        <div>
          <p class="features__number">特長 １</p>
          <h3>TOEFLに最適化された<br>無駄のないカリキュラム</h3>
          <p>
            TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
          </p>
        </div>
        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/feature01.png" alt=""></figure>
      </li><!-- /.features__item -->
      <li class="features__item">
        <div>
          <p class="features__number">特長 ２</p>
          <h3>日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
          <p>
            Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
          </p>
        </div>
        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/feature02.png" alt=""></figure>
      </li><!-- /.features__item -->
      <li class="features__item">
        <div>
          <p class="features__number">特長 ３</p>
          <h3>平均3ヶ月でTOEFL iBT20点アップ</h3>
          <p>
            Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
          </p>
        </div>
        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/feature03.png" alt=""></figure>
      </li><!-- /.features__item -->
    </ul><!-- /.features__list -->
    <div class="features__fee">
      <p>Engressの料金プランはこちら</p>
      <a class="features__btn" href="">料金を見てみる</a>
    </div><!-- /.features__fee -->
  </div><!-- /.section__inner -->
</section><!-- /.features -->

<section class="cases">
  <div class="section__inner">
    <h2 class="section__title">TOEFL成功事例</h2>
    <ul class="cases__list">
      <?php
      $cases = array('case1', 'case2', 'case3');
      foreach ($cases as $case) :
        if (have_rows($case)) :
          while (have_rows($case)) : the_row();
            get_template_part('content-case');
          endwhile;
        endif;
      endforeach;
      ?>
    </ul><!-- /.cases__list -->

  </div><!-- /.section__inner -->
</section><!-- /.cases -->

<section class="flow">
  <div class="section__inner">
    <h2 class="section__title">ご利用の流れ</h2>
    <ul>
      <li class="flow__item">
        <div class="flow__number"><span>01</span></div>
        <dl>
          <dt>お問い合わせ</dt>
          <div></div>
          <dd>まずはフォームまたはお電話からお申し込みください。</dd>
        </dl>
      </li><!-- /.flow__item -->
      <li class="flow__item">
        <div class="flow__number"><span>02</span></div>
        <dl>
          <dt>ヒアリング</dt>
          <div></div>
          <dd>現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</dd>
        </dl>
      </li><!-- /.flow__item -->
      <li class="flow__item">
        <div class="flow__number"><span>03</span></div>
        <dl>
          <dt>学習プランのご提供</dt>
          <div></div>
          <dd>目標達成のために最適な学習プランをご提案致します。</dd>
        </dl>
      </li><!-- /.flow__item -->
      <li class="flow__item">
        <div class="flow__number"><span>04</span></div>
        <dl>
          <dt>ご入会</dt>
          <div></div>
          <dd>お申込み完了後、レッスンがスタートします。</dd>
        </dl>
      </li><!-- /.flow__item -->
    </ul>
  </div><!-- /.section__inner -->
</section><!-- /.flow -->

<section class="faq">
  <div class="section__inner">
    <h2 class="section__title">よくある質問</h2>
    <ul class="faq__list">
      <li class="faq__item">
        <div class="faq__question">
          <h3>Engressはサラリーマンでも学習を続けられるでしょうか？</h3>
          <span>+</span>
        </div><!-- /.faq__question -->
        <div class="faq__answer is-open">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>
      </li><!-- /.faq__item -->
      <li class="faq__item">
        <div class="faq__question">
          <h3>教材はオリジナルのものを使用しているのでしょうか？</h3>
          <span>+</span>
        </div><!-- /.faq__question -->
        <div class="faq__answer">Engressが独自に作成したオリジナル教材を使用しております。</div>
      </li><!-- /.faq__item -->
      <li class="faq__item">
        <div class="faq__question">
          <h3>講師に日本人はいますか？</h3>
          <span>+</span>
        </div><!-- /.faq__question -->
        <div class="faq__answer">講師は英語を母国語とするネイティブスピーカーのみです。</div>
      </li><!-- /.faq__item -->
      <li class="faq__item">
        <div class="faq__question">
          <h3>TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</h3>
          <span>+</span>
        </div><!-- /.faq__question -->
        <div class="faq__answer">志望校対策プランでは、進学先に合わせたサポートまで包括的に行います。</div>
      </li><!-- /.faq__item -->
    </ul><!-- /.faq__list -->
  </div><!-- /.section__inner -->
</section><!-- /.faq -->

<section class="top-archive">
  <div class="section__inner">
    <div class="blog-archive top">
      <h2>ブログ</h2>
      <?php get_template_part('content-archive-blog'); ?>
    </div><!-- /.blog-archive -->
    <div class="news-archive top">
      <h2>お知らせ</h2>
      <!-- <?php get_template_part('content-archive-blog'); ?> -->
    </div><!-- /.blog-archive -->
  </div><!-- /.section__inner -->
</section><!-- /.top-archive -->

<?php get_footer(); ?>