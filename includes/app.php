<?php
define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');

$sol = str_replace(basename($_SERVER['PHP_SELF']),'',$_SERVER["SCRIPT_NAME"]); 
define('WEBROOT', $sol);

?>