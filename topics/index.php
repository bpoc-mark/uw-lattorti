<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
  <meta charset="UTF-8" />
  <meta name="robots" content="index,follow">
  <link rel="canonical" href="<?php echo CANONICAL ?>">
  <meta name="keywords" content="<?php echo KEY_WORD ?>">
  <meta name="description" content="<?php echo DESCRIPTION ?>">
  <meta property="og:title" content="<?php echo SITE_NAME ?>">
  <meta property="og:type" content="article" /> <!-- 下層では「article」にしてください -->
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title>トピックス | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Topics">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_sect">
        <div class="wrapper">
          <div class="container">
            <span>トピックス</span>
            <h3>TOPICS</h3>
            <ul class="breadcrumb">
              <li>
                  <a href="/">TOP</a>
              </li>
              <li>
                  <a href="/topics/">TOPICS</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <div class="post_cat_cont c-anim-up">
              <span>CATEGORY : <img src="/images/topics/arrow_down.png" alt=""></span>
              <ul class="post_cat">
                <li>
                  <a href="" class="active">ALL</a>
                </li>
                <li>
                  <a href="">NEWS</a>
                </li>
                <li>
                  <a href="">PRODUCT</a>
                </li>
                <li>
                  <a href="">RECRUIT</a>
                </li>
                <li>
                  <a href="">MENU</a>
                </li>
              </ul>
            </div>
            <ul class="news_ul">
              <li class="news_li c-anim-up">
                <a href="">
                  <span class="category">NEWS</span>
                  <span class="img_wrap"><img src="/images/topics/img_1.png" alt="ダミー画像"></span>
                  <span class="title">5月、6月、7月の店休日</span>
                  <span class="date">2021.04.30</span>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="">
                  <span class="category">PRODUCT</span>
                  <span class="img_wrap"><img src="/images/topics/img_2.png" alt="ダミー画像"></span>
                  <span class="title">V3 HARISET 販売開始！</span>
                  <span class="date">2021.04.30</span>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="">
                  <span class="category">RECRUIT</span>
                  <span class="img_wrap"><img src="/images/topics/img_3.png" alt="ダミー画像"></span>
                  <span class="title">只今スタッフ募集中です！</span>
                  <span class="date">2021.04.30</span>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="">
                  <span class="category">MENU</span>
                  <span class="img_wrap"><img src="/images/topics/img_4.png" alt="ダミー画像"></span>
                  <span class="title">移転オープンしました！</span>
                  <span class="date">2021.04.30</span>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="">
                  <span class="category">NEWS</span>
                  <span class="img_wrap"><img src="/images/topics/img_1.png" alt="ダミー画像"></span>
                  <span class="title">5月、6月、7月の店休日</span>
                  <span class="date">2021.04.30</span>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="">
                  <span class="category">PRODUCT</span>
                  <span class="img_wrap"><img src="/images/topics/img_2.png" alt="ダミー画像"></span>
                  <span class="title">V3 HARISET 販売開始！</span>
                  <span class="date">2021.04.30</span>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="">
                  <span class="category">RECRUIT</span>
                  <span class="img_wrap"><img src="/images/topics/img_3.png" alt="ダミー画像"></span>
                  <span class="title">只今スタッフ募集中です！</span>
                  <span class="date">2021.04.30</span>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="">
                  <span class="category">MENU</span>
                  <span class="img_wrap"><img src="/images/topics/img_4.png" alt="ダミー画像"></span>
                  <span class="title">移転オープンしました！</span>
                  <span class="date">2021.04.30</span>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="">
                  <span class="category">NEWS</span>
                  <span class="img_wrap"><img src="/images/topics/img_1.png" alt="ダミー画像"></span>
                  <span class="title">5月、6月、7月の店休日</span>
                  <span class="date">2021.04.30</span>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="">
                  <span class="category">PRODUCT</span>
                  <span class="img_wrap"><img src="/images/topics/img_2.png" alt="ダミー画像"></span>
                  <span class="title">V3 HARISET 販売開始！</span>
                  <span class="date">2021.04.30</span>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="">
                  <span class="category">RECRUIT</span>
                  <span class="img_wrap"><img src="/images/topics/img_3.png" alt="ダミー画像"></span>
                  <span class="title">只今スタッフ募集中です！</span>
                  <span class="date">2021.04.30</span>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="">
                  <span class="category">MENU</span>
                  <span class="img_wrap"><img src="/images/topics/img_4.png" alt="ダミー画像"></span>
                  <span class="title">移転オープンしました！</span>
                  <span class="date">2021.04.30</span>
                </a>
              </li>
            </ul>

            <!-- Wordpress -->
            <div class="page_navigation  c-anim-up">
              <div class="wp-pagenavi">
                <a class="previouspostslink" href="#" rel="prev"><img src="/images/topics/arrow.svg" alt=""></a>
                <span class="current">1</span>
                <a class="page smaller" href="#">2</a>
                <a class="page larger" href="#">3</a>
                <a class="page larger" href="#">4</a>
                <a class="nextpostslink" href="#" rel="next"><img src="/images/topics/arrow.svg" alt=""></a>
              </div>
            </div>

            <!-- Movable Type -->
            <!-- <div class="page_navigation">
              <ul>
                <li><span class="current_page">1</span></li>
                <li><a href="#" class="link_page">2</a></li>
                <li><a href="#" class="link_page">3</a></li>
              </ul>
            </div> -->
          </div>
        </div>
      </section>
      
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
