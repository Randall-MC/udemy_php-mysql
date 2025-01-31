<?php

abstract class Personas
{
  public function saludo()
  {
    return 'Hola!';
  }
}

class Estudiantes extends Personas {}

$carlos = new Estudiantes;
echo $carlos->saludo();
