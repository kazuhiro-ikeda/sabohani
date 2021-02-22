<?php
//表示中のページのカテゴリー（ターム）名を取得する
function get_current_term() {
	$id;
	$tax_slug;
	if( is_category() ) {
		$tax_slug = 'category';
		$id = get_query_var( 'cat' );
		return get_term( $id, $tax_slug );
	} else if( is_tag() ) {
		$tax_slug = 'post_tag';
		$id = get_query_var( 'tag_id' );
		return get_term( $id, $tax_slug );
	} else if( is_tax() ) {
		$tax_slug = get_query_var( 'taxonomy' );
		$term_slug = get_query_var( 'term' );
		$term = get_term_by( 'slug', $term_slug, $tax_slug );
		$id = $term->term_id;
		return get_term( $id, $tax_slug );
	} else {
		return false;
	}
}

/*
アーカイブページの以下で取得可能
$term = get_current_term();
$term->name; //名前
$term->slug; //スラッグ
$term->description; //説明文
$term->count; //投稿数
*/
?>