<?php get_template_part('assets/include/meta'); ?>

<?php get_header( 'recruit' ); ?>

<?php $template_slug = get_post($wp_query->post->ID)->post_name; ?>
<?php get_template_part( 'parts/'.$template_slug ); ?>



<?php get_footer( 'recruit' ); ?>
