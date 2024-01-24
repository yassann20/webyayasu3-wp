<!-- トップページのメインコンテンツ部分-->
<!--トップスライドショー-->
<div id="content01" class="position">
    <div>

        <?php if (is_page_template('page-confirmation')) : // page-contact.phpの場合の処理
        ?>
            <h2 class="top-h1">お問い合わせ内容</h2>
            <p class="top-p1">confirmation</p>
        <?php elseif (is_single()) : // single.phpの場合の処理
        ?>
            <h2 class="top-h1">プログ</h2>
            <p class="top-p1">blog</p>
        <?php elseif (is_archive()) : // アーカイブページの場合の処理
        ?>
            <h2 class="top-h1">記事一覧</h2>
            <p class="top-p1">archive'</p>
        <?php else :  // それ以外の場合の処理
        ?>
            <h2 class="top-h1"><?php echo esc_html(get_theme_mod('top_h1_text', '事業内容')); ?></h2>
            <p class="top-p1"><?php echo esc_html(get_theme_mod('top_p1_text', 'Business details')); ?></p>
            <h3 class="top-h3"><?php echo esc_html(get_theme_mod('top_h3_text', 'デフォルトの大見出し')); ?></h3>
        <?php endif; ?>
    </div>
</div>
<!--事業内容コンテンツ-->