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

						<h2 class="ttl">1.個人情報の取得について</h2>
						<p>「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>

						<h2 class="ttl">第2条（個人情報の収集方法）</h2>
						<p>当社は，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，クレジットカード番号，運転免許証番号などの個人情報をお尋ねすることがあります。また，ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を,当社の提携先（情報提供元，広告主，広告配信先などを含みます。以下，｢提携先｣といいます。）などから収集することがあります。</p>

						<h2 class="ttl">第3条（個人情報を収集・利用する目的）</h2>
						<p>当社が個人情報を収集・利用する目的は，以下のとおりです。</p>
						<ul>
							<li>1.当社サービスの提供・運営のため</li>
							<li>2.ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）</li>
							<li>3.ユーザーが利用中のサービスの新機能，更新情報，キャンペーン等及び当社が提供する他のサービスの案内のメールを送付するため</li>
							<li>4.メンテナンス，重要なお知らせなど必要に応じたご連絡のため</li>
							<li>5.利用規約に違反したユーザーや，不正・不当な目的でサービスを利用しようとするユーザーの特定をし，ご利用をお断りするため</li>
							<li>6.ユーザーにご自身の登録情報の閲覧や変更，削除，ご利用状況の閲覧を行っていただくため</li>
							<li>7.有料サービスにおいて，ユーザーに利用料金を請求するため</li>
							<li>8.上記の利用目的に付随する目的</li>
						</ul>

						<h2 class="ttl">第4条（利用目的の変更）</h2>
						<ul>
							<li>1.当社は，利用目的が変更前と関連性を有すると合理的に認められる場合に限り，個人情報の利用目的を変更するものとします。</li>
							<li>2.利用目的の変更を行った場合には，変更後の目的について，当社所定の方法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。</li>
						</ul>

						<h2 class="ttl">第5条（個人情報の第三者提供）</h2>
						<ul>
							<li>1.当社は，次に掲げる場合を除いて，あらかじめユーザーの同意を得ることなく，第三者に個人情報を提供することはありません。ただし，個人情報保護法その他の法令で認められる場合を除きます。
								<ul>
									<li>1.人の生命，身体または財産の保護のために必要がある場合であって，本人の同意を得ることが困難であるとき</li>
									<li>2.公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって，本人の同意を得ることが困難であるとき</li>
									<li>3.国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって，本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき</li>
									<li>4.予め次の事項を告知あるいは公表し，かつ当社が個人情報保護委員会に届出をしたとき
										<ul>
											<li>1.利用目的に第三者への提供を含むこと</li>
											<li>2.第三者に提供されるデータの項目</li>
											<li>3.第三者への提供の手段または方法</li>
											<li>4.本人の求めに応じて個人情報の第三者への提供を停止すること</li>
											<li>5.本人の求めを受け付ける方法</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>2.前項の定めにかかわらず，次に掲げる場合には，当該情報の提供先は第三者に該当しないものとします。
								<ul>
									<li>1.当社が利用目的の達成に必要な範囲内において個人情報の取扱いの全部または一部を委託する場合</li>
									<li>2.合併その他の事由による事業の承継に伴って個人情報が提供される場合</li>
									<li>3.個人情報を特定の者との間で共同して利用する場合であって，その旨並びに共同して利用される個人情報の項目，共同して利用する者の範囲，利用する者の利用目的および当該個人情報の管理について責任を有する者の氏名または名称について，あらかじめ本人に通知し，または本人が容易に知り得る状態に置いた場合</li>
								</ul>
							</li>
						</ul>

						<h2 class="ttl">第6条（個人情報の開示）</h2>
						<ul>
							<li>1.当社は，本人から個人情報の開示を求められたときは，本人に対し，遅滞なくこれを開示します。ただし，開示することにより次のいずれかに該当する場合は，その全部または一部を開示しないこともあり，開示しない決定をした場合には，その旨を遅滞なく通知します。なお，個人情報の開示に際しては，1件あたり1，000円の手数料を申し受けます。
								<ul>
									<li>1.本人または第三者の生命，身体，財産その他の権利利益を害するおそれがある場合</li>
									<li>2.当社の業務の適正な実施に著しい支障を及ぼすおそれがある場合</li>
									<li>3.その他法令に違反することとなる場合</li>
								</ul>
							</li>
							<li>2.前項の定めにかかわらず，履歴情報および特性情報などの個人情報以外の情報については，原則として開示いたしません。</li>
						</ul>

						<h2 class="ttl">第8条（個人情報の利用停止等）</h2>
						<ul>
							<li>1.当社は，本人から，個人情報が，利用目的の範囲を超えて取り扱われているという理由，または不正の手段により取得されたものであるという理由により，その利用の停止または消去（以下，「利用停止等」といいます。）を求められた場合には，遅滞なく必要な調査を行います。</li>
							<li>2.前項の調査結果に基づき，その請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の利用停止等を行います。</li>
							<li>3.当社は，前項の規定に基づき利用停止等を行った場合，または利用停止等を行わない旨の決定をしたときは，遅滞なく，これをユーザーに通知します。</li>
							<li>4.前2項にかかわらず，利用停止等に多額の費用を有する場合その他利用停止等を行うことが困難な場合であって，ユーザーの権利利益を保護するために必要なこれに代わるべき措置をとれる場合は，この代替策を講じるものとします。</li>
						</ul>

						<h2 class="ttl">第9条（プライバシーポリシーの変更）</h2>
						<ul>
							<li>1.本ポリシーの内容は，法令その他本ポリシーに別段の定めのある事項を除いて，ユーザーに通知することなく，変更することができるものとします。</li>
							<li>2.当社が別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。</li>
						</ul>

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
