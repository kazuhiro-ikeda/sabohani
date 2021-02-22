<article id="page_career" class="pages_recruit">
	<div class="primary">
		<h1 class="firstview">
			<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/career/main.png" alt="プロのための戦場">
			<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/career/main_s.png" alt="">
		</h1>
		<p class="text">遊技機業界で『吉宗』、『番長』シリーズを知らない人はいないでしょう。<br>
			いつの時代も最前線でプレイヤーの心を掴んできた『大都技研』。<br>
			そのパートナー企業である私たちは、常に結果を求められています。<br>
			“モノ創り”で大切なことは常に市場を意識すること。<br>
			自分のやりたいこと、実現したいことは、クリエーターなら沸々と湧き上がってきますが、<br class="inline_p">
			それを実現するためには根拠が必要です。自分がよいと思ったモノを作るのは『芸術家』、<br class="inline_p">
			求められるモノ、あらゆる人に認めてもらえるモノを創るのが『プロ』、我々が創るものは、作品ではなく商品なのです。</p>
		<p class="text">商品を提供するには、品質、コスト、納期のバランスが重要。「本当にそれでいいのか」「他に良いアイデアは無いか」、
			限られた予算と工期の中で、市場のトップで戦える品質を担保しなければなりません。<br>
			「時間ないしこのくらいで…」とか「これで許してもらおう」など、生半可な意識であがる成果では評価されません。<br>
		</p>
		<p class="text">私たちに求められている結果とは、トップで戦えるコンテンツの提供です。<br>
			ディレクター、プランナー、デザイナー、プログラマの各分野で<br class="inline_p">
			最高の知識と技術と経験と、パッション（情熱）が求められています。<br>
			そんな私たちに共感できる、共に同じステージで戦ってくれる人財を求めています。<br>
			業界大手の『大都技研』のスタッフと共に、私たち『サボハニ』の一員として、<br class="inline_p">
			“ホンモノ”のコンテンツ、プレイヤーに“シゲキ”を与える遊技機を創造しましょう。</p>
		<p class="signature">代表取締役社長　白山雅貴</p>
	</div>
	
	<div id="requirement" class="anc"></div>
	<!-- /#requirement.anc -->
	<div class="requirement_sec">
		<h2 class="ttl">
			<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/career/ttl.png" alt="">
			<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/career/ttl_s.png" alt="">
		</h2>

		<section id="loop" class="page_inner">
			<div class="items">
				<?php
				$args = array(
					'post_type'      => 'case',
					'posts_per_page' => -1,
				);

				// the query
				$the_query = new WP_Query( $args ); ?>

				<?php if ( $the_query->have_posts() ) : ?>
					<!-- pagination here -->

					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<?php remove_filter ( 'the_content', 'wpautop' ); ?>
						<?php get_template_part( 'loop' ); ?>

					<?php endwhile; ?>
					<!-- end of the loop -->

					<!-- pagination here -->

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p style="text-align:center; font-size:24px; font-weight:bold; color:#ddd; margin:100px auto; line-height:200%;">Coming soon</p>

				<?php endif; ?>

			</div>
			<!-- /.items -->

		</section>
		<!-- /#loop -->

	</div>

</article>
<!-- /#page_new-graduate.pages_recruit -->
