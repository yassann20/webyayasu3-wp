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