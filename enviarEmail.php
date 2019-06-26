
<?php

$name = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$destino = 'contacto@saxum.mx';
$asunto = 'Cotizaciones de productos de saxum';

$carta = '<h1>De: </h1><h2>'.$name.'</h2>';
$carta .= '<h1>Correo: </h1><h2>'.$email.'</h2>';
$carta .= '<h1>Teléfono: </h1><h2>'.$phone.'</h2>';
$carta .= '<h1>Mensaje: </h1><h2>'.$message.'</h2>';

$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: Saxum<contacto@saxum.mx>';

mail($destino, $asunto, $carta, $cabeceras);

header('Location:index.html');

?>
