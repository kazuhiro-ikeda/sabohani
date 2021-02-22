<?php
// カスタムヘッダーを有効化
$args = array(
	'flex-width'    => true,
	'width'         => 980,
	'flex-width'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );
?>