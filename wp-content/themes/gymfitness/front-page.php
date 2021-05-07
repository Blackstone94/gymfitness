<?php get_header('front');?>
    <section class="texto-centrado seccion contenedor bienvenida">
        <h2 class="texto-primario"><?php the_field('encabezado')?></h2>
        <p ><?php the_field('texto_bienvenida');?></p>
    </section>
<?php get_footer();?>