<?php get_template_part('assets/include/meta'); ?>

<?php get_header( 'recruit' ); ?>

<div id="main" <?php post_class(); ?> role="main">
	<article id="page_entry" class="page_corporate">
		<div class="inner_sec">
			<h1 class="ttl_corporate">応募フォーム</h1>

			<section id="entry" class="form_complete">
				<div class="steps_form">
					<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/form/step_3.jpg" alt="step_1">
					<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/form/step_3_s.jpg" alt="">
				</div>
				<!-- /.steps_form -->

				<div class="inner">
					<p class="thanks-text insert">この度は、数ある企業の中から弊社へご応募頂きまして<br>誠にありがとうございます。</p>

					<p class="thanks-text">これより、エントリーフォーム内容を元に書類選考を進めさせていただきます。 <br><br>
						結果に関しましては、合否に関わらず<br>
						ご応募から営業日３日以内を目安にご連絡をさしあげますので <br>
						もうしばらくお待ちくださいませ。 <br><br>
						株式会社サボハニ<br>
						〒zip-code<br>
						address<br>
						TEL <span class="inline_p">0000-00-0000</span><a class="inline_s" href="tel:xxx">0000-00-0000</a></p>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php remove_filter ( 'the_content', 'wpautop' ); ?>
					<?php the_content(); ?>

					<?php endwhile; else: ?>
						<p style="text-align:center; font-size:24px; font-weight:bold; color:#ddd; margin:100px auto; line-height:200%;">お探しの記事は準備中です。<br>近日中に公開となります。</p>

					<?php endif; ?>

				</div>
				<!-- /.inner -->

			</section>
			<!-- /#entry -->

		</div>
	</article>
	<!-- /#page_privacy-policy -->

</div><!-- /#main post_class -->

<?php get_footer( 'recruit' ); ?>
