<?php
/*
Template Name: cntactページ
*/
get_header();
?>



<!-- ページタイトル -->
<div class="page-title">
  <figure class="section_title_blob-r"><img src="<?php echo get_template_directory_uri(); ?>/img/blobs.svg" alt=""></figure>
  <h1 class="page-ttl">お問い合わせ</h1>
  <figure class="section_title_blob-l"><img src="<?php echo get_template_directory_uri(); ?>/img/blobs_2.svg" alt=""></figure>
</div>

<main>
  <!-- パンくずリスト -->
  <div class="breadcrumb inner">
    <ol class="breadcrumbs">
      <li><a href="../index.html">トップ</a></li>
      <li><a href="./index.html"></a>研修会・イベント一覧</li>
    </ol>
  </div>

  <!-- change_container -->
  <section class="change_container">
    <div class="change_body inner">
      <p class="change_txt">
        下記のフォームに必要事項を入力の上、送信してください。<br>
        会員情報の変更・退会は<a class="change_contact_link" href="">こちら</a>からお願いいたします。
        <br>
        <br>
        電話、FAXでのお問い合わせはこちら
        <br>
        TEL：03-5986-3171　　FAX：050-3730-7423
      </p>
    </div>
  </section>

  <!-- change_form -->
  <section class="change_contact_container">
    <div class="change_contact_inner inner">
      <h3 class="h3_ttl">お問い合わせフォーム</h3>
      <!-- <form class="change_form" action="" method="post" name="">
        <div class="change_form_container">
          <div class="change_form_body">
            <label>お名前<span>必須</span></label>
            <input type="text" name="name" placeholder="例：山田　太郎" value="">
          </div>
          <div class="change_form_body">
            <label>メールアドレス<span>必須</span></label>
            <input type="text" name="email" placeholder="例：mail@example.com" value="">
          </div>
          <div class="change_form_body">
            <label>電話番号</label>
            <input type="text" name="tel" placeholder="例：08012345678" value="">
          </div>
          <div class="change_form_body">
            <label>施設名</label>
            <p>電話での回答をご希望の場合は、必ずご入力ください。</p>
            <input type="text" name="number" placeholder="例：〇〇施設" value="">
          </div>
          <div class="change_form_body">
            <label>会員番号</label>
            <input type="text" name="number" placeholder="例：12345678" value="">
          </div>
          <div class="change_form_body">
            <label class="label_row">お問い合わせ内容<span>必須</span></label>
            <textarea name="content" rows="5" placeholder="お問い合わせ内容を入力してください"></textarea>
          </div>
          <div class="change_form_body">
            <label>個人情報の取り扱い<span class="required">必須</span></label>
            <input class="checkbox-input" type="checkbox" name="" value="">
            <p class="checkbox-text"><a class="privacy-link" href="">プライバシーポリシー</a>に同意する</p>
          </div>
        </div>


        <div class="change_submit">
          <p class="change_submit_text">入力内容をご確認の上、<br class="is-sp">送信ボタンを押してください。</p>


          <div class="button_wrap">
                <input type="submit" value="送信する" /><span
                  class="change-arrow-white"
                ></span>
              </div>
        </div>
      </form> -->

      <?php echo do_shortcode( '[contact-form-7 id="191" title="コンタクトフォーム 1"]' ); ?>

    </div>
  </section>

  <!-- change_formここまで -->
  <?php get_footer(); ?>