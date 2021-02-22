<?php
add_action('pre_get_posts', 'change_post_archive_number');
function change_post_archive_number($query)
{
	/* @var $query WP_Query */
	if (!is_admin() && $query->is_main_query()) {
		if (is_post_type_archive('news')) {
			$query->set('posts_per_page', 6); //表示したい数
		}
	}
	return $query;
}
