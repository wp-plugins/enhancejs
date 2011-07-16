<?php
/*
Plugin Name: EnhanceJS
Plugin URI: http://www.ramoonus.nl/wordpress/enhancejs/
Description: A polyfill for the Adobe's CSS3 proposal for Text enhances (Tested + Works on Chrome, Safari, Firefox, IE 8+) 
Version: 0.1
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/
function rw_enhancejs() {
		wp_deregister_script('enhancejs'); // deregister
		wp_register_script('enhancejs', plugins_url('/js/enhance.js', __FILE__), false, '20082010'); // re register // 20 aug 2010
		wp_enqueue_script('enhancejs'); // load
} 
add_action('init', 'rw_enhancejs');
?>