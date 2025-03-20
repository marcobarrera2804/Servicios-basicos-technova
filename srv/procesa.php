<?php

require_once __DIR__ . "/../lib/php/recuperaTexto.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

$adivinanza = recuperaTexto("adivinanza");

// Agregar la verificación con if
if ($adivinanza === "la nube") {
    $resultado = "¡Correcto! La respuesta es 'la nube'.";
} else {
    $resultado = "Incorrecto. La respuesta no es correcta.";
}

devuelveJson($resultado);
