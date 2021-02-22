<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes">
	<title><?php bloginfo('name'); ?></title>
	<meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/siteimage.jpg" />
	<?php get_template_part('assets/include/preload'); ?>

	<?php if (is_home() || is_front_page()) : ?>
		<?php
		$browser = strtolower($_SERVER['HTTP_USER_AGENT']);
		if (strstr($browser, 'trident') || strstr($browser, 'msie')) {
			// IEのみ
			echo '<script src="' . get_template_directory_uri() . '/assets/js/intersection-observer.js" defer></script>';
		}
		?>
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="wrapper" id="page-top">
