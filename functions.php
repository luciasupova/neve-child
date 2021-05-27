<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

add_action( 'wp_enqueue_scripts', 
function () {
	wp_enqueue_style('neve-child-style', get_stylesheet_uri());
});