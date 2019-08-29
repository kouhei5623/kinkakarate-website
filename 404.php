<?php get_header(); ?>
        <!-- メイン ------------------------------------------------------------------------------------------------------------------>
        <main>
            <!-- サブビジュアル ------------------------------------------------>
            <section class="sub_visial">
                <canvas class="background"></canvas>
                <div class="sub_ttl">
                    <h1>404ページ</h1>
                </div>
            </section><!-- /.sub_visial -->
            <!-- 404 ---------------------------------------------------------->
            <section class="error">
                <div class="wrap">
                    <p class="error_message">お探しのページは見つかりませんでした。<br>下記よりTOPページへお戻りください。</p>
                    <div class="btn">
                        <a href="<?php echo home_url('/'); ?>">TOPへ戻る</a>
                    </div>
                </div>
            </section>
        </main>
<?php get_footer(); ?>
