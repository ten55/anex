<?php get_header(); ?>

<main class="menu">
    <div class="box_header">
        <div class="title mincho">
            <p>MENU</p>
        </div>
    </div>

    <div class="btn_list">
        <div class="com-container">
            <div class="btn-select pc_none">
                <p class="label">痩身</p>
                <select id="select_menu" class='select' onChange="kakunin()">
                    <option value="#menu_soushin">
                        <p>痩身</p>
                    </option>
                    <option value="#menu_facial">
                        <p>フェイシャル</p>
                    </option>
                    <option value="#menu_datsumou">
                        <p>脱毛</p>
                    </option>
                </select>
                </label>
            </div>
            <div class="buttons">
                <button class="bt_down bt_white_red bt_roud" onclick="location.href='<?php echo esc_url(get_permalink(get_page_by_path('menu')->ID)); ?>#menu_soushin'">
                    <p>痩身</p>
                </button>
                <button class="bt_down bt_white_red bt_roud" onclick="location.href='<?php echo esc_url(get_permalink(get_page_by_path('menu')->ID)); ?>#menu_facial'">
                    <p>フェイシャル</p>
                </button>
                <button class="bt_down bt_white_red bt_roud" onclick="location.href='<?php echo esc_url(get_permalink(get_page_by_path('menu')->ID)); ?>#menu_datsumou'">
                    <p>脱毛</p>
                </button>
            </div>
        </div>
    </div>

    <div>
        <?php get_template_part('template-parts/menu-soushin'); ?>
        <?php get_template_part('template-parts/menu-consulting'); ?>
        <?php get_template_part('template-parts/menu-facial'); ?>
        <?php get_template_part('template-parts/menu-datsumou'); ?>
    </div>

    <section class="first-customer">
        <div class="com-container">
            <div class="box box_left">
                <div class="upper mincho">
                    <p>初めてのお客様限定</p>
                </div>
                <div class="bottom">
                    <h3 class="mincho">無料<br class="br-sp">カウンセリング</h3>
                    <p>あなたの体やお肌のお悩みに対して<br class="br-pc">独自にメニューを組み合わせご提案いたします。<br class="br-pc">なんでもお気軽にご相談ください。<br>
                        <span class="pc_none">公式ラインからオンライン相談が可能！</span></p>
                    <a class="bt bt_yellow" href="<?php echo esc_url(get_permalink(28)); ?>">View More</a>
                    <div class="comment">
                        <P>公式ラインからオンライン相談が可能！</P>
                    </div>
                    <a class="line_comment" target='_blank' href="https://line.me/R/ti/p/%40981butkb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/line.png"/ alt="line"></a>
                </div>
            </div>
            <div class="box white_box">
                <p class="mincho red">WEB予約で<br>
                    24時間いつでも好きな<br>
                    時に予約が可能！</p>
                <a class="bt_arrow bt_yellow bt_short mincho" href="<?php echo home_url(); ?>#front_access">ご予約はこちら</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>