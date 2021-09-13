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

<body id="Topics_content">
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
                  <a href="">TOP</a>
              </li>
              <li>
                  <a href="">TOPICS</a>
              </li>
              <li>
                  <a href="">新商品！！！</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <h3 class="post_title">新商品！！！</h3>
            <div class="row">
              <div class="col">
                <img src="/images/topics_content/img_1.png" alt="">
              </div>
              <div class="col">
                <p class="post_info">
                  <span class="post_cat">NEWS</span>
                  <span class="post_date">2021.04.30</span>
                </p>
                <p class="post_content">
                  こんばんは！<br>
                  lattorti total beauticiansの太田麻紀子です。<br>
                  今夜は、新商品のご紹介です。<br>
                  梅雨入りでじめじめした日が続いております。<br>
                  <br>
                  髪の表面にほわほわした毛が出てきたり、髪全体が広がったり、毛先がまとまらなかったり、変にうねりが出てきたり…。<br>
                  特にこの時期は髪の悩みが尽きません。そんなお悩みを抱えている方は多いのではないでしょうか？？？<br>
                  そんな時には、ヘアオイルがおススメです。<br>
                  こちらのmm【ミリ】のヘアオイルはタオルドライした濡れた髪につけるのもあり、ドライ後につけるのもあり、水っぽいサラサラなテクスチャーで、香りもオレンジフラワーの強すぎない品のある香りです。<br>
                  オイルはぺたんとして、ベタつくから苦手という髪質の人には是非オススメしたいです。<br>
                  ベタつきはまったく無く、パーマスタイルの方で毛先がパサついてしまう方にもおススメ！<br>
                  軽い質感だけど、しっとりまとまる、なのにサラサラなんです！<br>
                  今まで使ったヘアオイルの中でダントツ1位と言ってくださる方も多いです。肌にも使えるオイルなので、髪についたオイルが顔周りについても安全です。<br>
                  敏感肌の方にもぜひ！気になった方はスタッフまで。<br>
                  <br>
                  新店舗住所 ／ 浜松市中区上島町3-17-3です。<br>
                  電話番号は引き続き、0534246757となります。<br>
                  場所が分かりづらい場合はご遠慮なくお電話ください。
                </p>
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
