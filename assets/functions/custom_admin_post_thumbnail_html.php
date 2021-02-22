<?php
function custom_admin_post_thumbnail_html($content)
{
	$screen = get_current_screen();      //各投稿／カスタム投稿ごとに分岐
	if ($screen->post_type == 'news') {
		$content .= '<p class="description">推奨サイズ：820×562px</p>';
	}
	return $content;
}
add_filter('admin_post_thumbnail_html', 'custom_admin_post_thumbnail_html');
