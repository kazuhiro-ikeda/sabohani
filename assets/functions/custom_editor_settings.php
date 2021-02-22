<?php
// 管理画面の「見出し１」等を削除する
function custom_editor_settings( $initArray ) {
	$initArray['block_formats'] = "段落=p; 見出し1=h2; 見出し2=h3; 見出し3=h4; 見出し4=h5;";
	return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );
