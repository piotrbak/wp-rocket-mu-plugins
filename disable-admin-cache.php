<?php
/**
 * Plugin Name: Disable Administrator Cache
 * Description: Plugin disables WP Rocket caching for administrators
 * Version:     1.0.0
 * Author:      Piotr
 */

defined( 'ABSPATH' ) or die();

add_action( 'init','check_disable_cache' );
function check_disable_cache(){
	if( current_user_can('administrator') && function_exists('rocket_clean_home') && get_rocket_option( 'cache_logged_user' ) ) {
		add_action( 'template_redirect','prevent_caching' );
	}
}

function prevent_caching() {
	define( 'DONOTCACHEPAGE', true );
}
