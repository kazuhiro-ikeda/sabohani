<?php get_template_part('assets/include/meta'); ?>

<?php get_header(); ?>

<div class="l-contents" id="contact">

	<section class="sec-contact">
		<div class="sec-inner">
			<h1 class="contact__ttl en">CONTACT</h1>
			<div class="steps_form">
				<img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/step_1.jpg" alt="step_1">
				<img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/step_1_s.jpg" alt="">
			</div>
			<!-- /.steps_form -->

			<?php echo do_shortcode('[mwform_formkey key="28"]'); ?>

		</div><!-- /sec-inner -->
	</section><!-- /sec-contact -->



</div><!-- /.l-contents-->


<?php get_footer(); ?>
