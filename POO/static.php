<?php

class Persona
{
  public static $dia = '5 de Noviembre';

  public static function saludo($nombre = null)
  {
    if ($nombre) {
      return 'Hola! ' . $nombre;
    } else {
      return 'Hola!, buen día';
    }
  }
}

// Puedes acceder a las propiedades y métodos estáticos de una clase sin crear una instancia.
echo Persona::saludo('Carlos');
echo '<br />';
echo Persona::$dia;
