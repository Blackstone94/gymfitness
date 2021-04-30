<?php 
/**
 * Template Name: template  para galerias
 */
get_header(); ?>
    <main class="contenedor seccion pagina">
        <div class="contenido-principal">
            <?php while(have_posts()):the_post();?>
                <h1 class="texto-centrado texto-primario"> <?php the_title();?></h1>
                <?php 
                //obtener la galeria de la pagina actual
                    $galeria=get_post_gallery(get_the_ID(),false);
                    //obtener imagenes de la galeria
                    $galeria_id=explode(',',$galeria['ids']);
                ?>
                    <ul class="galeria-imagenes">
                        <?php 
                            $i=1;
                            foreach($galeria_id as $id):
                                $size= ($i==4 || $i==6) ? 'portrait': 'square';
                                $imagen=wp_get_attachment_image_src($id, $size)[0];
                                $imagenFull=wp_get_attachment_image_src($id, 'full')[0];
                            ?>
                                <li>
                                    <a href="<?php echo $imagenFull ?>" data-lightbox="galeria">
                                         <img src="<?php echo $imagen; ?>" alt="imagen">
                                    </a>
                                </li>
                            <?php $i++; endforeach;
                        ?>
                    </ul>
                <?php endwhile;?>
        </div>
    </main>
    <?php get_footer();?>