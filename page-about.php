<?php get_header(); ?>

<main class="about">
    <div class="box_header">
        <div class="title mincho">
            <p>ABOUT</p>
        </div>
    </div>

    <div class="btn_list">
        <div class="com-container">
            <div class="btn-select pc_none">
                <p class="label">ご挨拶</p>
                <select id="select_menu" class='select' onChange="kakunin()">
                    <option value="#about_top_message">
                        <p>ご挨拶</p>
                    </option>
                    <option value="#about_shikumi">
                        <p>結果が出る仕組み</p>
                    </option>
                    <option value="#about_movie">
                        <p>動画で知るNext Face</p>
                    </option>
                    <option value="#about_fasting">
                        <p>ファスティング</p>
                    </option>
                    <option value="#about_before_after">
                        <p>Before ＆ After</p>
                    </option>
                </select>
                </label>
            </div>
            <div class="buttons">
                <button class="bt_down bt_white_red bt_roud" onclick="location.href='<?php echo esc_url(get_permalink(get_page_by_path('about')->ID)); ?>#about_top_message'">
                    <p>ご挨拶</p>
                </button>
                <button class="bt_down bt_white_red bt_roud" onclick="location.href='<?php echo esc_url(get_permalink(get_page_by_path('about')->ID)); ?>#about_shikumi'">
                    <p>結果が<br />出る仕組み</p>
                </button>
                <button class="bt_down bt_white_red bt_roud" onclick="location.href='<?php echo esc_url(get_permalink(get_page_by_path('about')->ID)); ?>#about_movie'">
                    <p>動画で知る<br />NextFace</p>
                </button>
                <button class="bt_down bt_white_red bt_roud" onclick="location.href='<?php echo esc_url(get_permalink(get_page_by_path('about')->ID)); ?>#about_fasting'">
                    <p>ファスティング</p>
                </button>
                <button class="bt_down bt_white_red bt_roud" onclick="location.href='<?php echo esc_url(get_permalink(get_page_by_path('about')->ID)); ?>#about_before_after'">
                    <p>Before &<br />After</p>
                </button>
            </div>
        </div>
    </div>

    <section id="about_top_message" class="about_top_message">
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
            <!--
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/top_message@2x.jpg" alt="メッセージ">
-->
        </div>
    </section>

    <section id="about_shikumi" class="shikumi">
        <div class="com-container">
            <div class="cont_title mincho">結果が出る仕組み</div>
            <div class="line"></div>

            <div class="boxs">
                <div class="outer_box">
                    <h2 class="round_index mincho">01</h2>
                    <div class="box">
                        <h3 class="header mincho">お客様一人ひとりに<br>合ったご提案</h3>
                        <p class="text">
                            お悩みも人それぞれであり、肌質や体型、生活習慣も人それぞれです。お客様のお悩みや現状を踏まえてメニュー提案いたします。
                        </p>
                    </div>
                </div>

                <div class="outer_box">
                    <h2 class="round_index mincho">02</h2>
                    <div class="box">
                        <h3 class="header mincho">幅広いメニューで<br>様々なお悩みに対応</h3>
                        <p class="text">
                            ネクストフェイスではお客様の様々なお悩みに対応できるよう<br>
                            痩身・フェイシャル・脱毛を軸とし幅広くメニューを展開しております。綺麗になりたい女性へ総合的に寄り添うサロンです。</p>
                        </p>
                    </div>
                </div>

                <div class="outer_box support">
                    <h2 class="round_index mincho">03</h2>
                    <div class="box">
                        <h3 class=" header mincho">先を見据えたプランと<br>サービスで徹底的に<br>サポート</h3>
                        <p class="text">
                            お客様と長くお付き合いしていけるサロン作りを大切にしております。そして美しく歳を重ねていけるよう中長期でサポートいたします。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about_movie" class="movie">
        <div class="com-container">
            <div class="cont_title mincho">動画で知るNext Face</div>
            <div class="line"></div>

            <div class="box">
                <iframe src="https://www.youtube.com/embed/IE5AKPs3jwE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="detail">
                    <div class="title mincho">痩身</div>
                    <p>
                        施術風景を動画でわかりやすく説明しています！<br>
                        APTS/脂肪冷却/ハイフ/セルライトゼロ<br>
                        スイソニア/ファスティング
                    </p>
                    <a class="bt_arrow bt_yellow mincho" href="<?php echo esc_url(get_permalink(get_page_by_path('menu')->ID)); ?>#menu_soushin">メニューについて詳しくはこちら</a>
                </div>
            </div>

            <div class="box">
                <iframe src="https://www.youtube.com/embed/-zf3DeEO0IE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="detail">
                    <div class="title mincho">フェイシャル</div>
                    <p>
                        施術風景を動画でわかりやすく説明しています！<br>
                        マイナスイオン泡フェイシャル/フォト/DIna
                    </p>
                    <a class="bt_arrow bt_yellow mincho" href="<?php echo esc_url(get_permalink(get_page_by_path('menu')->ID)); ?>#menu_facial">メニューについて詳しくはこちら</a>
                </div>
            </div>

            <div class="box">
                <iframe src="https://www.youtube.com/embed/6i-URiP0eYo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="detail">
                    <div class="title mincho">脱毛</div>
                    <p>
                        施術風景を動画でわかりやすく説明しています！<br>
                        連射式脱毛器ビクトリア
                    </p>
                    <a class="bt_arrow bt_yellow mincho" href="<?php echo esc_url(get_permalink(get_page_by_path('menu')->ID)); ?>#menu_datsumou">メニューについて詳しくはこちら</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about_fasting" class="fasting">
        <div class="com-container">
            <div class="header_box">
                <p class="mincho">ファスティング</p>
            </div>
            <div class="header_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/fasting.jpg">
            </div>

            <div class="text">
                <p class="large mincho">
                    準備期・断食期・回復期に<br class="br-sp">必要なものは全てサロンで<br class="br-sp">ご用意！
                </p>
                <p class="small">
                    断食期の酵素含め準備食や回復食もキットをご用意し、全面的にサポートいたします。
                </p>
                <p class="large mincho">
                    当店独自のメニューとして<br class="br-sp">“ファスティングサポート”<br class="br-sp">があります。
                </p>
                <p class="small">
                    目的に応じてファスティングを組み込みながら生活習慣を改善。<br>
                    エステとファスティングの組み合わせはダイエットに一層効果的です。
                </p>
                <p class="small red">
                    ●体型を整えたい→エステ<br>
                    ●体重を落としたい・<br class="br-sp">体の不調を取りたい→ファスティング
                </p>
            </div>

            <div class="red_box">
                <div class="title">ファスティングとは</div>
                <p>
                    ファスティングとは「断食」のことで、一定の期間食事を摂らないことを意味します。消化器官を休め、腸内環境を整えることが目的です。<br>
                    人間の体は、消化吸収をすることがない状態になると、自然に体内にたまった有害な毒素を排泄します。<br>
                    ダイエット効果だけでなく、デトックス効果もあり、健康や美容のさまざまな面によい影響を及ぼすとされています。<br>
                    ファスティングには以下のような効果があります。<br>
                    内臓機能の向上／ダイエット／免疫力向上／血液がサラサラになる／美肌　Etc…
                </p>
            </div>
        </div>
    </section>

    <section id="about_before_after" class="before_after">
        <div class="com-container">
            <div class="title mincho">BEFORE <span class="and playfair">＆</span><br class="br-sp"> AFTER</div>

            <div class="area">
                <input class="pc_none" type="radio" name="tab_name" id="tab1" checked>
                <label class="tab_class pc_none" for="tab1">H様／20代後半</label>
                <div class="content_class box">
                    <div class="result">
                        <div class="result_img">
                            <img class="img_sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/01.png" alt="結果" />
                            <img class="img_pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/result_01_pc.png" alt="結果" />
                        </div>
                        <div class="text">
                            <div class="name mincho">H様／20代後半</div>
                            <div class="sejutsu"><span>●</span>施術内容</div>
                            <p>スマートライフ1年36回メンテナンス付コース<br>
                                ・セルライトゼロ 60分／36回<br>
                                ・脂肪冷却2カップ 80分／2回<br>
                                ・メンテナンス APS 60分／2回</p>
                            <p class="red">計40回来店</p>
                        </div>
                    </div>
                    <div class="voices">
                        <div class="voice_box">
                            <div class="header">お客様からの声</div>
                            <p>
                                自然体でダイエットできました！写真を撮るたびに変わっていく姿が嬉しかったです♪スタッフさんが親身になってくれました。行って良かったです。
                            </p>
                        </div>
                        <div class="voice_box">
                            <div class="header">スタッフからの声</div>
                            <p>
                                いつも自然体でこちらが癒されました。来店の度に楽しいお話をしてくれてありがとうございました。しっかりペースを守ってきていただけたので、予想より早く結果が出てきてくれました。おうちでも頑張ってくれたおかげです♪目標体重達成＆継続体重目標、継続しての達成おめでとうございます！
                            </p>
                        </div>
                    </div>
                </div>
                <input class="pc_none" type="radio" name="tab_name" id="tab2">
                <label class="tab_class pc_none" for="tab2">O様／30代前半</label>
                <div class="content_class box">
                    <div class="result">
                        <div class="result_img">
                            <img class="img_sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/02.png" alt="結果" />
                            <img class="img_pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/result_02_pc.png" alt="結果" />
                        </div>
                        <div class="text">
                            <div class="name mincho">O様／30代前半</div>
                            <div class="sejutsu"><span>●</span>施術内容</div>
                            <p>スマートライフ6か月12回メンテナンス付コース<br>
                                ・セルライトゼロ 60分／12回<br>
                                ・脂肪冷却2カップ 80分／1回<br>
                                ・メンテナンス セルライトゼロ 40分／3回</p>
                            <p class="red">計16回来店</p>
                        </div>
                    </div>
                    <div class="voices">
                        <div class="voice_box">
                            <div class="header">お客様からの声</div>
                            <p>
                                人生最後のダイエットにしたくて1年かけて頑張りました！食事も気を付け生活を少しづつ変えてリバウンドしないダイエットを心掛けました。一緒に悩んでくれたり元気をもらったりしてスタッフさんにはとても感謝しています。とりあえず卒業しますが時々メンテナンスしに来ますね！！もう戻りたくないですから(笑)
                            </p>
                        </div>
                        <div class="voice_box">
                            <div class="header">スタッフからの声</div>
                            <p>
                                とても頑張り屋さんの分、頑張りすぎて息切れしてしまうことも…。頑張らなくていいように少しずつ変えていって、変わることが楽しくなってきたら急にきれいになっていきました！おしゃれも生活スタイルも変わってきて、来店ごとに変化していくのを見れたことがとても嬉しかったです。彼氏ができたら教えてくださいね！！ありがとうございました♪
                            </p>
                        </div>
                    </div>
                </div>
                <input class="pc_none" type="radio" name="tab_name" id="tab3">
                <label class="tab_class pc_none" for="tab3">O様／50代前半</label>
                <div class="content_class box">
                    <div class="result">
                        <div class="result_img">
                            <img class="img_sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/03.png" alt="結果" />
                            <img class="img_pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/result_03_pc.png" alt="結果" />
                        </div>
                        <div class="text">
                            <div class="name mincho">O様／50代前半</div>
                            <div class="sejutsu"><span>●</span>施術内容</div>
                            <p>フォトフェイシャル10回コース</p>
                            <p class="red">計10回来店</p>
                        </div>
                    </div>
                    <div class="voices">
                        <div class="voice_box">
                            <div class="header">お客様からの声</div>
                            <p>
                                肌質が変化しました！一番気になっていた目の横のシミとしわが、とっても薄くなって感動です！2週間に1回通って気づいからこうなっていました。スタッフさんもいつも丁寧で、今やなくてはならない存在になっています。
                            </p>
                        </div>
                        <div class="voice_box">
                            <div class="header">スタッフからの声</div>
                            <p>
                                1番気にされていたシミとしわが、御来店されるたびに変化が見られ、肌全体のトーンも明るくなっていきました。普段のお手入れが楽になったとのお言葉嬉しかったです。どこまできれいになるのか楽しみです！
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="bt_arrow bt_yellow mincho" href="<?php echo esc_url(get_permalink(37)); ?>'">症例をもっと見る</a>
        </div>
    </section>

</main>
<?php get_footer(); ?>