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

  <title>ACCESS | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Access">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_sect">
        <div class="wrapper">
          <div class="container">
            <span>アクセス</span>
            <h3>ACCESS</h3>
            <ul class="breadcrumb">
              <li>
                  <a href="/">TOP</a>
              </li>
              <li>
                  <a href="/access/">ACCESS</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="map_wrap">
            <div class="info_cont container">
              <h4 class="c-anim-up">
                l.a.ttorti total beauticians <br>
                <span class="c-anim-up">（ラットルティ トータルビューティシャンズ 浜松）</span>
              </h4>
              <p class="c-anim-up">〒433-8122 <br> 静岡県浜松市中区上島3-17-3</p>
              <p class="c-anim-up"><a href="tel:053-424-6757">TEL.053-424-6757</a></p>
              <p class="c-anim-up">OPEN. ［火・水］ 10:00～18:00　<br> ［木・金］ 10:00～20:00　<br> ［土］ 9:00～20:00　<br> ［日祝］ 9:00～17:00</p>
              <p class="c-anim-up">CLOSED. 月曜日</p>
              <p class="c-anim-up">MAIL.  info@lattorti.com</p>
            </div>
            <div class="map_cont container row">
                <div class="col c-anim-up">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.620482038609!2d137.7452255923162!3d34.73995952288817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ade3445506dd3%3A0x1ee09dae60b493ee!2s3-ch%C5%8Dme-17-3%20Kamijima%2C%20Naka%20Ward%2C%20Hamamatsu%2C%20Shizuoka%20433-8122%2C%20Japan!5e0!3m2!1sen!2sph!4v1631269777342!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col c-anim-up">
                    <img src="/images/access/map_1.png" alt="">
                </div>
            </div>
          </div>
          <div class="map_wrap">
            <div class="info_cont container">
              <h4 class="c-anim-up">
                l.a.ttorti total beauticians sapporo <br>
                <span class="c-anim-up">（ラットルティ トータルビューティシャンズ 札幌）</span>
              </h4>
              <p class="c-anim-up">〒062-0933 <br> 札幌市豊平区平岸三条15丁目3-3</p>
              <p class="c-anim-up"><a href="tel:011-598-0850">TEL.011-598-0850</a></p>
              <p class="c-anim-up">OPEN. 11:00～16:00</p>
              <p class="c-anim-up">CLOSED. 不定休</p>
              <p class="c-anim-up">MAIL.  info@lattorti.com</p>
            </div>
            <div class="map_cont container row">
                <div class="col c-anim-up">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2916.7715013365937!2d141.36736511576322!3d43.025196500828464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2a68938ecd0f%3A0x6e12363435362aec!2s15-ch%C5%8Dme-3-3%20Hiragishi%203%20J%C5%8D%2C%20Toyohira%20Ward%2C%20Sapporo%2C%20Hokkaido%20062-0933%2C%20Japan!5e0!3m2!1sen!2sph!4v1631269821881!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col c-anim-up">
                    <img src="/images/access/map_2.png" alt="">
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
