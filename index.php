<?php get_header(); ?>
        <!-- メイン ------------------------------------------------------------------------------------------------------------------>
        <main>
            <!-- サブビジュアル ------------------------------------------------>
            <section class="sub_visial">
                <canvas class="background"></canvas>
                <div class="sub_ttl">
                    <h1>お知らせ</h1>
                </div>
            </section><!-- /.sub_visial -->
            <!-- お知らせ一覧 -->
            <section class="news_detail">
                <div class="wrap">
                    <h2 class="ttl2">お知らせ</h2>
                    <p class="en_ttl">NEWS</p>
                    <div class="news_detail_unit">
                        <?php
                            if(have_posts()) :
                                while(have_posts()) : the_post();
                        ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class('news_detail_col'); ?>>
                            <div class="news_detail_img">
                                <?php if(has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                                <?php else: ?>
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/no_img.png" alt=""></a>
                                <?php endif; ?>
                            </div>
                            <dl class="news_detail_text">
                                <dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
                                <dd>
                                    <p class="text"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
                                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日(l)'); ?></time>
                                </dd>
                            </dl>
                        </div><!-- /.news_detail_col -->
                        <?php
                                endwhile;
                            endif;
                        ?>
                    </div><!-- /.news_detail_unit -->
                    <?php if(function_exists('wp_pagenavi')){wp_pagenavi();} ?>
                </div><!-- /.wrap -->
            </section><!-- /.news_detail -->
        </main>
<?php get_footer(); ?>
