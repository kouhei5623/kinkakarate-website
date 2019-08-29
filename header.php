<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=eage">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheet.css">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
        <!-- fontawesome読み込み -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">
        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
        <title>
            <?php
                if(!is_home()){
                        wp_title('-', true, 'right');
                    }
                bloginfo('name');
            ?>
        </title>
        <script>
            // 開閉
            $(function () {
                $('.one dt').click(function(){
                    if($('.one dd').hasClass('open')){
                        $('.one dd').removeClass('open');
                        $('.one .plus').text('+');
                        $('.one dd').slideUp();
                    } else {
                        $('.one dd').addClass('open');
                        $('.one .plus').text('-');
                        $('.one dd').slideDown();
                    }
                });
                $('.two dt').click(function(){
                    if($('.two dd').hasClass('open')){
                        $('.two dd').removeClass('open');
                        $('.two .plus').text('+');
                        $('.two dd').slideUp();
                    } else {
                        $('.two dd').addClass('open');
                        $('.two .plus').text('-');
                        $('.two dd').slideDown();
                    }
                });
                $('.three dt').click(function(){
                    if($('.three dd').hasClass('open')){
                        $('.three dd').removeClass('open');
                        $('.three .plus').text('+');
                        $('.three dd').slideUp();
                    } else {
                        $('.three dd').addClass('open');
                        $('.three .plus').text('-');
                        $('.three dd').slideDown();
                    }
                });
                $('.four dt').click(function(){
                    if($('.four dd').hasClass('open')){
                        $('.four dd').removeClass('open');
                        $('.four .plus').text('+');
                        $('.four dd').slideUp();
                    } else {
                        $('.four dd').addClass('open');
                        $('.four .plus').text('-');
                        $('.four dd').slideDown();
                    }
                });
                // spメニュー開閉
                $('#nav_open').click(function(){
                    $('.sp_header').slideDown();
                    $('#nav_open').hide();
                    $('#nav_close').show();
                });

                $('#nav_close').click(function(){
                    $('.sp_header').slideUp();
                    $('#nav_open').show();
                    $('#nav_close').hide();
                });
                $('.fa-times-circle').click(function(){
                    $('.fix_btn').hide();
                });
                // ページトップボタン
                var topBtn = $('.page_top');
                //スルスルっとスクロールでトップへもどる
                topBtn.click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 500);
                    return false;
                });
                window.onload = function() {
                    Particles.init({
                        selector: '.background',
                        sizeVariations: 30,
                        color: [
                          '#0bd', 'rgba(0,187,221,.5)', 'rgba(0,187,221,.2)'
                        ]
                    });
                };
            });
        </script>
    <?php wp_head(); ?>
    </head>
    <body>
        <!-- ヘッダー ---------------------------------------------------------------------------------------------------------------->
        <header>
            <div class="header">
                <div class="header_logo">
                    <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/karate_logo.png" alt=""></a></h1>
                </div><!-- /.header_logo -->
                <ul class="header_list">
                    <?php
                        $args = array(
                            'menu' => 'global-navigation',
                            'container' => 'false',
                        );
                        wp_nav_menu($args);
                    ?>
                </ul><!-- /.header_list -->
                <div id="nav_open">
                    <i class="fas fa-bars"></i>
                </div>
                <div id="nav_close">
                    <i class="fas fa-times"></i>
                </div>
            </div><!-- /.header -->
            <!-- スマホサイズヘッダー --------------------------------------->
            <div class="sp_header">
                <ul class="sp_header_list">
                    <?php
                        $args = array(
                            'menu' => 'global-navigation',
                            'container' => 'false',
                        );
                        wp_nav_menu($args);
                    ?>
                </ul>
            </div><!-- /.sp_header -->
            <!-- 体験ボタン ------------------------------------------------>
            <div class="fix_btn">
                    <div class="fix_unit">
                        <div class="fix_text">
                            <a href="https://kinkakarate.club/contact/">
                                <h3>無料体験会<br>実施中！</h3>
                                <p class="text">応募はこちらから</p>
                            </a>
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <div class="fix_img"></div>
                    </div><!-- /.fix_unit -->
            </div><!-- /.fix_btn -->
        </header>
