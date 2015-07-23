<?php
/*
Plugin Name: Chrome HTTPS Bug Fix for WooCommerce
Description: This plugin patches a fix for WooCommerce websites that are affected by the latest version of Google Chrome's false HTTS detect.
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