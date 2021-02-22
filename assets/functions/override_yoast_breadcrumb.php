<?php
function override_yoast_breadcrumb($links)
{
	if (is_post_type_archive('voice') && is_tax('tool_category')) {
		//お客様の声ページを追加
		$add_link[] = array('text' => 'お客様の声', 'url' => '/voice/');
		array_splice($links, 1, 0, $add_link);
		return $links;
	} elseif ((is_post_type_archive('result') && is_tax('purchase_category'))) {
		// 親カテゴリーを削除
		array_splice($links, 2, 1);
		return $links;
	}
	return $links;
}
add_filter('wpseo_breadcrumb_links', 'override_yoast_breadcrumb');
