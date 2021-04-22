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

        wp_enqueue_style('normalize',get_template_directory_uri( ).'/css/normalize.css',array(),'8.0.1');
        wp_enqueue_style('googleFont','<link rel="preconnect" href="https://fonts.gstatic.com"> <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Raleway:wght@400;700;900&family=Staatliches&display=swap" rel="stylesheet">',array(),'1.0.0');

        //la hoja de estilos principal
        wp_enqueue_style('style', get_stylesheet_uri(),array('normalize','googleFont'), '1.0.0');   
    }
    add_action( 'wp_enqueue_scripts','gymfitness_scripts_styles');

