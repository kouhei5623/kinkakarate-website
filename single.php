<?php get_header(); ?>
        <!-- メイン ------------------------------------------------------------------------------------------------------------------>
        <main>
            <?php
                if(have_posts()) :
                    while(have_posts()) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post_detail'); ?>>
                <div class="wrap">
                    <h1><?php the_title(); ?></h1>
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日(l)'); ?></time>
                    <?php the_content(); ?>
                </div>
            </article><!-- /.post_detail -->
            <?php
                    endwhile;
                endif;
            ?>
        </main>
<?php get_footer(); ?>
