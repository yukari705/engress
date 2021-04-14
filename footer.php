<footer class="footer">
    <?php if (!is_page('contact') && !is_page('thanks')) : ?>
        <div class="footer__banner">
            <p>まずは無料で資料請求から</p>
            <a class="btn--request" href="<?php echo esc_url(home_url('contact')); ?>">資料請求</a>
            <a class="link" href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a>
        </div><!-- /.footer__banner -->
        <div class="footer__tel">
            お電話でのお問い合わせはこちら<br class="sm">
            <span>0123-456-7890</span>
            <p>平日 08:00~20:00</p>
        </div><!-- /.footer__tel -->
    <?php endif; ?>
    <div class="footer__nav">
        <div class="footer__inner">
            <nav>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'place_footer',
                        'container' => false
                    )
                );
                ?>
            </nav>
            <div class="footer__right">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></figure>
                <div class="footer__info">
                    <p class="info--tel">0123-456-7890</p>
                    <p class="info--hour">平日08:00〜20:00</p>
                </div>
            </div><!-- /.footer__right -->
        </div><!-- /.footer__inner -->
    </div><!-- /.footer__nav -->
    <div class="footer__copyright">
        <p><small>&copy; 2020 Engress.</small></p>
    </div><!-- /.footer__copyright -->
</footer>
<?php if (is_page('fee')) : ?>
    <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>

</html>