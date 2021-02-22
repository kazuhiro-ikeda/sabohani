<?php
// カスタム投稿の追加
function add_post_type()
{

	// お知らせとブログ
	register_post_type(
		'news_blog',
		array(
			'label' 		=> 'お知らせとブログ',
			'public' 		=> true,
			'menu_position' => 5,
			'has_archive' 	=> true,
			'supports' 		=> array('title', 'author', 'editor', 'thumbnail')
		)
	);

	// お知らせとブログカテゴリー
	register_taxonomy(
		'news_category',
		'news_blog',
		array(
			'label' 		=> 'お知らせとブログカテゴリー',
			'hierarchical' 	=> true,
			'rewrite' 		=> true
		)
	);
}
add_action('init', 'add_post_type');
