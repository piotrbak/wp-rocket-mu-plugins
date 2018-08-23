<?php
/**
 * Plugin Name: Cookie check
 * Description: Plugin checks if origin_country cookie is available. It serve not cached version of site if it is not. It also redirects user to version of site associated with th evalue of cookie.
 * Version:     1.0.0
 * Author:      Piotr
 */

add_action('init', 'has_origin_cookie');

function has_origin_cookie(){
    if (!is_admin() && function_exists('rocket_clean_home')){
        if ( !isset($_COOKIE["origin_country"])) {
				define( 'DONOTCACHEPAGE', true );
		}else{
			$lang = $_COOKIE["origin_country"];
			$langsubstr = substr($_COOKIE["origin_country"], 0, 2);
			/**
			 *
			 * We can do whatever is needed with the value of provided Cookie
			 * use $lang to obtain full language code or $langsubstr to retrieve only 2 letters from it 
			 *
			 */
		}
	}
}