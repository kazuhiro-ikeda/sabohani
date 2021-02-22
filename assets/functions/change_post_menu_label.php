<?php
//管理画面の「投稿」を「ブログ」に変更
function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'ブログ';
	$submenu['edit.php'][5][0] = 'ブログ';
}
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'ブログ';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );
?>