<?php get_header(); ?>

<main class="single">
    <div class="box_header">
        <div class="title mincho">
            <p>NEWS</p>
        </div>
    </div>
    <div class="com-container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
                    <header class="article_header">
                        <div class="news_meta">
                            <time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                            <div class="category"><?php the_category(); ?></div>
                        </div>
                        <h2 class="article_title"><?php the_title(); ?></h2>
                    </header>

                    <div class="article_body">
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <div class="postLinks">
                        <div class="postLink postLink-prev">
                            <?php previous_post_link('<i class="fas fa-chevron-left arrow_left"></i>%link', '前の記事へ'); ?>
                        </div>
                        <?php
                        $news = get_term_by('slug', 'news', 'category');
                        $news_link = get_term_link($news);
                        ?>
                        <div class="btn_all"><a href="<?php echo esc_url(get_permalink(get_page_by_path('news')->ID)); ?>">一覧に戻る</a></div>
                        <div class="postLink postLink-next">
                            <?php next_post_link('%link<i class="fas fa-chevron-right arrow"></i>', '次の記事へ'); ?>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="sidebar">
            <?php get_sidebar('categories'); ?>
            <?php get_sidebar('archives'); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>