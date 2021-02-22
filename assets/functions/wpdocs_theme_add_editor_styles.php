<?php
// editor-style.css
function wpdocs_theme_add_editor_styles() {
	add_editor_style( 'assets/css/editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );
?>