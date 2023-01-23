<?php

try{

    if( !file_exists('video.csv')){
        throw new Exception('ERROR: Datos de video no encontrados!');
    }
    if (($gestor = fopen('video.csv','rb')) == FALSE){
        throw new Exception('Error al recibir los datos');
    }

}
catch (Exception $e){
    echo 'ERROR: ', $e->getCode(),' - ',$e->getMessage(),'<br />';
}

?>

<div class="videoweb">
    <?php
        $titulos = ["video", "titulo", "cita"];
        while($datos = fgetcsv($gestor)):
            $propiedad = array_combine($titulos, $datos);
            /* echo '<pre>';
            var_dump($datos);
            echo '</pre>';
            echo '<pre>';
            var_dump($propiedad);
            echo '</pre>';*/
    ?> 
    <section class="bloqueIII" >
  <video src="<?= WEBROOT ?>/videos/<?php echo $propiedad['video']; ?>" controls poster="<?= WEBROOT ?>assets/MULTIMEDIA/Batidora/_.jpg"></video>

  <p class="tipoII"><?php echo $propiedad['titulo']; ?></p>
  <p class="citaII"><?php echo $propiedad['cita']; ?></p>
</section>   
        <?php endwhile; ?>
        </div>