<!-- ヘッダー読み込み　-->
<?php get_header(); ?>
<main>
    <div id="top">
        <!--最初の見出し-->
        <?php get_template_part('template-parts/content01'); ?>
        <!--事業内容3つ紹介-->
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <div class="blog">
                <img class="thumbnail" src="<?php echo get_template_directory_uri(); ?>/photos/pc-photo/noimg.jpg" alt="">
                <div class="blog-inner">
                    <div class="date">
                        <p>更新日 <?php echo get_the_date('Y/m/d'); ?></p>
                    </div>
                    <div class="category">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            foreach ($categories as $category) {
                                echo '<p>' . esc_html($category->name) . '</p>';
                            }
                        }
                        ?>
                    </div>

                    <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>

                    
                    <div class="page-selecter"></div>
                </div>
            </div>
        <?php endwhile; ?>
        <!--お問い合わせコンテンツ-->
        <?php get_template_part('template-parts/contact-in'); ?>
        <!--プロフィールコンテンツ-->
        <?php get_template_part('template-parts/profile'); ?>
        <!-- ここまで -->
    </div>
</main>

<!-- footer読み込み -->
<?php get_footer(); ?>