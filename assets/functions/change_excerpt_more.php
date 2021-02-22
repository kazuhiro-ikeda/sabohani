<?php
// 抜粋の省略文字を変更する
function change_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'change_excerpt_more');
?>
