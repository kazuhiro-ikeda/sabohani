<?php
function delete_tiny_mce_cache($mce_init)
{

	$mce_init['cache_suffix'] = 'v=' . time();

	return $mce_init;
}
add_filter('tiny_mce_before_init', 'delete_tiny_mce_cache');
