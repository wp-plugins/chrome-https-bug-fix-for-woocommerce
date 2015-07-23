=== Chrome HTTPS Bug Fix for WooCommerce ===
Contributors: Luke Williamson
Tags: woocommerce, https bug, chrome woocommerce, chrome https, ssl bug, woocommerce ssl, woocommerce chrome ssl, ssl chrome bug woocommerce
Donate link: http://lukewilliamson.com.au
Requires at least: 1.0
Tested up to: 4.2
Stable tag: 1.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin makes non-https sites work again in the latest update of Google Chrome, which is breaking the sites and redirecting the user to a non-existing https version of the website.

== Description ==
This plugin patches a fix for WooCommerce websites that are affected by the latest version of Google Chrome which seems to think a lot of non-https sites actually have a SSL and redirects the user to a broken https website version.

== Installation ==
1. Upload the `chrome-https-woocommerce` plugin folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. That's it!

== Frequently Asked Questions ==
= How does this work? =
The plugin simply tells the browser that the server's site is in fact a http:// website and not a https:// website.