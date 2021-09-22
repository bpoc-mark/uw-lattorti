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

  <title>ヘアスタイル | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Hair">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_sect">
        <div class="wrapper">
          <div class="container">
            <span>ヘアスタイル</span>
            <h3>HAIR STYLE</h3>
            <ul class="breadcrumb">
              <li>
                  <a href="/">TOP</a>
              </li>
              <li>
                  <a href="/hair/">HAIR STYLE</a>
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
                  <a href="">ショートヘア</a>
                </li>
                <li>
                  <a href="">ミディアムヘア</a>
                </li>
                <li>
                  <a href="">ロングヘア</a>
                </li>
                <li>
                  <a href="">パーマスタイル</a>
                </li>
                <li>
                  <a href="">カラーリング</a>
                </li>
                <li>
                  <a href="">ヘアアレンジ</a>
                </li>
              </ul>
            </div>
            <ul class="news_ul">
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/1.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/1.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/1.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/2.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/2.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/2.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/3.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/3.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/3.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/4.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/4.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/4.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/5.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/5.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/5.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/6.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/6.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/6.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/7.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/7.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/7.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/8.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/8.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/8.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/1.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/1.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/1.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/2.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/2.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/2.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/3.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/3.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/3.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/4.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/4.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/4.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/5.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/5.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/5.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/6.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/6.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/6.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/7.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/7.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/7.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
                </a>
              </li>
              <li class="news_li c-anim-up">
                <a href="" class="img_col">
                  <div class="img_wrap c-anim-up">
                      <picture>
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                          <source srcset="/images/top/sp/section_5/8.png" media="(max-width: 899px)" type="image/webp">
                          <source srcset="/images/top/section_5/8.png" media="(min-width: 900px)">
                          <img src="/images/top/sp/section_5/8.png" alt="">
                      </picture>
                      <div class="p_head">
                          <p>ワンレン大人カジュアル<br>
                              ボブパーマ<br>
                              ワンレン大人カジュアル</p>
                      </div>
                  </div>
                  <p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
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
