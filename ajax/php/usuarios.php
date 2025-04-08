<?php
header('Content-type: application/json; charset=utf-8');

$respuesta = [
  [
    'id' => '111111111111',
    'nombre' => 'Carlos',
    'edad' => 23,
    'pais' => 'México',
    'correo' => 'correo@electronic.com',
  ],
  [
    'id' => '2222222222',
    'nombre' => 'Alejandro',
    'edad' => 25,
    'pais' => 'España',
    'correo' => 'correo2@electronic.com',
  ]
];

echo json_encode($respuesta);

// echo '[{"nombre": "Carlos"}, {"nombre": "Alejandro"}]';
