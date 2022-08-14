<?php
/*
Template Name: admissionページ
*/
get_header();
?>


    <!-- ページタイトル -->
    <div class="page-title">
      <figure class="section_title_blob-r"><img src="<?php echo get_template_directory_uri(); ?>/img/blobs.svg" alt=""></figure>
      <h1 class="page-ttl">入会案内</h1>
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

      <!-- admission_container -->
      <section class="admission_container">
        <div class="admission_body inner">
          <p class="admission_txt">
            一般社団法人全国精神科栄養士協会へご入会をご希望の方は、下記の入会申込フォームから登録をお願いいたします。
          </p>
          <div class="admission_box_wrapper">
            <div class="admission_box">
              <h4 class="admission_box_ttl">会員資格のある方 </h4>
              <p class="admission_box_txt">・精神科に勤務する管理栄養士・栄養士<br>
                ・精神科領域に興味のある管理栄養士・栄養士</p>
            </div>
            <div class="admission_box">
              <h4 class="admission_box_ttl">会費 </h4>
              <p class="admission_box_txt">年会費5,000 円。入会金等はございません。<br>
                研修会等の会員割引があります。</p>
            </div>

          </div>
        </div>
      </section>

      <!-- admission_form -->
      <section class="admission_contact_container">
        <div class="admission_contact_inner inner">
          <h3 class="h3_ttl">入会申込フォーム</h3>
          <figure class="admission_flow"><img src="./img/admission_flow.webp" alt=""></figure>
          <h4 class="form_h4_ttl">会員情報</h4>
          <form  class="admission_form" action="" method="post" name="">
              <!-- <div class="admission_form_container">
                <div class="admission_form_body">
                    <label>お名前<span>必須</span></label>
                    <input type="text" name="name" placeholder="例：山田　太郎" value="">
                </div>
                <div class="admission_form_body">
                    <label>お名前フリガナ<span>必須</span></label>
                    <input type="text" name="name" placeholder="例：ヤマダ　タロウ" value="">
                </div>
                <div class="admission_form_body">
                  <label>精神科医学会認定栄養士<span>必須</span></label>
                  <div class="radio">
                    <input type="radio" name="radio" class="radio-input" id="radio-01" required>
                    <label for="radio-01">取得済み</label><br>
                    <input type="radio" name="radio" class="radio-input" id="radio-02">
                    <label for="radio-02">未取得</label><br>
                  </div>
                </div>
                <div class="admission_form_body">
                    <label>メールアドレス<span>必須</span></label>
                    <input type="text" name="email" placeholder="例：mail@example.com" value="">
                </div>
                <div class="admission_form_body">
                    <label>電話番号</label>
                    <input type="text" name="tel" placeholder="例：08012345678" value="">
                </div>
                <div class="admission_form_body">
                  <label>自宅郵便番号<span>必須</span></label>
                  <input type="text" name="email" placeholder="例：08012345678" value="">
              </div>             
              <div class="admission_form_body">
                <label>自宅住所<span>必須</span></label>
                <input type="text" name="email" placeholder="例：東京都板橋区小茂根4-11-11" value="">
              </div>
              <hr class="form_border"></hr>
              <h4 class="form_h4_ttl">勤務先情報</h4>
              <div class="admission_form_body">
                <label>施設名<span>必須</span></label>
                <input type="text" name="email" placeholder="例：〇〇病院" value="">
              </div>
              <div class="admission_form_body">
                <label>部署名/役職</label>
                <input type="text" name="email" placeholder="例：〇〇部　課長" value="">
              </div>
              <div class="admission_form_body">
                <label>郵便番号<span>必須</span></label>
                <input type="text" name="email" placeholder="例：08012345678" value="">
              </div>             
              <div class="admission_form_body">
              <label>住所<span>必須</span></label>
              <input type="text" name="email" placeholder="例：東京都板橋区小茂根4-11-11" value="">
              </div>
              <div class="admission_form_body">
                <label>電話番号</label>
                <input type="text" name="tel" placeholder="例：08012345678" value="">
              </div>
              <hr class="form_border"></hr>
                <div class="admission_form_body">
                  <label>個人情報の取り扱い<span class="required">必須</span></label>
                  <input class="checkbox-input" type="checkbox" name="" value=""><p class="checkbox-text"><a class="privacy-link" href="">プライバシーポリシー</a>に同意する</p>
                </div>
              </div> -->

              <?php echo do_shortcode( '[contact-form-7 id="206" title="お問い合わせ_copy"]' ); ?>

          </form>

        </div>
      </section>

      <!-- admission_formここまで -->

      <?php get_footer(); ?>