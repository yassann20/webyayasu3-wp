<?php
session_start();
$_SESSION["number"] = 5; /* スライドショーの枚数 */

//サムネイルとメニュー機能を有効にする

function webyayasu3_setup()
{
  add_theme_support('post-thumbnails'); //アイキャッチ画像をON
  add_theme_support('menus');  //メニュー機能をON
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
  $wp_customize->add_panel('slider01', array(
    'title' => 'トップスライダー画像',
    'priority' => 10,
  ));
  /* トップPC版スライダー画像の処理 */
  $num = $_SESSION["number"];
  for ($i = 1; $i <= $num; $i++) :
    $wp_customize->add_section('original_pc_custom' . $i, array(
      'title' => 'PC版スライダー画像' . $i,
      'panel' => 'slider01',
      'priority' => 30,
    ));
    $wp_customize->add_setting('original_pc_image' . $i, array(
      'type' => 'option',
    ));
    if (class_exists('WP_Customize_Image_Control')) :
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'original_pc_image' . $i, array(
        'settings' => 'original_pc_image' . $i,
        'label' => 'PC版スライダー画像' . $i,
        'section' => 'original_pc_custom' . $i,
        'description' => 'PC版スライダー画像を設定してください。',
      )));
    endif;
  endfor;

  /* トップSP版スライダー画像の処理 */
  for ($i = 1; $i <= $num; $i++) :
    $wp_customize->add_section('original_sp_custom' . $i, array(
      'title' => 'SP版スライダー画像' . $i,
      'panel' => 'slider01',
      'priority' => 30,
    ));
    $wp_customize->add_setting('original_sp_image' . $i, array(
      'type' => 'option',
    ));
    if (class_exists('WP_Customize_Image_Control')) :
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'original_sp_image' . $i, array(
        'settings' => 'original_sp_image' . $i,
        'label' => 'SP版スライダー画像' . $i,
        'section' => 'original_sp_custom' . $i,
        'description' => 'SP版スライダー画像を設定してください。',
      )));
    endif;
  endfor;

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
  /*----------------------------------------------------------------------
    profile
    -----------------------------------------------------------------------*/
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
    'label' => 'プロフィールスキル（名前）',
    'section' => 'profile_skill_name',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('profile_skill_name_text', array(
    'selector' => '.profile-skill-name', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* profileスキル(名前)はここまで */
  /* profileスキル(名前) デフォルトでは使用しない*/
  $wp_customize->add_section('profile_skill_text', array(
    'title' => 'プロフィールスキル（名前）',
    'panel' => 'profile',
    'priority' => 30,
  ));
  $wp_customize->add_setting('profile_skill_p_text', array(
    'type' => 'option',
  ));

  $wp_customize->add_control('profile_skill_p_text', array(
    'settings' => 'profile_skill_p_text',
    'label' => 'プロフィールスキル（名前）',
    'section' => 'profile_skill_text',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('profile_skill_p_text', array(
    'selector' => '.profile-skill-p', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* profileスキル(名前)はここまで */
  /* profileスキル画像 */
  $proimg = 10; //スキル画像の枚数を定義
  for ($i = 1; $i <= $proimg; $i++) :
    $wp_customize->add_section('profile_skill_img' . $i, array(
      'title' => 'プロフィールスキル画像' . $i,
      'panel' => 'profile',
      'priority' => 30,
    ));
    $wp_customize->add_setting('profile_skill_image' . $i, array(
      'type' => 'option',
    ));
    if (class_exists('WP_Customize_Image_Control')) :
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'profile_skill_image' . $i, array(
        'settings' => 'profile_skill_image' . $i,
        'label' => 'プロフィールスキル画像' . $i,
        'section' => 'profile_skill_img' . $i,
        'description' => 'リスト内の画像を選択してください',
      )));
    endif;
    $wp_customize->selective_refresh->add_partial('profile_skill_image', array(
      'selector' => '.profile-skill-p', // セレクターを実際の出力に合わせて変更する
      'container_inclusive' => false,
    ));
  endfor;
  /* profileスキル画像ここまで */
}
add_action('customize_register', 'theme_customize_register');
