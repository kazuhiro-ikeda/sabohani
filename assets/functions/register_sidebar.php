<?php
if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar(array(
		'name' => 'サイドバー',
		'id' => 'sidebar-1',
		'before_widget' => '<div class="widget %2$s">'.PHP_EOL,
		'after_widget' => '</div> <!-- /widget -->'.PHP_EOL,
		'before_title' => '<h2>',
		'after_title' => '</h2>'.PHP_EOL
	 ));
}

//使用しないウィジェットを非表示
function unregister_default_widget() {
	unregister_widget( 'WP_Widget_Pages' );				// 固定ページ
	unregister_widget( 'WP_Widget_Calendar' );			// カレンダー
	unregister_widget( 'WP_Widget_Archives' );			// アーカイブ
	unregister_widget( 'WP_Widget_Meta' );				// メタ情報
	unregister_widget( 'WP_Widget_Search' );			// 検索
	unregister_widget( 'WP_Widget_Text' );				// テキスト
	unregister_widget( 'WP_Widget_Categories' );		// カテゴリー
	unregister_widget( 'WP_Widget_Recent_Posts' );		// 最近の投稿
	unregister_widget( 'WP_Widget_Recent_Comments' );	// 最近のコメント
	unregister_widget( 'WP_Widget_RSS' );				// RSS
	unregister_widget( 'WP_Widget_Tag_Cloud' );			// タグクラウド
	unregister_widget( 'WP_Nav_Menu_Widget' );			// カスタムメニュー
	unregister_widget( 'Akismet_Widget' );				// Akismetウィジェット
}
add_action( 'widgets_init', 'unregister_default_widget' );
?>