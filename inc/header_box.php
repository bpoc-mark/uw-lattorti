<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner container row">
	<div class="left">
		<?php
		if ($str[1] == "") {
			echo '<h1 class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt=""></a></h1>';
		} else {
			echo '<p class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt=""></a></p>';
		}
		?>
	</div>
	<nav class="right">
		<ul>
			<li>
				<a href="/salon/" <?php if ($str[1] == "") {echo ' class="here"';} ?>>
					<span>サロン情報</span><br>
					SALON
				</a>
			</li>
			<li>
				<a href="" <?php if ($str[1] == "about") {echo 'class="here"';} ?>>
					<span>ギャラリー</span><br>
					GALLERY
				</a>
				<ul class="sub_menu">
					<li>
						<a href="/hair/" <?php if ($str[1] == "") {echo ' class="here"';} ?>>
							HAIR STYLE
						</a>
					</li>
					<li>
						<a href="/nails/" <?php if ($str[1] == "") {echo ' class="here"';} ?>>
							NAIL DESIGN
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="/hair/" <?php if ($str[1] == "about") {echo 'class="here"';} ?>>
					<span>ヘア</span><br>
					HAIR
				</a>
			</li>
			<li>
				<a href="/nails/" <?php if ($str[1] == "about") {echo 'class="here"';} ?>>
					<span>ネイル</span><br>
					NAIL
				</a>
			</li>
			<li>
				<a href="/beauty_menu#id-eyelash" <?php if ($str[1] == "about") {echo 'class="here"';} ?>>
					<span>まつ毛エクステ</span><br>
					EYELASH
				</a>
			</li>
			<li>
				<a href="/beauty_menu#id-esthetic" <?php if ($str[1] == "about") {echo 'class="here"';} ?>>
					<span>エステ</span><br>
					ESTHETIC
				</a>
			</li>
			<li>
				<div class="menu">
					<span class="line line-t"></span>
					<!-- <span class="line line-m"></span> -->
					<span class="line line-b"></span>
					<p></p>
				</div>
			</li>
		</ul>
	</nav>
	<a href="/contact/" class="btn_reserve">RESERVE</a>
</div>
<div class="big_menu">
	<div class="overlay"></div>
	<div class="float_menu">
		<div class="row">
			<ul class="col">
				<li>
					<a href="/">
						<span>トップ</span>
						TOP
					</a>
				</li>
				<li>
					<a href="/salon/">
						<span>サロン情報</span>
						SALON
					</a>
				</li>
				<li>
					<a href="">
						<span>ギャラリー</span>
						GALLERY
					</a>
					<ul class="submenu">
						<li>
							<a href="/hair/">
								<span>ヘアスタイル</span>
								HAIR STYLE
							</a>
						</li>
						<li>
							<a href="/nails/">
								<span>ネイルデザイン</span>
								NAIL DESIGN
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="/hair/">
						<span>ヘアメニュー</span>
						HAIR MENU
					</a>
				</li>
				<li>
					<a href="">
						<span>トータルビューティーメニュー</span>
						TOTAL BEAUTY MENU
					</a>
					<ul class="submenu">
						<li>
							<a href="/beauty_menu#id-nail">
								<span>ネイル</span>
								NAIL
							</a>
						</li>
						<li>
							<a href="/beauty_menu#id-eyelash">
								<span>まつ毛エクステ</span>
								EYELASH
							</a>
						</li>
						<li>
							<a href="/beauty_menu#id-esthetic">
								<span>エステ</span>
								ESTHETIC
							</a>
						</li>
					</ul>
				</li>
			</ul>
			<ul class="col">
				<li>
					<a href="/staff/">
						<span>スタッフ紹介</span>
						STAFF
					</a>
				</li>
				<li>
					<a href="/access/">
						<span>スタッフ紹介</span>
						ACCESS
					</a>
				</li>
				<li>
					<a href="/topics/">
						<span>サロン情報</span>
						TOPICS
					</a>
				</li>
				<li>
					<a href="/recruit/">
						<span>採用情報</span>
						RECRUIT
					</a>
				</li>
				<li>
					<a href="/contact/">
						<span>お問い合わせ</span>
						CONTACT
					</a>
				</li>
			</ul>
			<div class="btn_cont">
				<a href="tel:053-424-6757"><span>Tel.</span> 053-424-6757</a>
				<a href="/contact/" class="btn_contact">RESERVE</a>
			</div>
		</div>
		<div class="menu menu2">
			<span class="line line-t-h"></span>
			<!-- <span class="line line-m"></span> -->
			<span class="line line-b-h"></span>
			<p></p>
		</div>
	</div>
</div>
