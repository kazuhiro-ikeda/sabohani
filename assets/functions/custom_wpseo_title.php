<?php
function custom_wpseo_title($title)
{
	if (is_post_type_archive('result') && is_tax('purchase_category')) {
		return single_term_title("", false) . 'の実績一覧';
	} elseif (is_singular('result')) {
		return the_title('', '', false) . 'の実績';
	}
	return $title;
}
add_filter('wpseo_title', 'custom_wpseo_title');
