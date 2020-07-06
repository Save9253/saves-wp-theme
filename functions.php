<?php
    wp_enqueue_style('saves-style','/wp-content/themes/saves-wp-theme/saves-style.css');#Add stylesheet
    wp_enqueue_script('saves-script','/wp-content/themes/saves-wp-theme/saves-script.js');#Add JS

    #Add Nav Menus
    function register_my_menus() {register_nav_menus(array('header-menu' => __( 'Header Menu' )));}
       add_action( 'init', 'register_my_menus' );
?>
