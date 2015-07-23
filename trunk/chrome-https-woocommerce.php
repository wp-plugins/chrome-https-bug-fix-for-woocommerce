<?php
/*
Plugin Name: Chrome HTTPS Bug Fix for WooCommerce
Description: This plugin patches a fix for WooCommerce websites that are affected by the latest version of Google Chrome which seems to think a lot of non-https sites actually have a SSL and redirects the user to a broken https website version.
Version: 1.0
Author: Luke Williamson
Author URI: http://lukewilliamson.com.au
License: GPLv2
*/

if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! class_exists( 'Chrome_HTTPS_WooCommerce' ) ) : 
class Chrome_HTTPS_WooCommerce { 
	function __construct() { $_SERVER['HTTPS'] = false; } 
} 
new Chrome_HTTPS_WooCommerce; 
endif;