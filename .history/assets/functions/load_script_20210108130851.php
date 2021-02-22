<?php
//scriptの読み込み
if (!is_admin()) {
	function add_scripts()
	{

		wp_register_script('picturefill', get_bloginfo('template_directory') . '/assets/js/picturefill.min.js');
		wp_register_script('ofi', get_bloginfo('template_directory') . '/assets/js/ofi.min.js');
		wp_register_script('scripts', get_bloginfo('template_directory') . '/assets/js/common.js', array(), '1.8');
		wp_register_script('intersect_action', get_bloginfo('template_directory') . '/assets/js/intersectAciton.min.js');
		wp_register_script('anim', get_bloginfo('template_directory') . '/assets/js/anim.js');


		wp_enqueue_script('jquery');
		wp_enqueue_script('picturefill');
		wp_enqueue_script('ofi');
		wp_enqueue_script('scripts');

		if (is_home() || is_front_page()) {
			wp_enqueue_script('intersect_action');
			wp_enqueue_script('anim');
		}
	}

	add_action('wp_print_scripts', 'add_scripts');


	//defer付与
	add_filter('script_loader_tag', 'defer_async_scripts', 10, 3);
	function defer_async_scripts($tag, $handle, $src)
	{
		$defer_scripts = array(
			'picturefill',
			'ofi',
			'scripts',
			'intersect_action',
			'anim',
		);
		if (in_array($handle, $defer_scripts)) {
			return '<script src="' . $src . '" defer></script>' . "\n";
		}
		return $tag;
	}
}
