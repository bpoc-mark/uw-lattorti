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

  <title><?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Nails_content">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_sect">
        <div class="wrapper">
          <div class="container">
            <span>ネイルデザイン</span>
            <h3>NAIL DESIGN</h3>
            <ul class="breadcrumb">
              <li>
                  <a href="">TOP</a>
              </li>
              <li>
                  <a href="">NAIL DESIGN</a>
              </li>
              <li>
                  <a href="">夏のアクセサリーネイル</a>
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
                  <a href="">定額ネイル</a>
                </li>
                <li>
                  <a href="">カジュアル</a>
                </li>
                <li>
                  <a href="">シンプル</a>
                </li>
                <li>
                  <a href="">エレガント</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col">
                <img src="/images/top/section_5/n_2.png" alt="" class="post_img_main">
                <div class="post_img_list">
                  <img src="/images/top/section_5/n_1.png" alt="">
                  <img src="/images/top/section_5/n_3.png" alt="">
                  <img src="/images/top/section_5/n_4.png" alt="">
                  <img src="/images/top/section_5/n_5.png" alt="">
                </div>
              </div>
              <div class="col">
                  <p class="post_cat">
                    <span>定額ネイル</span>
                    <span>エレガント</span>
                  </p>
                  <p class="post_title">夏のアクセサリーネイル</p>
                  <p class="post_content">シンプルでヘルシーロハスな大人つや美髪人気流行トレンドヘアスタイル。締まりのあるシルエットと顔周りの毛束が輪郭を隠すので小顔効果＆リフトアップ効果トップも後ろもふんわりボリューム感とメリハリシルエットが30代40代へもおすすめです。</p>
              </div>
              <div class="col">
                <a href="">back to list</a>
              </div>
            </div>
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
