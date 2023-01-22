<?php

require 'app.php';

function incluirTemplate(string $nombre){
    include TEMPLATES_URL . "/$nombre.php";
}

function active($pagina_actual){
    $url_array = explode('/',$_SERVER['REQUEST_URI']);
    $url = end($url_array);
    if($pagina_actual == $url) echo 'active';
}

?>