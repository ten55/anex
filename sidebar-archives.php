<aside class="sidebar_part">
    <h2 class="archive_title">ARCHIVE</h2>
    <div class="line"></div>
    <ul class="archive_list">
    <?php
        $args = array(
            'type' => 'monthly',
            'show_post_count' => true,
        );
        wp_get_archives($args);
        ?>
    </ul>
</aside>