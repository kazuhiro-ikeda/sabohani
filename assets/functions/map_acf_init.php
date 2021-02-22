<?php
//acf googlemap api key
function map_acf_init() {
	acf_update_setting( 'google_api_key', 'キーを入れます' );
}
add_action( 'acf/init', 'map_acf_init' );
