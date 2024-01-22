<?php
session_start();
$_SESSION["number"] = 5; /* スライドショーの枚数 */

//サムネイルとメニュー機能を有効にする

function webyayasu3_setup()
{
  add_theme_support('post-thumbnails'); //アイキャッチ画像をON
  add_theme_support('menus');  //メニュー機能をON
  register_nav_menus(array(
    'main-menu' => 'メインメニュー'
  ));
  set_theme_mod('mytheme_option', 'default_value');
}

add_action('after_setup_theme', 'webyayasu3_setup');

function customizer_widgets()
{
  add_theme_support('customize-selective-refresh-widgets');
}
add_action('init', 'customizer_widgets');

function enqueue_custom_scripts() //jquery読み込み
{
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

//リアルタイムでのカスタマイズを有効にするためのjavascriptを読み込む

//カスタマイザー付与
function theme_customize_register($wp_customize)
{
    /*----------------------------------------------------------------------
    content1
    -----------------------------------------------------------------------*/
  /* コンテンツ1大見出し */
  $wp_customize->add_panel('content01', array(
    'title' => 'コンテンツ1',
    'priority' => 20,
  ));
  $wp_customize->add_section('top-h1-txt', array(
    'title' => '大見出し',
    'panel' => 'content01',
    'priority' => 10,
  ));
  $wp_customize->add_setting('top_h1_text', array(
    'default' => 'デフォルトの大見出し',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('top_h1_text', array(
    'settings' => 'top_h1_text',
    'label' => 'コンテンツ1大見出し',
    'section' => 'top-h1-txt',
    'type' => 'text',
  ));

  // 編集ショートカットの設定
  $wp_customize->selective_refresh->add_partial('top_h1_text', array(
    'selector' => '.top-h1', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* 大見出しここまで */

  /* コンテンツ1p1 */
  $wp_customize->add_section('top_p1', array(
    'title' => 'コンテンツ1_テキスト1',
    'panel' => 'content01',
    'priority' => 30,
  ));
  $wp_customize->add_setting('top_p1_text', array(
    'type' => 'option',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('top_p1_text', array(
    'settings' => 'top_p1_text',
    'label' => 'コンテンツ1_テキスト1',
    'section' => 'top_p1',
    'type' => 'text',
  ));
  // 編集ショートカットの設定
  $wp_customize->selective_refresh->add_partial('top_p1_text', array(
    'selector' => '.top-p1', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* コンテンツ1p1ここまで */

  /* コンテンツ1h3 */
  $wp_customize->add_section('top_h3', array(
    'title' => 'コンテンツ1_小見出し',
    'panel' => 'content01',
    'priority' => 30,
  ));
  $wp_customize->add_setting('top_h3_text', array(
    'type' => 'option',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('top_h3_text', array(
    'settings' => 'top_h3_text',
    'label' => 'コンテンツ1_テキスト1',
    'section' => 'top_h3',
    'type' => 'text',
  ));
  // 編集ショートカットの設定
  $wp_customize->selective_refresh->add_partial('top_h3_text', array(
    'selector' => '.top-h3', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* コンテンツ1h3ここまで */

  /*----------------------------------------------------------------------
    content2
    -----------------------------------------------------------------------*/

  /* content2-list内h2 */
  $wp_customize->add_panel('content02', array(
    'title' => 'コンテンツ2',
    'priority' => 30,
  ));
  $c2h2 = 3;
  $default_c2h2 = ['コーディング','WP制作','保守・運営'];//リスト見出しデフォルト
  for ($i = 1; $i <= $c2h2; $i++) {
    $wp_customize->add_section('content2_list_h2_' . $i, array(
      'title' => 'コンテンツ2_h2テキスト' . $i,
      'panel' => 'content02',
      'priority' => 30,
    ));
    $wp_customize->add_setting('content2_list_h2_text' . $i, array(
      'type' => 'option',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('content2_list_h2_text' . $i, array(
      'settings' => 'content2_list_h2_text' . $i,
      'label' => 'コンテンツ2_h2テキスト',
      'section' => 'content2_list_h2_' . $i,
      'type' => 'text',
    ));
    // 編集ショートカットの設定
    $wp_customize->selective_refresh->add_partial('content2_list_h2_text'.$i, array(
      'selector' => '.c2-h2-text'.$i, // セレクターを実際の出力に合わせて変更する
      'container_inclusive' => false,
    ));
  }
  /* content2-list内h2ここまで */

  /* content2-list内p */
  for ($i = 1; $i <= $c2h2; $i++) {
    $wp_customize->add_section('content2_list_p_' . $i, array(
      'title' => 'コンテンツ2_テキスト' . $i,
      'panel' => 'content02',
      'priority' => 30,
    ));
    $wp_customize->add_setting('content2_list_p_text' . $i, array(
      'type' => 'option',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('content2_list_p_text' . $i, array(
      'settings' => 'content2_list_p_text' . $i,
      'label' => 'コンテンツ2_テキスト' . $i,
      'section' => 'content2_list_p_' . $i,
      'type' => 'text',
    ));
    $wp_customize->selective_refresh->add_partial('content2_list_p_text' . $i, array(
      'selector' => '.c2-p-text' . $i, // セレクターを実際の出力に合わせて変更する
      'container_inclusive' => false,
    ));
  }
  /*----------------------------------------------------------------------
      content3
      -----------------------------------------------------------------------*/
  /* content3-list内h2 */
  $wp_customize->add_panel('content03', array(
    'title' => 'コンテンツ3',
    'priority' => 30,
  ));
  $wp_customize->add_section('content3_h2', array(
    'title' => 'コンテンツ3_h2テキスト',
    'panel' => 'content03',
    'priority' => 30,
  ));
  $wp_customize->add_setting('content3_h2_text', array(
    'type' => 'option',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('content3_h2_text', array(
    'settings' => 'content3_h2_text',
    'label' => 'コンテンツ3_h2テキスト',
    'section' => 'content3_h2',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('content3_h2_text', array(
    'selector' => '.c3-h2-text', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* content3-list内h2ここまで */

  /* content3内見出し*/
  $c3list = 2;
  for ($i = 1; $i <= $c3list; $i++) {
    $wp_customize->add_section('content3_list_h2_' . $i, array(
      'title' => 'コンテンツ3_リスト_h2テキスト' . $i,
      'panel' => 'content03',
      'priority' => 30,
    ));
    $wp_customize->add_setting('content3_list_h2_text' . $i, array(
      'type' => 'option',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('content3_list_h2_text' . $i, array(
      'settings' => 'content3_list_h2_text' . $i,
      'label' => 'コンテンツ3_リスト_h2テキスト' . $i,
      'section' => 'content3_list_h2_' . $i,
      'type' => 'text',
    ));
  
  $wp_customize->selective_refresh->add_partial('content3_list_h2_text'.$i, array(
    'selector' => '.c3-list-h2-text'.$i, // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
}
  /* content3内見出しここまで */

  /* content3背景画像 */
  for ($i = 1; $i <= $c3list; $i++) :
    $wp_customize->add_section('content3_list_back_img' . $i, array(
      'title' => 'コンテンツ3_リスト_背景画像' . $i,
      'panel' => 'content03',
      'priority' => 30,
    ));
    $wp_customize->add_setting('content3_list_back_image' . $i, array(
      'type' => 'option',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    if (class_exists('WP_Customize_Image_Control')) :
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'content3_list_back_image' . $i, array(
        'settings' => 'content3_list_back_image' . $i,
        'label' => 'コンテンツ3_リスト_背景画像' . $i,
        'section' => 'content3_list_back_img' . $i,
        'description' => 'リスト内の画像を選択してください',
      )));
    endif;
  endfor;
  /* content3背景画像ここまで */

  /* content3本文*/
  for ($i = 1; $i <= $c3list; $i++) {
    $wp_customize->add_section('content3_list_p' . $i, array(
      'title' => 'コンテンツ3_リスト_本文' . $i,
      'panel' => 'content03',
      'priority' => 30,
    ));
    $wp_customize->add_setting('content3_list_text' . $i, array(
      'type' => 'option',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('content3_list_text' . $i, array(
      'settings' => 'content3_list_text' . $i,
      'label' => 'コンテンツ3_リスト_本文' . $i,
      'section' => 'content3_list_p' . $i,
      'type' => 'text',
    ));
    $wp_customize->selective_refresh->add_partial('content3_list_text' . $i, array(
      'selector' => '.c3-list-text' . $i, // セレクターを実際の出力に合わせて変更する
      'container_inclusive' => false,
    ));
  }
  /* content3内見出しここまで */
  $wp_customize->add_panel('profile', array(
    'title' => 'プロフィール',
    'panel' => 'profile',
    'priority' => 40,
  ));


  /* content4 h2 */
  $wp_customize->add_panel('content04', array(
    'title' => 'コンテンツ3',
    'priority' => 30,
  ));
  $wp_customize->add_section('content4_h2', array(
    'title' => 'コンテンツ3_h2テキスト',
    'panel' => 'content03',
    'priority' => 30,
  ));
  $wp_customize->add_setting('content4_h2_text', array(
    'type' => 'option',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('content4_h2_text', array(
    'settings' => 'content4_h2_text',
    'label' => 'コンテンツ3_h2テキスト',
    'section' => 'content4_h2',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('content4_h2_text', array(
    'selector' => '.c4-h2-text', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* content4 h2ここまで */


  /* contact-in h2 */
  $wp_customize->add_panel('contact-in', array(
    'title' => 'コンテンツ3',
    'priority' => 30,
  ));
  $wp_customize->add_section('contact-in-h2', array(
    'title' => 'コンテンツ3_h2テキスト',
    'panel' => 'content03',
    'priority' => 30,
  ));
  $wp_customize->add_setting('contact_in_h2', array(
    'type' => 'option',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('contact_in_h2', array(
    'settings' => 'contact_in_h2',
    'label' => 'お問い合わせ_h2テキスト',
    'section' => 'contact-in-h2',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('contact_in_h2', array(
    'selector' => '.contact-in-h2', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* contact-in h2ここまで */


  /*----------------------------------------------------------------------
    profile
    -----------------------------------------------------------------------*/
  /* profile画像を編集*/
  $wp_customize->add_section('profile-img-sec', array(
    'title' => '画像',
    'panel' => 'profile',
    'priority' => 30,
  ));
  $wp_customize->add_setting('profile_image', array(
    'type' => 'option',
    'transport' => 'postMessage',
    'sanitize_callback' => 'esc_url_raw',
  ));
  if (class_exists('WP_Customize_Image_Control')) :
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'profile_image', array(
      'settings' => 'profile_image',
      'label' => 'プロフィール画像の選択',
      'section' => 'profile-img-sec',
      'description' => 'プロフィール画像を選択してください',
    )));
  endif;
  $wp_customize->selective_refresh->add_partial('profile_image', array(
    'selector' => '.profile-img01', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));


  /* profile大見出しの編集 */
  $wp_customize->add_section('profile_h2', array(
    'title' => 'プロフィール大見出し',
    'panel' => 'profile',
    'priority' => 30,
  ));
  $wp_customize->add_setting('profile_h2_text', array(
    'type' => 'option',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('profile_h2_text', array(
    'settings' => 'profile_h2_text',
    'label' => 'プロフィール大見出し',
    'section' => 'profile_h2',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('profile_h2_text', array(
    'selector' => '.profile-h2', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* profile大見出しの編集ここまで */
  /* profile名前の編集 デフォルトでは使用しない*/
  $wp_customize->add_section('profile_name', array(
    'title' => 'プロフィール（名前）',
    'panel' => 'profile',
    'priority' => 30,
  ));
  $wp_customize->add_setting('profile_name_text', array(
    'type' => 'option',
  ));

  $wp_customize->add_control('profile_name_text', array(
    'settings' => 'profile_name_text',
    'label' => 'プロフィール（名前）',
    'section' => 'profile_name',
    'type' => 'text',
  ));
  /* profile名前はここまで */
  
  /* profile名前の編集 デフォルトでは使用しない*/
  $wp_customize->add_section('profile_text', array(
    'title' => 'プロフィール（本文）',
    'panel' => 'profile',
    'priority' => 30,
  ));
  $wp_customize->add_setting('profile_p_text', array(
    'type' => 'option',
  ));

  $wp_customize->add_control('profile_p_text', array(
    'settings' => 'profile_p_text',
    'label' => 'プロフィール（本文）',
    'section' => 'profile_text',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('profile_p_text', array(
    'selector' => '.profile-p', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* profile名前はここまで */


  /* profileスキル(名前) デフォルトでは使用しない*/
  $wp_customize->add_section('profile_skill_name', array(
    'title' => 'プロフィール（本文）',
    'panel' => 'profile',
    'priority' => 30,
  ));
  $wp_customize->add_setting('profile_skill_name_text', array(
    'type' => 'option',
  ));

  $wp_customize->add_control('profile_skill_name_text', array(
    'settings' => 'profile_skill_name_text',
    'label' => 'プロフィールスキル見出し',
    'section' => 'profile_skill_name',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('profile_skill_name_text', array(
    'selector' => '.profile-skill-name', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* profileスキル(名前)はここまで */


  /* profileスキル(名前) デフォルトでは使用しない*/
  $wp_customize->add_section('profile-skill-h2-text', array(
    'title' => 'プロフィールスキル（名前）',
    'panel' => 'profile',
    'priority' => 30,
  ));
  $wp_customize->add_setting('profile_skill_h2_text', array(
    'type' => 'option',
  ));

  $wp_customize->add_control('profile_skill_h2_text', array(
    'settings' => 'profile_skill_h2_text',
    'label' => 'プロフィールスキル（名前）',
    'section' => 'profile-skill-h2-text',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('profile_skill_h2_text', array(
    'selector' => '.profile-skill-h2-text', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* profileスキル(名前)はここまで */


  
  //profile内のスキル数を増やせるように処理
  $wp_customize->add_section('mytheme_courses_section', array(
    'title' => __('コース', 'mytheme'),
    'priority' => 30,
  ));
  
  //ダミーデータのちに自動で生成
  $course = array(
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

    // ダミーデータを元に動的に設定を生成
foreach( $course as $index => $coure ){
    // 画像
    $wp_customize->add_setting('mytheme_course_image_' . $index, array(
        'default'   => $coure['image'],
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mytheme_course_image_' . $index, array(
        'label'    => __('コース画像', 'mytheme') . ' (' . $coure['title'] . ')',
        'section'  => 'mytheme_courses_section',
        'settings' => 'mytheme_course_image_' . $index,
    )));
    $wp_customize->selective_refresh->add_partial('mytheme_course_image_' . $index, array(
      'selector' => '.list-img' . $index + 1, // セレクターを実際の出力に合わせて変更する
      'container_inclusive' => false,
    ));


    // 星の画像
    $wp_customize->add_setting('mytheme_course_star_' . $index, array(
        'default'   => $coure['star'],
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mytheme_course_star_' . $index, array(
        'label'    => __('星の画像', 'mytheme') . ' (' . $coure['title'] . ')',
        'section'  => 'mytheme_courses_section',
        'settings' => 'mytheme_course_star_' . $index,
    )));
    $wp_customize->selective_refresh->add_partial('mytheme_course_star_' . $index, array(
      'selector' => '.list-star' . $index + 1, // セレクターを実際の出力に合わせて変更する
      'container_inclusive' => false,
    ));


    // タイトル
    $wp_customize->add_setting('mytheme_course_title_' . $index, array(
        'default'   => $coure['title'],
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('mytheme_course_title_' . $index, array(
        'label'    => __('コースタイトル', 'mytheme') . ' (' . $coure['title'] . ')',
        'section'  => 'mytheme_courses_section',
        'settings' => 'mytheme_course_title_' . $index,
        'type'     => 'text',
    ));
    $wp_customize->selective_refresh->add_partial('mytheme_course_title_' . $index, array(
      'selector' => '.list-title' . $index + 1 , // セレクターを実際の出力に合わせて変更する
      'container_inclusive' => false,
    ));


    // 説明
    $wp_customize->add_setting('mytheme_course_description_' . $index, array(
        'default'   => $coure['description'],
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('mytheme_course_description_' . $index, array(
        'label'    => __('コース説明', 'mytheme') . ' (' . $coure['title'] . ')',
        'section'  => 'mytheme_courses_section',
        'settings' => 'mytheme_course_description_' . $index,
        'type'     => 'textarea',
    ));
    $wp_customize->selective_refresh->add_partial('mytheme_course_description_' . $index, array(
      'selector' => '.list-text' . $index + 1, // セレクターを実際の出力に合わせて変更する
      'container_inclusive' => false,
    ));

    
}
}
add_action('customize_register', 'theme_customize_register');
