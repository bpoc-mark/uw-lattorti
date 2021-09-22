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

  <title>プライバシーポリシー | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Privacy">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_sect">
        <div class="wrapper">
          <div class="container">
            <span>プライバシーポリシー</span>
            <h3>PRIVACY POLICY</h3>
            <ul class="breadcrumb">
              <li>
                  <a href="/">TOP</a>
              </li>
              <li>
                  <a href="/privacy/">PRIVACY POLICY</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <p class="desc">ラットルティは、お客様の個人情報がお客様にとって重要な守るべきものであるとともに、弊社にとっても重要な経営情報であると認識しております。<br>
            ラットルティは次のとおり個人情報保護方針を定め、社員一同がこれを遵守することを宣言します。<br>
            お客様の個人情報を適切に守り、皆様の私どもに対するご信頼とご期待をますます高めさせて頂きたく考えております。</p>
            <ul>
              <li>
                <h3>(1) 個人情報の取得</h3>
                <p>サービスの提供にあたり、必要な個人情報につきましては、ご本人様から直接適正な方法で取得し、偽りその他不正な手段により取得することはありません。</p>
              </li>
              <li>
                <h3>(2) 個人情報の利用目的</h3>
                <p>サービスのご提供ならびにそれらに関するご案内のため、また関連するアフターサービスに関する情報のご提供のために、お客さま情報を利用いたします。</p>
              </li>
              <li>
                <h3>(3) 安全管理対策</h3>
                <p>当店は、個人情報を管理するために、セキュリティの確保・向上に鋭意努力しており、個人情報への外部からの不正なアクセス、個人情報の紛失・毀損・破壊・改ざん・漏えい、外部への不正な流出等への危険防止に対する合理的かつ適切な安全管理対策をおこないます。</p>
              </li>
              <li>
                <h3>(4) 個人情報の第三者への提供</h3>
                <p>お客さまの個人情報は、以下の場合を除いて、第三者へ提供することはございません。</p>
                <p>1. お客さまの同意がある場合。</p>
                <p>2. 公的機関からの法令に基づく照会など、法令により第三者提供が認められている場合。</p>
                <p>3. 当店と守秘義務契約を締結している協力会社、提携会社および業務委託先等に対して、お客さまに明示した利用目的の達成に必要な範囲内で個人情報の取扱いを委託する場合。</p>
              </li>
              <li>
                <h3>(5) 個人情報に関するお問い合わせ</h3>
                <p>お客さまからの個人情報に関するお問合せにつきましては、所定の手続に基づき誠実に対応します。<br>
                  お客さまが提供された個人情報の変更・停止・削除に関するご要望ならびにお客さまご自身の情報に関するご照会、個人情報の取扱いに関するお問合せ、ご意見は当店までお問い合わせ下さい。</p>
              </li>
            </ul>
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
