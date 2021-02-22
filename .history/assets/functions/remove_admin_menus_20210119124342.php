<?php
//管理画面の使用しないメニューを非表示にする
function remove_admin_menus() {
global $menu;
	/*unset($menu[2]);	//ダッシュボード
	unset($menu[5]);	//投稿
	unset($menu[10]);	//メディア
	unset($menu[20]);*/	//固定ページ
	unset($menu[25]);	//コメント
	/*unset($menu[60]);	//外観
	unset($menu[65]);	//プラグイン
	unset($menu[70]);	//ユーザー
	unset($menu[75]);	//ツール
	unset($menu[80]);*/	//設定
}
add_action('admin_menu', 'remove_admin_menus');
