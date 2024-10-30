<?php
/*
Plugin Name: imFORZA News
Version: 1.5.1
Plugin URI: https://wordpress.org/plugins/imforza-news/
Description: imFORZA is a Web Design and Marketing company based out of El Segundo, CA. Get quick access to imFORZA Support and the latest marketing news.
Author: imFORZA
Author URI: https://www.imforza.com
Text Domain: imforza-news
License: GPL v3

*/



// Define Plugin Version
define( 'IMFORZA_PLUGIN_VERSION', '1.5.1' );




// Add Language Support
load_plugin_textdomain( 'imforza-news', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );


// Include Dashboard
include_once('admin/dashboard.php');


/**
 * Activation Function.
 *
 * @access public
 * @return void
 */
function imforza_news_activation() {

	update_option( 'imforza', array('version' => '1.5.0'));

    flush_rewrite_rules();

}
register_activation_hook( __FILE__, 'imforza_activation' );



/**
 * De-activation Function
 *
 * @access public
 * @return void
 */
function imforza_news_deactivation() {
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'imforza_deactivation' );
