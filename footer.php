<footer class="footer">
    <div class="com-container">
        <a class="footer_logo" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="logo">
        </a>
        <div class="nav">
            <div class="links">
                <?php
                $args = array(
                    'menu' => 'global-navigation w-900',
                    'menu_class' => 'nav_ul flex-column flex-sm-row',
                    'container' => false,
                );
                wp_nav_menu($args);
                ?>
            </div>
        </div>
    </div>
    <p class="pagetop" style="display: block;">
        <a href="#">
            <i class="fas fa-chevron-up"></i>
        </a>
    </p>
    <a id="bt_contact" class="bt_contact" href="<?php echo esc_url(get_permalink(get_page_by_path('contact')->ID)); ?>">
        お問い合せ
    </a>
    <script>
        (function($) {
            if ($('main').hasClass('contact') == true) {
                // お問合せページではお問合せボタンを非表示にする
                $('#bt_contact').css('display', 'none');
                $('#bt_contact').css('position', 'unset');
            }
        })(jQuery);
    </script>
    <div class="copyright">©︎ 2021 Anex, Inc.</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>