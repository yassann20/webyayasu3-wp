<!-- ヘッダー読み込み　-->
<?php get_header(); ?>
<main>
    <div id="top">
        <!-- トップページのメインコンテンツ部分-->
        <!--トップスライドショー-->
        <div id="content01">
            <div>
                <h2 class="top-h1"><?php echo esc_html(get_theme_mod('top_h1_text', '事業内容')); ?></h2>
                <p class="top-p1"><?php echo esc_html(get_theme_mod('top_p1_text', 'Business details')); ?></p>
                <h3 class="top-h3"><?php echo esc_html(get_theme_mod('top_h3_text', 'デフォルトの大見出し')); ?></h3>
            </div>
        </div>
        <!--事業内容コンテンツ-->
        <div id="content02" class="fadein">
            <ul>
                <!--事業内容１つ目-->
                <?php
                $c2h2 = 3; // これはテーマカスタマイザーでのループ回数と合わせてください
                $default_c2h2 = ['コーディング', 'WP制作', '保守・運営']; //リスト見出しデフォルト
                $default_c2p = [ //リスト本文デフォルト
                    'ウェブサイトやLPのコーディング業務を請け負っています。与えられたデザインを忠実に再現し納期もスピーディに納品します。',
                    'wordpressのカスタマイズや保守。コーディングしたデータを元にオリジナルテーマの作成も行っています。',
                    '既存のサイトの保守・運営業務を行っています。サイトのデザイン変更に伴うソースコード改修や、ブログ記事の更新などを行っています。'
                ];
                $list_class = ['codding', 'wp', 'maintenance']; //リストに付与するクラス
                for ($i = 1; $i <= $c2h2; $i++) :
                ?>
                    <li>
                        <div class="c2fadein">
                            <div class="rhombus">
                                <h2 class="c2-h2-text'<?php echo $i; ?>'"><?php echo esc_html(get_theme_mod('content2_list_h2_text' . $i, $default_c2h2[$i - 1])); ?></h2>
                            </div>
                            <div class="content <?php echo $list_class[$i - 1]; ?>">
                                <p class="c2-p-text'<?php echo $i; ?>'"><?php echo esc_html(get_theme_mod('content2_list_p_text' . $i, $default_c2p[$i - 1])); ?></p>
                            </div>
                            <a href="">詳細</a>
                        </div>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
        <!--2つの魅力コンテンツ-->
        <div id="content03">
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
        <!--新着情報コンテンツ-->
        <div id="content04">
            <div class="back-menu">
                <h2>新着情報</h2>
            </div>
            <div class="slideshow02">
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/site-date/photos/pc-photo/codding.jpg" alt="">
                    <div class="slide2-content">
                        <p class="category">カテゴリ</p><!--記事カテゴリ名-->
                        <p class="date">2022/11/23</p><!--更新日時-->
                        <p class="text">タイトルタイトルタイトルタイトルタイトルタイトル</p><!--記事本文抜粋-->
                    </div>
                </article>
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/site-date/photos/pc-photo/codding.jpg" alt="">
                    <div class="slide2-content">
                        <p class="category">カテゴリ</p><!--記事カテゴリ名-->
                        <p class="date">2022/11/23</p><!--更新日時-->
                        <p class="text">タイトルタイトルタイトルタイトルタイトルタイトル</p><!--記事本文抜粋-->
                    </div>
                </article>
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/site-date/photos/pc-photo/codding.jpg" alt="">
                    <div class="slide2-content">
                        <p class="category">カテゴリ</p><!--記事カテゴリ名-->
                        <p class="date">2022/11/23</p><!--更新日時-->
                        <p class="text">タイトルタイトルタイトルタイトルタイトルタイトル</p><!--記事本文抜粋-->
                    </div>
                </article>
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/site-date/photos/pc-photo/codding.jpg" alt="">
                    <div class="slide2-content">
                        <p class="category">カテゴリ</p><!--記事カテゴリ名-->
                        <p class="date">2022/11/23</p><!--更新日時-->
                        <p class="text">タイトルタイトルタイトルタイトルタイトルタイトル</p><!--記事本文抜粋-->
                    </div>
                </article>
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/site-date/photos/pc-photo/codding.jpg" alt="">
                    <div class="slide2-content">
                        <p class="category">カテゴリ</p><!--記事カテゴリ名-->
                        <p class="date">2022/11/23</p><!--更新日時-->
                        <p class="text">タイトルタイトルタイトルタイトルタイトルタイトル</p><!--記事本文抜粋-->
                    </div>
                </article>
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/site-date/photos/pc-photo/codding.jpg" alt="">
                    <div class="slide2-content">
                        <p class="category">カテゴリ</p><!--記事カテゴリ名-->
                        <p class="date">2022/11/23</p><!--更新日時-->
                        <p class="text">タイトルタイトルタイトルタイトルタイトルタイトル</p><!--記事本文抜粋-->
                    </div>
                </article>
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/site-date/photos/pc-photo/codding.jpg" alt="">
                    <div class="slide2-content">
                        <p class="category">カテゴリ</p><!--記事カテゴリ名-->
                        <p class="date">2022/11/23</p><!--更新日時-->
                        <p class="text">タイトルタイトルタイトルタイトルタイトルタイトル</p><!--記事本文抜粋-->
                    </div>
                </article>
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/site-date/photos/pc-photo/codding.jpg" alt="">
                    <div class="slide2-content">
                        <p class="category">カテゴリ</p><!--記事カテゴリ名-->
                        <p class="date">2022/11/23</p><!--更新日時-->
                        <p class="text">タイトルタイトルタイトルタイトルタイトルタイトル</p><!--記事本文抜粋-->
                    </div>
                </article>
            </div>
        </div>
        <!--お問い合わせコンテンツ-->
        <div id="contact-in">
            <div class="contact-back">
                <h2>お問い合わせ</h2>
            </div>
            <form action="">
                <label for="nam">
                    <h3>お名前</h3>
                    <input type="text" name="nam">
                </label>
                <label for="kana">
                    <h3>おなまえ</h3>
                    <input type="text" name="kana">
                </label>
                <label for="email">
                    <h3>メールアドレス</h3>
                    <input type="email" name="email">
                </label>
                <label for="subject">
                    <h3>件名</h3>
                    <input type="text" name="subject">
                </label>
                <label for="text">
                    <h3>詳細内容</h3>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </label>
                <p>※いたずら防止のためIPアドレスを記録しています。</p>
                <button type="submit">送信</button>
            </form>
        </div>
        <!--プロフィールコンテンツ-->
        <div class="profile-container">
            <div id="profile">
                <div class="profile-back">
                    <h2 class="profile-h2"><?php echo esc_html(get_theme_mod('profile_h2_text', 'プロフィール')); ?></h2>
                </div>
                <div>
                    <img class="profile-img" src="<?php echo get_template_directory_uri(); ?>/site-date/photos/pc-photo/profile-my.jpg" alt="">
                    <h3><ruby class="name">安<rt>やす</rt>崎<rt>ざき</rt>&emsp;海<rt>&nbsp;&emsp;かい</rt>星<rt>せい</rt></ruby></h3>
                    <div class="profile-text">
                        <p class="profile-p"><?php echo esc_html(get_theme_mod('profile_p_text', '初めまして、当サイトを最後までご覧いただきましてありがとうございます。私は北海道札幌市を拠点にフロントエンドエンジニアとして活動させていただいている。安崎と申します。')); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ここまで -->
    </div>
</main>

<!-- footer読み込み -->
<?php get_footer(); ?>