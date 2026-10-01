<?php

function mi_child_assets() {

    wp_enqueue_style(
        'servicios-css',
        get_stylesheet_directory_uri() . '/assets/css/pago.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'servicios-js',
        get_stylesheet_directory_uri() . '/assets/js/servicios.js',
        array(),
        '1.0.0',
        true
    );

    if ( is_page_template('page-blog.php') || is_page('blog') ) {
        wp_enqueue_style(
            'hosting-latam-blog',
            get_stylesheet_directory_uri() . '/assets/css/blog.css',
            array(),
            (string) filemtime(get_stylesheet_directory() . '/assets/css/blog.css')
        );

        wp_enqueue_script(
            'hosting-latam-blog',
            get_stylesheet_directory_uri() . '/assets/js/blog.js',
            array(),
            (string) filemtime(get_stylesheet_directory() . '/assets/js/blog.js'),
            true
        );
    }


    if (is_page_template('page-juan.php') || is_page('juan')){
         wp_enqueue_style(
            'juan-css',
            get_stylesheet_directory_uri() . '/assets/css/juan.css',
            array(),
            (string) filemtime(get_stylesheet_directory() . '/assets/css/juan.css')
        );

    }



}

add_action('wp_enqueue_scripts', 'mi_child_assets');
