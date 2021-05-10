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
    </div><!--areas-->
    <section class="clases">
        <div class="contenedor seccion">
            <div class="texto-centrado texto-primario">
                <h2>Nuestras clases</h2>
                <?php gymfitness_lista_clases(4); ?>

                <div class="contenedor-boton">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_title('Nuestras clases')));?>" class="boton boton-primario">
                        Ver todas las clases
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="instructores">
        <div class="contenedor seccion">
            <h2 class="texto-primario texto-centrado">Nuestros Instructores</h2>
            <p class="texto-centrado">Instructores profesionales que te ayudaran a alcanzar tus objetivos</p>
            <ul class="listado-instructores">
                <?php
                    $args= array(
                        'post_type'=>'instructores',
                        'post_per_page'=>30
                    );
                    $instructores=new WP_QUERY($args);
                    while($instructores->have_posts()): $instructores->the_post(); ?>
                    <li class="instructor">
                         <?php the_post_thumbnail('mediano'); ?>
                         <div class="contenido texto-centrado">
                            <h3><?php the_title();?></h3>
                            <?php the_content();?>
                            <div class="especialidad">
                                <?php $esp=get_field('especialidad');
                                    foreach($esp as $e):?>
                                       <span class="etiqueta"><?php echo $e;?></span> 
                                    <? endforeach;
                                ?>
                            </div>
                         </div>
                    </li>
                    <?php endwhile; wp_reset_postdata();?>
            </ul>
        </div>
    </section>
<?php get_footer();?>