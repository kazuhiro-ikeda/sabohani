<?php
function cf_search_join($join)
{
	global $wpdb;
	if (is_search()) {
		$join .= ' LEFT JOIN ' . $wpdb->postmeta . ' ON ' . $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
	}
	return $join;
}
add_filter('posts_join', 'cf_search_join');

function cf_search_where($where)
{
	global $wpdb;
	if (is_search()) {
		$where = preg_replace(
			"/\(\s*" . $wpdb->posts . ".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
			"(" . $wpdb->posts . ".post_title LIKE $1) OR (" . $wpdb->postmeta . ".meta_value LIKE $1)",
			$where
		);

		// 特定のカスタムフィールドを検索対象から外す（※１）
		//		$where .= " AND (" . $wpdb->postmeta . ".meta_key NOT LIKE 'number')";
		//		$where .= " AND (" . $wpdb->postmeta . ".meta_key NOT LIKE 'zip')";
		//		$where .= " AND (" . $wpdb->postmeta . ".meta_key NOT LIKE 'access')";
	}
	return $where;
}
add_filter('posts_where', 'cf_search_where');

function cf_search_distinct($where)
{
	global $wpdb;
	if (is_search()) {
		return "DISTINCT";
	}
	return $where;
}
add_filter('posts_distinct', 'cf_search_distinct');
