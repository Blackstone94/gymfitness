<?php
//queries reutilizables
include get_template_directory() . '/inc/queries.php';
include get_template_directory() . '/inc/shortcodes.php';
//Cuando el tema es activado
function gymfitness_setup(){
    /**ssoporte para imagenes destacas */
    add_theme_support('post-thumbnails');

    /**titulo seo */
    add_theme_support('title-tag');
    
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

      //  if(is_page('inicio')):
            wp_enqueue_style('bxSliderCss','https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css',array(),'4.2.12');
      // endif;
        //la hoja de estilos principal
        wp_enqueue_style('style', get_stylesheet_uri(),array('normalize','googleFont'), '1.0.0');   

        wp_enqueue_script('slickNavJs',get_template_directory_uri( ).'/js/jquery.slicknav.min.js',array('jquery'),'1.0.10');
        
    //    if(is_page('inicio')):
            wp_enqueue_script('bxSliderJs','https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js',array('jquery'),'4.2.12');
      // endif;

        if(is_page('galeria')):
            wp_enqueue_script('lightboxJs',get_template_directory_uri( ).'/js/lightbox.js',array('jquery'),'2.11.3');
        endif;
        if(is_page('contacto')):
            wp_enqueue_style('leafletCss','https://unpkg.com/leaflet@1.7.1/dist/leaflet.css');
            wp_enqueue_script('leafletJS','https://unpkg.com/leaflet@1.7.1/dist/leaflet.js');
        endif;

        wp_enqueue_script('scripts',get_template_directory_uri( ).'/js/scripts.js',array('jquery','slickNavJs','bxSliderJs'),'1.0.0');

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

    /** Imagen hero */
    function gymfitness_hero_image() {
        //obtener id pagina principal
        $front_page_id=get_option('page_on_front');
        //obtener id imagen
        $id_imagen=get_field('imagen_hero',$front_page_id);
        //obtener la imagen
        $imagen = wp_get_attachment_image_src($id_imagen,'full')[0];

        //Style css
        wp_register_style('custom',false);
        wp_enqueue_style('custom');

        $imagen_destacada_css="
            body.home .site-header{
                background-image: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)),url($imagen);
            }
        ";
        wp_add_inline_style('custom', $imagen_destacada_css);
    }
    add_action('init','gymfitness_hero_image');
