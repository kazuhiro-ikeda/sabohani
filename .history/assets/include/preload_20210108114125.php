<?php if (is_home() || is_front_page()) : ?>
	<?php if (wp_is_mobile()) : ?>
		<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/img/top/mainView_bg_sp@2x.jpg" as="image">
	<?php else : ?>
		<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/img/top/mainView_bg@2x.jpg" as="image">
	<?php endif; ?>
<?php else : //トップページ以外
?>
	<?php if (wp_is_mobile()) : ?>
		<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/page_ttl_bg_sp@2x.jpg" as="image">
	<?php else : ?>
		<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/page_ttl_bg@2x.jpg" as="image">
	<?php endif; ?>
<?php endif; ?>
