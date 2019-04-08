<?php
/**
 * Plugin Name: WIES18
 */

function register_wies_menu_page()
{
    add_menu_page('WIES page title', 'WIES', 'manage_options', 'wies18/page.php', '', 'dashicons-admin-site', 6);
}
add_action('admin_menu', 'register_wies_menu_page');

function wies_filter_title($title)
{
    return 'WIES: ' . $title;
}
add_filter('the_title', 'wies_filter_title');

function change_woocommerce_products_per_page()
{
    return 3;
}
add_filter('loop_shop_per_page', 'change_woocommerce_products_per_page', 20);

function add_sold_badge_mark()
{
    global $product;
    if (! $product->is_in_stock()) {
        echo '<span class="out-of-stock" style="position: absolute; top: 0; left: 0; text-align: center; width: 100%;">Sold out</span>';
    }
}
add_action('woocommerce_before_shop_loop_item_title', 'add_sold_badge_mark');


function wies_shortcodes_init()
{
    function wies_shortcode()
    {
        $content = 'Det här är output från vår shortcode';
        return $content;
    }
    add_shortcode('wies', 'wies_shortcode');
}
add_action('init', 'wies_shortcodes_init');
