<?php

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

	function millor_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}

	add_action( 'after_setup_theme', 'millor_add_woocommerce_support' );


	// вимкнення стилів
	// add_filter( 'woocommerce_enqueue_styles', '__return_false' );

	// Кількіть товарів на сторінці
	// remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count',20 );

	// Ціна біля варіації та рейтинг картки товару
 remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
}