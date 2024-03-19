<?php

// Creación de variables para rescatar los datos del html
$name = $_POST ['name'];
$email = $_POST ['email'];
$phone = $_POST ['phone'];
$text = $_POST ['text'];

// Cuerpo del mail
$text = "Has recibido un nuevo mensaje de " . $name . ",\r\n";
$text .= "Mail: " . $email . "\r\n";
$text .= "Teléfono: " . $phone . "\r\n";
$text .= $_POST ['text'] . ".\r\n";
$text .= "Enviado el " . date('d/m/Y', time());

$para = 'alcalde_christian@hotmail.com'; // Mail receptor de mensajes 
$asunto = 'Mail enviado a través de la web de Estudio de Arquitectura'; // Asunto del mail

// Función mail para el envío del mismo
mail($para, $asunto, $text, $header);

// Redirección al html de "envío exitoso"
header('Location:envio.html');

?>