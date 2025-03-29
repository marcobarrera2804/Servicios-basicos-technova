<?php
header('Content-Type: application/json');

// Habilitar CORS si es necesario
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

// Leer los datos JSON recibidos
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Validar que todos los campos requeridos están presentes
if (!isset($data['nombre']) || !isset($data['desarrollador']) || 
    !isset($data['plataforma']) || !isset($data['año_lanzamiento'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Faltan datos requeridos']);
    exit;
}

// Crear un objeto de respuesta con los datos recibidos
$respuesta = [
    'nombre' => htmlspecialchars($data['nombre']),
    'desarrollador' => htmlspecialchars($data['desarrollador']),
    'plataforma' => htmlspecialchars($data['plataforma']),
    'año_lanzamiento' => htmlspecialchars($data['año_lanzamiento']),
    'mensaje' => 'Datos recibidos correctamente'
];

// Devolver la respuesta como JSON
echo json_encode($respuesta);
?>
