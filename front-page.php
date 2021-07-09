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
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sp_carousel01@2x.png" class="h-100" alt="top">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pc_carousel01.png" class="h-100" alt="top">
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
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sp_carousel02@2x.png" alt="top">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pc_carousel02.png" class="h-100" alt="top">
                <div class="overlay">
                    <p class="text">脱毛機器の<br />
                        導入支援に<br class="br-sp" />
                        ついて</p>
                    <a class="bt bt_transparent" href="<?php echo esc_url(get_permalink(get_page_by_path('menu')->ID)); ?>">View More</a>
                </div>
            </div>
            <div class="carousel-item overlay-base">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sp_carousel03@2x.png" alt="top">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/pc_carousel03.png" class="h-100" alt="top">
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
                <div class="name">
                    <p class="company_name">株式会社Anex　代表取締役</p>
                    <p class="ceo_name">小渕貞子</p>
                </div>
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
                <p class="text">より詳しく技術習得したい方のために、<br class="br-pc" />エステサロン経営に関するスクールを実施しています。詳細はお問い合わせにてご連絡ください。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/school.png">
            </a>
        </div>
    </section>

    <section id="about_shikumi" class="shikumi">
        <div class="com-container">
            <div class="cont_title sp">結果が出る仕組み</div>
            <div class="cont_title pc">経営成功に導くAnexの3つの強み</div>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/woman_01.png">
                    <div class="text">
                        <div class="header">
                            <p>とても丁寧で親身な<br class="br-sp" />
                                対応に、<br class="br-pc" />あらゆる場面で助けられました。
                            </p>
                        </div>
                        <div class="message">
                            <p>色々と導入するまでは熱心な所が多い中、Anexの小渕さんは、導入後も細かな事まで親身に聞いて下さりすぐに対応頂けてとても助かっています。導入前後の不安も全くなく安心と信頼がありお客様へも自信を持って対応することができています。本当に感謝しています。Anexの小渕さんに出会えて良かったです！！
                            </p>
                        </div>
                        <div class="name">
                            <p>Relaxation Salon Kefina<br class="br-sp"/>
                                佐々木陽子 様</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/woman_01.png">
                    <div class="text">
                        <div class="header">
                            <p>とても丁寧で親身な<br class="br-sp" />
                                対応に、<br class="br-pc" />あらゆる場面で助けられました。
                            </p>
                        </div>
                        <div class="message">
                            <p>色々と導入するまでは熱心な所が多い中、Anexの小渕さんは、導入後も細かな事まで親身に聞いて下さりすぐに対応頂けてとても助かっています。導入前後の不安も全くなく安心と信頼がありお客様へも自信を持って対応することができています。本当に感謝しています。Anexの小渕さんに出会えて良かったです！！
                            </p>
                        </div>
                        <div class="name">
                            <p>Relaxation Salon Kefina<br class="br-sp"/>
                                佐々木陽子 様</p>
                        </div>
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
            <div class="box home-care">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/product02.png" alt="業務用脱毛機ヴィクトリアについて" />
                <div class="text">
                    <div class="header">業務用エステ機器・<br />ホームケア機器について</div>
                    <p>脱毛機械だけでなく、家庭でも自分でお肌のケアをできるホームケア機器や業務用エステ機器の導入もご提案しています。</p>
                    <a class="bt bt_white" href="<?php echo esc_url(get_permalink(28)); ?>">エステ機器の導入</a>
                </div>
            </div>
            <div class="free-support">
                <div class="upper">
                    <p><span class="free">無料</span><br>サポート</p>
                </div>
                <div class="bottom">
                    <div class="text">
                        美容機器を導入した<br class="br-sp" />
                        サロンオーナー様には<br />
                        無料で様々な支援を<br class="br-sp" />
                        行なっております。<br class="br-sp"/>
                        詳しくは<br class="br-sp" />
                        お問合せください。
                    </div>
                    <div class="description">
                        ※機器を導入しない方も有料での<br class="br-sp" />
                        サポートをご提供しています。<br class="br-sp" />
                        お気軽にお尋ねください。<br />
                        ※エステサロン経営に関する<br class="br-sp" />
                        スクールは有料となります。
                    </div>
                </div>
            </div>
            <div class="bt bt_yellow bt_support">
                サポートについての<br class="br-sp" />
                詳細はこちら
            </div>
        </div>
    </section>

    <section class="company">
        <div class="com-container">
            <h2 class="cont_title">会社概要</h2>
            <div class="line"></div>

            <table>
                <tr>
                    <th>名称</th>
                    <td>株式会社Anex</td>
                </tr>
                <tr>
                    <th>設立</th>
                    <td>1990年3月</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td>〒060-0002<br class="br-sp" />
                        札幌市中央区北2条<br class="br-sp" />
                        西2丁目 UENOビル3F</td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>011-206-0744</td>
                </tr>
                <tr>
                    <th>代表者</th>
                    <td>小渕貞子</td>
                </tr>
                <tr>
                    <th>事業内容</th>
                    <td>美容機器卸販売、化粧品日用品、健康美容食品卸販、美容サロン運営
                    </td>
                </tr>
            </table>
        </div>
    </section>

    <section class="unei">
        <div class="com-container">
            <h2 class="cont_title">運営店舗</h2>
            <div class="line"></div>

            <div class="outer">
                <div div class="upper">
                    <p>痩身ハイフ＆脱毛エステサロン</p>
                    <p class="name">NextFace 札幌本店</p>
                </div>
                <div class="bottom">
                    <p>ファミリー脱毛</p>
                    <p class="name">epitto 北見店</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>