<?php
/**
 * Plugin Name: GetSiteControl Widgets
 * Plugin URI: https://getsitecontrol.com/
 * Description: GetSiteControl lets you easily create live chats, surveys, promo messages, opt-in and contact forms, share and follow buttons for your website.
 * Version: 2.0.4
 * Requires at least: 3.0.1
 * Tested up to: 4.7.4
 * Author: getsitecontrol
 * Author URI:  https://getsitecontrol.com/
 * License: GPL2
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined( 'GSC_URL' ) ) {
    define( 'GSC_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'GSC_PATH' ) ) {
    define( 'GSC_PATH', plugin_dir_path( __FILE__ ) );
}

require_once( GSC_PATH . 'includes/get-site-control-wordpress.php' );

GetSiteControlWordPress::init();