<?php
    wp_enqueue_style('saves-style','/wp-content/themes/saves-wp-theme/assets/saves-style.css',array(),NULL,'all');#Add stylesheet
    wp_enqueue_script('saves-script','/wp-content/themes/saves-wp-theme/assets/saves-script.js',array(),NULL,true);#Add JS

    #Add Nav Menus
    function register_my_menus() {register_nav_menus(array('header-menu' => __( 'Header Menu' )));}
    add_action( 'init', 'register_my_menus' );
?>
