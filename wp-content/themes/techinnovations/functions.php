<?php

//remove block library css
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css' );

add_theme_support( 'post-thumbnails' );

function register_custom_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_custom_menus' );

function techinnovations_scripts() {
    wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'fonts', 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' );
    wp_enqueue_style( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', array(), null, 'screen' );
    wp_enqueue_style( 'style-compressed', get_template_directory_uri() . '/assets/dist/css/style.min.css' );
    
    wp_enqueue_script( 'script-compressed', get_template_directory_uri() . '/assets/dist/js/script.min.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'techinnovations_scripts' );

function adicionar_classe_no_item_do_menu($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class', 'adicionar_classe_no_item_do_menu', 10, 3);

function adicionar_classe_no_link_do_menu($atts, $item, $args) {
    // Verifica se o menu é o 'header-menu' (ou o menu que você deseja modificar)
    if ($args->theme_location == 'header-menu') {
        // Adiciona a classe personalizada ao link <a>
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'adicionar_classe_no_link_do_menu', 10, 3);