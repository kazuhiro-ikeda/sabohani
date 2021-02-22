<?php get_template_part('assets/include/meta'); ?>

<?php get_header(); ?>

<div class="l-contents" id="contact">

	<section class="sec-contact">
		<div class="sec-inner">
			<h1 class="contact__ttl en">CONTACT</h1>
			<div class="steps_form">
				<img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/form/step_3.jpg" alt="step_3">
				<img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/form/step_3_s.jpg" alt="">
			</div>
			<!-- /.steps_form -->

			<p class="thanks-text insert">この度は、お問合せいただきまして<br>誠にありがとうございます。</p>

			<p class="thanks-text">営業日３日以内を目安にご連絡をさしあげますので <br>
				もうしばらくお待ちくださいませ。 <br><br>
				Company Name<br>
				〒zip-code<br>
				address<br>
				TEL <span class="inline_p">0000-00-0000</span><a class="inline_s" href="tel:xxx">0000-00-0000</a></p>

			<?php echo do_shortcode('[mwform_formkey key="28"]'); ?>

		</div><!-- /sec-inner -->
	</section><!-- /sec-contact -->


</div><!-- /.l-contents-->


<?php get_footer(); ?>
