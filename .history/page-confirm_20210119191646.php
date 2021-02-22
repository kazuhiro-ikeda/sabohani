<?php get_template_part('assets/include/meta'); ?>

<?php get_header(); ?>

<div class="l-contents" id="contact">

	<section class="sec-contact">
		<div class="sec-inner">
			<h1 class="contact__ttl en">CONTACT</h1>
			<div class="steps_form">
				<img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/step_2.jpg" alt="step_2">
				<img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/step_2_s.jpg" alt="">
			</div>
			<!-- /.steps_form -->

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
			<?php endwhile;
			endif; ?>

		</div><!-- /sec-inner -->
	</section><!-- /sec-contact -->

</div><!-- /.l-contents-->

<?php get_footer(); ?>
