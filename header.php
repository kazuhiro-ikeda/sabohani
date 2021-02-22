<header class="l-header st-header" id="header">
	<nav class="st-header__nav" id="g-nav">
		<div class="st-header__navWrap">
			<div class="st-header__nav__ttl en">MENU</div>
			<ul class="st-header__globalNav">
				<?php if (is_home() || is_front_page()) : ?>
					<!-- トップページ -->
					<li>
						<a href="#anc-1" class="st-header__globalNav__link nav-close">
							<span class="st-header__globalNav__txt">TOP</span>
						</a>
					</li>
					<li>
						<a href="#anc-2" class="st-header__globalNav__link nav-close">
							<span class="st-header__globalNav__txt">企業情報</span>
						</a>
					</li>
					<li>
						<a href="#anc-3" class="st-header__globalNav__link nav-close">
							<span class="st-header__globalNav__txt">代表メッセージ</span>
						</a>
					</li>
					<li>
						<a href="#anc-4" class="st-header__globalNav__link nav-close">
							<span class="st-header__globalNav__txt">アクセス</span>
						</a>
					</li>
					<li>
						<a href="#anc-5" class="st-header__globalNav__link nav-close">
							<span class="st-header__globalNav__txt">事業内容</span>
						</a>
					</li>
					<li>
						<a href="#anc-6" class="st-header__globalNav__link nav-close">
							<span class="st-header__globalNav__txt">企業理念</span>
						</a>
					</li>
				<?php else : ?>
					<!-- トップページ以外 -->
					<li>
						<a href="<?php echo esc_url(home_url('/')); ?>#anc-1" class="st-header__globalNav__link">
							<span class="st-header__globalNav__txt">TOP</span>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url(home_url('/')); ?>#anc-6" class="st-header__globalNav__link">
							<span class="st-header__globalNav__txt">企業情報</span>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url(home_url('/')); ?>#anc-2" class="st-header__globalNav__link">
							<span class="st-header__globalNav__txt">代表メッセージ</span>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url(home_url('/')); ?>#anc-3" class="st-header__globalNav__link">
							<span class="st-header__globalNav__txt">アクセス</span>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url(home_url('/')); ?>#anc-4" class="st-header__globalNav__link">
							<span class="st-header__globalNav__txt">事業内容</span>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url(home_url('/')); ?>#anc-5" class="st-header__globalNav__link">
							<span class="st-header__globalNav__txt">企業理念</span>
						</a>
					</li>
				<?php endif; ?>
				<li>
					<a href="<?php echo esc_url(home_url('/contact/')); ?>" class="st-header__globalNav__link">
						<span class="st-header__globalNav__txt">お問い合わせ</span>
					</a>
				</li>
			</ul>
			<div class="st-footer__address sp">
				<div class="address__company item-01">
					<h2 class="address__company__ttl">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/foot_company_tokyo@2x.png" alt="Sabohani Inc. Tokyo" width="155" height="14" class="pc">
						<span class="sp">Sabohani Inc. Tokyo</span>
					</h2>
					<p class="address__company__txt">〒104-0031<br>東京都中央区京橋3-1-1 <br class="sp">東京スクエアガーデン13F</p>
				</div>
				<div class="address__company item-02">
					<h2 class="address__company__ttl">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/foot_company_osaka@2x.png" alt="Sabohani Inc. Osaka" width="157" height="13" class="pc">
						<span class="sp">Sabohani Inc. Osaka</span>
					</h2>
					<p class="address__company__txt">〒556-0016<br>大阪府大阪市浪速区元町2-8-2 <br class="sp">大都大阪ビル7F</p>
				</div>
			</div>
		</div>
	</nav>

	<div class="st-header__recruit">
		<a href="<?php echo home_url(); ?>/recruit/" target="_blank" rel="noopener noreferrer">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/header_recruit@2x.png" alt="採用サイト" width="137" height="102" class="st-header__recruit__icn pc">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/header_recruit_sp@2x.png" alt="採用サイト" width="183" height="140" class="st-header__recruit__icn sp">
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
