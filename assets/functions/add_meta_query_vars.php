<?php
//カスタムフィールドクエリを有効化
function add_meta_query_vars( $public_query_vars ) {
	$public_query_vars[] = 'meta_key';
	$public_query_vars[] = 'meta_value';
	return $public_query_vars;
}
add_filter( 'query_vars', 'add_meta_query_vars' );
?>