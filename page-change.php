<?php
/*
Template Name: changeページ
*/
get_header();
?>

    <!-- ページタイトル -->
    <div class="page-title">
      <figure class="section_title_blob-r"><img src="<?php echo get_template_directory_uri(); ?>/img/blobs.svg" alt=""></figure>
      <h1 class="page-ttl">会員情報の変更・退会</h1>
      <figure class="section_title_blob-l"><img src="<?php echo get_template_directory_uri(); ?>/img/blobs_2.svg" alt=""></figure>
    </div>

    <main>
      <!-- パンくずリスト -->
      <div class="breadcrumb inner">
    <ol class="breadcrumbs">
    <?php
    if ( function_exists( 'bcn_display' ) ) {
    bcn_display();
    }
    ?>
    </ol>
  </div>

      <!-- change_container -->
      <section class="change_container">
        <div class="change_body inner">
          <p class="change_txt">
            会員情報の変更、退会ご希望の方は、下記のフォームからご連絡ください。<br>
            その他のお問い合わせは<a class="change_contact_link" href="">こちら</a>からお願いいたします。
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
          <h3 class="h3_ttl">会員情報の変更・退会フォーム</h3>
          <form  class="change_form" action="" method="post" name="">
            <!-- <div class="change_form_container">
              <div class="change_form_body">
                  <label>お名前<span>必須</span></label>
                  <input type="text" name="name" placeholder="例：山田　太郎" value="">
              </div>
              <div class="change_form_body">
                  <label>メールアドレス<span>必須</span></label>
                  <input type="text" name="email" placeholder="例：mail@example.com" value="">
              </div>
              <div class="change_form_body">
                  <label>会員番号</label>
                  <input type="text" name="number" placeholder="例：12345678" value="">
              </div>
              <div class="change_form_body">
                  <label>電話番号</label>
                  <input type="text" name="tel" placeholder="例：08012345678" value="">
              </div>
              <div class="change_form_body">
                  <label>内容<span>必須</span></label>
                  <div class="radio">
                    <input type="radio" name="radio" class="radio-input" id="radio-01" required>
                    <label for="radio-01">会員情報の変更</label><br>
                    <input type="radio" name="radio" class="radio-input" id="radio-02">
                    <label for="radio-02">退会</label><br>
                  </div>
              </div>
              <div class="change_form_body">
                  <label class="label_row">内容の詳細<span>必須</span></label>
                  <p class="form_change_description-text">登録内容の変更をご希望の方は、変更したい情報を入力してください。</p>
                  <textarea name="content" rows="5" placeholder="内容の詳細を入力してください"></textarea>
              </div>
              <div class="change_form_body">
                <label>個人情報の取り扱い<span class="required">必須</span></label>
                <input class="checkbox-input" type="checkbox" name="" value=""><p class="checkbox-text"><a class="privacy-link" href="">プライバシーポリシー</a>に同意する</p>
              </div>
            </div>


            <div class="change_submit">
              <p class="change_submit_text">入力内容をご確認の上、<br class="is-sp">送信ボタンを押してください。</p>
              <a href="" class="change_submit_button">
                <div class="chenge_button-white">詳しく見る<span class="change-arrow-white"></span></div></a>
              </div> -->

              <?php echo do_shortcode( '[contact-form-7 id="207" title="入会案内_copy"]' ); ?>

          </form>

        </div>
      </section>

      <!-- change_formここまで -->
      <?php get_footer(); ?>