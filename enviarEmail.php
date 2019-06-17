
<?php

$name = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$destino = 'cotizaciones@saxum.mx';
$asunto = 'Cotizaciones de productos de saxum';

$carta = 'De: $name \n';
$carta .= 'Correo: $email \n';
$carta .= 'Teléfono: $phone \n';
$carta .= 'Mensaje: $message \n';

mail($destino, $asunto, $carta);

echo('pedo');

header('Location:index.html');

?>
