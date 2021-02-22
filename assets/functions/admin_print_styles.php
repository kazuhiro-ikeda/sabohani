<?php
//管理画面にstyleを読み込む
function my_admin_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'admin_print_styles', 'my_admin_style' );
?>