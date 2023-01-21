<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MProduction</title>

    <link rel="stylesheet" href="./assets/CSS/normalize.css">
    
    <link rel="stylesheet" href="./assets/CSS/style2.css">
   
</head>
<body>
<!-- MENU -->

<header>
    <div class="cabecera1">
        <b id="slogan">
         VISUALIZA LO QUE IMAGINAS
        </b>
    </div>
    
    <div id="menu">
       
        <img id="logo" src="<?= WEBROOT ?>assets/MULTIMEDIA/Logo mp (1).png">
        
        
        <label  for="input" class="burger">
        <img class="hamburguesa" src="<?= WEBROOT ?>assets/icons/hamburguesa.svg" alt="">
       
         </label> 
        
        <input type="checkbox" id="input">
            
        
          
        <ul class="navegacion" >
            <li><a href="index.php" class="<?php active('index.php');?>">INICIO</a></li> 
             <li><a href="Portfolio.php" class="<?php active('Portfolio.php');?>">PORTFOLIO</a></li>
             <li><a href="quiensomos.php" class="<?php active('quiensomos.php');?>">QUIEN SOMOS</a></li>
         
             </ul>
        

        
            
    </div>
    <hr>

</header>