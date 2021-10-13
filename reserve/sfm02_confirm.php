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
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title>お問い合わせ | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Competitive">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main id="Contact" class="sfm2">
      <section class="jumbo_sect">
				<div class="wrapper">
					<div class="container">
						<span>予約</span>
						<h3>RESERVE</h3>
						<ul class="breadcrumb">
						<li>
							<a href="/">TOP</a>
						</li>
						<li>
							<a href="/reserve/">予約</a>
						</li>
						</ul>
					</div>
				</div>
			</section>
      <section class="form-sec">
        <div class="form_wrap container">
          <p class="desc">申し訳ございませんが、お問い合わせフォームからのご予約は承っておりません。<br>
						ラットルティのご予約は、アプリにてネット予約を受付ております。お手数ですが、「RESERVE」からのご予約をお願い致します。<br>
						下記フォームの、「 ＊ 」入力必須項目に情報を入力して下さい。内容を確認の上、担当者より折り返しご連絡いたします。</p>
          <form method="post" name="sfm-form" id="sfm-form" action="./">

            <table>

              <tr>
                <th>■メニュー <span class="need">＊</span></th>
                <td>
                  <p><?php echo $sfm_html->menu; ?></p>
                </td>
              </tr>

              <tr>
                <th>■ご希望日程 <span class="need">＊</span></th>
                <td>
                  <p><?php echo $sfm_html->date; ?></p>
                </td>
              </tr>

              <tr>
                <th>■ご希望時間帯 <span class="need">＊</span></th>
                <td>
                  <p><?php echo $sfm_html->time; ?></p>
                </td>
              </tr>

              <tr>
                <th>■お名前 <span class="need">＊</span></th>
                <td>
                  <p><?php echo $sfm_html->name; ?></p>
                </td>
              </tr>

              <tr>
                <th>■フリガナ <span class="need">＊</span></th>
                <td>
                  <p><?php echo $sfm_html->furigana; ?></p>
                </td>
              </tr>

              <!-- <tr>
                <th>■ご住所<span class="need"></span></th>
                <td>
                  <p>〒<?php echo $sfm_html->zip; ?></p>
                  <p><?php echo $sfm_html->address; ?></p>
                </td>
              </tr> -->

              <tr>
                <th>■電話番号<span class="need">＊</span></th>
                <td>
                  <p><?php echo $sfm_html->tel; ?></p>
                </td>
              </tr>

              <tr>
                <th>■メールアドレス<span class="need">＊</span></th>
                <td>
                  <p><?php echo $sfm_html->email; ?></p>
                </td>
              </tr>

              <!-- <tr>
                <th>■チェックボックス <span class="need">必須</span></th>
                <td>
                  asd
                  <p><?php echo $sfm_html->check; ?></p>
                </td>
              </tr> -->

              <!-- <tr>
                <th>■セレクトボックス<span class="need">〈必須〉</span></th>
                <td>
                  <p><?php echo $sfm_html->select; ?></p>
                </td>
              </tr> -->

              <tr>
                <th>■お問い合わせ内容<span class="need">＊</span></th>
                <td>
                  <p><?php echo $sfm_html->message; ?></p>
                </td>
              </tr>

            </table>

            <div class="submit_area">
              <?php echo $sfm_submit; ?>
            </div><!-- submit_area -->

          </form>
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
