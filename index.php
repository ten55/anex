<?php get_header(); ?>

<main class="news">
    <div class="box_header">
        <div class="title">
            <p>NEWS</p>
        </div>
    </div>

    <div class="com-container">
        <div class="blogs">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="row">
                        <?php get_template_part('template-parts/loop', 'news'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
            } ?>
        </div>
        <?php wp_reset_postdata(); ?>
        <div class="sidebar">
            <?php get_sidebar('categories'); ?>
            <?php get_sidebar('archives'); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>