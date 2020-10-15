<?php

    if (!function_exists('theme_setup')):
        function theme_setup(){

            register_nav_menus([ 
                'main-menu' => 'Menu główne',
                'footer-menu' => 'Menu stopka',
                'social-media' => 'Menu social media',
            ]);

            add_theme_support( 'custom-header', array(
                'height' => 521,
                'width' => 1200,
            ));

        }
    endif;
    add_action('after_setup_theme', 'theme_setup');

    function add_font_inconsolota() {
        wp_enqueue_style( 'google-font-inconsolota', 'https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700&display=swap', false ); 
    }
    add_action( 'wp_enqueue_scripts', 'add_font_inconsolota' );

    function add_font_ubuntu() {
        wp_enqueue_style( 'google-font-ubuntu', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap', false ); 
    }
    add_action( 'wp_enqueue_scripts', 'add_font_ubuntu' );

    function add_font_playfair() {
        wp_enqueue_style( 'google-font-playfair', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&display=swap', false ); 
    }
    add_action( 'wp_enqueue_scripts', 'add_font_playfair' );

?>