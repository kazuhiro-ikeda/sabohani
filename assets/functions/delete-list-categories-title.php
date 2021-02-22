<?php
// wp_list_categoriesで出力されるaタグのtitle属性を削除する
function delete_list_categories_title_attribute( $output ) {
	$output = preg_replace( '/ title="[^"]*"/', '', $output );
	return $output;
}
add_filter( 'wp_list_categories', 'delete_list_categories_title_attribute' );
?>