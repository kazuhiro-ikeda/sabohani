<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<?php if (is_mobile()) : ?>
		<?php if (is_page('entry') || is_page('contact') || is_page('contact_recruit')) : ?>
			<meta name="viewport" content="width=device-width, user-scalable=no">

		<?php else : ?>
			<meta name="viewport" content="width=device-width, user-scalable=yes">

		<?php endif; ?>

	<?php else : //pc tablet
	?>
		<meta name="viewport" content="width=device-width, user-scalable=yes">

	<?php endif; //if_mobile
	?>

	<meta name="google" content="notranslate">

	<title><?php bloginfo('name'); ?></title>
	<meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/siteimage.jpg" />
	<?php get_template_part('assets/include/preload'); ?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

	<?php if (is_front_page() || is_page('contact') || is_page('confirm') || is_page('thanks')) : ?>

	<?php else : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css_recruit/styles_recruit.css">
	<script src="https://use.fontawesome.com/38e4e444a4.js"></script>
	<?php wp_deregister_script('jquery');
	wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4'); ?>

	<?php endif; ?>

	<?php if (is_page('about-works')) : ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

	<?php endif; ?>

	<?php wp_head(); ?>

<?php if (is_front_page() || is_page('contact') || is_page('confirm') || is_page('thanks')) : ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136495171-11"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-136495171-11');
</script>

<?php else : ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136495171-59"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-136495171-59');
</script>

<?php endif; ?>

</head>

<body>
	<?php if (is_front_page() || is_page('contact') || is_page('confirm') || is_page('thanks')) : ?>
		<div class="wrapper">

		<?php else : ?>
			<div id="main">

			<?php endif; ?>
