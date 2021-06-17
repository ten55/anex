<footer class="footer">
    <div class="com-container">
        <a class="footer_logo" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer_logo.png" alt="logo">
        </a>
        <a class="insta-upper" target='_blank' href="https://www.instagram.com/next_face/?hl=ja">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/insta.png" class="d-block w-100" alt="logo">
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
    <div class="copyright">2021 Anex Co,.Ltd.</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>