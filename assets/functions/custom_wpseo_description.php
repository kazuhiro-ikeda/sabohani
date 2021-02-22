<?php
function custom_wpseo_description($description)
{
	if (get_post_type() === 'voice') {
		return "voiceのディスクリプション";
	} elseif (is_tax('result_category')) {
		return single_term_title("", false) . 'の実績一覧ページになります。';
	} elseif (is_singular('result')) {
		return the_title('', '', false) . 'の実績';
	}
	return $description;
}
add_filter('wpseo_metadesc',  'custom_wpseo_description');
