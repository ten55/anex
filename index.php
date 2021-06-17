<?php get_header(); ?>

<main class="news">
    <div class="box_header">
        <div class="title mincho">
            <p>NEWS</p>
        </div>
    </div>

    <div class="com-container">
        <?php if (is_singular()) : ?>
            <!--記事ページの場合はこちら-->
            <?php get_template_part('template-parts/single'); ?>
        <?php else : ?>

            <div class="row">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-12">
                            <?php get_template_part('template-parts/loop', 'news'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
            } ?>
            <!--<?php if (function_exists('the_pagination')) the_pagination($st_query); ?>-->
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <div class="sidebar">
            <?php get_sidebar('categories'); ?>
            <?php get_sidebar('archives'); ?>
            <aside class="sidebar_part">
                <h2 class="archive_title">FOLLOW ME</h2>
                <div class="line"></div>
                <a target='_blank' href="https://www.instagram.com/next_face/?hl=ja">
                    <img id="img_insta" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/instagram.png" alt="instagram">
                </a>
            </aside>
        </div>
    </div>
</main>

<?php get_footer(); ?>