<footer class="st-footer">
	<div class="st-footer__logo">
		<a href="<?php echo esc_url(home_url('/')); ?>">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/footer_logo@2x.png" alt="サボハニロゴ" width="74" height="52">
		</a>
	</div>
	<div class="st-footer__address">
		<div class="address__company item-01">
			<h2 class="address__company__ttl">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/foot_company_tokyo@2x.png" alt="Sabohani Inc. Tokyo" width="155" height="14">
			</h2>
			<p class="address__company__txt">〒104-0031<br>東京都中央区京橋3-1-1 <br class="sp">東京スクエアガーデン13F</p>
		</div>
		<div class="address__company item-02">
			<h2 class="address__company__ttl">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/foot_company_osaka@2x.png" alt="Sabohani Inc. Osaka" width="157" height="13">
			</h2>
			<p class="address__company__txt">〒556-0016<br>大阪府大阪市浪速区元町2-8-2 <br class="sp">大都大阪ビル7F</p>
		</div>
	</div>
</footer><!-- /.st-footer -->


</div><!-- /.wrapper -->
<?php wp_footer(); ?>
<script>
	lazyload(document.querySelectorAll("video.lazyload"));
</script>
</body>

</html>
