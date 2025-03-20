<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";

// Establecer el encabezado para indicar que se está devolviendo JSON
header('Content-Type: application/json');

// Devolver el JSON con la información del artista
devuelveJson([
    "nombre" => "The Weeknd",
    "genero" => "R&B, Pop",
    "album_mas_vendido" => "After Hours"
]);
?>
