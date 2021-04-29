<?php get_header(); ?>
    <main class="contenedor seccion pagina no-sidebar">
        <div class="texto-centrado">
            <?php get_template_part('templates-parts/paginas');?>

            <?php gymfitness_lista_clases(); ?>
        </div>
    </main>
    <?php get_footer();?>