<?php 

function goodness_files() {
	wp_enqueue_style('goodness_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'goodness_files');