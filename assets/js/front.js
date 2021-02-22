jQuery(function ($) {
	var w = $(window).width();
	var device = "sp";
	if (w >= 767) {
		//PC用のオフセット
		offsetY = 0;
		device = "pc";
	} else {
		//スマホ用
		offsetY = -72;

		// 動画のパスを全てSP用に変更
		$("video").each(function () {
			if ($(this).data("src")) {
				var src = $(this).data("src");
				$(this).attr("src", src);
			}
		});
	}
	var time = 500;

	var anc_num = 1; // 現在表示中のアンカー番号
	var prev_num = 0; // PREV用アンカー番号
	var next_num = 2; // NEXT用アンカー番号

	$('a[href^="#"]').click(function () {
		var target = $(this.hash);
		if (!target.length) return;
		var targetY = target.offset().top + offsetY;
		$('html,body').animate({
			scrollTop: targetY
		}, time, 'swing');
		window.history.pushState(null, null, this.hash);

		// 動画再生関連
		anc_num = this.hash.split("-")[1];
		prev_num = (anc_num * 1) - 1;
		next_num = (anc_num * 1) + 1;
		$(".c-pagenation--prev a").attr("href", "#anc-" + prev_num);
		$(".c-pagenation--next a").attr("href", "#anc-" + next_num);
		if (prev_num == 0) {
			$(".c-pagenation--prev a").hide();
		} else {
			$(".c-pagenation--prev a").show();
		}
		if (next_num < 7) {
			$(".c-pagenation--next a").show();
		} else {
			$(".c-pagenation--next a").hide();
		}

		// 動画再生
		play();
		return false;
	});
	// 初期表示は一番上
	setTimeout(function () {
		$('html,body').animate({ scrollTop: 0 }, '1');
	}, 300);

	// マウスホイール無効
	$('html *').css('overflow', 'hidden');
	if (device == "sp") {
		document.addEventListener('touchstart', $(window), function (e) {
			e.preventDefault();
		}, { passive: false });
	} else {
		$(window).on('touchmove', function (e) {
			e.preventDefault();
		});
	}

	// マウスホイール制御
	var mousewheelevent = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
	var isMousewheelMoving = false;
	$(document).on(mousewheelevent, function (e) {
		if (isMousewheelMoving) return;

		var delta = e.originalEvent.deltaY ? -(e.originalEvent.deltaY) : e.originalEvent.wheelDelta ? e.originalEvent.wheelDelta : -(e.originalEvent.detail);
		if (delta < 0) {
			// マウスホイールを下にスクロールしたときの処理を記載
			$(".c-pagenation--next a").trigger("click");
		} else {
			// マウスホイールを上にスクロールしたときの処理を記載
			$(".c-pagenation--prev a").trigger("click");
		}
		isMousewheelMoving = true;
		setTimeout(function () {
			isMousewheelMoving = false;
		}, 500)
	});
	// SP用
	var startY = null;
	var endY = null;
	window.addEventListener('touchstart', function (event) {
		startY = event.touches[0].pageY;
	});
	window.addEventListener('touchmove', function (event) {
		endY = event.touches[0].pageY;
	});
	window.addEventListener('touchend', function (event) {
		if (0 < (endY - startY)) {
			// 下にスワイプしたときの処理を記載
			$(".c-pagenation--prev a").trigger("click");
		} else {
			// 上にスワイプしたときの処理を記載
			$(".c-pagenation--next a").trigger("click");
		}
	});

	// 動画再生
	function play() {
		if (anc_num != 1) {
			$("#anc-" + anc_num + " video.bg").animate({ top: offsetY * 2 }, 0); // BG出現
		}
		$("#anc-" + anc_num + " video.lp").hide(); // ループ動画非表示

		if (anc_num != 1) {
			// BG動画再生開始
			$("#anc-" + anc_num + " video.bg").get(0).currentTime = 0;
			$("#anc-" + anc_num + " video.bg").get(0).play();
		} else {
			$("#anc-" + anc_num + " video.in").get(0).currentTime = 0;
			$("#anc-" + anc_num + " video.in").get(0).play();
		}

		// マップ非表示
		$(".access__map--" + device).hide();
	}
	play();

	// BG動画再生終了後処理
	for (var num = 0; num <= 4; num++) {
		if ($("video.bg").get(num))
			$("video.bg").get(num).addEventListener("ended", function () {
				$(this).animate({ top: -2000 }, 500);
				var n = $($(this)).data("num");
				if ($("#anc-" + n + " video.in").get(0)) {
					$("#anc-" + n + " video.in").get(0).currentTime = 0; // 始めから再生
					$("#anc-" + n + " video.in").get(0).play();
					if (n == 3) {
						// マップ表示
						$(".access__map--" + device).slideDown();
					}
				}
			});
	}

	for (var num = 0; num <= 5; num++) {
		// in動画再生終了後処理
		if ($("video.in").get(num))
			$("video.in").get(num).addEventListener("ended", function () {
				var n = $($(this)).data("num");
				$("#anc-" + n + " video.lp").show();
				if ($("#anc-" + n + " video.lp").get(0)) {
					$("#anc-" + n + " video.lp").get(0).currentTime = 0; // 始めから再生
					$("#anc-" + n + " video.lp").get(0).play();
				}
			});
	}


});
