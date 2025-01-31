<?php

// Public
// Pueden ser accedidos desde cualquier parte, ya sea dentro o fuera de nuestra clase.

// Protected
// Pueden ser accedidos desde dentro de la clase y otras clases que heredaron. Pero no fuera de estas.

// Private
// Solo pueden ser accedidos desde dentro de la clase en la que fueron creados.
// Es decir que no podemos acceder a ellos desde otra clase que hereda y tampoco podemos acceder desde fuera de las clases.

class Usuario
{
  protected $nombre;
  protected $correo;

  function __construct($nombre, $correo)
  {
    $this->nombre = $nombre;
    $this->correo = $correo;
  }

  public function mostrarInfo()
  {
    return $this->correo;
  }
}

class Miembro extends Usuario
{
  public function mostarCorreo()
  {
    return 'Este es el correo: ' . $this->correo;
  }
}

$carlos = new Miembro('Carlos', 'carlos@gmail.com');
echo $carlos->mostarCorreo();
