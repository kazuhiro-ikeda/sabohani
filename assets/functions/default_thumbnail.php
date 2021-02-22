<?php
function default_thumbnail($post_id)
{
	$post_thumbnail = get_post_meta($post_id, $key = '_thumbnail_id', $single = true);

	//各投稿／カスタム投稿ごとに分岐する場合
	// $screen = get_current_screen();
	// if ($screen->post_type == 'voice') {
	// 	$default_thumbnail_id = '1049';
	// } else {
	// 	$default_thumbnail_id = '49';
	// }

	// 以下にデフォルトの画像のidを入力してください。
	$default_thumbnail_id = '49';
	if (wp_get_attachment_url($default_thumbnail_id)) {
		if (!wp_is_post_revision($post_id)) {
			if (empty($post_thumbnail)) {
				update_post_meta($post_id, $meta_key = '_thumbnail_id', $meta_value = $default_thumbnail_id);
			}
		}
	}
}
add_action('save_post', 'default_thumbnail');
