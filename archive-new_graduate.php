<?php get_template_part('assets/include/meta'); ?>

<?php get_header( 'recruit' ); ?>

<div id="main" <?php post_class(); ?> role="main">

	<section id="loop" class="archive">
		<div class="items">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php remove_filter ( 'the_content', 'wpautop' ); ?>

		<?php get_template_part( 'loop' ); ?>

		<?php endwhile; else: ?>
			<p style="text-align:center; font-size:24px; font-weight:bold; color:#ddd; margin:100px auto; line-height:200%;">申し訳ございませんが、<br>現在お探しの募集情報はありません。<br>再度検索をお試し下さい。</p>

		<?php endif; ?>

		</div>
		<!-- /.items -->

		<?php the_posts_pagination( array( 'mid_size' => 3, 'prev_text' => '<<', 'next_text' => '>>', 'screen_reader_text' => '',  ));  ?>

	</section>
	<!-- /#loop -->

</div>
<!-- /#main -->

<?php get_footer( 'recruit' ); ?>
