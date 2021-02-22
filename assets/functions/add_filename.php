<?php
function add_filedate($filename){
	$file_path = get_template_directory().'/'.$filename;
	if (file_exists($file_path)) {
		$file_url = get_template_directory_uri().'/'.$filename;
		$put_query = date('ymdHis', filemtime($file_path));
		$file_href_output = $file_url.'?'.$put_query;
		echo $file_href_output;
	}
}
/*
使い方
<link rel="stylesheet" href="<?php add_filedate('css/style.css');?>" media="all">
*/
?>
