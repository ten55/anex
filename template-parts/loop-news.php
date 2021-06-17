<article class="blog" id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
    <div class="news_pic">
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/no-img.png" alt="">
            <?php endif; ?>
        </a>
    </div>
    <div class="detail">
        <div class="news_meta">
            <time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
            <div class="category"><?php the_category(); ?></div>
        </div>
        <!--<h2 class="news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>-->
        <h2 class="news_title"><a href="<?php the_title(); ?>">
                <?php echo mb_substr(the_title(), 0, 15) . ''; ?>
            </a></h2>
        <div class="news_desc">
            <p>
                <a href="<?php the_permalink(); ?>">
                    <?php echo mb_substr(get_the_excerpt(), 0, 40) . '...'; ?>
                </a>
            </p>
        </div>
    </div>
</article>