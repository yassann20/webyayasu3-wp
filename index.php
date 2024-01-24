<!-- ヘッダー読み込み　-->
<?php get_header(); ?>
<main>
    <div id="top">
        <!--最初の見出し-->
        <?php get_template_part('template-parts/content01'); ?>
        <!--事業内容3つ紹介-->
        <?php get_template_part('template-parts/content02'); ?>
        <!--2つの魅力コンテンツ-->
        <?php get_template_part('template-parts/content03'); ?>
        <!--新着情報コンテンツ-->
        <?php get_template_part('template-parts/content04'); ?>
        <!--お問い合わせコンテンツ-->
        <?php get_template_part('template-parts/contact-in'); ?>
        <!--プロフィールコンテンツ-->
        <?php get_template_part('template-parts/profile'); ?>
        <!-- ここまで -->
    </div>
</main>

<!-- footer読み込み -->
<?php get_footer(); ?>