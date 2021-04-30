<?php
//queries reutilizables
include get_template_directory() . '/inc/queries.php';

//Cuando el tema es activado
function gymfitness_setup(){
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(150, 150);
    
    //Agregar tamaños de imagenes personalizados
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas',400,400,true);
    add_image_size('mediano',700,400,true);
    add_image_size('blog',966,644,true);
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
        if(is_page('galeria')):
             wp_enqueue_style('lightboxCss',get_template_directory_uri( ).'/css/lightbox.css',array(),'2.11.3');
        endif;
        //la hoja de estilos principal
        wp_enqueue_style('style', get_stylesheet_uri(),array('normalize','googleFont'), '1.0.0');   

        wp_enqueue_script('slickNavJs',get_template_directory_uri( ).'/js/jquery.slicknav.min.js',array('jquery'),'1.0.10');
        wp_enqueue_script('scripts',get_template_directory_uri( ).'/js/scripts.js',array('jquery','slickNavJs'),'1.0.0');
        
        if(is_page('galeria')):
            wp_enqueue_script('lightboxJs',get_template_directory_uri( ).'/js/lightbox.js',array('jquery'),'2.11.3');
        endif;
    }
    add_action( 'wp_enqueue_scripts','gymfitness_scripts_styles');


    //Definir widgets

    function gymfitness_widgets(){

        register_sidebar(array(
            'name'=>'Sidebar 1',
            'id'=>'sidebar_1',
            'before_widget' =>'<div class="widget">',
            'after_widget' => '</div>',
            'before_title'=>'<h3 class="texto-centrado texto-primario">',
            'after_title'=>'</h3>'

        ));
        register_sidebar(array(
            'name'=>'Sidebar 2',
            'id'=>'sidebar_2',
            'before_widget' =>'<div class="widget">',
            'after_widget' => '</div>',
            'before_title'=>'<h3 class="texto-centrado texto-primario">',
            'after_title'=>'</h3>'

        ));
    }
    add_action('widgets_init','gymfitness_widgets');