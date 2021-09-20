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
	<meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title><?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main>
			<section class="sect_1" id="sect-1">
				<div class="wrapper">
					<div class="container">
						<!-- <picture> -->
							<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
							<!-- <source srcset="/images/top/sp/section_1/main.png" media="(max-width: 899px)" type="image/webp">
							<source srcset="/images/top/section_1/main.png" media="(min-width: 900px)">
							<img src="/images/top/sp/section_1/main.png" alt="">
						</picture> -->
					</div>
				</div>
			</section>
			<section class="sect_2">
				<div class="wrapper">
					<div class="container c-anim-up">
						<span>TOPICS</span>
						<!-- Slider main container -->
						<div class="swiper c-anim-up">
							<!-- Additional required wrapper -->
							<div class="swiper-wrapper">
								<!-- Slides -->
								<div class="swiper-slide">
									<a href="" class="post_cat">
										<p>NEWS</p>
									</a>    
									<a href="" class="post_img">
										<img src="/images/top/section_2/img_1.png" alt="">
									</a>
									<a href="" class="post_title">
										<p>5月、6月、7月の店休日</p>
									</a>
									<a href="" class="post_date">
										<p>2021.04.30</p>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="" class="post_cat">
										<p>PRODUCT</p>
									</a>    
									<a href="" class="post_img">
										<img src="/images/top/section_2/img_2.png" alt="">
									</a>
									<a href="" class="post_title">
										<p>V3 HARISET 販売開始！</p>
									</a>
									<a href="" class="post_date">
										<p>2021.04.30</p>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="" class="post_cat">
										<p>RECRUIT</p>
									</a>    
									<a href="" class="post_img">
										<img src="/images/top/section_2/img_3.png" alt="">
									</a>
									<a href="" class="post_title">
										<p>只今スタッフ募集中です！</p>
									</a>
									<a href="" class="post_date">
										<p>2021.04.30</p>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="" class="post_cat">
										<p>MENU</p>
									</a>    
									<a href="" class="post_img">
										<img src="/images/top/section_2/img_4.png" alt="">
									</a>
									<a href="" class="post_title">
										<p>移転オープンしました！</p>
									</a>
									<a href="" class="post_date">
										<p>2021.04.30</p>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="" class="post_cat">
										<p>NEWS</p>
									</a>    
									<a href="" class="post_img">
										<img src="/images/top/section_2/img_1.png" alt="">
									</a>
									<a href="" class="post_title">
										<p>5月、6月、7月の店休日</p>
									</a>
									<a href="" class="post_date">
										<p>2021.04.30</p>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="" class="post_cat">
										<p>PRODUCT</p>
									</a>    
									<a href="" class="post_img">
										<img src="/images/top/section_2/img_2.png" alt="">
									</a>
									<a href="" class="post_title">
										<p>V3 HARISET 販売開始！</p>
									</a>
									<a href="" class="post_date">
										<p>2021.04.30</p>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="" class="post_cat">
										<p>RECRUIT</p>
									</a>    
									<a href="" class="post_img">
										<img src="/images/top/section_2/img_3.png" alt="">
									</a>
									<a href="" class="post_title">
										<p>只今スタッフ募集中です！</p>
									</a>
									<a href="" class="post_date">
										<p>2021.04.30</p>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="" class="post_cat">
										<p>MENU</p>
									</a>    
									<a href="" class="post_img">
										<img src="/images/top/section_2/img_4.png" alt="">
									</a>
									<a href="" class="post_title">
										<p>移転オープンしました！</p>
									</a>
									<a href="" class="post_date">
										<p>2021.04.30</p>
									</a>
								</div>
							</div>
							<!-- If we need pagination -->
							<!-- <div class="swiper-pagination"></div> -->
						</div>
						<!-- If we need navigation buttons -->
						<div class="swiper-button-prev">
							<img src="/images/top/section_2/arrow.svg" alt="">
						</div>
						<div class="swiper-button-next">
							<img src="/images/top/section_2/arrow.svg" alt="">
						</div>
						<a href="/topics/" class="btn_viewmore c-anim-up">view more</a>
					</div>
				</div>
			</section>
			<section class="sect_3">
				<div class="wrapper">
					<div class="container">
						<div class="row">
							<div class="col c-anim-up">
								<span class="txt_about">ABOUT</span>
								<h3 class="c-anim-up">長くお付き合いいただける<br>
									あなただけの上質空間。</h3>
								<p class="c-anim-up">l.a.ttorti（ラットルティ）にはオートクチュールの洋服のように、お客様一人ひとりの美をトータルにサポートする、さまざまなこだわりがあります。<br>
									選べるシャンプーや炭酸泉、高い技術とスタイル提案、心ほどける空間づくり…。<br>
									一生お付き合いいただける特別なサロンでありたいと思っております。</p>
								<ul>
									<li class="c-anim-up">
										<a href="/salon/"><p><span>SALON</span><br>サロン情報</p></a>
									</li>
									<li class="c-anim-up">
										<a href="/access/"><p><span>ACCESS</span><br>アクセス</p></a>
									</li>
									<li class="c-anim-up">
										<a href="/staff/"><p><span>STAFF</span><br>スタッフ紹介</p></a>
									</li>
								</ul>
							</div>
							<div class="col">
								<picture >
								<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
									<source srcset="/images/top/sp/section_3/img_1.png" media="(max-width: 899px)" type="image/webp">
									<source srcset="/images/top/section_3/img_1.png" media="(min-width: 900px)">
									<img src="/images/top/sp/section_3/img_1.png" alt="" class="c-anim-up">
								</picture>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_4"> 
				<div class="wrapper">
					<div class="container row">
						<div class="col">
							<span class="c-anim-up">ヘアメニュー</span>
							<h3 class="c-anim-up">HAIR MENU</h3>
							<p class="c-anim-up">お客様のお悩みやイメージをしっかりとカウンセリングし、一番似合うスタイルを創り上げます。メインのカットはもちろん、カラーリングやパーマなど再現性にも優れたスタイルをご提案いたします。<br>
							テキストが入りますテキストが入りますテキストが入ります。</p>
							<img src="/images/top/section_4/img_1.svg" alt="" class="c-anim-up">
							<p class="arrow_img c-anim-up">
								<a href="">
									<img src="/images/top/section_4/arrow_img.svg" alt="">
								</a>
							</p>
						</div>
						<div class="col">
							<span class="c-anim-up">ネイル</span>
							<h3 class="c-anim-up">NAIL</h3>
							<p class="c-anim-up">トレンドのアートやシンプル・エレガント・フェミニンまで幅広いアートに対応いたします。お客様のライフスタイルにあった、お似合いのネイルを洗練された高いクオリティでご提案いたします。<br>
								テキストが入りますテキストが入りますテキストが入ります。</p>
							<img src="/images/top/section_4/img_2.svg" alt="" class="c-anim-up">
							<p class="arrow_img c-anim-up">
								<a href="">
									<img src="/images/top/section_4/arrow_img.svg" alt="">
								</a>
							</p>
						</div>
						<div class="col">
							<span class="c-anim-up">まつ毛エクステ</span>
							<h3 class="c-anim-up">EYELASH</h3>
							<p class="c-anim-up">華やかな目元へ導くまつ毛エクステンションは、長さ・カール・太さ共に多数ご用意しております。ヘアサービスの後や、ちょっとした隙間時間に是非ご利用ください。<br>
								テキストが入りますテキストが入りますテキストが入ります。</p>
							<img src="/images/top/section_4/img_3.svg" alt="" class="c-anim-up">
							<p class="arrow_img c-anim-up">
								<a href="">
									<img src="/images/top/section_4/arrow_img.svg" alt="">
								</a>
							</p>
						</div>
						<div class="col">
							<span class="c-anim-up">エステ</span>
							<h3 class="c-anim-up">ESTHETIC</h3>
							<p class="c-anim-up">脱毛やフェイシャルエステ、痩身エステなど、お客様のお悩みやご要望に応じた施術をご提供いたします。その他にもトータルサロンとして多様なメニューをご用意しております。<br>
								テキストが入りますテキストが入りますテキストが入ります。</p>
							<img src="/images/top/section_4/img_4.svg" alt="" class="c-anim-up">
							<p class="arrow_img c-anim-up">
								<a href="">
									<img src="/images/top/section_4/arrow_img.svg" alt="">
								</a>
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_5" id="id-gallery">
				<div class="wrapper">
					<div class="container">
						<div class="row">
							<div class="col">
								<p class="c-anim-up">ヘアスタイル</p>
								<h3 class="c-anim-up">HAIR STYLE</h3>
								<a href="/hair/" class="c-anim-up">view more</a>
							</div>
							<div class="col">
								<div class="img_cont">
									<div class="img_col">
										<a href="">
											<div class="img_wrap c-anim-up">
												<picture>
												<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
													<source srcset="/images/top/sp/section_5/1.png" media="(max-width: 899px)" type="image/webp">
													<source srcset="/images/top/section_5/1.png" media="(min-width: 900px)">
													<img src="/images/top/sp/section_5/1.png" alt="">
												</picture>
												<div class="p_head">
													<p>和風ヘアアレンジ</p>
												</div>
											</div>
											<p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
										</a>
									</div>
									<div class="img_col">
										<a href="">
											<div class="img_wrap c-anim-up">
												<picture>
												<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
													<source srcset="/images/top/sp/section_5/2.png" media="(max-width: 899px)" type="image/webp">
													<source srcset="/images/top/section_5/2.png" media="(min-width: 900px)">
													<img src="/images/top/sp/section_5/2.png" alt="">
												</picture>
												<div class="p_head">
													<p>和風ヘアアレンジ</p>
												</div>
											</div>
											<p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
										</a>
									</div>
									<div class="img_col">
										<a href="">
											<div class="img_wrap c-anim-up">
												<picture>
												<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
													<source srcset="/images/top/sp/section_5/3.png" media="(max-width: 899px)" type="image/webp">
													<source srcset="/images/top/section_5/3.png" media="(min-width: 900px)">
													<img src="/images/top/sp/section_5/3.png" alt="">
												</picture>
												<div class="p_head">
													<p>和風ヘアアレンジ</p>
												</div>
											</div>
											<p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
										</a>
									</div>
									<div class="img_col">
										<a href="">
											<div class="img_wrap c-anim-up">
												<picture>
												<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
													<source srcset="/images/top/sp/section_5/4.png" media="(max-width: 899px)" type="image/webp">
													<source srcset="/images/top/section_5/4.png" media="(min-width: 900px)">
													<img src="/images/top/sp/section_5/4.png" alt="">
												</picture>
												<div class="p_head">
													<p>和風ヘアアレンジ</p>
												</div>
											</div>
											<p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
										</a>
									</div>
									<div class="img_col">
										<a href="">
											<div class="img_wrap c-anim-up">
												<picture>
												<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
													<source srcset="/images/top/sp/section_5/5.png" media="(max-width: 899px)" type="image/webp">
													<source srcset="/images/top/section_5/5.png" media="(min-width: 900px)">
													<img src="/images/top/sp/section_5/5.png" alt="">
												</picture>
												<div class="p_head">
													<p>和風ヘアアレンジ</p>
												</div>
											</div>
											<p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
										</a>
									</div>
									<div class="img_col">
										<a href="">
											<div class="img_wrap c-anim-up">
												<picture>
												<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
													<source srcset="/images/top/sp/section_5/6.png" media="(max-width: 899px)" type="image/webp">
													<source srcset="/images/top/section_5/6.png" media="(min-width: 900px)">
													<img src="/images/top/sp/section_5/6.png" alt="">
												</picture>
												<div class="p_head">
													<p>和風ヘアアレンジ</p>
												</div>
											</div>
											<p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
										</a>
									</div>
								</div>
								<a href="/hair/" class="btn_viewmore_sp c-anim-up">view more</a>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<p class="c-anim-up">ネイルデザイン</p>
								<h3 class="c-anim-up">NAIL DESIGN</h3>
								<a href="/nails/" class="c-anim-up">view more</a>
							</div>
							<div class="col">
								<div class="img_cont">
									<div class="img_col">
										<a href="">
											<div class="img_wrap c-anim-up">
												<picture>
												<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
													<source srcset="/images/top/sp/section_5/n_1.png" media="(max-width: 899px)" type="image/webp">
													<source srcset="/images/top/section_5/n_1.png" media="(min-width: 900px)">
													<img src="/images/top/sp/section_5/n_1.png" alt="">
												</picture>
												<div class="p_head">
													<p>和風ヘアアレンジ</p>
												</div>
											</div>
											<p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
										</a>
									</div>
									<div class="img_col">
										<a href="">
											<div class="img_wrap c-anim-up">
												<picture>
												<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
													<source srcset="/images/top/sp/section_5/n_2.png" media="(max-width: 899px)" type="image/webp">
													<source srcset="/images/top/section_5/n_2.png" media="(min-width: 900px)">
													<img src="/images/top/sp/section_5/n_2.png" alt="">
												</picture>
												<div class="p_head">
													<p>和風ヘアアレンジ</p>
												</div>
											</div>
											<p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
										</a>
									</div>
									<div class="img_col">
										<a href="">
											<div class="img_wrap c-anim-up">
												<picture>
												<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
													<source srcset="/images/top/sp/section_5/n_3.png" media="(max-width: 899px)" type="image/webp">
													<source srcset="/images/top/section_5/n_3.png" media="(min-width: 900px)">
													<img src="/images/top/sp/section_5/n_3.png" alt="">
												</picture>
												<div class="p_head">
													<p>和風ヘアアレンジ</p>
												</div>
											</div>
											<p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
										</a>
									</div>
									<div class="img_col">
										<a href="">
											<div class="img_wrap c-anim-up">
												<picture>
												<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
													<source srcset="/images/top/sp/section_5/n_4.png" media="(max-width: 899px)" type="image/webp">
													<source srcset="/images/top/section_5/n_4.png" media="(min-width: 900px)">
													<img src="/images/top/sp/section_5/n_4.png" alt="">
												</picture>
												<div class="p_head">
													<p>和風ヘアアレンジ</p>
												</div>
											</div>
											<p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
										</a>
									</div>
									<div class="img_col">
										<a href="">
											<div class="img_wrap c-anim-up">
												<picture>
												<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
													<source srcset="/images/top/sp/section_5/n_5.png" media="(max-width: 899px)" type="image/webp">
													<source srcset="/images/top/section_5/n_5.png" media="(min-width: 900px)">
													<img src="/images/top/sp/section_5/n_5.png" alt="">
												</picture>
												<div class="p_head">
													<p>和風ヘアアレンジ</p>
												</div>
											</div>
											<p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
										</a>
									</div>
									<div class="img_col">
										<a href="">
											<div class="img_wrap c-anim-up">
												<picture>
												<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
													<source srcset="/images/top/sp/section_5/n_6.png" media="(max-width: 899px)" type="image/webp">
													<source srcset="/images/top/section_5/n_6.png" media="(min-width: 900px)">
													<img src="/images/top/sp/section_5/n_6.png" alt="">
												</picture>
												<div class="p_head">
													<p>和風ヘアアレンジ</p>
												</div>
											</div>
											<p class="desc c-anim-up">ワンレン大人カジュアルボブパーマワンレン大人カジュアル</p>
										</a>
									</div>
								</div>
								<a href="/nails/" class="btn_viewmore_sp c-anim-up">view more</a>
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
