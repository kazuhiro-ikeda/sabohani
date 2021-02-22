<?php
function remove_post_supports() {
	// remove_post_type_support( 'post', 'title' ); // タイトル
	// remove_post_type_support( 'post', 'editor' ); // 本文欄
	// remove_post_type_support( 'post', 'author' ); // 作成者
	// remove_post_type_support( 'post', 'thumbnail' ); // アイキャッチ
	// remove_post_type_support( 'post', 'excerpt' ); // 抜粋
	// remove_post_type_support( 'post', 'trackbacks' ); // トラックバック
	// remove_post_type_support( 'post', 'custom-fields' ); // カスタムフィールド
	// remove_post_type_support( 'post', 'comments' ); // コメント
	// remove_post_type_support( 'post', 'revisions' ); // リビジョン
	// remove_post_type_support( 'post', 'page-attributes' ); // ページ属性
	// remove_post_type_support( 'post', 'post-formats' ); // 投稿フォーマット
	// unregister_taxonomy_for_object_type( 'category', 'post' ); // カテゴリ
	unregister_taxonomy_for_object_type( 'post_tag', 'post' ); // タグ
	// remove_post_type_support( 'page', 'editor' ); // 本文欄
}
add_action( 'init', 'remove_post_supports' );
?>
