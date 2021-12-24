<?php 
/**
 * Plugin Name: Use Nice Select Anywhere
 * Plugin URI: https://github.com/mshshuvooo/Use-Nice-Select-Anywhere
 * Description: This plugin will replaces all the native select elements of your WordPress site with customizable dropdowns.
 * Tags: select, nice select, dropdown, option, nice selct anywhere
 * Version: 1.0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Author: Shahadat Shuvo
 * Author URI: https://shahadatshuvo.com/
 * Text Domain: use-nice-select-anywhere
 **/

function use_nice_select_anywhere_files(){
	wp_enqueue_style('nice-select', plugin_dir_url(__FILE__). '/assets/css/nice-select.css');
	wp_enqueue_script('nice-select', plugin_dir_url(__FILE__). '/assets/js/jquery.nice-select.js', array('jquery'), '1.0', true);
	wp_enqueue_script('use-nice-select-anywhere-index', plugin_dir_url(__FILE__). '/assets/js/index.js', array('jquery'), '1.0', true);
	
}
add_action('wp_enqueue_scripts', 'use_nice_select_anywhere_files');
