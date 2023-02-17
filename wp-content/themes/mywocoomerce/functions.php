<?php
function my_custom_wc_theme_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'my_custom_wc_theme_support');
function initTheme()
{
    // dang ky menu

        register_nav_menu('menu_top',_('Menu top'));
        register_nav_menu('menu_main',_('Menu chính'));
        register_nav_menu('menu_footer',_('Menu footer'));
    
    // dang ky sidebar
    if (function_exists('register_sidebar')){
        register_sidebar(array(
        'name'=> 'Cột bên',
        'id' => 'sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ));
    }
}
add_action('init', 'initTheme');
// ham lay phan tran giam gia 
    function percentSale($price, $price_sale)
    {
    $sale = ($price_sale) * 100 / $price;
    $percent = 100 - $sale;
    return number_format($percent);
    }

add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );

add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );                                // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
  
function woo_custom_cart_button_text() {
  
        return __( 'Thêm giỏ hàng', 'woocommerce' );
  
}
?>
