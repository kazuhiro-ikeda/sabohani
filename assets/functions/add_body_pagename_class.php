<?php
function getLoopCount()
{
	global $wp_query;
	return $wp_query->current_post + 1;
}
function add_body_pagename_class($classes = '')
{
	if (is_page()) {
		$page = get_page(get_the_ID());
		$classes[] = 'page-' . $page->post_name;
		if ($page->post_parent) {
			$classes[] = 'page-' . get_page_uri($page->post_parent) . '-child';
		}
	}
	if (is_home() || is_front_page()) {
		$classes[] = 'front-page';
	}
	return $classes;
}
add_filter('body_class', 'add_body_pagename_class');
