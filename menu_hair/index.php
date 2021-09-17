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

<body id="Menu_hair">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_sect">
        <div class="wrapper">
          <div class="container">
            <span>メアメニュー</span>
            <h3>HAIR MENU</h3>
            <ul class="breadcrumb">
              <li>
                  <a href="">TOP</a>
              </li>
              <li>
                  <a href="">HAIR MENU</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="menu_banner container">
            <div class="row">
              <div class="col">
                <h3>BeautyBuffet <br> <span>- ビューティーバイキング -</span></h3>
                <p>右のメニューの中から3つ選んで</p>
                <h4>
                  <span>ご新規様<br>
                  限定</span>
                  <span>¥</span>
                  11,000
                </h4>
                <p>①一般カット、②カラー、<br>③パーマはシャンプー・ブロー込み</p>
              </div>
              <div class="col">
                <div class="row">
                  <div class="col">
                    <img src="/images/menu_hair/1.png" alt="">
                    <p>① <br>一般カット</p>
                  </div>
                  <div class="col">
                    <img src="/images/menu_hair/2.png" alt="">
                    <p>② <br>カラー</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="row">
                  <div class="col">
                    <img src="/images/menu_hair/1.png" alt="">
                    <p>① <br>一般カット</p>
                  </div>
                  <div class="col">
                    <img src="/images/menu_hair/2.png" alt="">
                    <p>② <br>カラー</p>
                  </div>
                  <div class="col">
                    <img src="/images/menu_hair/3.png" alt="">
                    <p>③ <br>パーマ</p>
                  </div>
                  <div class="col">
                    <img src="/images/menu_hair/4.png" alt="">
                    <p>④ <br>まつエク 100本</p>
                  </div>
                  <div class="col">
                    <img src="/images/menu_hair/5.png" alt="">
                    <p>⑤<br>トリートメント</p>
                  </div>
                  <div class="col">
                    <img src="/images/menu_hair/6.png" alt="">
                    <p>⑥ <br>ヘッドスパ</p>
                  </div>
                  <div class="col">
                    <img src="/images/menu_hair/7.png" alt="">
                    <p>⑦ <br>ネイル</p>
                  </div>
                  <div class="col">
                    <img src="/images/menu_hair/8.png" alt="">
                    <p>⑧ <br>足痩せフットケア</p>
                  </div>
                  <div class="col">
                    <img src="/images/menu_hair/9.png" alt="">
                    <p>⑨ <br>脱毛Sパーツ</p>
                  </div>
                  <div class="col">
                    <img src="/images/menu_hair/10.png" alt="">
                    <p>⑩ <br>まつ毛カール</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="price_cont container">
            <div class="row">
              <div class="col">
                <h3 class="c-anim-up">
                  <span>カット（ブロー込）</span><br>
                  CUT
                </h3>
              </div>
              <div class="col">
                <div class="row">
                  <div class="col c-anim-up">
                    <span>デザインカット（18歳以上）</span>
                    <span>¥5,500</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>スクールカット（中高生）</span>
                    <span>¥3,850</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>チャイルドカット（小学生）</span>
                    <span>¥2,750</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ベビーカット（幼児以下）</span>
                    <span>¥1,980</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3 class="c-anim-up">
                  <span>シャンプー</span><br>
                  SHAMPOO
                </h3>
              </div>
              <div class="col">
                <div class="row">
                  <div class="col c-anim-up">
                    <span>ノーマル</span>
                    <span>¥990</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>炭酸泉シャンプー(2度洗い)</span>
                    <span>¥1,650</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>炭酸入りシャンプー(2度洗い)</span>
                    <span>¥1,980</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>炭酸スパ</span>
                    <span>+¥550</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ウォーターシャンプー</span>
                    <span>+¥110</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3 class="c-anim-up">
                  <span>カラー</span><br>
                  COLOUR
                </h3>
              </div>
              <div class="col">
                <div class="row">
                  <div class="col c-anim-up">
                    <span>リタッチ</span>
                    <span>¥5,500</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ワンタッチカラー</span>
                    <span>¥6,050</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ワンケア付リタッチ</span>
                    <span>¥7,700</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ワンケア付ワンタッチカラー</span>
                    <span>¥8,250</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ノーマルカラー（2色）</span>
                    <span>¥6,600</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ノーマルカラー（2色）</span>
                    <span>¥7,150</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>マニキュア</span>
                    <span>¥5,500</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ブリーチ</span>
                    <span>¥13,200</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ブリーチonカラー</span>
                    <span>¥19,800</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ホイルワークカラー</span>
                    <span>1枚 ／ ¥220</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3 class="c-anim-up">
                  <span>パーマ（カット・ブロー込）</span><br>
                  PERM
                </h3>
              </div>
              <div class="col">
                <div class="row">
                  <div class="col c-anim-up">
                    <span>デザインカール</span>
                    <span>¥14,300</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>前髪パーマ</span>
                    <span>¥10,450</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ハードパーマ</span>
                    <span>¥19,800</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3 class="c-anim-up">
                  <span>ストレートパーマ（カット・ブロー込）</span><br>
                  STRAIGHT PERM
                </h3>
              </div>
              <div class="col">
                <div class="row">
                  <div class="col c-anim-up">
                    <span>スーパーストレート</span>
                    <span>¥18,480</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>前髪ストレート</span>
                    <span>¥10,780</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ハードストレート</span>
                    <span>¥26,400</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3 class="c-anim-up">
                  <span>トリートメント</span><br>
                  TREATMENT
                </h3>
              </div>
              <div class="col">
                <div class="highlight_cont row c-anim-up">
                  <div class="col">
                    <img src="/images/menu_hair/img_1.png" alt="">
                  </div>
                  <div class="col">
                    <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります。テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります。</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col c-anim-up">
                    <span>Aujuaトリートメント</span>
                    <span>¥4,400</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>クイック</span>
                    <span>¥2,200</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3 class="c-anim-up">
                  <span>ヘッドスパ</span><br>
                  HEAD SPA
                </h3>
              </div>
              <div class="col">
                <div class="highlight_cont row c-anim-up">
                  <div class="col">
                    <img src="/images/menu_hair/img_1.png" alt="">
                  </div>
                  <div class="col">
                    <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります。テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります。</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col c-anim-up">
                    <span>Aujuaトリートメント</span>
                    <span>¥4,400</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>クイック</span>
                    <span>¥2,200</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3 class="c-anim-up">
                  <span>リラクゼージョン</span><br>
                  RELAXATION
                </h3>
              </div>
              <div class="col">
                <div class="highlight_cont row c-anim-up">
                  <div class="col">
                    <img src="/images/menu_hair/img_1.png" alt="">
                  </div>
                  <div class="col">
                    <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります。テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります。</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col c-anim-up">
                    <span>クイックマッサージ</span>
                    <span>¥880</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ヘッドマッサージ</span>
                    <span>¥880</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>デコルテマッサージ</span>
                    <span>¥880</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ハンドマッサージ</span>
                    <span>¥880</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3 class="c-anim-up">
                  <span>その他</span><br>
                  OTHER
                </h3>
              </div>
              <div class="col">
                <div class="row">
                  <div class="col c-anim-up">
                    <span>フルメイク</span>
                    <span>¥5,280</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ポイントメイク</span>
                    <span>¥2,640</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>眉カット</span>
                    <span>¥550</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ヘアアレンジ</span>
                    <span>¥3,850</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ヘアセット</span>
                    <span>¥6,050</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ブロー</span>
                    <span>¥3,300</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>シャンプー＆ブロー</span>
                    <span>¥4,290</span>
                  </div>
                </div>
                <p class="desc c-anim-up">※ 価格は全て税込表示です</p>
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
