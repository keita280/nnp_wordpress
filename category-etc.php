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
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </ol>
  </div>


  <!-- 新着情報 -->
  <section class="nner news-inner">
  <ul class="news-list">
      <a href="<?php echo esc_url( home_url() ); ?>/category/training/">
      <li data-id="Content1" class="news-item">
        研修案内
      </li>
      </a>
      <a href="<?php echo esc_url( home_url() ); ?>/category/activity/">
      <li data-id="Content2" class="news-item">
        活動報告
      </li>
      </a>
      <a href="<?php echo esc_url( home_url() ); ?>/category/etc/">
      <li data-id="Content3" class="news-item Tab__isActive">
        その他
      </li>
      </a>
    </ul>

    <div class="training_container">
      <!-- 研修のお知らせ -->
      <ul class="training-info-list">
        <?php
        $newslist = get_posts(array(
          'paged' => get_query_var('paged'), //これを加えました
          'category_name' => 'training', //特定のカテゴリースラッグを指定
          'posts_per_page' => 10, //取得記事件数
        ));
        foreach ($newslist as $post) :
          setup_postdata($post);
        ?>

          <li class="training-info-item ">
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
      <ul class="pagination-list is-pc Pager__isActive">
      <?php
      $args = array(
          'mid_size' => 1,
          'prev_text' => '&lt;&lt;前へ',
          'next_text' => '次へ&gt;&gt;',
          'screen_reader_text' => ' ',
      );
      the_posts_pagination($args);
      ?>
      </ul>
      </ul>


      <!-- 活動報告 -->
      <ul class="training-info-list">
        <?php
        $newslist = get_posts(array(
          'paged' => get_query_var('paged'), //これを加えました
          'category_name' => 'activity', //特定のカテゴリースラッグを指定
          'posts_per_page' => 10, //取得記事件数
        ));
        foreach ($newslist as $post) :
          setup_postdata($post);
        ?>

          <li class="training-info-item">
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
      <ul class="pagination-list is-pc">
      <?php
      $args = array(
          'mid_size' => 1,
          'prev_text' => '&lt;&lt;前へ',
          'next_text' => '次へ&gt;&gt;',
          'screen_reader_text' => ' ',
      );
      the_posts_pagination($args);
      ?>
      </ul>
      </ul>


      <!-- その他-->
      <ul class="training-info-list Content__isActive">
        <?php
        $newslist = get_posts(array(
          'paged' => get_query_var('paged'), //これを加えたらページネーションうまくいった
          'category_name' => 'etc', //特定のカテゴリースラッグを指定
          'posts_per_page' => 10, // 表示件数
        ));
        foreach ($newslist as $post) :
          setup_postdata($post);
        ?>
          <li class="training-info-item">
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
     <ul class="pagination-list is-pc">
      <?php
      $args = array(
          'mid_size' => 1,
          'prev_text' => '&lt;&lt;前へ',
          'next_text' => '次へ&gt;&gt;',
          'screen_reader_text' => ' ',
      );
      the_posts_pagination($args);
      ?>
      </ul>
      </ul>


      <!-- ページネーション -->



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