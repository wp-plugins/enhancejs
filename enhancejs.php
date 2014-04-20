<?php
/*
Plugin Name: EnhanceJS
Plugin URI: http://www.ramoonus.nl/wordpress/enhancejs/
Description: EnhanceJS is a new Javascript framework designed to improve the application of Progressive Enhancement by first testing browser capabilities for key Javascript and CSS support before applying advanced styles and scripts to the page. 
Version: 1.1.1
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

function rw_enhancejs() {
		wp_deregister_script('enhancejs'); // deregister
		wp_enqueue_script('wp_enqueue_scripts', plugins_url('/js/enhance.js', __FILE__), false, '1.1.1');
} 
add_action('init', 'rw_enhancejs');
?>