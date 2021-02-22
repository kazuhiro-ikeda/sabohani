<?php
// WPアップデート通知を管理者のみ通知
if ( !current_user_can( 'edit_users' ) ) {
	function wphidenag() {
		remove_action( 'admin_notices', 'update_nag' );
	}
	add_action('admin_menu','wphidenag');
}
?>