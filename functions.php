<?php
    #Load Scripts
    function load_scripts() {
        if(is_front_page()){wp_enqueue_script('Top-Grid-JS','/wp-content/themes/saves-wp-theme/assets/Top-Grid.js',array(),NULL,true);};
        wp_enqueue_script('Search','/wp-content/themes/saves-wp-theme/assets/Search.js',array(),NULL,true);
        wp_enqueue_style('general-CSS','/wp-content/themes/saves-wp-theme/assets/general.css',array(),NULL,'all');
        if(is_front_page()){wp_enqueue_style('front-page-CSS','/wp-content/themes/saves-wp-theme/assets/front-page.css',array(),NULL,'all');};
        if(is_product()){wp_enqueue_style('product-CSS','/wp-content/themes/saves-wp-theme/assets/product.css',array(),NULL,'all');};
        if(is_archive()){wp_enqueue_style('archive-CSS','/wp-content/themes/saves-wp-theme/assets/archive.css',array(),NULL,'all');};
        if(is_page('Cart')){wp_enqueue_style('cart-CSS','/wp-content/themes/saves-wp-theme/assets/cart.css',array(),NULL,'all');};
        if(is_page('Checkout')){wp_enqueue_style('checkout-CSS','/wp-content/themes/saves-wp-theme/assets/checkout.css',array(),NULL,'all');};
        if(is_page('my-account')){wp_enqueue_style('my-account-CSS','/wp-content/themes/saves-wp-theme/assets/my-account.css',array(),NULL,'all');};
    };
    add_action('wp_enqueue_scripts','load_scripts');

    #Add Nav Menus
    function register_my_menus() {register_nav_menus(array('header-menu' => __( 'Header Menu' )));}
    add_action( 'init', 'register_my_menus' );

    #Add WooCoommerce Support
    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
    add_action( 'after_setup_theme', 'yourtheme_setup' );

    function yourtheme_setup() {
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }
?>
