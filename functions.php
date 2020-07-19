<?php
    wp_enqueue_style('saves-style','/wp-content/themes/saves-wp-theme/assets/saves-style.css',array(),NULL,'all');#Add stylesheet

    function front_page_JS() {if(is_front_page()){wp_enqueue_script('Top-Grid-JS','/wp-content/themes/saves-wp-theme/assets/Top-Grid.js',array(),NULL,true);};};#Add JS on front-page;
    add_action('wp_enqueue_scripts','front_page_JS');

    #Add Nav Menus
    function register_my_menus() {register_nav_menus(array('header-menu' => __( 'Header Menu' )));}
    add_action( 'init', 'register_my_menus' );
?>
