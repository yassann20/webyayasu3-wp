<div id="content03" class="position">
    <?php
    $default_c3h2 = ['ご依頼内容を正確に把握', 'ご依頼内容を正確に把握'];
    $default_c3p = ['ウェブ周りに関する案件であれば柔軟に対応可能です。・急ぎで制作してほしい・できるだけ費用を抑えたい・既存サイトを修正したいなど、お客様のご要望に沿えるよう最大限サポートいたしますので、まずはお気軽にお問い合わせください。', 'ウェブ周りに関する案件であれば柔軟に対応可能です。・急ぎで制作してほしい・できるだけ費用を抑えたい・既存サイトを修正したいなど、お客様のご要望に沿えるよう最大限サポートいたしますので、まずはお気軽にお問い合わせください。']
    ?>
    <div class="rhombus">
        <h2 class="c3-h2-text"><?php echo esc_html(get_theme_mod('content3_h2_text', '2つの魅力')); ?></h2>
    </div>
    <div class="top">
        <div class="appeal content" style="background-image:url('<?php echo get_option("content3_list_back_image1"); ?>') center cover">
            <!--リスト内見出し-->
            <h3 class="c3-list-h2-text1"><?php echo esc_html(get_theme_mod('content3_list_h2_text1', $default_c3h2[0])); ?></h3>
            <!--/リスト内見出し-->
            <!--リスト内本文-->
            <p class="c3-list-text1"><?php echo esc_html(get_theme_mod('content3_list_text1', $default_c3p[0])); ?></p>
            <!--/リスト内本文-->
        </div>
        <img class="content" src="<?php echo get_template_directory_uri(); ?>/site-date/photos/pc-photo/content3-sample.jpg" alt="">
        <img class="content2" src="<?php echo get_template_directory_uri(); ?>/site-date/photos/pc-photo/content3-sample.jpg" alt="">
        <div class="works content2" style="background-image:url('<?php echo get_option("content3_list_back_image1"); ?>') center cover">
            <!--リスト内見出し-->
            <h3 class="c3-list-h2-text2"><?php echo esc_html(get_theme_mod('content3_list_h2_text1', $default_c3h2[1])); ?></h3>
            <!--/リスト内見出し-->
            <!--リスト内本文-->
            <p class="c3-list-text2"><?php echo esc_html(get_theme_mod('content3_list_text2', $default_c3p[1])); ?></p>
            <!--/リスト内本文-->
        </div>
    </div>
</div>