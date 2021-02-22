<?php

/*--------------------------------------------------------------------------------

カスタム投稿を追加、削除する場合は、以下のファイルを編集してください。

--------------------------------------------------------------------------------*/

// カスタム投稿の追加
// require_once locate_template('assets/functions/add_post_type.php');

// タクソノミーが日本語で登録された場合のスラッグを自動的に変換
require_once locate_template('assets/functions/post_taxonomy_auto_slug.php');


/*--------------------------------------------------------------------------------

必要な物を有効化してください。

--------------------------------------------------------------------------------*/


// ACF オプションページの追加
// require_once locate_template('assets/functions/acf_add_options_page.php');

// アイキャッチ画像を使用
add_theme_support('post-thumbnails');

//アイキャッチ設定フィールドに説明文を表示
// require_once locate_template('assets/functions/custom_admin_post_thumbnail_html.php');

//アイキャッチ画像デフォルト
// require_once locate_template('assets/functions/default_thumbnail.php');

// カスタムサイズのサムネイルを作成
require_once locate_template('assets/functions/add_image_size.php');

// カスタムメニューを有効化
// require_once locate_template( 'assets/functions/register_nav_menu.php' );

// ウィジェットを有効化
// require_once locate_template( 'assets/functions/register_sidebar.php' );

// カスタムヘッダーを有効化
// require_once locate_template( 'assets/functions/custom-header.php' );

// cssの読み込み
require_once locate_template('assets/functions/load_style.php');

// scriptの読み込み
require_once locate_template('assets/functions/load_script.php');

// editor-style.css
require_once locate_template('assets/functions/wpdocs_theme_add_editor_styles.php');

// 管理画面にstyleを読み込む
// require_once locate_template( 'assets/functions/admin_print_styles.php' );

// 抜粋の文字数を変更する
require_once locate_template('assets/functions/change_excerpt_length.php');

// 抜粋の省略文字を変更する
require_once locate_template('assets/functions/change_excerpt_more.php');

// 管理画面の「見出し１」等を削除する
require_once locate_template('assets/functions/custom_editor_settings.php');

//TinyMCEのキャッシュを削除してeditor-style.cssを反映されるように
require_once locate_template('assets/functions/delete_tiny_mce_cache.php');

// 投稿スラッグを自動的に生成する
require_once locate_template('assets/functions/wp_unique_post_slug.php');

// カテゴリーにある「説明」を非表示にする
require_once locate_template('assets/functions/remove_default_term_description.php');

// サーチフォームを有効化
require_once locate_template('assets/functions/get_search_form.php');

// カスタムフィールドクエリを有効化
require_once locate_template('assets/functions/add_meta_query_vars.php');

// 投稿のアーカイブを有効にする
require_once locate_template('assets/functions/post_has_archive.php');

// 管理画面の使用しないメニューを非表示にする
require_once locate_template('assets/functions/remove_admin_menus.php');

//管理画面でメディアの位置を移動（カスタム投稿が５つ以上の場合）
// require_once locate_template('assets/functions/move_media_menus.php');

//コメント機能の停止
add_filter('comments_open', '__return_false');

// 投稿画面から不要な機能を削除する
require_once locate_template('assets/functions/remove_post_supports.php');

// 管理画面の「投稿」を「ブログ」に変更
// require_once locate_template( 'assets/functions/change_post_menu_label.php' );

// 表示中のページのカテゴリー（ターム）名を取得する
require_once locate_template('assets/functions/get_current_term.php');

// アクセスランキング
// require_once locate_template('assets/functions/post_views.php');

// acf googlemap api key
// require_once locate_template( 'assets/functions/map_acf_init.php' );

// wp_list_categoriesで出力されるaタグのtitle属性を削除する
require_once locate_template('assets/functions/delete-list-categories-title.php');

// WPアップデート通知を管理者のみ通知
// require_once locate_template( 'assets/functions/admin-update.php' );

// テーマ更新通知を非表示
// require_once locate_template( 'assets/functions/pre_site_transient_update_themes.php' );

// 自動でファイル更新日時のクエリをつける
require_once locate_template('assets/functions/add_filename.php');

//body_classにスラッグを用いたclassを付与する
require_once locate_template('assets/functions/add_body_pagename_class.php');

//固定ページの親ページと子ページをスラッグで判定する
require_once locate_template('assets/functions/is_parent_slug.php');

//投稿タイプごとに１ページの記事数を変更
// require_once locate_template('assets/functions/change_post_archive_number.php');

//カスタム投稿タイプごとにsearch-〇〇.php使用
// require_once locate_template('assets/functions/custom_search_template.php');

//カスタムフィールドを検索対象に含める
require_once locate_template('assets/functions/cf_search_join.php');

//Yoast SEOのtitle書き換え
// require_once locate_template('assets/functions/custom_wpseo_title.php');

//Yoast SEOのdescription書き換え
// require_once locate_template('assets/functions/custom_wpseo_description.php');

//Yoast SEOのパンくず書き換え
// require_once locate_template('assets/functions/override_yoast_breadcrumb.php');

//絵文字用JS・CSSを非表示にする
require_once locate_template('assets/functions/remove_emoji.php');



/*--------------------------------------------------------------------------------

特定のページにてプラグインの不要なCSS/JSを無効化する

--------------------------------------------------------------------------------*/

add_action('wp_enqueue_scripts', 'deregister_styles');
function deregister_styles()
{

	//Gutenberg用のCSS
	wp_dequeue_style('wp-block-library');
}

/*--------------------------------------------------------------------------------

投稿ページに説明文を挿入する

--------------------------------------------------------------------------------*/
add_action('edit_form_after_title', 'after_title');
function after_title()
{
	echo '<p style="color: red;">タイトルは30文字以内で入力してください。<br>30文字を超えた部分は「...」で表示されます。</p>';
}
