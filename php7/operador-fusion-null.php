<?php

// $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anónimo';

$nombre = $_GET['nombre'] ?? 'Anónimo';

echo $nombre;
