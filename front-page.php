<?php get_template_part('assets/include/meta'); ?>

<?php get_header(); ?>

<!-- 背景動画 -->
<div class="mainVisual">
</div>
<style>
	.sec-inner {
		position: relative;
		width: 100%;
	}

	.sec-inner video {
		position: absolute;
		left: 0;
		top: 0;
		max-width: 100%;
	}

	.sec-inner video.lp {
		display: none;
	}

	@media screen and (min-width: 751px) {
		.sec-inner video {
			width: 100%;
			object-fit: contain;
			height: 100%;
			;
		}
	}

	@media screen and (min-width: 1145px) {
		.sec-inner video {
			object-fit: cover;
		}
	}

	@media screen and (max-width: 750px) {
		.sec-inner video {
			top: -72px;
			object-fit: cover;
		}
	}
</style>

<div class="l-contents" id="top">

	<section class="section sec-top" id="anc-1">
		<div class="sec-inner">
			<video src="./videos/pc/top_in.mp4" data-src="./videos/sp/top_sh_in.mp4" data-num="1" class="in" muted playsinline></video>
			<video src="./videos/pc/top_lp.mp4" data-src="./videos/sp/top_sh_lp.mp4" class="lp lazyload" muted playsinline loop></video>

			<div class="sec-news">
				<h2 class="news__ttl en">What's New</h2>
				<div class="news__table">
					<?php
					if (wp_is_mobile()) {
						$posts_per_page = 2;  // SPの件数
					} else {
						$posts_per_page = 4;  // PCの件数
					};
					$args = array(
						'posts_per_page' => $posts_per_page,
						'post_type' => 'news',
					);
					$the_query = new WP_Query($args);
					if ($the_query->have_posts()) :
					?>

						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<div class="tr">
								<div class="th en"><?php the_time('Y.m.d'); ?></div>
								<div class="td"><?php the_field('text', $post->ID); ?></div>
							</div>
						<?php endwhile; ?>

					<?php endif;
					wp_reset_postdata(); ?>

				</div>
			</div>
		</div><!-- /sec-inner -->
	</section><!-- /sec-top -->


	<section class="section sec-company" id="anc-2">
		<div class="sec-inner">
			<video src="./videos/pc/company_in.mp4" data-src="./videos/sp/company_sh_in.mp4" class="in lazyload" data-num="2" muted playsinline></video>
			<video src="./videos/pc/wipe_BG.mp4" data-src="./videos/sp/wipe_BG_sh.mp4" class="bg lazyload" data-num="2" muted playsinline></video>
			<video src="./videos/pc/company_lp.mp4" data-src="./videos/sp/company_sh_lp.mp4" class="lp lazyload" muted playsinline loop></video>

		</div><!-- /sec-inner -->
	</section><!-- /sec-company -->


	<section class="section sec-message" id="anc-3">
		<div class="sec-inner">
			<video src="./videos/pc/Message_in.mp4" data-src="./videos/sp/Message_sh_in.mp4" class="in lazyload" data-num="3" muted playsinline></video>
			<video src="./videos/pc/wipe_BG.mp4" data-src="./videos/sp/wipe_BG_sh.mp4" class="bg lazyload" data-num="3" muted playsinline></video>
			<video src="./videos/pc/Message_lp.mp4" data-src="./videos/sp/Message_sh_lp.mp4" class="lp lazyload" muted playsinline loop></video>
		</div><!-- /sec-inner -->
	</section><!-- /sec-message -->


	<section class="section sec-access" id="anc-4">
		<div class="sec-inner">
			<video src="./videos/pc/ACCESS_in.mp4" data-src="./videos/sp/ACCESS_sh_in.mp4" class="in lazyload" data-num="4" muted playsinline></video>
			<video src="./videos/pc/wipe_BG.mp4" data-src="./videos/sp/wipe_BG_sh.mp4" class="bg lazyload" data-num="4" muted playsinline></video>
			<video src="./videos/pc/ACCESS_lp.mp4" data-src="./videos/sp/ACCESS_sh_lp.mp4" class="lp lazyload" muted playsinline loop></video>

			<div class="access__map access__map--pc" style="display: none;">
				<div class="map__item item-01">
					<h2 class="map__ttl">■東京オフィス</h2>
					<p class="map__address">東京都中央区京橋3-1-1 東京スクエアガーデン13F</p>
					<div class="map__iframe">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.0396694973215!2d139.76886059999998!3d35.6760252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b80fbd14855%3A0x32d4b36f2951651c!2z5qCq5byP5Lya56S-44K144Oc44OP44OL!5e0!3m2!1sja!2sjp!4v1610967035390!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" loading="lazy"></iframe>
					</div>
					<p class="map__route">東京メトロ銀座線「京橋駅」3番出口直結<br>JR「東京駅」八重洲南口徒歩6分</p>
				</div>
				<div class="map__item">
					<h2 class="map__ttl">■大阪オフィス</h2>
					<p class="map__address">大阪府大阪市浪速区元町2-8-2 大都大阪ビル7F</p>
					<div class="map__iframe">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.716895207651!2d135.49536395132506!3d34.66185198034849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e76d903f3e77%3A0x26f9aadbff73a098!2z77yI5qCq77yJ44K144Oc44OP44OL!5e0!3m2!1sja!2sjp!4v1610967056343!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" loading="lazy"></iframe>
					</div>
					<p class="map__route">大阪メトロ御堂筋線「なんば駅」5番出口徒歩7分</p>
				</div>
			</div>

			<div class="access__map access__map--sp" style="display: none;">
				<div class="map__item item-01">
					<h2 class="map__ttl">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/foot_company_tokyo@2x.png" alt="Sabohani Inc. Tokyo" width="155" height="14">
					</h2>
					<div class="map__btn en">
						<a href="https://www.google.co.jp/maps/place/%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE%E3%82%B5%E3%83%9C%E3%83%8F%E3%83%8B/@35.6760252,139.7688606,17z/data=!3m1!4b1!4m5!3m4!1s0x60188b80fbd14855:0x32d4b36f2951651c!8m2!3d35.6760252!4d139.7688606?hl=ja" target="_blank" rel="noopener noreferrer">Google MAP</a>
					</div>
				</div>
				<div class="map__item item-02">
					<h2 class="map__ttl">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/foot_company_osaka@2x.png" alt="Sabohani Inc. Osaka" width="157" height="13">
					</h2>
					<div class="map__btn en">
						<a href="https://www.google.co.jp/maps/place/%EF%BC%88%E6%A0%AA%EF%BC%89%E3%82%B5%E3%83%9C%E3%83%8F%E3%83%8B/@34.6618564,135.495364,17z/data=!3m1!4b1!4m5!3m4!1s0x6000e76d903f3e77:0x26f9aadbff73a098!8m2!3d34.661852!4d135.497558?hl=ja" target="_blank" rel="noopener noreferrer">Google MAP</a>
					</div>
				</div>
			</div>

		</div><!-- /sec-inner -->
	</section><!-- /sec-access -->


	<section class="section sec-service" id="anc-5">
		<div class="sec-inner">
			<video src="./videos/pc/Servis_in.mp4" data-src="./videos/sp/Servis_sh_in.mp4" class="in lazyload" data-num="5" muted playsinline></video>
			<video src="./videos/pc/wipe_BG.mp4" data-src="./videos/sp/wipe_BG_sh.mp4" class="bg lazyload" data-num="5" muted playsinline></video>
			<video src="./videos/pc/Servis_lp.mp4" data-src="./videos/sp/Servis_sh_lp.mp4" class="lp lazyload" muted playsinline loop></video>

		</div><!-- /sec-inner -->
	</section><!-- /sec-service -->


	<section class="section sec-vision" id="anc-6">
		<div class="sec-inner">
			<video src="./videos/pc/Vision_in.mp4" data-src="./videos/sp/Vision_sh_in.mp4" class="in lazyload" data-num="6" muted playsinline></video>
			<video src="./videos/pc/wipe_BG.mp4" data-src="./videos/sp/wipe_BG_sh.mp4" class="bg lazyload" data-num="6" muted playsinline></video>
			<video src="./videos/pc/Vision_lp.mp4" data-src="./videos/sp/Vision_sh_lp.mp4" class="lp lazyload" muted playsinline loop></video>

		</div><!-- /sec-inner -->
	</section><!-- /sec-vision -->


	<div class="c-pagenation c-pagenation--prev">
		<a href="#anc-1" style="display: none;">
			<p class="pagenation__txt">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/navi_prev@2x.png" alt="PREV" width="46" height="14">
			</p>
		</a>
	</div>

	<div class="c-pagenation c-pagenation--next">
		<a href="#anc-2">
			<p class="pagenation__txt">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/navi_next@2x.png" alt="NEXT" width="48" height="14">
			</p>
		</a>
	</div>


</div><!-- /.l-contents-->


<?php get_footer(); ?>
