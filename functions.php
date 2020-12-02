<?php

    function justATheme_files() {
        //fonts
        wp_enqueue_style('montserrat-regular-google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Montserrat:wght@300;400;700&display=swap', false );
        wp_enqueue_style('montserrat-light-google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Montserrat:wght@300;700&display=swap', false );
        wp_enqueue_style('montserrat-bold-google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Montserrat:wght@700&display=swap', false );
        wp_enqueue_style('lato-google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap', false );

        //css
        wp_enqueue_style('my-main-style', get_stylesheet_uri());

        //js
        wp_enqueue_script('my-main-js', get_theme_file_uri('main.js'), NULL, '1.0', true);

    };

    add_action('wp_enqueue_scripts', 'justATheme_files');


    
    //custom image sizes -> thumbnail
    function custom_images() {
        add_theme_support('post-thumbnails');
        add_image_size('small-thumb', 350, 400, false);
    }
     
    add_action('after_setup_theme', 'custom_images');

?>