<article id="page_new-graduate" class="pages_recruit">
	<div class="primary">
		<h1 class="firstview">
			<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/new-graduate/main.png" alt="新たなアイデア、良いアイデアに先輩も後輩も社長も新卒も、関係ない！">
			<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/new-graduate/main_s.png" alt="">
		</h1>
		<p class="text">私たちの仕事は、オリジナルコンテンツを生み出し演出・映像として発信することです。<br>
			その中のひとつとして、オリジナルコンテンツに不可欠なキャラクター考案があります。<br>
			性格や特徴、バックボーンなどのアイディアを元に、キャラクターデザインをゼロから制作していきます。<br>
			そのアイディアが面白ければ、業種・役職関係なく採用され、実際に遊技機のキャラクターとして形にしていきます。<br>
			その他にも、細部にもこだわる演出表現、最新のトレンドを取り入れたシゲキのある映像表現。<br>
			映像表現を最大限に活かしたり、時には単体で映像演出を超越してメインになってしまう事もある<br>
			サウンド・ランプの表現、それら全社員のアイディアを一つの遊技機としてまとめ創り上げていくのです！<br>
			自分の考えたアイディアが全国のユーザーを魅了することを想像するとワクワクしませんか？</p>
		<p class="text">これを見ていただきワクワクしたあなた、私たちとのシゲキ的な日々が待ってdsいます。<br>
			これまで、見て、聞いて、感じてきたエンターテインメントのアイディアを、ぜひ、私たちサボハニで<br>
			実際に形にして発信していきましょう！</p>
		<p class="signature">代表取締役社長　白山雅貴</p>
	</div>

	<div class="secondary">
		<div class="inner_sec">
			<h2 class="ttl_box">新卒教育カリキュラムについて</h2>
			<p class="lead">サボハニでは基本行動を遵守し、<br class="inline_s">社会で通用する高度な<br class="inline_s">専門知識を持った<br class="inline_p">
				クリエイターとして<br class="inline_s">プロフェッショナルを育成します。</p>
			<ul>
				<li>
					<h3 class="ttl_icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-graduate/icon_1.png" alt="">
						<span class="inner_text">新人研修</span>
					</h3>
					<p class="text">社会人として必要な心得、言葉遣いや行動指針などビジネスマナーについて、社内研修にて習得していただきます。</p>
				</li>
				<li>
					<h3 class="ttl_icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-graduate/icon_2.png" alt="">
						<span class="inner_text">映像グループ研修</span>
					</h3>
					<p class="text">遊技機研修、絵コンテ、３Ｄ、作画・レタッチ、ロゴ・シンボル、エフェクト・コンポジット、オーサリングなど、映像制作の一通りの作業の基礎を学んでいただきます。</p>
				</li>
				<li>
					<h3 class="ttl_icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-graduate/icon_3.png" alt="">
						<span class="inner_text">企画グループ研修</span>
					</h3>
					<p class="text">各種フォーマット、規則、モチーフ提案・企画概要書、進行管理、演出フロー、字コンテなど、企画業務で必要な作業を学んでいただきます。</p>
				</li>
				<li>
					<h3 class="ttl_icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-graduate/icon_4.png" alt="">
						<span class="inner_text">ソフトウエアグループ研修</span>
					</h3>
					<p class="text">遊技機研修、遊技機開発の流れ、開発環境・ツール類の説明、実際の環境で開発手順研修を行います。</p>
				</li>
			</ul>
		</div>
	</div>
	
	<div id="requirement" class="anc"></div>
	<!-- /#requirement.anc -->
	<div class="requirement_sec">
		<h2 class="ttl">
			<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/new-graduate/ttl.png" alt="">
			<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/new-graduate/ttl_s.png" alt="">
		</h2>

		<section id="loop" class="page_inner">
			<div class="items">
				<?php
				$args = array(
				    'post_type'      => 'new_graduate',
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
