<?php get_header();?>

    <?php $categoria = get_queried_object(); ?>
    <main class="pagina seccion  contenedor">
    <h2 class="texto-centrado texto-primario"> Categoría: <?php echo $categoria->name; ?></h2>
    <div class="no-sidebar">
        <ul class="listado-blog">
            <?php  get_template_part('templates-parts/loop','blog'); ?>
        </ul>
    </div>

    </main>

<?php get_footer();?>