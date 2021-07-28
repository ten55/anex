<?php get_header(); ?>
<main class="contact">
    <div class="box_header">
        <div class="title mincho">
            <p>CONTACT</p>
        </div>
    </div>
    <div class="com-container">
        <h2 class="midashi">お気軽に<br class="br-sp">お問い合わせください</h2>
        <div class="tel">
            <div class="header_text">●お電話からのお問い合わせ</div>
            <div class="contact_boxies">
                <div class="box red">
                    <div class="head">
                        お急ぎの方は<br class="br-pc" />こちらへ！
                    </div>
                    <div class="body">
                        <a href="tel:09032006296">
                            <div class="tel_number mincho">090-3200-6296</div>
                            <div class="staff">担当：小渕</div>
                        </a>
                    </div>
                </div>
                <div class="box black">
                    <div class="head">
                        <div class="company_name">Anex</div>
                        <div class="company_desc">（直営店NextFace）</div>
                    </div>
                    <div class="body">
                        <a href="tel:0112060744">
                            <div class="tel_number mincho">011-206-0744</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_text form">●フォームからの<br class="br-sp" /><span class="line_bottom">各種お問い合わせ</span></div>
        <div class="contact_form">
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>