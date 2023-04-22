=== WooCommerce Ajaxified Cart ===
Contributors: abhishekfdd
Tags: woocommerce, ajax, cart
Requires at least: 3.0.1
Tested up to: 5.5.3
Stable tag: 1.2.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This Plugins ajaxifies single product page and variable products in shop page.

== Description ==

WooCommerce doesn't provides ajax add to cart for single product page and also for variable products in archive page.
This plugin adds ajax feature for single product page and variable products in archive page.

== Installation ==

1. Upload `abwc-ajax-cart` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.0.0 =
* Initial release

= 1.0.1 =
* Code Refactor for performance

= 1.0.2 =
* Single Product page AJAX fix

= 1.0.3 =
* Cart Display fix

= 1.2.0 =
* Added admin settings page for enabling/disabling ajaxified cart for variable products on shop page.
* Now ajaxified cart is working for variable products on shop page.
* Notices fixed on product single page.

= 1.2.1 =
* Fatal error fix

= 1.2.2 =
* Simple products archive ajax add to cart when varibale product archive ajax option is enabled issue fix.
* fixed 500 error when tried to add more variation products to cart than stock holds.