<?php
if (isset($_POST['ok'])) {
  $Nombre = trim($_POST['Nombre']);
  $email = trim($_POST['email']);
  $telefono = trim($_POST['telefono']);
  $Asunto = trim($_POST['Asunto']);
  $mensaje = trim($_POST['mensaje']);
  $alerta='';
  if ($Nombre == '')
    { $alerta .= "El nombre es obligatorio.\n"; }
  if (strlen($Nombre) < 10)
    { $alerta .= "El nombre debe tener al menos 10 caracteres.\n"; }

  if (preg_match('/^([0-9])*$/', $Nombre)){
    $alerta .= "Tu nombre no puede ser un digito numérico.\n";
  }
  
  if ($email == '')
    { $alerta .= "El correo es obligatorio.\n"; }
  if (preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email))
    { $alerta .= "El correo debe tener esta estructura: usuario@gmail(etc).com
  \n"; }

  if ($telefono == '')
  { $alerta .= "El correo es obligatorio.\n"; }
if (preg_match('/^(\\+34|0034|34)?[6789]\\d{8}$/', $telefono))
  { $alerta .= "Escribe bien tu teléfono Ej: +34666555444\n"; }


  if ($Asunto == '')
  { $alerta .= "El asunto es obligatorio.\n"; }
  if (strlen($Asunto) < 10)
  { $alerta .= "El asunto debe tener al menos 10 caracteres.
  \n"; }
  if ($mensaje == '')
  { $alerta .= "El mensaje es obligatorio.\n"; }
  if (strlen($mensaje) < 40)
  { $alerta .= "El mensaje debe tener al menos 40 caracteres.
  \n"; }
  if (strlen($mensaje) > 250)
  { $alerta .= "El mensaje debe tener al menos 250 caracteres.
  \n"; }
} else {
  $nombre='';$alerta='';
} 
?>
