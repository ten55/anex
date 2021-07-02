<?php get_header(); ?>

<main class="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sp_carousel01@2x.png" class="h-100" alt="top">
                <div class="overlay">
                    <p class="text bold">脱毛・<br class="br-sp" />
                        エステサロン<br class="br-sp" />
                        経営を<br />
                        トータル<br class="br-sp" />
                        サポート</p>
                    <a class="bt bt_transparent" href="<?php echo esc_url(get_permalink(28)); ?>">View More</a>

                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sp_carousel02@2x.png" alt="top">
                <div class="overlay">
                    <p class="text">脱毛機器の<br />
                        導入支援に<br class="br-sp" />
                        ついて</p>
                    <a class="bt bt_transparent" href="<?php echo esc_url(get_permalink(get_page_by_path('menu')->ID)); ?>">View More</a>
                </div>
            </div>
            <div class="carousel-item overlay-base">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sp_carousel03@2x.png" alt="top">
                <div class="overlay">
                    <p class="text">エステ機器の<br />
                        導入支援に<br class="br-sp" />
                        ついて</p>
                    <a class="bt bt_transparent" href="<?php echo esc_url(get_permalink(get_page_by_path('about')->ID)); ?>#about_movie">View More</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow_left.png">
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow_right.png">
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="top_news">
        <div class="header">
            <p class="title">NEWS</p>
            <a class="more" href="<?php echo esc_url(get_permalink(get_page_by_path('news')->ID)); ?>">View More <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="titles">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
            );
            $st_query = new WP_Query($args);
            ?>
            <?php if ($st_query->have_posts()) : ?>
                <?php $i = 0; ?>
                <?php while ($i < 3) : $st_query->the_post(); ?>
                    <div class="info">
                        <div class="row">
                            <div class="date"><?php the_time('Y.m.d'); ?></div>
                            <div class="category"><?php the_category(); ?></div>
                        </div>
                        <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    </div>
                    <?php $i++; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="top_message">
        <div class="com-container">
            <div class="message">
                <div class="parenthesis">
                    <h3>
                        エステティックを<br class="br-sp" />
                        通して<br />
                        明るい未来の創造<br class="br-sp" />
                    </h3>
                </div>
                <p class="text">
                    25年位前からエステティックを仕事としてとらえ現場でもエステティシャンとして経験を積ませていただきました。<br />
                    業務用美容機器が好きでいろいろ試してお客様が喜んでくれるものを選んでサービス提供をしてきました。その結果、とても良かったもの、良かったもの、後悔するものに分けられました。<br />
                    業務用機器の選定はその後の売り上げに大きくかかわります。<br />
                    情報があふれる今だからこそ商品を選ぶ大変さがあり、業務用だからこそ後悔しないために商品選びの際、生の情報が必要になっていることが感じられ、この経験を生かし弊社での卸業、サロンサポート業がスタートしました。<br />
                    直営サロンで実際使っているので、お客様の反応やスタッフの反応などを現場から聞くことができるのも強みのひとつです。<br />
                    <br />
                    地域の皆様に愛されるサロン作りをしているオーナー様の応援を私たちはしています。<br />
                    必要な方に必要な情報と安心を。さらなる飛躍を願っています。<br />
                </p>
                <p class="company_name">株式会社Anex　代表取締役</p>
                <p class="ceo_name">小渕貞子</p>
            </div>
            <figure></figure>
        </div>
    </section>

    <section class="support">
        <div class="com-container">
            <h2 class="cont_title mincho">SUPPORT</h2>
            <div class="caption">Anexの行う<br class="br-sp" />サポートとは</div>
            <div class="desc">エステ・脱毛サロン経営をする<br class="br-sp" />
                オーナー様の支援を行います。<br />
                経営コンサルティングに限らず、<br class="br-sp" />
                機械や消耗品について、スタッフの育成など、どんな悩みにも親身に<br />
                対応いたします。<br class="br-sp" />
                初めてエステ・脱毛サロン経営をするにあたって知識や経験がなく、<br />
                何を始めたらいいかわからない、そんなサロンオーナー様に寄り添える存在でありたいと考えています。
            </div>
            <div class="support_box first">
                <div class="index">
                    <div class="number_head playfair">support</div>
                    <div class="number playfair">01</div>
                </div>
                <div class="detail">
                    <div class="text">
                        <div class="caption">経営支援</div>
                        <p>環境づくり、仕掛けづくり、<br />
                            スタッフの教育などについて。<br />
                            実店舗を運営しているからこそ、
                            オーナー様の悩みに<br class="br-sp" />
                            共感することができ、<br class="br-sp" />解決策をご提案できます。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/flow_01@2x.png">
                </div>
            </div>
            <div class="support_box second">
                <div class="index">
                    <div class="number_head playfair">support</div>
                    <div class="number playfair">02</div>
                </div>
                <div class="detail">
                    <div class="text">
                        <div class="caption">販売支援</div>
                        <p>集客戦略、販売スキル、お客様に寄り添うことの重要性について。<br />
                            地域特性を踏まえた広告宣伝手法や販売ノウハウの提供について伝えます。<br />
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/flow_02@2x.png">
                </div>
            </div>
            <div class="support_box third">
                <div class="index">
                    <div class="number_head playfair">support</div>
                    <div class="number playfair">03</div>
                </div>
                <div class="detail">
                    <div class="text">
                        <div class="caption">商品導入支援</div>
                        <p>心から信頼できる
                            商材の見極め方について。
                            機械選びが与える影響の大きさについて、グローバルサイエンス社とARTISTIC & Co. 社の商品力についてを伝えます。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/flow_03@2x.png">
                </div>
            </div>
            <a class="school" href="#">
                <p class="text">より詳しく技術習得したい方のために、エステサロン経営に関するスクールを実施しています。詳細はお問い合わせにてご連絡ください。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/school.png">
            </a>
        </div>
    </section>

    <section id="about_shikumi" class="shikumi">
        <div class="com-container">
            <div class="cont_title">結果が出る仕組み</div>
            <div class="line"></div>

            <div class="boxs">
                <div class="outer_box">
                    <h2 class="round_index">01</h2>
                    <div class="box">
                        <h3 class="header">人それぞれに合わせた<br />最適の支援</h3>
                        <p class="text">
                            定型的なコンサルティングは行いません。場所、提供内容、資金などサロンオーナー様によって状況は様々です。丁寧に状況のヒアリングを行い、それぞれの悩みにあった最適の支援をご提案させていただきます。
                        </p>
                    </div>
                </div>

                <div class="outer_box">
                    <h2 class="round_index">02</h2>
                    <div class="box">
                        <h3 class="header">25年の経営経験が<br />あるからこそ<br />導ける解決策</h3>
                        <p class="text">
                            実際にサロン経営をしているからこそ、机上の空論にならず実態に基づいた悩みを共有することができます。もちろん最終決定権はオーナー様ですが、私たちの過去の経験と実績から様々なご提案ができます。</p>
                        </p>
                    </div>
                </div>

                <div class="outer_box support">
                    <h2 class="round_index">03</h2>
                    <div class="box">
                        <h3 class=" header">開業後も<br />安心継続サポート</h3>
                        <p class="text">
                            開業後はLINEや電話などでいつでも気軽に相談いただけます。消耗品はどこで買ったら良いかなど小さな悩みも共有しながら、サロンオーナーとして成功する道筋を一緒に作ります。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="voice">
        <div class="com-container">
            <h2 class="cont_title">オーナー様の声</h2>
            <div class="line"></div>

            <div class="desc">
                実際にAnexのサポートを受けられた<br class="br-sp" />
                オーナー様からの声をご紹介します。<br>
                貴重なお声をいただきながら、<br class="br-sp" />
                より良いサポートを提供できるように日々努力しております。

            </div>

            <div class="voices">
                <div class="card">
                    <div class="header">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/woman_01.png">
                        <p>とても丁寧で親身な<br class="br-sp" />
                            対応に、<br class="br-pc" />あらゆる場面で助けられました。
                        </p>
                    </div>
                    <div class="message">
                        <p>色々と導入するまでは熱心な所が多い中、Anexの小渕さんは、導入後も細かな事まで親身に聞いて下さりすぐに対応頂けてとても助かっています。導入前後の不安も全くなく安心と信頼がありお客様へも自信を持って対応することができています。本当に感謝しています。Anexの小渕さんに出会えて良かったです！！
                        </p>
                    </div>
                    <div class="name">
                        <p>Relaxation Salon Kefina<br />
                            佐々木陽子 様</p>
                    </div>
                </div>

                <div class="card" style="height:772px">
                    <div class="header">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/woman_01.png">
                        <p>とても丁寧で親身な<br class="br-sp" />
                            対応に、<br class="br-pc" />あらゆる場面で助けられました。
                        </p>
                    </div>
                    <div class="message">
                        <p>色々と導入するまでは熱心な所が多い中、Anexの小渕さんは、導入後も細かな事まで親身に聞いて下さりすぐに対応頂けてとても助かっています。導入前後の不安も全くなく安心と信頼がありお客様へも自信を持って対応することができています。本当に感謝しています。Anexの小渕さんに出会えて良かったです！！
                        </p>
                    </div>
                    <div class="name">
                        <p>Relaxation Salon Kefina<br />
                            佐々木陽子 様</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product">
        <div class="com-container">
            <h2 class="cont_title mincho">PRODUCT</h2>
            <div class="caption">美容機器の<br class="br-sp" />導入支援について</div>
            <div class="desc">脱毛・エステサロンの経営を<br class="br-sp" />
                お考えの方にお勧めする業務用・<br class="br-sp" />
                ホームケア機器をご紹介します。<br />
                導入をご検討される方はお気軽に<br class="br-sp" />
                お問い合わせにてご連絡ください。
            </div>
            <div class="box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/product01.png" alt="業務用脱毛機ヴィクトリアについて" />
                <div class="text">
                    <div class="header">業務用脱毛機<br />ヴィクトリアについて</div>
                    <p>美容サロンで脱毛を導入しようと考えている方にオススメする脱毛機が、グローバルサイエンス社のヴィクトリアです。短時間・短期間で全身脱毛が可能なこの機械は収益性も高く、お客様満足度も高い機械です。</p>
                <a class="bt bt_white" href="<?php echo esc_url(get_permalink(28)); ?>">脱毛機器の導入</a>
                </div>
            </div>
            <div class="box">
            </div>
        </div>
    </section>

    <section id="front_access" class="access">
        <div class="com-container">
            <h2 class="cont_title mincho">アクセス</h2>
            <div class="line"></div>
            <div class="bt_line bt_red">
                <a href="https://line.me/R/ti/p/%40981butkb" target='_blank'>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/line.png" alt="line" />
                    <p id="line_p">公式ラインから<br class="br-sp">オンライン相談が可能！</p>
                </a>
            </div>
            <div class="box">
                <div class="shop_info">
                    <div class="inner">
                        <div class="shop_detail">
                            <div class="shop_name">
                                <p class="lineIndent"><span class="dot">●</span>痩身ハイフ＆脱毛エステサロンNextFace 札幌本店</p>
                            </div>
                            <table id="tbl_access">
                                <tr>
                                    <th>住所</th>
                                    <td>〒060-0002<br class="br-sp">札幌市中央区北2条西2丁目29-2UENOビル3Ｆ</td>
                                </tr>
                                <tr>
                                    <th>電話番号</th>
                                    <td>011-206-0744</td>
                                </tr>
                                <tr>
                                    <th>E-mail</th>
                                    <td>info@next-face.jp</td>
                                </tr>
                                <tr>
                                    <th>営業時間</th>
                                    <td>月〜金　11:00〜20:00（最終受付19:00）<br>
                                        土曜・祝日　11:00〜19:00（最終受付18:00）</td>
                                </tr>
                                <tr>
                                    <th>定休日</th>
                                    <td>日曜日</td>
                                </tr>
                            </table>
                        </div>
                        <div class="buttons">
                            <a class="bt bt_sq_blue" target='_blank' href="https://www.google.com/maps/reserve/merchant?m=BUpiwF8Tm1Y&source=pa&gei=Tz-WX8-tGsr7-QbG3IagDA&sourceurl=https://www.google.com/search?q%3D%25E3%2583%258D%25E3%2582%25AF%25E3%2582%25B9%25E3%2583%2588%25E3%2583%2595%25E3%2582%25A7%25E3%2582%25A4%25E3%2582%25B9%26oq%26aqs%3Dchrome.0.35i39i362l8...8.936336170j0j15%26sourceid%3Dchrome%26ie%3DUTF-8&hl=ja-JP
