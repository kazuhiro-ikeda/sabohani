<?php
// cssの読み込み
if (!is_admin()) {
	function load_style()
	{
		wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0');
	}
	add_action('wp_enqueue_scripts', 'load_style');
}
