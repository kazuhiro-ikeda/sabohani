<?php
function move_media_menus()
{
	global $menu;
	$menu[19] = $menu[10];
	unset($menu[10]);
}
add_action('admin_menu', 'move_media_menus');
