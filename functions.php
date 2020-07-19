<?php
    wp_enqueue_style('saves-style','/wp-content/themes/saves-wp-theme/assets/saves-style.css',array(),NULL,'all');#Add stylesheet

    #Load Scripts
    function load_scripts() {
        if(is_front_page()){wp_enqueue_script('Top-Grid-JS','/wp-content/themes/saves-wp-theme/assets/Top-Grid.js',array(),NULL,true);};
        wp_enqueue_script('Search','/wp-content/themes/saves-wp-theme/assets/Search.js',array(),NULL,true); #Add JS to every page
    };
    add_action('wp_enqueue_scripts','load_scripts');

    #Add Nav Menus
    function register_my_menus() {register_nav_menus(array('header-menu' => __( 'Header Menu' )));}
    add_action( 'init', 'register_my_menus' );

    #Add WooCoommerce Support
    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' )
?>
