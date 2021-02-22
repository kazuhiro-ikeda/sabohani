<?php
function is_parent_slug()
{
	global $post;
	if ($post->post_parent) {
		$post_data = get_post($post->post_parent);
		return $post_data->post_name;
	}
}

/* 使い方

<?php if (is_parent_slug() === 'hoge') { ?>
    親ページのスラッグが hoge ならtrue
<?php } ?>

*/
