<?php
/**
 * Plugin Name: JSON REST GEO API
 * Description: Adds the geo data to the JSON API.
 * Author: Dominik Schwind
 * Author URI: http://dominikschwind.com/
 * Version: 0.1
 * Plugin URI: http://dominikschwind.com/
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! defined( 'JSON_API_VERSION' ) ) {
	return;
}

if ( version_compare( JSON_API_VERSION, "1.1" ) < 1 ) {
	return;
}

function json_rest_geo_api_add_geo($_post,$post,$context){
	if ( 'view' === $context ) {
		$geo_public = get_post_meta( $post["ID"], 'geo_public', true );
		$geo_latitude = get_post_meta( $post["ID"], 'geo_latitude', true );
		$geo_longitude = get_post_meta( $post["ID"], 'geo_longitude', true );
		if((($geo_public != "") || ($geo_public > 0)) && ($geo_latitude != "") && ($geo_longitude != "")){
			$_post['geo'] = array();
			$_post['geo']['latitude'] = $geo_latitude;
			$_post['geo']['longitude'] = $geo_longitude;
		}
	}
	return $_post;
}

add_filter("json_prepare_post",'json_rest_geo_api_add_geo',10,3);