<?php
// cssの読み込み
if (!is_admin()) {
	function load_style()
	{
		// wp_enqueue_style('add_google_fonts', 'https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap', false);
		// wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css', array(), '1.0');
		// wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/js/slick/slick-theme.css', array(), '1.0');
		wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.7');
	}
	add_action('wp_enqueue_scripts', 'load_style');
}
