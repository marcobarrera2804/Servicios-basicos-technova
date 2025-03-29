<?php
header('Content-Type: application/json');

// Datos que se enviarán como respuesta
$respuesta = [
    'origen' => 'Tech Nova',
    'mensaje' => 'Hola pp.',
    'boton' => 'Saludos❤️'
];

echo json_encode($respuesta);
?>
