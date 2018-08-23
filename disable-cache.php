<?php
/**
 * Plugin Name: Disable Page Caching
 * Description: Plugin disables WP Rocket page caching while preserving other features
 * Version:     1.0.0
 * Author:      Piotr
 */

defined( 'ABSPATH' ) or die();

add_filter( 'do_rocket_generate_caching_files', '__return_false' );

add_action( 'after_rocket_clean_domain', 'clear_host_cache' );
function clear_host_cache(){
	if ( function_exists( 'managed_clear_cache' ) ) {
		managed_clear_cache();
	}
}