">Googleで予約</a>
                            <a href="https://reservia.jp/shop/reserve/5479" target='_blank' class="bt bt_sq_purple">リザービア</a>
                        </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/honten@2x.png" alt="本店" />
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.9461134677526!2d141.35121011547864!3d43.063600879145966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b29760509525b%3A0xd5213d525147c078!2z44Ko44K544OG44OG44Kj44OD44Kv44K144Ot44OzIE5leHQgRmFjZQ!5e0!3m2!1sja!2sjp!4v1604624112401!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

            <div class="box">
                <div class="shop_info">
                    <div class="inner">
                        <div class="shop_detail">
                            <div class="shop_name">
                                <p class="lineIndent"><span class="dot">●</span>痩身専門プライベートエステサロンNextFace 厚別店</p>
                            </div>
                            <table>
                                <tr>
                                    <th>住所</th>
                                    <td>〒004-0053<br>札幌市厚別区厚別中央3条1丁目10-15 ラ・クラッサ3.1 303
                                    </td>
                                </tr>
                                <tr>
                                    <th>電話番号</th>
                                    <td>011-500-2225</td>
                                </tr>
                                <tr>
                                    <th>E-mail</th>
                                    <td>info@next-face.jp</td>
                                </tr>
                                <tr>
                                    <th>営業時間</th>
                                    <td>11:00〜20:00（最終受付19:00）完全予約制</td>
                                </tr>
                                <tr>
                                    <th>定休日</th>
                                    <td>不定休</td>
                                </tr>
                            </table>
                        </div>
                        <div class="buttons">
                            <a href="https://beauty.hotpepper.jp/kr/slnH000507381/" target='_blank' class="bt bt_sq_pink">ホットペッパービューティー</a>
                        </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/shop_atsubetsu.jpeg" alt="厚別店" width="auto" height="236px" />
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2916.3777736351285!2d141.45402531547785!3d43.03348247914747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2b6f3bbac923%3A0xde27f5084afd4ec9!2z44CSMDA0LTAwNTMg5YyX5rW36YGT5pyt5bmM5biC5Y6a5Yil5Yy65Y6a5Yil5Lit5aSu77yT5p2h77yR5LiB55uu77yR77yQ4oiS77yR77yVIOODqeODu-OCr-ODqeODg-OCte-8k-ODu--8kQ!5e0!3m2!1sja!2sjp!4v1604624695659!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

            <div class="box">
                <div class="shop_info">
                    <div class="inner">
                        <div class="shop_detail">
                            <div class="shop_name">
                                <p class="lineIndent"><span class="dot">●</span>ファミリー脱毛epitto 北見店</p>
                            </div>
                            <table>
                                <tr>
                                    <th>住所</th>
                                    <td>〒090-0036 北見市幸町1-1-3</td>
                                </tr>
                                <tr>
                                    <th>電話番号</th>
                                    <td>0157-33-1156</td>
                                </tr>
                                <tr>
                                    <th>E-mail</th>
                                    <td>info@next-face.jp</td>
                                </tr>
                                <tr>
                                    <th>定休日</th>
                                    <td>不定休</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2879.2797172072665!2d143.88779501558943!3d43.808557079116305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f6d56e1ffc92c31%3A0x3e0735776d5e7aff!2z44CSMDkwLTAwMzYg5YyX5rW36YGT5YyX6KaL5biC5bm455S677yR5LiB55uu77yR4oiS77yT!5e0!3m2!1sja!2sjp!4v1604624819513!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>