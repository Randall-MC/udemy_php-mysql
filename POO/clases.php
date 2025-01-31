<?php

// Ejemplo #1 - Como lo haríamos sin Programación Orientada a Objetos
// $nombre = "Carlos";
// $edad = 23;
// $pais = "México";

// $nombre2 = "Alejandro";
// $edad2 = 30;
// $pais2 = "España";

class Persona
{
  // Propiedades
  public $nombre;
  public $edad;
  public $pais;
  // Métodos
  public function mostrarInformación()
  {
    echo "Hola mundo";
  }
}

$carlos = new Persona;
$carlos->nombre = "Carlos";
$carlos->edad = 23;
$carlos->pais = "México";

$carlos->mostrarInformación();
echo $carlos->nombre . ' tiene ' . $carlos->edad . ' años de edad';

$alejandro = new Persona;
$alejandro->nombre = "Alejandro";
$alejandro->edad = 30;
$alejandro->pais = "España";

echo $alejandro->nombre . ' tiene ' . $alejandro->edad . ' años de edad';
