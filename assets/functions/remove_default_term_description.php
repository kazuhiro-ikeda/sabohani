<?php
// カテゴリーにある「説明」を非表示にする
function remove_default_term_description()
{
?>
	<style type="text/css">
		.term-description-wrap {
			display: none !important;
		}
	</style>
<?php
}
add_action('admin_head', 'remove_default_term_description');
?>
