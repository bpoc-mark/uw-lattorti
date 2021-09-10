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

<body id="Staff">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_sect">
        <div class="wrapper">
          <div class="container">
            <span>スタッフ紹介</span>
            <h3>STAFF</h3>
            <ul class="breadcrumb">
              <li>
                  <a href="">TOP</a>
              </li>
              <li>
                  <a href="">STAFF</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col">
                <figure>
                  <img src="/images/staff/img_1.png" alt="">
                </figure>
                <div class="staff_info">
                  <h5>Kenji Takeda</h5>
                  <p>竹田 賢治 <br> Owner / Stylist</p>
                </div>
              </div>
              <div class="col">
                <figure>
                  <img src="/images/staff/img_2.png" alt="">
                </figure>
                <div class="staff_info">
                  <h5>Makiko Ota</h5>
                  <p>太田 麻紀子 <br> Stylist / Esthetician</p>
                </div>
              </div>
              <div class="col">
                <figure>
                  <img src="/images/staff/img_3.png" alt="">
                </figure>
                <div class="staff_info">
                  <h5>Rieka Ozawa</h5>
                  <p>尾澤 里枝香 <br> Stylist / Nailist / Esthetician</p>
                </div>
              </div>
              <div class="col">
                <figure>
                  <img src="/images/staff/img_4.png" alt="">
                </figure>
                <div class="staff_info">
                  <h5>Kanako Ota</h5>
                  <p>太田 可奈子 <br> Stylist / Eyelist / Esthetician</p>
                </div>
              </div>
              <div class="col">
                <figure>
                  <img src="/images/staff/img_5.png" alt="">
                </figure>
                <div class="staff_info">
                  <h5>Moeka Araki</h5>
                  <p>荒木 萌華 <br> Nailist / Eyelist / Esthetician</p>
                </div>
              </div>
              <div class="col">
                <figure>
                  <img src="/images/staff/img_6.png" alt="">
                </figure>
                <div class="staff_info">
                  <h5>Moeka Araki</h5>
                  <p>荒木 萌華 <br> Nailist / Eyelist / Esthetician</p>
                </div>
              </div>
              <div class="col">
                <figure>
                  <img src="/images/staff/img_7.png" alt="">
                </figure>
                <div class="staff_info">
                  <h5>Sana Hasegawa</h5>
                  <p>長谷川 紗菜 <br> Eyelist / Esthetician</p>
                </div>
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
