<?php get_template_part('assets/include/meta'); ?>

<?php get_header(); ?>

<div class="l-contents" id="contact">

	<section class="sec-contact">
		<div class="sec-inner">
			<h1 class="contact__ttl en">404 NOT FOUND</h1>

			<p class="thanks-text insert">お探しのページは見つかりませんでした。</p>

			<p class="thanks-text">アクセスしようとしたページは、移動したか削除されたようです。<br>下記リンクからご希望のページを探していただくか、<br>お手数ですがお問い合わせページよりご連絡ください。</p>

			<p class="thanks-btn"><a href="<?php echo esc_url(home_url('/')); ?>">トップページへ戻る</a></p>

		</div><!-- /sec-inner -->
	</section><!-- /sec-contact -->

</div><!-- /.l-contents-->

<?php get_footer(); ?>
