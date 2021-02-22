<?php
// タクソノミーが日本語で登録された場合のスラッグを自動的に変換
add_action( 'create_category', 'post_taxonomy_auto_slug', 10 );
add_action( 'create_post_tag', 'post_taxonomy_auto_slug', 10 );

// create_の後にタクソノミー名を入れてください
add_action( 'create_author_category', 'post_taxonomy_auto_slug', 10 );
add_action( 'create_news_category', 'post_taxonomy_auto_slug', 10 );
add_action( 'create_voice_category', 'post_taxonomy_auto_slug', 10 );

function post_taxonomy_auto_slug( $term_id ) {
	$tax = str_replace( 'create_', '', current_filter() );
	$term = get_term( $term_id, $tax );
	if ( preg_match( '/(%[0-9a-f]{2})+/', $term->slug ) ) {
		$tax 		= $term->taxonomy;
		$str_pos 	= strpos( $tax, '_' );
		$tax_name 	= ( $str_pos ) ? substr( $tax, 0, $str_pos ) : $tax;
		$args = array(
			'slug' => $tax_name . '-' . $term->term_id
		);
		wp_update_term( $term_id, $tax, $args );
	}
}
?>