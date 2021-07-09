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
    <div class="bt_contact">
        <a href="#">お問い合せ</a>
    </div>
    <div class="copyright">©︎ 2021 Anex, Inc.</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>