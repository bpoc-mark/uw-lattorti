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

  <title>TOTAL BEAUTY MENU | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Beauty_menu">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_sect">
        <div class="wrapper">
          <div class="container">
            <span>トータルビューティーメニュー</span>
            <h3>TOTAL BEAUTY MENU</h3>
            <ul class="breadcrumb">
              <li>
                  <a href="/">TOP</a>
              </li>
              <li>
                  <a href="/beauty_menu/">TOTAL BEAUTY MENU</a>
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
            <div class="row" id="id-nail">
              <div class="col">
                <h3 class="c-anim-up">
                  <span>ネイル</span><br>
                  NAIL
                </h3>
              </div>
              <div class="col">
                <div class="highlight_cont c-anim-up">
                  <figure>
                    <img src="/images/beauty_menu/img_1.png" alt="">
                  </figure>
                  <p>オリジナルデザインと、3種類の定額デザインを格安でご提供。<br>
                      ブライダル等のフルオーダーも承ります。<br>
                      100種以上のデザインから選べて、色もパーツも変更可能！</p>
                </div>
                <div class="row">
                  <div class="col c-anim-up">
                    <span>オリジナルデザイン</span>
                    <span>¥10,780</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>定額コース<br>［季節の定額デザイン］</span>
                    <span>¥3,850～¥6,050</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>オフ（10指）　ハンド</span>
                    <span>¥1,650</span>
                  </div>
                  <div class="col c-anim-up">
                    <span><i>オフ（10指）　</i>フット</span>
                    <span>¥1,650</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>ハンドケア</span>
                    <span>¥2,200</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>フットケア</span>
                    <span>¥2,200</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" id="id-eyelash">
              <div class="col">
                <h3 class="c-anim-up">
                  <span>まつ毛エクステ</span><br>
                  EYELASH
                </h3>
              </div>
              <div class="col">
                <div class="highlight_cont c-anim-up">
                  <figure>
                    <img src="/images/beauty_menu/img_2.png" alt="">
                  </figure>
                  <p>60本、80本、100本、120本、つけ放題の5メニュー。<br>
                    毛の「硬さ」や「カール」「長さ」「色」はお好みのものをお選びいただけます。安全安全の「国内認証」。安くないには理由がります。<br>
                    まつ毛カールは大人気メニューです。</p>
                </div>
                <p class="head_txt c-anim-up">ベーシック ／ デリケートコース</p>
                <div class="row">
                  <div class="col c-anim-up">
                    <span>60本</span>
                    <span>¥3,300</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>80本</span>
                    <span>¥4,400</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>100本</span>
                    <span>¥5,500</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>120本</span>
                    <span>¥6,600</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>つけ放題</span>
                    <span>¥11,000</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>リペア</span>
                    <span>¥3,190</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>プラス10本</span>
                    <span>¥550</span>
                  </div>
                </div>
                <p class="head_txt c-anim-up">セレブコース</p>
                <div class="row">
                  <div class="col c-anim-up">
                    <span>60本</span>
                    <span>¥3,960</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>80本</span>
                    <span>¥5,280</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>100本</span>
                    <span>¥6,600</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>120本</span>
                    <span>¥7,920</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>つけ放題</span>
                    <span>¥12,650</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>リペア</span>
                    <span>¥3,850</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>プラス10本</span>
                    <span>¥660</span>
                  </div>
                </div>
                <p class="head_txt c-anim-up">アンチエイジングコース</p>
                <div class="row">
                  <div class="col c-anim-up">
                    <span>60本</span>
                    <span>¥4,290</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>80本</span>
                    <span>¥5,720</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>100本</span>
                    <span>¥7,150</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>120本</span>
                    <span>¥8,580</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>つけ放題</span>
                    <span>¥13,200</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>リペア</span>
                    <span>¥4,180</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>プラス10本</span>
                    <span>¥748</span>
                  </div>
                </div>
                <p class="head_txt">その他</p>
                <div class="row">
                  <div class="col c-anim-up">
                    <span>シャンプー</span>
                    <span>¥550</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>アイラッシュトリートメント  A</span>
                    <span>¥1,100</span>
                  </div>
                  <div class="col c-anim-up">
                    <span><i>アイラッシュトリートメント</i> B</span>
                    <span>¥2,200</span>
                  </div>
                  <div class="col c-anim-up">
                    <span><i>アイラッシュトリートメント</i> C</span>
                    <span>¥2,750</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>まつ毛カール</span>
                    <span>¥6,600</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" id="id-esthetic">
              <div class="col">
                <h3 class="c-anim-up">
                  <span>エステ</span><br>
                  ESTHETIC
                </h3>
              </div>
              <div class="col">
                <div class="highlight_cont c-anim-up">
                  <figure>
                    <img src="/images/beauty_menu/img_3.png" alt="">
                  </figure>
                  <p><span>光脱毛</span><br>
                  光脱毛はレーザー脱毛とは異なり刺激や痛みはありません。<br>
                    1回の施術でも生えにくくなることを実感して頂けますが、回数を重ねるごとにムダ毛のお悩みはなくなっていきますので【1年（6回）コース】の継続施術がおすすめです。
                  </p>
                </div>
                <div class="row">
                  <div class="col c-anim-up">
                    <span>■ Sパーツ<br>（わき、えり足、手の甲、足の甲、へそ周り）</span>
                    <span>【30分】 ¥3,300</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>　　1年（6回）コース</span>
                    <span>¥9,900（¥1,650／回）</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>■ Mパーツ<br>（上腕、肘下、膝、腰）</span>
                    <span>【50分】 ¥5,500</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>　　1年（6回）コース</span>
                    <span>¥16,500（¥2,750／回）</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>■ Lパーツ</span>
                    <span>【60分】 ¥7,700</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>　　1年（6回）コース</span>
                    <span>¥23,100（¥3,850／回）</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>■ 全身光脱毛　※ 顔、V・I・O以外</span>
                    <span>¥22,000</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>　　1年（6回）コース</span>
                    <span>¥118,800（¥19,800／回）</span>
                  </div>
                </div>
                <p class="head_txt c-anim-up">男性ヒゲ脱毛</p>
                <p class="subhead_txt c-anim-up">ヒゲのお悩み解決を光脱毛がお手伝いいたします。<br>
                  好評につきメンズ脱毛の部位が増えました。是非一度ご相談ください。</p>
                <div class="row">
                  <div class="col c-anim-up">
                    <span>1年（6回）コース</span>
                    <span>¥33,000（¥5,500／回）</span>
                  </div>
                </div>
                <p class="subhead_txt c-anim-up">〈 KIDS光脱毛も承ります。小学校3年生以上が対象　※ 要親御様の同意 〉</p>
                <div class="highlight_cont c-anim-up">
                  <figure>
                    <img src="/images/beauty_menu/img_4.png" alt="">
                  </figure>
                  <p><span>【初回限定】 おためしエステ・脱毛コース</span><br>
                  テキストがはいりますテキストがはいりますテキストがはいりますテキストがはいりますテキストがはいりますテキストがはいりますテキストがはいりますテキストがはいりますテキストがはいります。<br>
                  テキストがはいりますテキストがはいりますテキストがはいります。
                  </p>
                </div>
                <div class="row">
                  <div class="col c-anim-up">
                    <span>■ 光フェイシャル</span>
                    <span>【30分】 　<del>通常¥9,900</del> → ¥4,950</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>　　6回コース</span>
                    <span>¥33,000（¥5,500／回）</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>■ 光リフトアップ</span>
                    <span>【30分】 　<del>通常¥4,400</del> → ¥2,200</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>　　6回コース</span>
                    <span>¥16,500（¥2,750／回）</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>■ 光脱毛Sパーツ</span>
                    <span>【30分】 　<del>通常¥3,300</del> → ¥2,200</span>
                  </div>
                </div>
                <p class="head_txt c-anim-up">足痩せフットケア</p>
                <p class="subhead_txt c-anim-up">ひざ下の老廃物を流すリンパマッサージです。<br>
                履いてきた靴が大きく感じたり、フィット感のあるパンツが緩く感じたりと施術直後に効果が実感できます。<br>
                <div class="row">
                  <div class="col c-anim-up">
                    <span>足痩せフットケア</span>
                    <span>¥3,300</span>
                  </div>
                </div>
                <p class="head_txt c-anim-up">アイトリートメント</p>
                <p class="subhead_txt c-anim-up">まぶたや目の周りを特殊器具のマッサージとパックで「たるみ」や「むくみ」を解消します。<br>
                <div class="row">
                  <div class="col c-anim-up">
                    <span>アイトリートメント（パックあり）</span>
                    <span>¥5,500</span>
                  </div>
                  <div class="col c-anim-up">
                    <span>アイトリートメント（パックなし）</span>
                    <span>¥3,080</span>
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
