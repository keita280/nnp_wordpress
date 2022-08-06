<?php
/**
 * テーマのセットアップ
 **/
function my_setup() {
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5', //HTML5でマークアップ
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

/**
* CSSとJavaScriptの読み込み
*/
function my_script_init() {
  // reset_css
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), filemtime(get_theme_file_path('css/reset.css')), 'all');
  // fontawsome
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css', array(), '5.8.2', 'all');
  // original_css
  wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), filemtime(get_theme_file_path('css/style.css')), 'all');
  // js
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


/**
 * メニューの登録
 */
function my_menu_init() {
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer' => 'フッターメニュー',
    )
  );
}
add_action('init', 'my_menu_init');


/*====================================
 カスタム投稿タイプ
====================================*/

add_action( 'init', 'custom_post' );
function custom_post() {
//カスタム投稿（投稿項目の名前）
    register_post_type( 'schedule', array(
        'label' => '研修会・イベント一覧',
        'public' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'schedule' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array( 'title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes' ),
        'has_archive' => true
    ));
//カスタム分類(タクソノミー)→今回の案件では使用しない。
    // register_taxonomy( 'schedule_cat', array(
    //     0 => 'schedule',),array(
    //     'hierarchical' => true,
    //     'label' => 'カテゴリー',
    //     'public' => true,
    //     'query_var' => true,
    //     'rewrite' => array( 'slug' => 'schedule_cat' ),
    // ));
}