<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes">
	<title><?php bloginfo('name'); ?></title>
	<meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/siteimage.jpg" />
	<?php get_template_part('assets/include/preload'); ?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/common.js" defer></script>
	<?php wp_head(); ?>
</head>

<body>

	<div class="wrapper">
