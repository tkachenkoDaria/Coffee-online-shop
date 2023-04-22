<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$product_cat = get_queried_object();

if ( $product_cat->slug == 'freshly-roasted-coffee' ) {

	get_template_part( 'woocommerce/taxonomy-product-cat/freshly-roasted-coffee' );
} elseif ( $product_cat->slug == 'tea-and-coffee-drinks' ) {

	get_template_part( 'woocommerce/taxonomy-product-cat/tea-and-coffee-drinks' );
} elseif ( $product_cat->slug == 'products-for-vending' ) {

	get_template_part( 'woocommerce/taxonomy-product-cat/products-for-vending' );
} elseif ( $product_cat->slug == 'healthy-eating' ) {

	get_template_part( 'woocommerce/taxonomy-product-cat/healthy-eating' );
} else {

	wc_get_template( 'archive-product.php' );

}