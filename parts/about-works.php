<article id="page_about-works" class="recruits">
	<h1 class="ttl_about-works">
		<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/works_ttl.png" alt="仕事で見るサボハニ">
		<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/works_ttl_s.png" alt="">
	</h1>

	<div class="inner_wrap">
		<div id="works_sec_1" class="works_sec">
			<h2 class="ttl_sub">
				<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/works_sec_1.png" alt="主な事業内容">
				<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/works_sec_1_s.png" alt="">
			</h2>

			<div class="inner_contents">
				<div class="box">
					<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/f_1.png" alt="企画進行グループ"></figure>
					<p class="text">パートナー企業である大都技研のオリジナルコンテンツを中心に演出方法や作品の世界観の企画を行っております。<br>
						企画演出考案だけではなく、プロジェクトのモチーフ提案から参加し、コンセプト決め等、最初から最後まで作品に携わることができます。<br>
						どうなれば面白くなるかを突き詰めていき、業界が驚くような演出を作ることがやりがいです。<br>
						大都技研のビッグタイトルの開発が出来るので責任は非常に重大ですが、市場に出せたときは大きな達成感を味わうことが出来る仕事です。</p>
				</div>
				<!-- /.box -->
				<div class="box">
					<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/f_2.png" alt="映像製作グループ"></figure>
					<p class="text">企画演出プランに基づき、映像全体のイメージを固め、映像制作のクリエイティブ全般を担うセクションです。<br>
						人気遊技機である「番長シリーズ」をはじめ、クオリティの高い映像を求められる中、ディレクターが自由度のある環境でディレクションを行い、各クリエイターのポテンシャルを最大限に引き出すことで、業界トップクラスと言われる質の高い映像制作を手掛けています。<br>
						初代番長を手掛けた社長自らがプロジェクトに参加し、意見を交換できる環境は映像クオリティの向上だけでなく、個人の成長にもつながります。</p>
				</div>
				<!-- /.box -->
				<div class="box">
					<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/f_3.png" alt="ソフトウェアグループ"></figure>
					<p class="text">企画プランナーや映像ディレクターからの指示をもとに、映像の組み込みを行うエンジニア集団です。<br>
						考案された企画、映像に対し、プログラマーの視点からより品質の高い演出に仕上げていきます。<br>
						業務を淡々とこなすのみならず、他部署と連携し一緒に考え映像作品を作っていくので、より一体感を感じられる環境です。<br>
						開発の集大成となるポジションの為責任も重大ですが、大都技研のキラーコンテンツを中心に一つの演出ができる瞬間に携われることが魅力です。</p>
				</div>
				<!-- /.box -->
				<div class="box">
					<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/f_4.png" alt="実機開発グループ"></figure>
					<p class="text">大都技研が保有するコンテンツの遊技機開発、及び自社のオリジナルコンテンツのスロット遊技機の開発を行っています。<br>
						企画、設計、組込、テストまで一貫し、自社で開発した遊技機を市場に投入しています。<br>
						「消費者の記憶に残るエンターテインメントを創造する」を理念に人を楽しませる、感動させる遊技機を目指します。<br>
						少数精鋭で業務自体は多岐に渡りますが、様々なことをゼロから経験できるため、非常に質の高い経験値を積むことが出来ます。</p>
				</div>
				<!-- /.box -->
			</div>
			<!-- /.inner_contents -->
		</div>
		<!-- /#works_sec_1 -->

		<div id="works_sec_2" class="works_sec">
			<h2 class="ttl_sub">
				<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/works_sec_2.png" alt="サボハニ スタッフの1日の流れ">
				<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/works_sec_2_s.png" alt="">
			</h2>

			<?php if( have_rows( 'staff' ) ):
				$count=1;
			?>

			<div class="flex_staff">
			<?php while( have_rows( 'staff' ) ): the_row();
				$count++;
				// vars
				$icon = get_sub_field( 'icon' );
				$contents = get_sub_field( 'contents' );

				// vars img
				$iconurl = $icon['url'];
				$iconalt = $icon['alt'];
				$iconsize = '1日の流れアイコン';
				$iconthumb = $icon['sizes'][ $iconsize ];

				$contentsurl = $contents['url'];
				$contentsalt = $contents['alt'];
				$contentssize = '1日の流れアイコン';
				$contentsthumb = $contents['sizes'][ $contentssize ];
			?>

			<a class="icon" data-fancybox data-touch="false" data-src="#hidden-content<?php echo $count; ?>" href="javascript:;">
				<img src="<?php echo $iconthumb; ?>" alt="<?php echo $iconalt; ?>">

			</a>

			<div style="display: none;" id="hidden-content<?php echo $count; ?>">
				<img src="<?php echo $contentsthumb; ?>" alt="<?php echo $contentsalt; ?>">
			</div>

			<?php endwhile; ?>
			</div>
			<!-- /.flex_staff -->

			<?php endif; ?>

		</div>
		<!-- /#works_sec_2 -->

		<div id="works_sec_3" class="works_sec">
			<h2 class="ttl_sub">
				<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/works_sec_3.png" alt="制作工程">
				<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/works_sec_3_s.png" alt="">
			</h2>

			<div class="step">
				<div class="box n1">
					<h3 class="ttl_ver">
						<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_1.png" alt="STEP1">
						<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_1_s.png" alt="">
					</h3>

					<div class="inner_box">
						<div class="data">
							<h4 class="ttl_sub">
								<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_1_sub.png" alt="「企画概要」・「制作設計」">
								<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_1_sub_s.png" alt="">
							</h4>
							<p class="text">私たちサボハニの開発は、制作されるコンテンツの企画概要検討から始まります。オリジナルコンテンツの開発を主に行う私たちの概要検討は、キャラクターの設定や舞台設定などリリース機種の根幹となる部分から行います。<br>
								企画とデザイナーが協力したイメージボードをこの段階でいくつも作成し、実際に開発される機種の具体的な全体イメージとして固めていきます。<br>
								それは単純によくある「キャラクター設定」「舞台設定」「世界観設定」などのビジュアル面やストーリー性の検討だけではなく、「市場の遊技機としてこういう立ち位置だからこんなビジュアルになるでしょ!!」「敵キャラのビジュアルバランスだと期待感が作りにくそうだな…」などどうすれば遊技機として成立し、その上面白く（シゲキ的に）なるかという視点も重要視し、企画概要を作っていきます。<br>
								また、この段階でスケジュールとコストの初期設計も行います。<br>
								限られた期間と予算の中でクリエイターが安心して実力を最大限発揮してもらえる環境を私たちは確保していきます。</p>
						</div>
						<!-- /.data -->
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/p_1.png" alt=""></figure>
					</div>
					<!-- /.inner_box -->
				</div>
				<!-- /.box n1 -->
				<div class="box n2">
					<h3 class="ttl_ver">
						<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_2.png" alt="STEP2">
						<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_2_s.png" alt="">
					</h3>

					<div class="inner_box">
						<div class="data">
							<h4 class="ttl_sub">
								<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_2_sub.png" alt="「演出企画」">
								<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_2_sub_s.png" alt="">
							</h4>
							<p class="text">概要の決定後は、実際に開発される遊技機の仕様書を元に必要な演出内容を検討します。<br>
								モチーフの世界観やゲーム仕様、予算を遵守した中で、最大限に効果のある演出ネタ・レイアウト・キャラ演技・カメラワーク・撮影効果等を熟考し、唯一無二の逸品として仕上がる演出の設計書を仕上げます。<br>
								また、演出企画で制作する内容が明確になった段階でその後の工程に関わるコストやスケジュールを再精査し初期設計で算出した内容とかけ離れていないかをしっかり確認し、次行程へと進みます。</p>
						</div>
						<!-- /.data -->
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/p_2.png" alt=""></figure>
					</div>
					<!-- /.inner_box -->
				</div>
				<!-- /.box n2 -->
				<div class="box n3">
					<h3 class="ttl_ver">
						<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_3.png" alt="STEP3">
						<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_3_s.png" alt="">
					</h3>

					<div class="inner_box">
						<div class="data">
							<h4 class="ttl_sub">
								<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_3_sub.png" alt="イメージボード」・「絵コンテ」・「動画コンテ」">
								<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_3_sub_s.png" alt="">
							</h4>
							<p class="text">映像仕様書の決定後は、イメージボード・絵コンテ・動画コンテとして具体的なイメージづくりを行います。
								まず、アニメーションのワンシーンを想像して演出の「イメージボード」を描きます。<br>
								イメージボードは作品の世界観や雰囲気など、言葉だけでは伝わらないアイディアを目に見える形で共有し合う目的で制作します。
								次に、キャラクターの動きやカメラワークを4コマ漫画のように描いてアニメーションの台本を作ります。これを「絵コンテ」と言います。<br>
								そして、絵コンテで描いたキャラクターを動画として動かす「動画コンテ」を作ります。<br>
								実際に動かしてみたらどのような見栄えになるのか、そしてより良い見栄えにするためにはどのようなアクションにするか、エフェクトを加えれば良いのかこれらを限られた秒数の中に構築していきます。<br>
								パチスロの映像は「BET」「レバー」「各種ボタン停止」など、多岐にわたるトリガーで任意の映像切替えが行われるため、短い時間で演出を成立させる必要がありフレーム単位のアニメーション・エフェクトの調整など、とくにこだわり抜きます。<br>
								この工程はアニメーションを作り上げていくための基礎であり、ぱちんこ・パチスロの映像として楽しめるアイディアをふんだんに織り込むことが出来る重要な過程です。<br>
								遊技者を楽しませるために生き生きとしたキャラや迫力のあるシーンを魅せるには、絵をうまく描く技術やツールを使いこなすだけではなく、演出力や構成力といった表現の幅を広げようとする探求心が鍵となります。</p>
						</div>
						<!-- /.data -->
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/p_3.png" alt=""></figure>
					</div>
					<!-- /.inner_box -->
				</div>
				<!-- /.box n3 -->
				<div class="box n4">
					<h3 class="ttl_ver">
						<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_4.png" alt="STEP4">
						<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_4_s.png" alt="">
					</h3>

					<div class="inner_box">
						<div class="data">
							<h4 class="ttl_sub">
								<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_4_sub.png" alt="デザイン」・「アニメ制作」">
								<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_4_sub_s.png" alt="">
							</h4>
							<p class="text">絵コンテ・動画コンテの決定後は絵コンテ・動画コンテを基に、清書を作成する工程に進みます。<br>
								アニメ制作はパラパラ漫画のように1コマずつ丁寧に描いていきます。<br>
								その際、一連の動きの中で要点となるコマ同士の間にコマを描き入れるポーズ・トゥ・ポーズという手法を取っており、完成形を掴みつつもその中で魅力的な動きを作り出すことが出来ます。<br>
								また、3Dを使用したアニメ―ションを作成する場合もあるので、多様なアニメ制作の形態を経験することが出来ます。<br>
								同時進行で、ロゴデザインやテロップ等のUIデザイン素材も作成していきます。<br>
								パッと見ただけで、熱気を感じたり賑やかな音が聞こえてきたりしそうな五感を刺激するデザインを作り上げるためには、細かなところまで丁寧に仕上げることが出来る高い集中力が求められます。<br>
								事前の工程で明確化された制作物を集中してモノ創りでき、さらには指示とは異なる新たな良いアイディアの提案は積極的に採用していく環境なので、クリエイターの実力は常に100％以上発揮できます！それが私たちサボハニの魅力です。</p>
						</div>
						<!-- /.data -->
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/p_4.png" alt=""></figure>
					</div>
					<!-- /.inner_box -->
				</div>
				<!-- /.box n4 -->
				<div class="box n5">
					<h3 class="ttl_ver">
						<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_5.png" alt="STEP5">
						<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_5_s.png" alt="">
					</h3>

					<div class="inner_box">
						<div class="data">
							<h4 class="ttl_sub">
								<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_5_sub.png" alt="「コンポジット」">
								<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_5_sub_s.png" alt="">
							</h4>
							<p class="text">デザイン素材の完成後はそれらを組み立てるコンポジットと呼ばれる作業に入ります。<br>
								アニメ素材を実際に並べて連続表示させ動画としてアニメーションさせたり、ぱちんこ・パチスロとして盛りあがるエフェクト付けをして、実際に遊技者が見る映像として完成させる工程です。<br>
								作画のアニメーション作成は、ただ等間隔に作画素材を並べるのではなく素材1枚1枚の再生時間を、演出・キャラの演技に合わせたベストなタイミングを探り気持ちよさ・高揚感へとつながるようにこだわります。<br>
								そのこだわりは普段全身で1枚の素材として表示させているキャラの体を手、腕、肩などの細かいパーツに分解して、各々の表示時間をフレーム単位で調整する徹底ぶりです。<br>
								エフェクトに関してもただ派手にするだけではなく、演出意図やゲーム性に合わせた設計の中で、最大限のクオリティを出すことが重要です。<br>
								遊技者の手を止めさせない、プレイの邪魔にならない範囲で、ゲーム性をさらに盛りあげる映像にすることを重要視しています。<br>
								※意図として遊技者の手を止めさせる演出、映像を制作する場合もありますね！</p>
						</div>
						<!-- /.data -->
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/p_5.png" alt=""></figure>
					</div>
					<!-- /.inner_box -->
				</div>
				<!-- /.box n5 -->
				<div class="box n6">
					<h3 class="ttl_ver">
						<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_6.png" alt="STEP6">
						<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_6_s.png" alt="">
					</h3>

					<div class="inner_box">
						<div class="data">
							<h4 class="ttl_sub">
								<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_6_sub.png" alt="「オーサリング」">
								<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_6_sub_s.png" alt="">
							</h4>
							<p class="text">演出映像の決定後は実際に実機に表示させるためのデータ変換作業を行います。<br>
								限られた容量や環境の中で最大限の映像品質を再現するために<br>
								プログラマーとデータ圧縮や画質調整などの相談を行い最終的な映像素材に落とし込みます。<br>
								各演出の仕様に合わせてコンポジットで組み立てられた背景、アニメ、エフェクトを1つの画像としてまとめたり、エフェクトやデザイン物を切り分ける判断をして素材化します。<br>
								データの組み方や素材のパズル次第で、容量内に入る演出数や映像品質に大きく影響がある工程なので、非常に重要な作業です。</p>
						</div>
						<!-- /.data -->
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/p_6.png" alt=""></figure>
					</div>
					<!-- /.inner_box -->
				</div>
				<!-- /.box n6 -->
				<div class="box n7">
					<h3 class="ttl_ver">
						<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_7.png" alt="STEP7">
						<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_7_s.png" alt="">
					</h3>

					<div class="inner_box">
						<div class="data">
							<h4 class="ttl_sub">
								<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_7_sub.png" alt="「プログラミング」">
								<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_7_sub_s.png" alt="">
							</h4>
							<p class="text">オーサリングデータの作成後、実際の遊技機に表示をするために映像をROMに組み込みます。<br>
								表示される映像のレイヤー構成の精密な設計を行い、最終的な動作保証の責任をもって作業を行っていきます。<br>
								映像だけでは対応しきれない、演出と演出の間で切れ目がなくなるような処理をプログラムで行うなど、演出全体の品質にダイレクトにかかわる工程です。</p>
						</div>
						<!-- /.data -->
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/p_7.png" alt=""></figure>
					</div>
					<!-- /.inner_box -->
				</div>
				<!-- /.box n7 -->
				<div class="box n8">
					<h3 class="ttl_ver">
						<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_8.png" alt="STEP8">
						<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_8_s.png" alt="">
					</h3>

					<div class="inner_box">
						<div class="data">
							<h4 class="ttl_sub">
								<img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_8_sub.png" alt="「テスト」">
								<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/step_8_sub_s.png" alt="">
							</h4>
							<p class="text">映像の実装が完了した製品を、開発担当者全体でチェックする工程になります。<br>
								「映像」「遊技機」の両目線で仕様との整合性を確認します。<br>
								細部にわたる映像のクオリティチェック、プログラムによる不具合チェックを経て初めて正式な納品物として完成します。<br>
								制作した映像を実際の遊技環境で確認できるのも私たちの開発環境の魅力です。<br>
							</p>
						</div>
						<!-- /.data -->
						<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-works/p_8.png" alt=""></figure>
					</div>
					<!-- /.inner_box -->
				</div>
				<!-- /.box n8 -->
			</div>
			<!-- /.step -->
		</div>
		<!-- /#works_sec_3 -->

	</div>
	<!-- /.inner_wrap -->

</article>
<!-- /#page_about-works -->
