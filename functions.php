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

// add_action( 'init', 'custom_post' );
// function custom_post() {
// //カスタム投稿（投稿項目の名前）
//     register_post_type( 'schedule', array(
//         'label' => '研修会・イベント一覧',
//         'public' => true,
//         'query_var' => true,
//         'rewrite' => array( 'slug' => 'schedule' ),
//         'capability_type' => 'post',
//         'hierarchical' => false,
//         'menu_position' => 5,
//         'supports' => array( 'title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes' ),
//         'has_archive' => true
//     ));
//カスタム分類(タクソノミー)→今回の案件では使用しない。
    // register_taxonomy( 'schedule_cat', array(
    //     0 => 'schedule',),array(
    //     'hierarchical' => true,
    //     'label' => 'カテゴリー',
    //     'public' => true,
    //     'query_var' => true,
    //     'rewrite' => array( 'slug' => 'schedule_cat' ),
    // ));
// }



// パスワード保護ページカスタマイズ
function my_password_form() {
  return
    '

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <div class="reference_container inner">
    <form class="reference-content" action="' . home_url() . '/wp-login.php?action=postpass" method="post">
    <p class="password-description">パスワードを入力してください</p>
		<input class="password-input" name="post_password" type="password" size="">
		<button class="submit-button" type="submit" name="Submit" value="' . esc_attr__("確定") . '">確定</button>
    </form>
    <div class="content-description">
    <p>このコンテンツは会員限定です。</p>
    <p>
      入会時に記載いただいたメールアドレス宛にお送りしたメールに記載されているパスワードを入力してください。
    </p>
    <p>
      パスワードは定期的に変更され、その度にメールをお送りしております。<br /><br />
    </p>
    <p>
      パスワードがわからない場合は、<a href="">お問い合わせフォーム</a>
      より事務局にご連絡ください。
    </p>
  </div>
	</div>';
}
add_filter('the_password_form', 'my_password_form');

// <section class="reference_container">
// <div class="inner">
//   <form class="reference-content" action="../reference/pass/index.html">
//     <p class="password-description">パスワードを入力してください</p>
//     <input
//       class="password-input"
//       type="password"
//       id="password"
//       name="password"
//       required
//       minlength="8"
//       size="30"
//     />
//     <button class="submit-button" type="submit">確定</button>
//   </form>
  // <div class="content-description">
  //   <p>このコンテンツは会員限定です。</p>
  //   <p>
  //     入会時に記載いただいたメールアドレス宛にお送りしたメールに記載されているパスワードを入力してください。
  //   </p>
  //   <p>
  //     パスワードは定期的に変更され、その度にメールをお送りしております。<br /><br />
  //   </p>
  //   <p>
  //     パスワードがわからない場合は、<a href="">お問い合わせフォーム</a>
  //     より事務局にご連絡ください。
  //   </p>
  // </div>
// </div>
// </section>