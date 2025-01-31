<?php

class Persona
{
  public $nombre;
  public $edad;
  public $pais;

  public function mostrarInformacion()
  {
    echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
  }
}

$carlos = new Persona;
$carlos->nombre = "Carlos";
$carlos->edad = 23;
$carlos->pais = "México";
$carlos->mostrarInformacion();

echo '<br />';

$alejandro = new Persona;
$alejandro->nombre = "Alejandro";
$alejandro->edad = 30;
$alejandro->pais = "España";
$alejandro->mostrarInformacion();
