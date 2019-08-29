        <!-- フッター ----------------------------------------------------------------------------------------------------------->
        <footer>
            <div class="wrap">
                <div class="footer_unit">
                    <div class="footer_ttl">
                        <div class="footer_logo">
                            <h2><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/karate_logo.png" alt=""></a></h2>
                        </div>
                        <div class="description">
                            <p class="text">日本空手松涛連盟 岐阜県 金華支部</p>
                            <a href="tel:07052524975">070-5252-4975</a>
                        </div>
                    </div>
                    <ul class="footer_list">
                        <?php
                            $args = array(
                                'menu' => 'global-navigation',
                                'container' => 'false',
                            );
                            wp_nav_menu($args);
                        ?>
                    </ul>
                </div><!-- /.footer_unit -->
            </div><!-- /.wrap -->
            <div class="page_top">
                <a href="#">PAGE TOPへ</a>
            </div>
            <div class="copyright">
                <p class="text">©KINKA KARATE ALL RIGHTS RESERVED</p>
            </div>
        </footer>
    <?php wp_footer(); ?>
    </body>
</html>
