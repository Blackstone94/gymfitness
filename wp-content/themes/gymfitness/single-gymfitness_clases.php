<?php get_header(); ?>
    <main class="contenedor seccion pagina con-sidebar">
        <div class="contenido-principal">
            <?php get_template_part('templates-parts/paginas');?>
        </div>
        <?php get_sidebar();?>
    </main>
    <?php get_footer();?>