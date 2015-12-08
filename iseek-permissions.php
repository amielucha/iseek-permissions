<?php
/*
 * Plugin Name: iSeek Permissions
 * Plugin URI: http://iseek.ie/
 * Description: Custom permissions for Editor users
 * Version: 0.2
 * Author: Slawek Amielucha
 * Author URI: http://amielucha.com
 * Text Domain: iseek-permissions
 */

// Rename Editor Role
function iseek_change_role_name(){
	global $wp_roles;
	$wp_roles->roles['editor']['name'] = 'Owner';
	$wp_roles->role_names['editor'] = 'Owner';
}
add_action('init', 'iseek_change_role_name');

function iseek_set_permissions(){
	// get the the role object
	$role_object = get_role( 'editor' );

	// List capabilities to assign
	$caps = array(
		//General
		"edit_theme_options",
		"manage_options",

		// Tools > Export, Import
		"export",
		"import",

		// Users
		"edit_users",

		// WooCommerce
		"manage_categories",
		"manage_woocommerce",
		"manage_woocommerce_products",
		"manage_woocommerce_taxonomies",
		"manage_woocommerce_orders",
		"manage_woocommerce_coupons",
		"view_woocommerce_reports",
		"edit_product",
		"read_product",
		"delete_product",
		"edit_products",
		"edit_others_products",
		"publish_products",
		"read_private_products",
		"delete_products",
		"delete_private_products",
		"delete_published_products",
		"delete_others_products",
		"edit_private_products",
		"edit_published_products",
		"manage_product_terms",
		"edit_product_terms",
		"delete_product_terms",
		"assign_product_terms",
		"edit_shop_order",
		"read_shop_order",
		"delete_shop_order",
		"edit_shop_orders",
		"edit_others_shop_orders",
		"publish_shop_orders",
		"read_private_shop_orders",
		"delete_shop_orders",
		"delete_private_shop_orders",
		"delete_published_shop_orders",
		"delete_others_shop_orders",
		"edit_private_shop_orders",
		"edit_published_shop_orders",
		"manage_shop_order_terms",
		"edit_shop_order_terms",
		"delete_shop_order_terms",
		"assign_shop_order_terms",
		"edit_shop_coupon",
		"read_shop_coupon",
		"delete_shop_coupon",
		"edit_shop_coupons",
		"edit_others_shop_coupons",
		"publish_shop_coupons",
		"read_private_shop_coupons",
		"delete_shop_coupons",
		"delete_private_shop_coupons",
		"delete_published_shop_coupons",
		"delete_others_shop_coupons",
		"edit_private_shop_coupons",
		"edit_published_shop_coupons",
		"manage_shop_coupon_terms",
		"edit_shop_coupon_terms",
		"delete_shop_coupon_terms",
		"assign_shop_coupon_terms",
		"edit_shop_webhook",
		"read_shop_webhook",
		"delete_shop_webhook",
		"edit_shop_webhooks",
		"edit_others_shop_webhooks",
		"publish_shop_webhooks",
		"read_private_shop_webhooks",
		"delete_shop_webhooks",
		"delete_private_shop_webhooks",
		"delete_published_shop_webhooks",
		"delete_others_shop_webhooks",
		"edit_private_shop_webhooks",
		"edit_published_shop_webhooks",
		"manage_shop_webhook_terms",
		"edit_shop_webhook_terms",
		"delete_shop_webhook_terms",
		"assign_shop_webhook_terms"
	);

	foreach ( $caps as $cap )
		$role_object->add_cap( $cap );
}
add_action('init', 'iseek_set_permissions');
