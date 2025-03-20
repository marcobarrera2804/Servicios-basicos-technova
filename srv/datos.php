<?php
header("Content-Type: application/json");

$data = [
    "nombre" => "Mario Bros",
    "desarrollador" => "Nintendo",
    "plataforma" => ["Nintendo Switch", "Wii U"],
    "año_lanzamiento" => 2017,
    "Cual es tu serie favorita" => "Invincible"
];

echo json_encode($data, JSON_PRETTY_PRINT);
?>
