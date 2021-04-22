<?php
//Activar menus, agregar mas en el arreglo
    function gymfitness_menus(){
        register_nav_menus(array(
            'menu_principal'=>__('Menu principal','gymfitness')    
        ));
    }
    add_action('init', 'gymfitness_menus');

    //Cargar hojas de estilos y scripts
    function gymfitness_scripts_styles(){
        //la hoja de estilos principal
        wp_enqueue_style('style', get_stylesheet_uri(),array(), '1.0.0');   
    }
    add_action( 'wp_enqueue_scripts','gymfitness_scripts_styles');

    