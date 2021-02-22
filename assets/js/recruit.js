/*
Author : Kazuhiro Ikeda
*/

$(function(){//start
	
	$(window).scroll(function () {
	    var s = $(this).scrollTop();
	    var a = 300;  
	    var b = $( "footer" ).offset();
		    var c = b.top;
	    if (s > a && s <= ( c-$(window).height() ) ) {
	        $( ".cv_s" ).fadeIn( "slow" );
	    } else if( s <= a || s > ( c - $(window).height() ) ) {
	        $( ".cv_s" ).fadeOut( "slow" );
	    }
	});

	//pagetop
	var topBtn = $('#pagetop');
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});

	//sticky header
	$(window).scroll(function(){
		if ($(window).scrollTop() > 100) {
			$('hoge').addClass('fixed');
		} else {
			$('hoge').removeClass('fixed');
		}
	});

	//img switch
	$(window).on('load resize', function(){
		var windowWidth=window.innerWidth;
		$('.branch img').each(function(){
			var $obj=$(this);
			var imgSrc=$obj.attr('src');
			var ext=imgSrc.split(".").pop();
			if(windowWidth<=640){
				if(!$obj.hasClass('figure_s')){
					var replaceSrc=imgSrc.replace('.'+ext,'_s.'+ext);
					$obj.addClass('figure_s').attr('src',replaceSrc);
				}
			} else {
				if($obj.hasClass('figure_s')){
					var replaceSrc=imgSrc.replace('_s.'+ext,'.'+ext);
					$obj.removeClass('figure_s').attr('src',replaceSrc);
				}
			}
		});
	});

	//scroll
	$('a').click(function(e){
	    var anchor = $(this),
	        href = anchor.attr('href'),
	        pagename = window.location.href;

	    // 現在のurlのハッシュ以降を削除
	    pagename = pagename.replace(/#.*/,'');

	    // リンク先のurlから現在の表示中のurlを削除
	    href = href.replace( pagename , '' );

	    if( href.search(/^#/) >= 0 ){
	      // 整形したリンクがページ内リンクの場合はページ無いスクロールの対象とする
	      // 通常の遷移処理をキャンセル
	      e.preventDefault();
	      var speed = 500;
	      // 前段階で整形したhrefを使用する
	      // var href= $(this).attr("href");
	      var target = $(href == "#" || href == "" ? 'html' : href);
	      var position = target.offset().top;
	      $("html, body").animate({scrollTop:position}, speed, "swing");

	      // ロケーションバーの内容を書き換え
	      location.hash = href ;
	      return false;
	    }
	});

	//トグルパネル
	$('hoge').on('click', function(){
        if (window.innerWidth <= 640) {
            $('.toggle').click();
        }
    });

	//投稿コンテンツの段落にクリアフィックス
	$( '.single-content p' ).addClass( 'cl' );

	//IE ACTIVE FOCUS remove outline
	if (document.documentElement.attachEvent)
	    document.documentElement.attachEvent('onmousedown',function(){
	    	event.srcElement.hideFocus=true
	});

	//MW WP Form 必須
	$( '#mw_wp_form_mw-wp-form-識別ナンバー select option[value=""]' ).html( 'お問合せ内容を選択' );

	$('#day_field').attr({
	  'readonly': 'readonly',
	  'onfocus': 'this.blur()'
	});

	//br 除去
	$( '.hoge' ).find( 'br' ).replaceWith( '' );


});// END
