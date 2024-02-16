<?php

    function title(){
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
        }

    add_action('after_setup_theme', 'title');

    function menu(){

            $location = array(
                'primary' => "Desktop Primary Left Sidebar",
                'footer' => "Footer Menu Items"
            );
            register_nav_menus($location);
        }

    add_action('init','menu');


    function register_styles(){
        $version = wp_get_theme()->get( 'Version' );
            wp_enqueue_style('style', get_template_directory_uri() . "/style.css", array
            ('bootstrap'), $version, 'all');
            wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn. com/bootstrap/5.3/css/
            bootstrap.min.css", array(), '5.3', 'all');
            wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
        }
        

    function register_scripts(){

        wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.
                1',true);
        wp_enqueue_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.
                js', array(), '1.16.0', true);
                
        wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.3/js/bootstrap.
                min.js', array(), '5.3', true);
                
        wp_enqueue_script('js',get_template_directory_uri()."/assets/js/main.js", array(), '1.0',
                true);
            
        }




add_action( 'wp_enqueue_scripts', 'register_styles');
add_action( 'wp_enqueue_scripts', 'register_scripts');




?>