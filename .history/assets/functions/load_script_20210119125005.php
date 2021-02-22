<?php
//scriptの読み込み
if (!is_admin()) {
	function add_scripts()
	{

		wp_register_script('scripts', get_bloginfo('template_directory') . '/assets/js/common.js', array(), '1.8');

		wp_enqueue_script('scripts');
	}

	add_action('wp_print_scripts', 'add_scripts');


	//defer付与
	add_filter('script_loader_tag', 'defer_async_scripts', 10, 3);
	function defer_async_scripts($tag, $handle, $src)
	{
		$defer_scripts = array(
			'scripts',
		);
		if (in_array($handle, $defer_scripts)) {
			return '<script src="' . $src . '" defer></script>' . "\n";
		}
		return $tag;
	}
}
