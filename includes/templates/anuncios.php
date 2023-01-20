<?php

try{

    if( !file_exists('propiedades.csv')){
        throw new Exception('ERROR: Datos de propiedades no encontrados!');
    }
    if (($gestor = fopen('propiedades.csv','rb')) == FALSE){
        throw new Exception('Error al recibir los datos');
    }

}
catch (Exception $e){
    echo 'ERROR: ', $e->getCode(),' - ',$e->getMessage(),'<br />';
}

?>

<div class="contenedor-anuncios">
    <?php
        $titulos = ["id","titulo","precio","imagen","descripcion","habitaciones","wc","estacionamiento","creado","vendedorId"];
        while($datos = fgetcsv($gestor)):
            $propiedad = array_combine($titulos, $datos);
            /* echo '<pre>';
            var_dump($datos);
            echo '</pre>';
            echo '<pre>';
            var_dump($propiedad);
            echo '</pre>';*/
    ?> 
        <div class="anuncio">
            <img loading="lazy" src="<?= WEBROOT ?>/imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio">
        
            <div class="contenido-anuncio">
                <h3><?php echo $propiedad['titulo']; ?></h3>
                <p><?php echo $propiedad['descripcion']; ?></p>
                <p class="precio"><?php echo $propiedad['precio']; ?> €</p>
                <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="<?= WEBROOT ?>assets/img/icono_wc.svg" alt="icono wc">
                            <p><?php echo $propiedad['wc']; ?></p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="<?= WEBROOT ?>assets/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p><?php echo $propiedad['estacionamiento']; ?></p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="<?= WEBROOT ?>assets/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p><?php echo $propiedad['habitaciones']; ?></p>
                        </li>
                    </ul>
                    <a href="anuncio.html" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->
        <?php endwhile; ?>
        </div>