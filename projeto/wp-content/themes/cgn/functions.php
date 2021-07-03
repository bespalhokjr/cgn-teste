<?php

    function carregar_scripts(){

        // Boostrap 4
        wp_register_script ( 'jquery', get_stylesheet_directory_uri() . '/vendor/jquery.js');
        wp_enqueue_script ( 'jquery' );

        wp_register_script ( 'custom', get_stylesheet_directory_uri() . '/custom.js', ['jquery']);
        wp_enqueue_script ( 'custom' );

        wp_register_script ( 'bootstrap', get_stylesheet_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', ['jquery']);
        wp_enqueue_script ( 'bootstrap' ); 

        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );

        // layout 
        wp_enqueue_style( 'clndr', get_template_directory_uri() . '/layout/css/clndr.css' );
        wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/layout/css/jquery.bxslider.css' );
        wp_enqueue_style( 'layout-style', get_template_directory_uri() . '/layout/css/style.css' );

        // wp_register_script ( 'clndr', get_stylesheet_directory_uri() . '/layout/js/jquery.min.js');
        wp_register_script ( 'clndr', get_stylesheet_directory_uri() . '/layout/js/clndr.js');
        wp_register_script ( 'clndr', get_stylesheet_directory_uri() . '/layout/js/jquery.bxslider.min.js');
        wp_register_script ( 'clndr', get_stylesheet_directory_uri() . '/layout/js/login.js');
        wp_register_script ( 'clndr', get_stylesheet_directory_uri() . '/layout/js/modernizir.custom.js');
        wp_register_script ( 'clndr', get_stylesheet_directory_uri() . '/layout/js/moment-2.2.1.js');
        wp_register_script ( 'clndr', get_stylesheet_directory_uri() . '/layout/js/site.js');
        wp_register_script ( 'clndr', get_stylesheet_directory_uri() . '/layout/js/underscore-min.js');
        wp_enqueue_script ( 'jquery' );


        // custom
        wp_enqueue_style( 'custom', get_template_directory_uri() . '/custom.css' );
    }

    add_action('wp_enqueue_scripts', 'carregar_scripts');

    // THEME SUPPORTS ############################################################
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

    register_nav_menus(
        array(
            'menu-principal' => __( 'Menu Principal' )
        )
    );

    // FUNCTIONS ##################################################################
    require_once('functions/get_next_post_link.php');

    // POSTYPES
    require_once('post_type/games.php');

    // SHORTCODES #################################################################
    require_once('shortcodes/grid-posts.php');
    require_once('shortcodes/menu-principal.php');
    require_once('shortcodes/menu-categorias.php');
    require_once('shortcodes/nav-posts.php');
    require_once('shortcodes/youtube.php');