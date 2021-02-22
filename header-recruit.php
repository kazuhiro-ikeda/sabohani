<header id="header_recruit">
	<div class="id">
		<a href="<?php echo home_url(); ?>/recruit/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/logo.svg" alt="サボハニ 採用サイト"></a>
	</div>
	<!-- /.id -->

	<nav id="global">
		<?php get_template_part( 'drawer' ); ?>
	</nav>

</header>

<div class="nav_drawer">
	<div class="drawer_bg"></div>
	<!-- /.drawer_bg -->

	<div class="inner">
		<a href="<?php echo home_url(); ?>/recruit" class="logo"><img src= <?php echo get_template_directory_uri(); ?>/assets/img/recruit/logo_s.svg" alt="サボハニ 採用サイト"></a>

	</div>
	<!-- /.inner -->

	<button type="button" class="drawer_button"></button>

	<nav class="drawer_nav_wrapper" id="drawer">
		<?php get_template_part( 'drawer' ); ?>

	</nav>

</div>
<!-- .nav_drawer -->



