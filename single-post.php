<?php
/*
Template Name: sigle-postページ
*/
get_header("white");
?>




<!-- ページタイトル -->
<main class="main-fixed">
  <!-- パンくずリスト -->
  <div class="breadcrumb inner news_breadcrumb">
    <ol class="breadcrumbs">
      <li><a href="../index.html">トップ</a></li>
      <li><a href="./index.html"></a>研修会・イベント一覧</li>
    </ol>
  </div>

  <!-- message_container -->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <section class="news_container">
        <div class="inner">
          <div class="news_header">
            <div class="news_catgegory">
              <?php
              $category = get_the_category();
              echo $category[0]->cat_name;
              ?>
            </div>
            <div class="news_date"><?php the_date(); ?></div>
          </div>
          <h3 class="news_title"><?php the_title(); ?></h3>
          <?php if (has_post_thumbnail()) : ?>
            <div class="blog-detail__image">
              <img src="<?php the_post_thumbnail_url('large'); ?>">
            </div>
          <?php endif; ?>
          <div class="news_txt">
            <div class="blog-detail__body">
              <div class="blog-content"><?php echo the_content(); ?></div>
            </div>
          </div>
          <div class="for_news">
            <a class="cmn-button">新着情報一覧<span class="arrow-right icon"></span></a>
          </div>
        </div>
      </section>
  <?php endwhile;
  endif; ?>

  <?php get_footer(); ?>