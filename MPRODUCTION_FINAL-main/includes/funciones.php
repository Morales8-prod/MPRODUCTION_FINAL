<?php

require 'app.php';

function incluirTemplate(string $nombre){
    include TEMPLATES_URL . "/$nombre.php";
}

function active($pagina_actual){
    //var_dump ($_SERVER);
    $url_array = explode('/',$_SERVER['REQUEST_URI']);
    $url = end($url_array);
    //var_dump($url);
    if($pagina_actual == $url) echo 'active';
    if($url==='' && $pagina_actual=='index.php') echo  'active';
}

?>
