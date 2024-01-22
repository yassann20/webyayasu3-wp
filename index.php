<!-- ヘッダー読み込み　-->
<?php get_header(); ?>
<main>
    <div id="top">
        <!-- トップページのメインコンテンツ部分-->
        <!--トップスライドショー-->
        <div id="content01" class="position">
            <div>
                <h2 class="top-h1"><?php echo esc_html(get_theme_mod('top_h1_text', '事業内容')); ?></h2>
                <p class="top-p1"><?php echo esc_html(get_theme_mod('top_p1_text', 'Business details')); ?></p>
                <h3 class="top-h3"><?php echo esc_html(get_theme_mod('top_h3_text', 'デフォルトの大見出し')); ?></h3>
            </div>
        </div>
        <!--事業内容コンテンツ-->
        <div id="content02" class="fadein position">
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
                                <h2 class="c2-h2-text<?php echo $i; ?>"><?php echo esc_html(get_theme_mod('content2_list_h2_text' . $i, $default_c2h2[$i - 1])); ?></h2>
                            </div>
                            <div class="content <?php echo $list_class[$i - 1]; ?>">
                                <div class="rgba">
                                    <p class="c2-p-text<?php echo $i; ?>"><?php echo esc_html(get_theme_mod('content2_list_p_text' . $i, $default_c2p[$i - 1])); ?></p>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
        <!--2つの魅力コンテンツ-->
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
        <!--新着情報コンテンツ-->
        <div id="content04" class="position">
            <div class="back-menu">
                <div class="rhombus">
                    <h2 class="c4-h2-text"><?php echo esc_html(get_theme_mod('content4_h2_text', "新着情報")); ?></h2>
                </div>
            </div>
            <div class="slideshow02">
                <?php

                $args = array(
                    'post_type' => 'post', //投稿タイプ(投稿記事はpost)
                    'posts_per_page' => 10, //表示する記事の数
                );

                $query = new WP_Query($args);
                ?>

                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>

                        <div class="news-content">

                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(); //サムネイルがある場合は表示 ?>" alt="">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); //ない場合はこのurlの画像を表示 ?>/site-date/photos/pc-photo/codding.jpg" alt="">
                            <?php endif; ?>
                            <div class="slide2-content">
                                <?php $categories = get_the_category(); ?>
                                <?php if(!empty($categories)): ?>
                                <?php foreach($categories as $category ): ?>
                                <p class="category"><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name);?></a></p><!--記事カテゴリ名-->
                                <?php endforeach; ?>
                                <?php endif; ?>
                                <p class="date"><?php echo get_the_date(); ?></p><!--更新日時-->
                                <p class="text"><?php the_title(); ?></p><!--記事本文抜粋-->
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
        </div>
        <!--お問い合わせコンテンツ-->
        <div id="contact-in" class="position">
            <div class="contact-back">
                <div class="rhombus">
                    <h2 class="contact-in-h2"><?php echo esc_html(get_theme_mod('contact_in_h2', "お問い合わせ")); ?></h2>
                </div>
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
        <div class="profile-container position">
            <div id="profile">
                <div class="profile-back">
                    <div class="rhombus">
                        <h2 class="profile-h2"><?php echo esc_html(get_theme_mod('profile_h2_text', 'プロフィール')); ?></h2>
                    </div>
                </div>
                <div class="profile-inner">
                    <img class="profile-img01" src="<?php echo esc_url(get_theme_mod('profile_image', get_template_directory_uri() . '/site-date/photos/pc-photo/profile.png')); ?>" alt="">
                    <h3><ruby class="name">安<rt>やす</rt>崎<rt>ざき</rt>&emsp;海<rt>&nbsp;&emsp;かい</rt>星<rt>せい</rt></ruby></h3>
                    <div class="profile-text">
                        <p class="profile-p"><?php echo esc_html(get_theme_mod('profile_p_text', '初めまして、当サイトを最後までご覧いただきましてありがとうございます。私は北海道札幌市を拠点にフロントエンドエンジニアとして活動させていただいている。安崎と申します。')); ?></p>
                    </div>
                </div>
                <div class="programming-back">
                    <div class="rhombus">
                        <h2 class="profile-skill-h2-text"><?php echo esc_html(get_theme_mod('profile_skill_h2_text', 'スキル')); ?></h2>
                    </div>
                </div>
                <ul>
                    <?php
                    //実際にサイトで使用するデフォルトデータ
                    $default_course = array(
                        array(
                            'image' => '/site-date/photos/pc-photo/html.png',
                            'star' => '/site-date/photos/images/star_05.png',
                            'title' => 'HTML',
                            'description' => 'HTMLは幅広いタグを扱うことができ、それぞれの目的に合ったタグを使用することでSEO対策にも貢献させることができます。',
                        ),
                        array(
                            'image' => '/site-date/photos/pc-photo/css.png',
                            'star' => '/site-date/photos/images/star_05.png',
                            'title' => 'CSS',
                            'description' => '最近では素のCSSだけではなく、より汎用性に富んだSASS(SCSS形式)を使用しコーディングまで対応することができます。',
                        ),
                        array(
                            'image' => '/site-date/photos/pc-photo/javascript.png',
                            'star' => '/site-date/photos/images/star_05.png',
                            'title' => 'JavaScript',
                            'description' => 'JavaScript及びjQueryについては主に動きを加える場合に使用しており、背景アニメーションのような高度な幾何学模様を制作することも可能です。',
                        ),
                        array(
                            'image' => '/site-date/photos/pc-photo/php.png',
                            'star' => '/site-date/photos/images/star_04.png',
                            'title' => 'PHP',
                            'description' => 'お問い合わせページのフルスクラッチ開発、WordPress内でのループの作成やカスタマイザーの開発等幅広く対応可能です。',
                        ),
                        array(
                            'image' => '/site-date/photos/pc-photo/wordpress.png',
                            'star' => '/site-date/photos/images/star_04.png',
                            'title' => 'WordPress',
                            'description' => 'WordPressでは既存のテンプレートを使用したサイト構築から、テーマカスタマイザーを使用した自作テンプレート制作まで幅広く対応可能です。',
                        ),
                        array(
                            'image' => '/site-date/photos/pc-photo/mysql.png',
                            'star' => '/site-date/photos/images/star_04.png',
                            'title' => 'MySQL',
                            'description' => 'MySQLではPHPと連携し、商品管理サイトの作成やWordPress回りの構築する際に使用しています。',
                        ),
                        array(
                            'image' => '/site-date/photos/pc-photo/git.png',
                            'star' => '/site-date/photos/images/star_05.png',
                            'title' => 'Git',
                            'description' => 'ソースコードの管理はGitを使用していますので、チームでの開発を行う案件にも対応可能です。',
                        ),
                        array(
                            'image' => '/site-date/photos/pc-photo/photoshop.png',
                            'star' => '/site-date/photos/images/star_05.png',
                            'title' => 'Photoshop',
                            'description' => 'デザインデータの書き出し等を主に使用しています。また、撮影した画像などの加工処理等も行えます。',
                        ),
                        array(
                            'image' => '/site-date/photos/pc-photo/illustrator.png',
                            'star' => '/site-date/photos/images/star_04.png',
                            'title' => 'Illustrator',
                            'description' => '主にイラストやロゴの制作に使用しており、基本的な操作をすることが可能です。',
                        ),
                        array(
                            'image' => '/site-date/photos/pc-photo/xd.png',
                            'star' => '/site-date/photos/images/star_05.png',
                            'title' => 'XD',
                            'description' => '主にデザインを書き出す際に使用するツールでPhotoshopの次くらいの頻度で書き出すことが多いです。また、これ以外のデザインカンプの共有法としてはFigmaからの。',
                        ),
                    );
                    // テーマカスタマイザーで保存されたデータを取得
                    $courses = array();
                    for ($index = 0; $index < 10; $index++) {
                        $coure = array(
                            'image'       => get_theme_mod('mytheme_course_image_' . $index, $default_course[$index]['image']),
                            'star'        => get_theme_mod('mytheme_course_star_' . $index, $default_course[$index]['star']),
                            'title'       => get_theme_mod('mytheme_course_title_' . $index, $default_course[$index]['title']),
                            'description' => get_theme_mod('mytheme_course_description_' . $index, $default_course[$index]['description']),
                        );

                        // データが存在する場合のみ追加
                        if ($coure['image'] || $coure['star'] || $coure['title'] || $coure['description']) {
                            $courses[] = $coure;
                        }
                    }
                    $i = 1;

                    // コースを出力
                    foreach ($courses as $course) : ?>
                        <li>
                            <a href="">
                                <img class="list-img<?php echo $i; ?>" src="<?php echo get_template_directory_uri(); ?><?php echo $course['image']; ?>" alt="">
                                <div>
                                    <img class="list-star<?php echo $i; ?>" src="<?php echo get_template_directory_uri(); ?><?php echo $course['star']; ?>" alt="">
                                    <h2 class="list-title<?php echo $i; ?>"><?php echo $course['title']; ?></h2>
                                    <p class="list-text<?php echo $i; ?>"><?php echo $course['description']; ?></p>
                                </div>
                            </a>
                        </li>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <!-- ここまで -->
    </div>
</main>

<!-- footer読み込み -->
<?php get_footer(); ?>