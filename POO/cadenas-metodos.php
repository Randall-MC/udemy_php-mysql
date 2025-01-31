<?php

class Usuario
{
  public $nombre;
  public $correo;

  function __construct($nombre, $correo)
  {
    $this->nombre = $nombre;
    $this->correo = $correo;
  }

  public function mostrarNombre()
  {
    echo 'El nombre es ' . $this->nombre . '<br />';
    return $this;
  }

  public function mostrarCorreo()
  {
    echo 'El correo es ' . $this->correo . '<br />';
    return $this;
  }
}

$carlos = new Usuario('Carlos', 'carlos@gmail.com');
$carlos->mostrarNombre()->mostrarCorreo();
