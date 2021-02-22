<?php
//カスタムメニューを有効化
register_nav_menu( 'g-nav', 'グローバルナビ' );
register_nav_menu( 'side-menu', 'サイドメニュー' );

//カスタムメニューデフォルトのclassを削除
add_filter( 'nav_menu_css_class', 'my_custom_nav', 10, 2 );
function my_custom_nav( $classes, $item ) {
	if( !empty( $classes[0] ) ){
		$custom_class = esc_attr( $classes[0] );
	}
	$classes = array();
	if( $item -> current == true ) {
		$classes[] = 'current';
	}
	if( !empty( $custom_class ) ){
		$classes[] = $custom_class;
	}
	return $classes;
}

//カスタムメニューデフォルトのIDを削除
add_filter('nav_menu_item_id', 'removeId', 10);
function removeId( $id ){
	return $id = array();
}
?>