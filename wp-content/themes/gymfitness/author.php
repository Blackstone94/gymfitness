<?php get_header();?>

    <?php $author = get_queried_object()->data; ?>
    <main class="pagina seccion  contenedor">
    <h2 class="texto-centrado texto-primario">  <?php echo $author->display_name; ?></h2>
    <p><?php echo get_the_author_meta( 'description', $author->ID); ?> </p>
    <div class="no-sidebar">
        <ul class="listado-blog">
            <?php  get_template_part('templates-parts/loop','blog'); ?>
        </ul>
    </div>
    </main>
<?php get_footer();?>