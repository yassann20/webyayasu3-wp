<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/site-date/css/sanitize.css">
    <!--slick.css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <!--/slick.css-->
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?lang=html&lang=js&lang=css&skin=Sons-Of-Obsidian">
    </script>
    <!--デザインを変更する場合はSons-Of-Obsidianを変更-->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/site-date/css/style.css">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body><!--以下、幾何学模様の要素全体幅で表示-->
    <div id="particles-js">

    </div>
    <!--ヘッダーコンテンツ-->
    <header>
        <!--メニューコンテンツ-->
        <nav id="Menu">
            <?php
            $args = array(
                'menu' => 'main-menu',
                'container' => false,
                'echo' => true,
                'theme_location' => 'main-menu',
                'container' => false,
            );
            wp_nav_menu($args);
            ?>
        </nav>
        <!--/メニューコンテンツ-->
        <div class="menubar">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
    <!--/ヘッダーコンテンツ-->