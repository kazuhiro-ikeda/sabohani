<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes">
	<title>sabohani</title>
	<meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/siteimage.jpg" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/common.js" defer></script>

</head>

<body>

	<div class="wrapper">

		<header class="l-header st-header" id="header">
			<div class="st-header__logo img">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/footer_logo@2x.png" alt="サボハニロゴ" width="74" height="52">
			</div>
			<nav class="st-header__nav" id="g-nav">
				<div class="st-header__navWrap">
					<div class="st-header__nav__ttl en">MENU</div>
					<ul class="st-header__globalNav">
						<li>
							<a href="#anc-1" class="st-header__globalNav__link nav-close">
								<span class="st-header__globalNav__txt">TOP</span>
							</a>
						</li>
						<li>
							<a href="#anc-2" class="st-header__globalNav__link nav-close">
								<span class="st-header__globalNav__txt">代表メッセージ</span>
							</a>
						</li>
						<li>
							<a href="#anc-3" class="st-header__globalNav__link nav-close">
								<span class="st-header__globalNav__txt">アクセス</span>
							</a>
						</li>
						<li>
							<a href="#anc-4" class="st-header__globalNav__link nav-close">
								<span class="st-header__globalNav__txt">事業内容</span>
							</a>
						</li>
						<li>
							<a href="#anc-5" class="st-header__globalNav__link nav-close">
								<span class="st-header__globalNav__txt">企業理念</span>
							</a>
						</li>
						<li>
							<a href="#anc-6" class="st-header__globalNav__link nav-close">
								<span class="st-header__globalNav__txt">企業情報</span>
							</a>
						</li>
						<li>
							<a href="" class="st-header__globalNav__link nav-close">
								<span class="st-header__globalNav__txt">お問い合わせ</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>

			<div class="st-header__recruit">
				<a href="">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/header_recruit@2x.png" alt="採用サイト" width="137" height="102" class="st-header__recruit__icn">
				</a>
			</div>

			<div id="sp-btn" class="st-header__spBtn">
				<button id="sp-btn-a" class="st-header__spBtnLink">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</div>
		</header><!-- /.st-header -->


		<div class="l-contents" id="contact">
			<section class="sec-contact">
				<div class="sec-inner">
					<h1 class="page-ttl en">CONTACT</h1>

				</div><!-- /sec-inner -->
			</section><!-- /sec-contact -->



		</div><!-- /.l-contents-->




		<footer class="st-footer">
			<div class="st-footer__logo">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/footer_logo@2x.png" alt="サボハニロゴ" width="74" height="52">
			</div>
			<div class="st-footer__address">
				<div class="address__company item-01">
					<h2 class="address__company__ttl">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/foot_company_tokyo@2x.png" alt="Sabohani Inc. Tokyo" width="155" height="14">
					</h2>
					<p class="address__company__txt">〒104-0031<br>東京都中央区京橋3-1-1 <br class="sp">東京スクエアガーデン13F</p>
				</div>
				<div class="address__company item-02">
					<h2 class="address__company__ttl">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/foot_company_osaka@2x.png" alt="Sabohani Inc. Osaka" width="157" height="13">
					</h2>
					<p class="address__company__txt">〒556-0016<br>大阪府大阪市浪速区元町2-8-2 <br class="sp">大都大阪ビル7F</p>
				</div>
			</div>
		</footer><!-- /.st-footer -->


	</div><!-- /.wrapper -->
</body>

</html>
