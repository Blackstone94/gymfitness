<?php get_header(); ?>
    <main class="contenedor seccion pagina con-sidebar">
        <div class="contenido-principal">
            <?php while(have_posts()):the_post();?>
            <h1 class="texto-centrado texto-primario"> <?php the_title();?></h1>
            <?php 
            if(has_post_thumbnail()):
                the_post_thumbnail('blog', array(
                    'class'=>'imagen-destacada'
                ));
            endif; ?>
            <?php the_content();  
            endwhile;?>
        </div>

        <?php get_sidebar();?>
    </main>

    <?php get_footer();?>