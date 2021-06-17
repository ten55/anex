<aside class="sidebar_part">
    <h2 class="archive_title">CATEGORY</h2>
    <div class="line"></div>
    <ul class="archive_list">
        <?php
        $args = array(
            'title_li' => '',
            'show_count' => true,
        );
        wp_list_categories($args);
        ?>
    </ul>
</aside>