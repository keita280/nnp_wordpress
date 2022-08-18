<?php
/*
Template Name: archove_newsページ
*/
get_header();
?>
<!-- ページタイトル -->
<div class="page-title">
  <figure class="section_title_blob-r">
    <img src="<?php echo get_template_directory_uri(); ?>/img/blobs.svg" alt="" />
  </figure>
  <h1 class="page-ttl">新着情報</h1>
  <figure class="section_title_blob-l">
    <img src="<?php echo get_template_directory_uri(); ?>/img/blobs_2.svg" alt="" />
  </figure>
</div>

<main>
  <!-- パンくずリスト -->
  <div class="breadcrumb inner">
    <ol class="breadcrumbs">
      <li><a href="../index.html">トップ</a></li>
      <li><a href="./index.html"></a>新着情報</li>
    </ol>
  </div>


  <!-- 新着情報 -->
  <section class="nner news-inner">
    <ul class="news-list">
      <li data-id="Content1"  class="news-item Tab__isActive">
        研修案内
      </li>
      <li data-id="Content2"  class="news-item">
      活動報告
      </li>
      <li data-id="Content3"  class="news-item">
      その他
      </li>
    </ul>

    <div class="training_container">
      <!-- 研修のお知らせ -->
      <ul class="training-info-list">
        <?php
        $newslist = get_posts(array(
          'category_name' => 'training', //特定のカテゴリースラッグを指定
          'posts_per_page' => 10, //取得記事件数
        ));
        foreach ($newslist as $post) :
          setup_postdata($post);
        ?>
          <li id="Content1" class="training-info-item Content__isActive">
            <p class="training-date"> <?php the_time('Y.m.d'); ?></p>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <p class="training-content">
              <?php echo get_the_excerpt(); ?>
            </p>
          </li>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>


        <!-- 活動報告 -->
        <?php
        $newslist = get_posts(array(
          'category_name' => 'activity', //特定のカテゴリースラッグを指定
          'posts_per_page' => 10, //取得記事件数
        ));
        foreach ($newslist as $post) :
          setup_postdata($post);
        ?>
          <li id="Content2" class="training-info-item">
            <p class="training-date"> <?php the_time('Y.m.d'); ?></p>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <p class="training-content">
              <?php echo get_the_excerpt(); ?>
            </p>
          </li>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>


        <!-- その他-->
        <?php
        $newslist = get_posts(array(
          'category_name' => 'etc', //特定のカテゴリースラッグを指定
          'posts_per_page' => 10, // 表示件数
        ));
        foreach ($newslist as $post) :
          setup_postdata($post);
        ?>
          <li id="Content3" class="training-info-item">
            <p class="training-date"> <?php the_time('Y.m.d'); ?></p>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <p class="training-content">
              <?php echo get_the_excerpt(); ?>
            </p>
          </li>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>


      </ul>

      <!-- ページネーション -->
      <ul class="pagination-list is-pc">
        <li class="pagination-item">
          <a class="pagination-item_link" href="#"></a><span>1</span>
        </li>
        <li class="pagination-item">
          <a class="pagination-item_link" href="#"></a><span>2</span>
        </li>
        <li class="pagination-item">
          <a class="pagination-item_link" href="#"></a><span>3</span>
        </li>
        <li class="pagination-item">
          <a class="pagination-item_link" href="#"></a><span>4</span>
        </li>
        <li class="pagination-item">
          <a class="pagination-item_link" href="#"></a><span>…</span>
        </li>
        <li class="pagination-item">
          <a class="pagination-item_link" href="#"></a><span>50</span>
        </li>
        <li class="pagination-item">
          <a class="pagination-item_link" href="#"></a><span>→</span>
        </li>
      </ul>

      <!-- @@@@@@@@@@@@@@@@@@@@@@@@@ -->
      <!-- SP時 -->
      <!-- @@@@@@@@@@@@@@@@@@@@@@@@@ -->
      <ul class="pagination-list is-sp">
        <li class="pagination-item">
          <a class="pagination-item_link" href="#"></a><span>1</span>
        </li>
        <li class="pagination-item">
          <a class="pagination-item_link" href="#"></a><span>2</span>
        </li>
        <li class="pagination-item">
          <a class="pagination-item_link" href="#"></a><span>…</span>
        </li>
        <li class="pagination-item">
          <a class="pagination-item_link" href="#"></a><span>50</span>
        </li>
        <li class="pagination-item">
          <a class="pagination-item_link" href="#"></a><span>→</span>
        </li>
      </ul>
    </div>

    <ul class="news-list_is-sp">
      <li class="news-item_is-sp"><a href="#">研修案内</a></li>
      <li class="news-item_is-sp">
        <a class="news-item_text" href="#">活動報告</a>
      </li>
      <li class="news-item_is-sp">
        <a class="news-item_text" href="#">その他</a>
      </li>
    </ul>
  </section>



  <?php
  get_footer();
  ?>