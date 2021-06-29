<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <?php $desc = "NextFace｜ネクストフェイスは痩身、脱毛、フェイシャルでお客様の綺麗をサポートする札幌市のトータルエステティックサロンです。オーダーメイドでメニューを組み合わせ、一人ひとりに合った最適なケアをご提案いたします。"; ?>
    <title>
        <?php if (is_front_page()) : ?>
            トータルエステティックサロン-NextFace【ネクストフェイス 】
        <?php elseif (is_page('about')) : ?>
            ABOUT | トータルエステティックサロン-NextFace【ネクストフェイス 】
        <?php elseif (is_page('menu')) : ?>
            <?php $desc = "NextFace｜ネクストフェイスのメニュー、料金表。痩身をはじめとするボディケア、脱毛、フェイシャルなど様々なメニューをご用意しております。"; ?>
            MENU | トータルエステティックサロン-NextFace【ネクストフェイス 】
        <?php elseif (is_page('contact')) : ?>
            <?php $desc = "サロンに関するお問い合わせ、ご相談はこちらから。初めてのお客様限定無料カウンセリングも行なっております。"; ?>
            CONTACT | トータルエステティックサロン-NextFace【ネクストフェイス 】
        <?php elseif (is_page(15) || is_single() || is_category() || is_month() || is_year() || is_archive() || is_singular() || is_post_type_archive()) : ?>
            <?php $desc = "NextFace｜ネクストフェイスの最新情報をお届けします。"; ?>
            NEWS | トータルエステティックサロン-NextFace【ネクストフェイス 】
        <?php else : ?>
            <?php $desc = "NextFace｜ネクストフェイスの最新情報をお届けします。"; ?>
            NEWS | トータルエステティックサロン-NextFace【ネクストフェイス 】
        <?php endif; ?>
    </title>
    <meta description="<?php echo $desc; ?>">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <?php
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
    wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/js/carousel.js');
    wp_enqueue_script('common', get_template_directory_uri() . '/assets/js/common.js');
    wp_head();
    ?>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/common.js'></script>

    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DR8YY05KF5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-DR8YY05KF5');
    </script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="com-container">        
            <div class="menu_abs">
                <div class="site">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="anex logo"/></a>
                </div>
                <button type="button" class="nav-button" onClick="navFunc()">
                    <span class="sr-only">MENU</span>
                </button>
            </div>
            <div class="nav">
                <?php
                $args = array(
                    'menu' => 'global-navigation w-900',
                    'menu_class' => 'nav_ul flex-column flex-sm-row',
                    'container' => false,
                );
                wp_nav_menu($args);
                ?>
            </div>
        </div>
    </header>