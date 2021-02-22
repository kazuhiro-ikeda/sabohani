<?php
//scriptの読み込み
if (!is_admin()) {
	function add_scripts()
	{
		wp_register_script('scripts', get_bloginfo('template_directory') . '/assets/js/common.js', array(), '1.0');
		wp_register_script('yubinbango', get_bloginfo('template_directory') . '/assets/js/yubinbango.js', array());
		if (is_front_page()) {
			wp_register_script('scripts', get_bloginfo('template_directory') . '/assets/js/front.js', array(), '1.0');
			wp_register_script('lazyload', 'https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.min.js', array());
		}

		wp_enqueue_script('jquery');
		wp_enqueue_script('scripts');

		if (is_page('contact')) :
			wp_enqueue_script('yubinbango');
		endif;

		if (is_front_page()) :
			wp_enqueue_script('lazyload');
		endif;
	}

	add_action('wp_print_scripts', 'add_scripts');


	//defer付与
	add_filter('script_loader_tag', 'defer_async_scripts', 10, 3);
	function defer_async_scripts($tag, $handle, $src)
	{
		$defer_scripts = array(
			'scripts',
			'yubinbango',
		);
		if (in_array($handle, $defer_scripts)) {
			return '<script src="' . $src . '" defer></script>' . "\n";
		}
		return $tag;
	}
}
