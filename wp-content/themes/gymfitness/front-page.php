<?php get_header('front');?>
    <section class="texto-centrado seccion contenedor bienvenida">
        <h2 class="texto-primario"><?php the_field('encabezado')?></h2>
        <p ><?php the_field('texto_bienvenida');?></p>
    </section>

    <div class="seccion-areas">
        <ul class="contenedor-areas">
            <li class="area">
                <?php 
                    $area1=get_field('area_1');
                    $imagen=wp_get_attachment_image_src($area1['imagen'],'mediano')[0];
                ?>
                <img src="<?php echo esc_attr( $imagen);?>">
                <p><?php echo $area1['texto'];?></p>
            </li>

            <li class="area">
                <?php 
                    $area2=get_field('area_2');
                    $imagen=wp_get_attachment_image_src($area2['imagen'],'mediano')[0];
                ?>
                <img src="<?php echo esc_attr( $imagen);?>">
                <p><?php echo $area2['texto'];?></p>
            </li>

            <li class="area">
                <?php 
                    $area3=get_field('area_3');
                    $imagen=wp_get_attachment_image_src($area3['imagen'],'mediano')[0];
                ?>
                <img src="<?php echo esc_attr( $imagen);?>">
                <p><?php echo $area3['texto'];?></p>
            </li>

            <li class="area">
                <?php 
                    $area4=get_field('area_4');
                    $imagen=wp_get_attachment_image_src($area4['imagen'],'mediano')[0];
                ?>
                <img src="<?php echo esc_attr( $imagen);?>">
                <p><?php echo $area4['texto'];?></p>
            </li>
        </ul>
    </div>
<?php get_footer();?>