<?php

//Cuando el tema es activado
function gymfitness_setup(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','gymfitness_setup');

//Activar menus, agregar mas en el arreglo
    function gymfitness_menus(){
        register_nav_menus(array(
            'menu_principal'=>__('Menu principal','gymfitness')    
        ));
    }
    add_action('init', 'gymfitness_menus');

    //Cargar hojas de estilos y scripts
    function gymfitness_scripts_styles(){

        wp_enqueue_style('normalize',get_template_directory_uri( ).'/css/normalize.css',array(),'8.0.1');
        wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), null );

        wp_enqueue_style('slickNavCss',get_template_directory_uri( ).'/css/slicknav.min.css',array(),'1.0.10');

        //la hoja de estilos principal
        wp_enqueue_style('style', get_stylesheet_uri(),array('normalize','googleFont'), '1.0.0');   

        wp_enqueue_script('slickNavJs',get_template_directory_uri( ).'/js/jquery.slicknav.min.js',array('jquery'),'1.0.10');
        wp_enqueue_script('scripts',get_template_directory_uri( ).'/js/scripts.js',array('jquery','slickNavJs'),'1.0.0');

    }
    add_action( 'wp_enqueue_scripts','gymfitness_scripts_styles');

