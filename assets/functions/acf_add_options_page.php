<?php
//ACF オプションページの追加
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'サイト設定',
		'menu_title'	=> 'サイト設定',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'manage_options',
		'redirect'		=> true
	));
	//サブカテゴリー
	acf_add_options_sub_page(array(
		'page_title' 	=> '設定１',
		'menu_title'	=> '設定１',
		'menu_slug' 	=> 'theme-general-settings-01',
		'parent_slug'	=> 'theme-general-settings',
		'capability'	=> 'manage_options',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> '設定２',
		'menu_title'	=> '設定２',
		'menu_slug' 	=> 'theme-general-settings-02',
		'parent_slug'	=> 'theme-general-settings',
		'capability'	=> 'manage_options',
	));
}
