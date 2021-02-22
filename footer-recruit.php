	</div>
	<!-- /#main -->

	<footer id="footer_recruit">
		<div class="inner_sec">
			<div class="primary">
				<div class="id">
					<a href="<?php echo home_url(); ?>/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/footer_logo.svg" alt=""></a>
				</div>
				<!-- /.id -->

				<div class="location">
					<address class="box n1">
						<div class="emphasis"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/name_tokyo.svg" alt="Sabohani Inc. Tokyo"></div>
						<div class="place">〒104-0031<br>
							東京都中央区京橋3-1-1 東京スクエアガーデン13F</div>
					</address>
					<address class="box n1">
						<div class="emphasis"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/name_osaka.svg" alt="Sabohani Inc. Tokyo"></div>
						<div class="place">〒556-0016<br>
							大阪府大阪市浪速区元町2-8-2 大都大阪ビル7F</div>
					</address>

				</div>
				<!-- /.location -->
			</div>
			<!-- /.primary -->

			<nav id="global_foot">
				<?php get_template_part( 'drawer' ); ?>
			</nav>

			<address id="copyright">©Sabohani Inc.</address>

		</div>
		<!-- /.inner -->

	</footer>

	<a href="#" id="pagetop"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/btn_pagetop.png" alt=""></a>

	<div class="block_p">
		<?php if(is_page( 'recruit' )): ?>
		<a href="<?php echo home_url(); ?>/recruit/new-graduate/" class="cv_btn first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/cv_new-graduate.png" alt="新卒採用"></a>
		<a href="<?php echo home_url(); ?>/recruit/career/" class="cv_btn second"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/cv_career.png" alt="中途採用"></a>

		<?php elseif(is_page( 'new-graduate' )): ?>
		<a href="#requirement" class="cv_btn first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/cv_new-graduate.png" alt="新卒採用"></a>

		<?php elseif(is_page( 'career' )): ?>
		<a href="#requirement" class="cv_btn first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/cv_career.png" alt="中途採用"></a>

		<?php elseif(is_singular( 'new_graduate' ) || is_singular( 'case' )): ?>
		<a href="#requirements_anc" class="cv_btn first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/cv_requirement.png" alt="募集要項を見る"></a>
		<a href="<?php echo esc_url(home_url('/')); ?>?page_id=239&post_id=<?php echo $post->ID; ?>" class="cv_btn second"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/cv_web-entry.png" alt="カンタンWEB応募"></a>


		<?php else: ?>

		<?php endif; ?>

	</div>
	<!-- /.block_p -->

	<div class="block_s">
		<?php if(is_page( 'recruit' )): ?>
		<div class="cv_s">
			<a href="<?php echo home_url(); ?>/recruit/new-graduate/" class="cv_btn_s"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/cv_new-graduate_s.png" alt="新卒採用"></a>
			<a href="<?php echo home_url(); ?>/recruit/career/" class="cv_btn_s"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/cv_career_s.png" alt="中途採用"></a>
		</div>
		<!-- /.cv_s single -->


		<?php elseif(is_page( 'new-graduate' )): ?>
		<div class="cv_s single">
			<a href="#requirement" class="cv_btn_s"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/cv_new-graduate_wide_s.png" alt="新卒採用"></a>
		</div>
		<!-- /.cv_s single -->


		<?php elseif(is_page( 'career' )): ?>
		<div class="cv_s single">
			<a href="#requirement" class="cv_btn_s"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/cv_career_wide_s.png" alt="中途採用"></a>
		</div>
		<!-- /.cv_s single -->


		<?php elseif(is_singular( 'new_graduate' ) || is_singular( 'case' )): ?>
		<div class="cv_s">
			<a href="#requirements_anc" class="cv_btn_s"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/cv_requirement_s.png" alt="募集要項を見る"></a>
			<a href="<?php echo esc_url(home_url('/')); ?>?page_id=239&post_id=<?php echo $post->ID; ?>" class="cv_btn_s"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/cv_web-entry_s.png" alt="カンタンWEB応募"></a>
		</div>
		<!-- /.cv_s -->

		<?php else: ?>

		<?php endif; ?>

	</div>
	<!-- /.block_p -->

	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/recruit.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/nav_drawer.js"></script>
	<script>
		//usage with class="mailtoui"
		window.addEventListener('load', function(){
			if(/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())){
				var script = $('<script>').attr({
					'type': 'text/javascript',
					'src': 'https://cdn.jsdelivr.net/npm/mailtoui@1.0.3/dist/mailtoui-min.js'
				});
				$('body')[0].appendChild(script[0]);
			}
		});
	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.matchHeight.js"></script>
	<script>
		$(function() {
			$('.matchHeight').matchHeight();
		});
	</script>
	<?php if (is_page( 'about-works' )): ?>
	¥<script src="//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

	<?php endif; ?>

	<?php wp_footer(); ?>

</body>

</html>
