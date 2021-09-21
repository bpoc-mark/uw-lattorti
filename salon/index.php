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

  <title>SALON | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Salon">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_sect">
        <div class="wrapper">
          <div class="container">
            <span>サロン情報</span>
            <h3>SALON</h3>
            <ul class="breadcrumb">
              <li>
                  <a href="/">TOP</a>
              </li>
              <li>
                  <a href="/salon/">SALON</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <h3 class="c-anim-up">すべてはお客様の笑顔のために。<br>
                私たちの幸せは、<br>
                お客様の笑顔によって創られます。</h3>
            <p class="c-anim-up">をモットーに、スタイルの再現性を追求し、一生お付き合いさせてただける<br>特別なサロンでありたいと考えております。</p>
          </div>
          <div class="img_cont container row">
            <div class="col">
              <picture class="c-anim-up">
              <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                  <source srcset="/images/salon/sp/img_1.png" media="(max-width: 899px)" type="image/webp">
                  <source srcset="/images/salon/img_1.png" media="(min-width: 900px)">
                  <img src="/images/salon/sp/img_1.png" alt="" class="c-anim-up">
              </picture>
            </div>
            <div class="col">
              <picture class="c-anim-up">
              <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                  <source srcset="/images/salon/sp/img_2.png" media="(max-width: 899px)" type="image/webp">
                  <source srcset="/images/salon/img_2.png" media="(min-width: 900px)">
                  <img src="/images/salon/sp/img_2.png" alt="" class="c-anim-up">
              </picture>
            </div>
          </div>
          <div class="txt_cont container">
            <div class="item">
              <span class="c-anim-up">RELUX</span>
              <p class="c-anim-up">サロン内は白を基調とした、心ほどける上質空間。<br>
                カットスペースは隣席が気にならない様レイアウトされています。<br>
                1席ずつ区切られたシャンプースペースでは個室感覚のヘッドスパが受けられます。</p>
            </div>
            <div class="item">
              <span class="c-anim-up">BEAUTY</span>
              <p class="c-anim-up">スタイルの再現性を追求しお客様の理想を叶える技術はもちろん、髪本来の美しさを引き出すためのケアも重視。髪や肌に触れる薬剤を厳選しています。<br>
                  シャンプーは特約店のみ使用が許される「Aujua（オージュア）」を。まつ毛エクステ、ジェルネイルは国産にこだわる国内メーカーのみを使用。脱毛は高い安全基準をクリアした器具でお客様の安全を保障します。</p>
            </div>
            <div class="item">
              <span class="c-anim-up">OTHER</span>
              <p class="c-anim-up">ヘアメニューはもちろん、ネイル・マツエク・脱毛のメニューも充実。<br>
                お客様の求める多くのご要望にお応え出来るよう、知識と技術が豊富なスタッフ（トータルビューティシャン）が「美」をご提供します。</p>
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
