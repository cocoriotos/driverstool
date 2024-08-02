<?php
// Configuración de la API de WhatsApp Business
$api_endpoint = 'https://api.whatsapp.com/send?phone=';
$phone_number = '+573054293185'; // Número de teléfono del destinatario (con prefijo de país)

// Mensaje a enviar
$message = 'Hola desde PHP!';

// Construir la URL completa para enviar el mensaje
$api_url = $api_endpoint . $phone_number . '&text=' . urlencode($message);

// Redirigir para enviar el mensaje
header('Location: ' . $api_url);
exit;
?>
