<?php
/*
* Plugin Name: Woobizz Shortcodes
 * Plugin URI: https://woobizz.com
 * Description: Woobizz shortcodes 
 * Author: Woobizz
 * Author URI: https://woobizz.com
 * Version: 1.0.0
 * Text Domain: woobizz-shortcodes
 * Domain Path: /lang/
*/
//Prevent direct acces
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Load translation
add_action( 'plugins_loaded', 'woobizz_shortcodes_load_textdomain' );
function woobizz_header_load_textdomain(){load_plugin_textdomain('woobizz-header',false,basename(dirname( __FILE__ )) . '/lang' );}
// Shotcode Files
foreach(glob(plugin_dir_path(__FILE__)."/shortcodes/*.php")as $file){include_once $file;}