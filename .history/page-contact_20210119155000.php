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

			<div class="wrap_form">

				<p class="confirm_attention">以下の内容でよろしければ、送信ボタンを押してください。</p>

				<table class="table_entry">
					<tr>
						<th>貴社名</th>
						<td>[mwform_text name="貴社名" id="name" placeholder="例）株式会社山田"]</td>
					</tr>
					<tr>
						<th>氏名<span class="require">※必須</span></th>
						<td>[mwform_text name="氏名" id="furigana" placeholder="例）山田　太郎"] </td>
					</tr>
					<tr>
						<th>ふりがな<span class="require">※必須</span></th>
						<td>[mwform_text name="ふりがな" id="furigana" placeholder="例）やまだ　たろう"] </td>
					</tr>
					<tr>
						<th>電話番号<span class="require">※必須</span></th>
						<td>[mwform_text name="電話番号" id="tel" placeholder="例）09012345678"] </td>
					</tr>
					<tr>
						<th>メール<span class="require">※必須</span></th>
						<td>[mwform_text name="メール" id="mail" placeholder="例）aaaaa@bbbbb.com"]</td>
					</tr>
					<tr>
						<th>郵便番号</th>
						<td><span class="mark_zip">〒</span> [mwform_text name="郵便番号" id="zip" placeholder="例）0123456"]</td>
					</tr>
					<tr>
						<th>現住所<span class="require">※必須</span></th>
						<td>
							<div id="pref_w">[mwform_text name="都道府県" id="pref" placeholder="都道府県"]</div>
							<div id="city_w">[mwform_text name="市区町村" id="city" placeholder="市区町村"]</div>
							<div id="area_w">[mwform_text name="エリア" id="area" placeholder="番地・建物名"]</div>
						</td>
					</tr>
					<tr>
						<th>備考<span class="require">※必須</span></th>
						<td>[mwform_textarea name="内容" id="message" placeholder="ご質問・お問い合わせ内容をご記入ください。"]</td>
					</tr>
				</table>

				<div class="form_privacy-policy">
					<h3 class="ttl">プライバシーポリシー</h3>

					<div class="inner_box">
						<p>株式会社サボハニ(以下「当社」と総称します)は、パチスロ機等遊技機の開発、製造、販売を行うにあたり、高度情報社会における個人情報保護の重要性を認識し、以下の方針に基づき、お客様、取引先、採用応募者様及び当社従業員の個人情報に努めます。</p>

						<h2 class="ttl">1. 個人情報の取得について</h2>
						<p>当社は適正かつ公正な手段により、個人情報を取得します。</p>

						<h2 class="ttl">2. 個人情報の利用</h2>
						<p>当社は個人情報を取得の際に示した利用範囲内で、業務の遂行上必要な限りにおいて利用します。<br>当社は個人情報を取引先との間で共同利用し、また第三者に委託する場合は適正な調査を行い、機密を保持させる為に、管理監督を行います。</p>

						<h2 class="ttl">3. 個人情報の第三者提供</h2>
						<p>当社は法令に定める場合を除き、個人情報を事前に本人の同意を得る事無く、第三者に提供しません。</p>

						<h2 class="ttl">第4条（利用目的の変更）</h2>
						<p>当社は個人情報の正確性を保ち、これを安全に管理します。<br>
							当社は個人情報の紛失、破壊、改ざん、漏えいなどを防止する為、予防ならびに是正を行い、不正アクセス、コンピュータウイルス等に対する適正なセキュリティー対策を講じます。<br>
							当社は個人情報を必要な業務の範囲外で持ち出し、外部へ送信するなど、漏えいさせません。</p>

						<h2 class="ttl">5. 個人情報の開示、訂正または利用・提供の停止等</h2>
						<p>当社は本人が自己の個人情報について、開示、訂正または利用・提供の停止等を求める権利を有していることを確認し、これらの要求がある場合は、すみやかに対応します。</p>

						<h2 class="ttl">6. 組織・体制および法令遵守</h2>
						<p>当社は個人情報保護の管理者を任命し、個人情報の適正な管理を実施します。当社は役員および従業員に対し、法令およびその他の規範を遵守し日常業務における個人情報の保護および適正な取り扱いを徹底します。</p>

						<h2 class="ttl">7. 個人情報保護プログラムの策定・実施・維持・改善</h2>
						<p>当社は上記の方針を実施する為、個人情報保護社内規程を策定し、これを当社の役員、従業員に周知徹底させて実施、維持し、継続的に改善していきます。</p>

						<h2 class="ttl">8. SSLについて</h2>
						<p>当社サイトを通じてご本人から個人情報をご提供頂く際は、通信途上における第三者の盗聴等を防止する為、<br>
							SSL (Secure Sockets Layer)による暗号化を使用します。ただし、ご本人のコンピューター環境により、稀にSSLをご利用頂けない場合もございます。その場合には、通信途上における安全性が確保できない旨を表示します。</p>

						<h2 class="ttl">第10条（お問い合わせ窓口）</h2>
						<p>本ポリシーに関するお問い合わせは，下記の窓口までお願いいたします。<br>
							TEL : xxxxxxxxxxxx　個人情報取扱責任者宛</p>

					</div>
					<!-- /.inner_box -->

					<div class="agree_text">
						上記をお読みいただき、同意していただける場合は「同意する」にチェックを入れてください。<span class="require">※必須</span><br>
						[mwform_checkbox name="同意" children="同意する" separator=","]

					</div>
					<!-- /.agree_text -->

				</div>
				<!-- /.form_privacy-policy -->


				[mwform_submitButton name="send" class="btn_send_narrow" confirm_value="確認する" submit_value="送信する"]

				[mwform_bback class="btn_back_narrow" value="back"]戻る[/mwform_bback]

			</div>
			<!-- /.wrap_form -->

		</div><!-- /sec-inner -->
	</section><!-- /sec-contact -->



</div><!-- /.l-contents-->


<?php get_footer(); ?>
