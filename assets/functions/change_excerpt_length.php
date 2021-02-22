<?php
// 抜粋の文字数を変更する
function change_excerpt_length($length)
{
	return 166;
}
add_filter('excerpt_length', 'change_excerpt_length');
