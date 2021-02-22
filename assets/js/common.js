jQuery(function ($) {

	//　PCで電話リンクを押せなくする
	var ua = navigator.userAgent.toLowerCase();
	var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);
	if (!isMobile) {
		$('a[href^="tel:"]').on('click', function (e) {
			e.preventDefault();
		});
	}

	//ハンバーガーメニュー
	var gnav = $('#g-nav');
	var sp_btn = $('#sp-btn');
	var nav_close = $('.nav-close');
	var header = $('#header');
	var html = $('html');
	var body = $('body');
	function change_sp_nav() {
		if (sp_btn.hasClass('active')) {
			gnav.removeClass('active');
			sp_btn.removeClass('active');
			html.removeClass('active');
			body.removeClass('active');
			header.removeClass('nav-open');
		} else {
			gnav.addClass('active');
			sp_btn.addClass('active');
			html.addClass('active');
			body.addClass('active');
			header.addClass('nav-open');
		}
		return false;
	}

	function change_sp_nav_close() {
		if (sp_btn.hasClass('active')) {
			gnav.removeClass('active');
			sp_btn.removeClass('active');
			html.removeClass('active');
			body.removeClass('active');
			header.removeClass('nav-open');
		}
		return false;
	}

	sp_btn.on('click', function () {
		change_sp_nav();
		return false;
	});

	nav_close.on('click', function () {
		change_sp_nav();
		return false;
	});


	body.on('click', function () {
		change_sp_nav_close();
		return false;
	});

	$('.c-pagenation a').on('click', function () {
		change_sp_nav_close();
		return false;
	});
});
