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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/carousel01@2x.png" class="h-100" alt="施術風景">
                <div class="overlay">
                    <p class="text mincho">無料<br class="br-sp">カウンセリングで<br>あなた専用の<br class="br-sp">プランニングを</p>
                    <a class="bt bt_red" href="<?php echo esc_url(get_permalink(28)); ?>">View More</a>

                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/carousel02@2x.png" alt="施術風景">
                <div class="overlay">
                    <p class="text mincho">トータル<br class="br-sp">サロンとして<br>幅広いメニュー<br class="br-sp">を展開</p>
                    <a class="bt bt_red" href="<?php echo esc_url(get_permalink(get_page_by_path('menu')->ID)); ?>">View More</a>
                </div>
            </div>
            <div class="carousel-item overlay-base">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/carousel03@2x.png" alt="施術風景">
                <div class="overlay">
                    <p class="text mincho">動画で<br class="br-sp">施術風景を<br class="br-sp">公開中</p>
                    <a class="bt bt_red" href="<?php echo esc_url(get_permalink(get_page_by_path('about')->ID)); ?>#about_movie">View More</a>
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
            <p class="title mincho">NEWS</p>
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
                    <h3 class="mincho">
                        結果の出る楽しさを<br class="br-sp">実感いただくため<br>
                        一人ひとりに合った<br class="br-sp">プランニングと<br class="br-pc">
                        確かな<br class="br-sp">技術をご提供します
                    </h3>
                </div>
                <p class="text">
                    女性のライフステージというのは、目まぐるしく変わっていきます。就職、結婚、出産、育児。男性よりもターニングポイントが多いと思います。そして自身の生活スタイルが変わる中で、その時なりたい自分でいられるか。<br>
                    <br>
                    ネクストフェイスは、自分に自信を持って前に進めるきっかけづくりをご提供いたします。<br>
                    <br>
                    ライフステージや抱えているお悩みも人それぞれです。様々なお悩みに対応できるよう、トータルサロンとして幅広くメニューを展開。当店ならではの提案力でお客様の綺麗を全力でサポートいたします。<br>
                </p>
            </div>
            <figure></figure>
        </div>
    </section>

    <section class="support">
        <div class="com-container">
            <h2 class="cont_title mincho">SUPPORT</h2>
            <div class="desc">
                <div class="caption">Anexの行うサポートとは</div>
                <div class="text">aaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaa</div>
            </div>
            <div class="support_box">
                <div class="index">
                    <div>support</div>
                    <div class="number">01</div>
                </div>
                <div class="detail">
                    <div class="text">
                        <div class="caption">経営支援</div>
                        <p>パウダールーム完備しており、お化粧直しをしてお帰りいただけます。メイク道具は用意がございませんのでご自身のものをご用意ください。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/flow_01@2x.png">
                </div>
            </div>
            <div class="support_box">
                <div class="index">
                    <div>support</div>
                    <div class="number">02</div>
                </div>
                <div class="detail">
                    <div class="text">
                        <div class="caption">経営支援</div>
                        <p>パウダールーム完備しており、お化粧直しをしてお帰りいただけます。メイク道具は用意がございませんのでご自身のものをご用意ください。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/flow_01@2x.png">
                </div>
            </div>
            <div class="support_box">
                <div class="index">
                    <div>support</div>
                    <div class="number">02</div>
                </div>
                <div class="detail">
                    <div class="text">
                        <div class="caption">経営支援</div>
                        <p>パウダールーム完備しており、お化粧直しをしてお帰りいただけます。メイク道具は用意がございませんのでご自身のものをご用意ください。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/flow_01@2x.png">
                </div>
            </div>
        </div>
    </section>

    <section class="total_beaty">
        <div class="com-container">
            <h2 class="playfair">TOTAL<br class="br-sp"> BEAUTY SALON</h2>
            <p class="desc">「痩身・フェイシャル・脱毛」<br>お客様を美に導くトータルサロンです</p>

            <div class="details">
                <article class="menu soushin">
                    <figure></figure>
                    <h5 class="mincho">０１｜痩身</h5>
                    <a class="bt bt_red" href="<?php echo esc_url(get_permalink(get_page_by_path('menu')->ID)); ?>#menu_soushin">View More</a>
                </article>

                <article class="menu facial">
                    <figure></figure>
                    <h5 class="mincho">０２｜フェイシャル</h5>
                    <a class="bt bt_red" href="<?php echo esc_url(get_permalink(get_page_by_path('menu')->ID)); ?>#menu_facial">View More</a>
                </article>

                <article class="menu datsumou">
                    <figure></figure>
                    <h5 class="mincho">０３｜脱毛</h5>
                    <a class="bt bt_red" href="<?php echo esc_url(get_permalink(get_page_by_path('menu')->ID)); ?>#menu_datsumou">View More</a>
                </article>
            </div>
        </div>
    </section>

    <section class="voice">
        <div class="com-container">
            <h2 class="cont_title mincho">お客様の声</h2>
            <div class="line"></div>

            <div class="voices">
                <div class="card">
                    <div class="header">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/woman_01.png">
                        <p class="mincho">スタッフの<br class="br-sp">皆さんに<br>癒されています</p>
                    </div>
                    <div class="message">
                        <p>初めて来た時は緊張していたのですが、丁寧な接客と説明にとても安心しました。脱毛に関しては、どんどん毛がなくなっていくので毎回行くのがとても楽しみです。いつも笑顔で優しいスタッフの皆さんに心が癒されます。まだ脱毛を経験していない方には是非、試して欲しいです。とにかく良いので、行かないと損ですよ！</p>
                    </div>
                    <div class="name">
                        <p>A様　｜　20代　｜　女性</p>
                    </div>
                </div>

                <div class="card">
                    <div class="header">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/woman_02.png">
                        <p class="mincho">予想以上の結果に<br>驚きです</p>
                    </div>
                    <div class="message">
                        <p>いつも丁寧に施術していただき、どんどん体が軽くなっていくのを実感できています。回を重ねるごとに予想以上の結果なので、毎回来店するのが楽しみです。
                            自分より、スタッフの方々の方が身体をわかってくれているので、安心してお任せできます。理想に少しでも近くまで、一緒に頑張ってくれて本当に感謝しています。これからもよろしくお願いいたします。</p>
                    </div>
                    <div class="name">
                        <p>B様　｜　50代　｜　女性</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flow">
        <div class="com-container">
            <h2 class="cont_title mincho">初めてのお客様へ</h2>
            <div class="line"></div>
            <div class="colona">
                <h3>コロナ対策について</h3>
                <p>来店時の手指消毒、検温をお願いしております。37.4℃以上の体温の場合は施術ができなくなります。<br>
                    サロンではコロナ以前から1客１掃を徹底しております。
                    タオルの取り換え、器具、設備の消毒等、サロン内の換気を徹底し、個室内も広く安心してご来店いただける環境を準備しております。</p>
            </div>
            <div class="outer_box">
                <h2 class="round_index mincho">01</h2>
                <div class="line"></div>
                <div class="num_box">
                    <div class="box">
                        <div class="text">
                            <h3 class="mincho">カウンセリング</h3>
                            <p>ルイボスティーをご用意しております。カウンセリングシートにご記入いただき、お客様に合ったエステ体験ができるようお話を伺います。こんなこと聞いたら恥ずかしいかな？などと思わずに何でもご質問ください。施術前には、変化、効果を見るためにお写真をお撮りします。（希望者のみ）痩身では採寸、体組織計によるプロポーション診断を行います。（希望者のみ）</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/flow_01@2x.png">
                    </div>
                </div>
            </div>
            <div class="outer_box">
                <h2 class="round_index mincho">02</h2>
                <div class="line"></div>
                <div class="num_box">
                    <div class="box">
                        <div class="text">
                            <h3 class="mincho">施術</h3>
                            <p>お着替えしていただいた後、いよいよ施術開始です。途中、施術の強さ、体調の変化などをお伺いします。ご希望のマッサージの強さなどお伝えください。お眠りいただいても大丈夫です。（APTSのみ眠っては効果が半減されてしまうので起きていてください）</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/flow_02@2x.png">
                    </div>
                </div>
            </div>
            <div class="outer_box">
                <h2 class="round_index mincho">03</h2>
                <div class="line"></div>
                <div class="num_box">
                    <div class="box">
                        <div class="text">
                            <h3 class="mincho">パウダールーム</h3>
                            <p>パウダールーム完備しており、お化粧直しをしてお帰りいただけます。メイク道具は用意がございませんのでご自身のものをご用意ください。
                                <br>●備品：ドライヤー・くし形アイロン・髪型直し用水素水・ヘアーブラシ・クリップ
                            </p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/flow_03@2x.png">
                    </div>
                </div>
            </div>
            <div class="outer_box">
                <h2 class="round_index mincho">04</h2>
                <div class="num_box">
                    <div class="box">
                        <div class="text">
                            <h3 class="mincho">アフターカウンセリング</h3>
                            <p>お飲み物（痩身とフェイシャルではお飲み物が違います）をご用意しております。お身体の状態をお話しいたします。ビフォーアフターのお写真や、変化などを確認しながら自宅でもできるアドバイスなどをさせて頂きます。サロンのご利用方法やコースのご案内もお客様に合ったものをご提案させていただきます。強引な勧誘などは行っておりませんのでご安心くださいませ。</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/flow_04@2x.png">
                    </div>
                </div>
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